<?php

App::uses('AppController', 'Controller');

/**
 * Genrugs Controller
 *
 * @property Genrug $Genrug
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class GenrugsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Genrug->recursive = 0;
        $this->set('genrugs', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Genrug->exists($id)) {
            throw new NotFoundException(__('Invalid rug'));
        }
        $options = array('conditions' => array('Genrug.' . $this->Genrug->primaryKey => $id));
        $this->set('genrug', $this->Genrug->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            if ($this->Genrug->save($this->request->data)) {
                $this->Session->setFlash(__('The rug has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The rug could not be saved. Please, try again.'));
            }
        }
    }
    

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Genrug->id=$id;
        if (!$this->Genrug->exists($id)) {
            throw new NotFoundException(__('Invalid rug'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Genrug->save($this->request->data)) {
                $this->Session->setFlash(__('The rug has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The rug could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Genrug.' . $this->Genrug->primaryKey => $id));
            $this->request->data = $this->Genrug->find('first', $options);
        }
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Genrug->id = $id;
        if (!$this->Genrug->exists()) {
            throw new NotFoundException(__('Invalid rug'));
        }
        
        $this->request->allowMethod('post', 'delete');
        if ($this->Genrug->delete()) {
            $this->Session->setFlash(__('The rug has been deleted.'));
            $this->redirect($this->referer());
        } else {
            $this->Session->setFlash(__('The rug could not be deleted. Please, try again.'));
            $this->redirect($this->referer());
        }
    }

}
