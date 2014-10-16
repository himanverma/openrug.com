<?php

App::uses('AppController', 'Controller');

/**
 * Mailtemplates Controller
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

class MailtemplatesController extends AppController{
    
    public $components = array('Paginator','Session');
    public function beforeFilter() {
        parent::beforeFilter();
    }
    
    
    public function admin_add(){
        if ($this->request->is('post')) {
            if ($this->Mailtemplate->save($this->request->data)) {
                $this->Session->setFlash(__('The order has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
            }
        }
    }
    
    public function admin_view($id=NULL){
        if (!$this->Mailtemplate->exists($id)) {
            throw new NotFoundException(__('Invalid order'));
        }
        $options = array('conditions' => array('Mailtemplate.' . $this->Mailtemplate->primaryKey => $id));
        $this->set('mailtemplate', $this->Mailtemplate->find('first', $options));
    }
    
    public function admin_index() {
        $this->Mailtemplate->recursive = 0;
        $this->set('mailtemplates', $this->Paginator->paginate());
    }
    
    public function admin_edit($id = null) {
        $this->Mailtemplate->id=$id;
        if (!$this->Mailtemplate->exists($id)) {
            throw new NotFoundException(__('Invalid order'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Mailtemplate->save($this->request->data)) {
                $this->Session->setFlash(__('The order has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Mailtemplate.' . $this->Mailtemplate->primaryKey => $id));
            $this->request->data = $this->Mailtemplate->find('first', $options);
        }
    }
    
    public function admin_delete($id = null) {
        $this->Mailtemplate->id = $id;
        if (!$this->Mailtemplate->exists()) {
            throw new NotFoundException(__('Invalid order'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Mailtemplate->delete()) {
            $this->Session->setFlash(__('The order has been deleted.'));
            $this->redirect($this->referer());
        } else {
            $this->Session->setFlash(__('The order could not be deleted. Please, try again.'));
            $this->redirect($this->referer());
        }
    }   
}