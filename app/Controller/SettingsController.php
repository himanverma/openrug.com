<?php
App::uses("AppController", "Controller");
/**
 * Description of SettingsController
 * @property Setting $Setting Description
 * @author Himanshu
 */
class SettingsController extends AppController {
    public $components = array("Paginator","Session");
    public function beforeFilter() {
        parent::beforeFilter();
    }
    public function admin_index(){
        $this->set("settings", $this->paginate());
        if($this->request->is('ajax')){
            if($this->Setting->save($this->request->data)){
                $this->response->type("json");
                $this->response->body(json_encode(array("error"=>0,"msg"=>"Value Updated...")));
                $this->autoRender = false;
            }
        }
    }
    
/**
 * admin_add method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */    
    public function admin_add(){
        if ($this->request->is('post')) {
            $this->Setting->create();
            if ($this->Setting->save($this->request->data)) {
                    $this->Session->setFlash(__('Your setting has been saved.'));
                    return $this->redirect(array('action' => 'index'));
            } else {
                    $this->Session->setFlash(__('Something went wrong . Please, try again.'));
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
        public function edit($id = null) {
                $this->Setting->id=$id;
		if (!$this->Setting->exists($id)) {
			throw new NotFoundException(__('Invalid settings variable'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Setting->save($this->request->data)) {
				$this->Session->setFlash(__('The setting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Setting.' . $this->Setting->primaryKey => $id));
			$this->request->data = $this->Setting->find('first', $options);
		}
	}    
    
}
