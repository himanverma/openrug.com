<?php
App::uses('AppController', 'Controller');
/**
 * Rugpngs Controller
 *
 * @property Rugpng $Rugpng
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RugpngsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow(array());
        }


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Rugpng->recursive = 0;
		$this->set('rugpngs', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Rugpng->exists($id)) {
			throw new NotFoundException(__('Invalid rugpng'));
		}
		$options = array('conditions' => array('Rugpng.' . $this->Rugpng->primaryKey => $id));
		$this->set('rugpng', $this->Rugpng->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Rugpng->create();
                        $one = $this->request->data['Rugpng']['path'];
                        if ($one['error'] == 0) {
                            $ext = pathinfo($one['name'], PATHINFO_EXTENSION);
                            $file_name = $this->request->data['Rugpng']['path'] = "files/templates/3/Rectangle/2" . DS .date('YmdHis') . "." . $ext;
                        }
			if ($this->Rugpng->save($this->request->data)) {
                                if ($one['error'] == 0) {
                                    $pth = $file_name;
                                    move_uploaded_file($one['tmp_name'], $pth);
                                }
				$this->Session->setFlash(__('The rugpng has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rugpng could not be saved. Please, try again.'));
			}
		}
		$rugs = $this->Rugpng->Rug->find('list');
		$this->set(compact('rugs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
                $this->Rugpng->id=$id;
		if (!$this->Rugpng->exists($id)) {
			throw new NotFoundException(__('Invalid rugpng'));
		}
		if ($this->request->is(array('post', 'put'))) {
                        $one = $this->request->data['Rugpng']['path'];
                        if ($one['error'] == 0) {
                            $x = $this->Rugpng->read('path', $id);
                            if ($x['Rugpng']['path']) {
                                $x1 =  $x['Rugpng']['path'];
                                $x2 =  $x['Rugpng']['path'];
                                unlink($x1);
                            }
                            $ext = pathinfo($one['name'], PATHINFO_EXTENSION);
                            $file_name = $this->request->data['Rugpng']['path'] = $x2;
                            $pth = $file_name;
                            move_uploaded_file($one['tmp_name'], $pth);
                        }else {
                            unset($this->request->data['Rugpng']['path']);
                        }
			if ($this->Rugpng->save($this->request->data)) {
				$this->Session->setFlash(__('The rugpng has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rugpng could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rugpng.' . $this->Rugpng->primaryKey => $id));
			$this->request->data = $this->Rugpng->find('first', $options);
		}
                $rugFile=$this->Rugpng->find('first',array('fields'=>array('path'),'conditions'=>array('Rugpng.id'=>$id)));
                $this->set('rugFile',$rugFile);
		$rugs = $this->Rugpng->Rug->find('list');
		$this->set(compact('rugs'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Rugpng->id = $id;
		if (!$this->Rugpng->exists()) {
			throw new NotFoundException(__('Invalid rugpng'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rugpng->delete()) {
			$this->Session->setFlash(__('The rugpng has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rugpng could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
