<?php
App::uses('AppController', 'Controller');
/**
 * Billingadds Controller
 *
 * @property Billingadd $Billingadd
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BillingaddsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
        
        
        public function addNewAddress(){
            
            $this->autoRender = false;
            if($this->request->is('ajax')){
                $this->request->data['Billingadd']['user_id'] = $this->Auth->user('id');
                $d = $this->request->data;
                $res = $this->Billingadd->find('first',array('conditions'=>array('Billingadd.address'=>$d['Billingadd']['address'])));
                if(empty($res)){
                    $this->Billingadd->create();
                    $this->Billingadd->save($d);
                    $res = $this->Billingadd->find('first',array('conditions'=>array('Billingadd.address'=>$d['Billingadd']['address'])));
                }
                $this->response->body(json_encode($res));
                $this->response->type('json');
            }else{
                exit;
            }
        }

        


        /**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Billingadd->recursive = 0;
		$this->set('billingadds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Billingadd->exists($id)) {
			throw new NotFoundException(__('Invalid billingadd'));
		}
		$options = array('conditions' => array('Billingadd.' . $this->Billingadd->primaryKey => $id));
		$this->set('billingadd', $this->Billingadd->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Billingadd->create();
			if ($this->Billingadd->save($this->request->data)) {
				$this->Session->setFlash(__('The billingadd has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The billingadd could not be saved. Please, try again.'));
			}
		}
		$users = $this->Billingadd->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Billingadd->exists($id)) {
			throw new NotFoundException(__('Invalid billingadd'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Billingadd->save($this->request->data)) {
				$this->Session->setFlash(__('The billingadd has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The billingadd could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Billingadd.' . $this->Billingadd->primaryKey => $id));
			$this->request->data = $this->Billingadd->find('first', $options);
		}
		$users = $this->Billingadd->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Billingadd->id = $id;
		if (!$this->Billingadd->exists()) {
			throw new NotFoundException(__('Invalid billingadd'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Billingadd->delete()) {
			$this->Session->setFlash(__('The billingadd has been deleted.'));
		} else {
			$this->Session->setFlash(__('The billingadd could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Billingadd->recursive = 0;
		$this->set('billingadds', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Billingadd->exists($id)) {
			throw new NotFoundException(__('Invalid billingadd'));
		}
		$options = array('conditions' => array('Billingadd.' . $this->Billingadd->primaryKey => $id));
		$this->set('billingadd', $this->Billingadd->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Billingadd->create();
			if ($this->Billingadd->save($this->request->data)) {
				$this->Session->setFlash(__('The billingadd has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The billingadd could not be saved. Please, try again.'));
			}
		}
		$users = $this->Billingadd->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Billingadd->exists($id)) {
			throw new NotFoundException(__('Invalid billingadd'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Billingadd->save($this->request->data)) {
				$this->Session->setFlash(__('The billingadd has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The billingadd could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Billingadd.' . $this->Billingadd->primaryKey => $id));
			$this->request->data = $this->Billingadd->find('first', $options);
		}
		$users = $this->Billingadd->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Billingadd->id = $id;
		if (!$this->Billingadd->exists()) {
			throw new NotFoundException(__('Invalid billingadd'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Billingadd->delete()) {
			$this->Session->setFlash(__('The billingadd has been deleted.'));
		} else {
			$this->Session->setFlash(__('The billingadd could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
