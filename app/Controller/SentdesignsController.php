<?php

App::uses('AppController', 'Controller');

/**
 * Rugs Controller
 *
 * @property Sentdesign $Sentdesign
 * @property Sentimage $Sentimage
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SentdesignsController extends AppController {

    public $components = array('Paginator', 'Session');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }
    
    public function add(){
        if ($this->request->is('post')) {
            $this->Sentdesign->create();
            $this->request->data['Sentdesign']['user_id']=$this->Auth->User('id');
            if ($this->Sentdesign->saveAssociated($this->request->data, array('deep' => true))) {
                    $this->Session->setFlash(__('Your design given has been sent.'));
                    return $this->redirect(array('action' => 'index'));
            } else {
                    $this->Session->setFlash(__('Something went wrong . Please, try again.'));
            }
        }
    }
    
    
    public function admin_index(){
        $this->Sentdesign->recursive = 0;
        $this->set('sentdesigns', $this->Paginator->paginate());
    }
    
    
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Sentdesign->exists($id)) {
			throw new NotFoundException(__('Invalid rugpng'));
		}
		$options = array('conditions' => array('Sentdesign.' . $this->Sentdesign->primaryKey => $id));
		$this->set('sentdesign', $this->Sentdesign->find('first', $options));
	}    
    
        public function admin_edit($id = null) {
                $this->Sentdesign->id=$id;
		if (!$this->Sentdesign->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sentdesign->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sentdesign.' . $this->Sentdesign->primaryKey => $id));
			$this->request->data = $this->Sentdesign->find('first', $options);
		}
	}
    
    
    

}
