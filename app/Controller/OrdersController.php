<?php

App::uses('AppController', 'Controller');

/**
 * Orders Controller
 * Users Controller
 * 
 * @property Order $Order
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class OrdersController extends AppController{

    public $components = array('Paginator','Session');
    
    public function beforeFilter() {
        parent::beforeFilter();
    }
    
    public function index(){
        $this->loadModel('User');
        $myOrders=$this->User->find('first',
                array(
                    'recursive'=>3,
                    'contain'=>array(
                        'Order'=>array(
                            'Inlineitem'=>array(
                                'Genrug'
                            )
                        )
                    ),
                    'conditions'=>array('User.id'=>$this->Auth->user('id'))
                    ));
        debug($myOrders);exit;
        $this->set('myOrders',$myOrders);
    }
    
    public function admin_email(){
        $l = new CakeEmail('smtp');
        $l->emailFormat('html')->template('default','default')->subject('Testing')->to('ajay_p@avainfotech.com')->send('tests');
    }


    public function admin_add(){
        if ($this->request->is('post')) {
            if ($this->Order->save($this->request->data)) {
                $this->Session->setFlash(__('The order has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
            }
        }
    }
    
    public function admin_view($id=NULL){
        if (!$this->Order->exists($id)) {
            throw new NotFoundException(__('Invalid order'));
        }
        $options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
        $this->set('order', $this->Order->find('first', $options));
    }
    
    public function admin_index() {
        $this->Order->recursive = 0;
        $this->set('orders', $this->Paginator->paginate());
    }
    
    public function admin_edit($id = null) {
        $this->Order->id=$id;
        if (!$this->Order->exists($id)) {
            throw new NotFoundException(__('Invalid order'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Order->save($this->request->data)) {
                $this->Session->setFlash(__('The order has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
            $this->request->data = $this->Order->find('first', $options);
        }
    }
    
    public function admin_delete($id = null) {
        $this->Order->id = $id;
        if (!$this->Order->exists()) {
            throw new NotFoundException(__('Invalid order'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Order->delete()) {
            $this->Session->setFlash(__('The order has been deleted.'));
            $this->redirect($this->referer());
        } else {
            $this->Session->setFlash(__('The order could not be deleted. Please, try again.'));
            $this->redirect($this->referer());
        }
    }
}
