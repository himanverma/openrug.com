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
    
    
    
    

}
