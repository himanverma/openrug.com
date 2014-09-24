<?php
App::uses('AppController', 'Controller');
/**
 * Banners Controller
 *
 * @property Banner $Banner
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BannersController extends AppController {

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
		$this->Banner->recursive = 0;
		$this->set('banners', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Banner->exists($id)) {
			throw new NotFoundException(__('Invalid banner'));
		}
		$options = array('conditions' => array('Banner.' . $this->Banner->primaryKey => $id));
		$this->set('banner', $this->Banner->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Banner->create();
                        $one=$this->request->data['Banner']['image'];
                        if($one['error']==0){
                            $ext=pathinfo($one['name'], PATHINFO_EXTENSION);
                            $image_name = date('YmdHis').rand(1,999) . "." . $ext;
                            $this->request->data['Banner']['image']=$image_name;
                        }
                        $this->request->data['Banner']['status']='1';
			if ($this->Banner->save($this->request->data)) {
                            if($one['error']==0){
                                $destination="files".DS."banner_image".DS.$image_name;
                                move_uploaded_file($one['tmp_name'],$destination);
                            }
				$this->Session->setFlash(__('The banner has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banner could not be saved. Please, try again.'));
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
                Configure::write('debug',0);
                $this->Banner->id = $id;	
		if (!$this->Banner->exists()) {
			throw new NotFoundException(__('Invalid banner'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                        $this->request->data['Banner']['user_id']=$this->Auth->User('id');
			$one=$this->request->data['Banner']['image'];
			$ext=pathinfo($one['name'], PATHINFO_EXTENSION);
                        $image_name = date('YmdHis').rand(1,999) . "." . $ext;
                        $this->request->data['Banner']['image']=$image_name;
			if ($one['name']!= "") {
                                $x = $this->Banner->read('image',$id);
                                $x =  'files'.DS.'banner_image'.DS.$x['Banner']['image'];
                                unlink($x);
                                $pth = 'files' . DS . 'banner_image' . DS. $image_name;
                                move_uploaded_file($one['tmp_name'], $pth);
                        }
                        if($one['name'] == ""){
                                $xc = $this->Banner->read('image',$id);
                                $this->request->data['Banner']['image'] = $xc['Banner']['image']; 
                        }
			if ($this->Banner->save($this->request->data)) {
				$this->Session->setFlash(__('The Banner has been saved'));
				$this->redirect(array('action' => 'index'));
                                
			} else {
				$this->Session->setFlash(__('The Banner could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Banner->read(null, $id);
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
		$this->Banner->id = $id;
		if (!$this->Banner->exists()) {
			throw new NotFoundException(__('Invalid banner'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Banner->delete($id=NULL)) {
			$this->Session->setFlash(__('The banner has been deleted.'));
		} else {
			$this->Session->setFlash(__('The banner could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
