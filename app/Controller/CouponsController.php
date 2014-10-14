<?php

App::uses('AppController', 'Controller');

/**
 * Coupons Controller
 * @property Coupons $Coupons
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session 
 * 
 */

class CouponsController extends AppController{
    
/**
* Components
*
* @var array
*/
    
    public  $components = array('Paginator', 'Session');
    
    public function beforeFilter() {
        parent::beforeFilter();
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
            $this->Coupon->create();
            $this->request->data['Coupon']['status']='1';
            if ($this->Coupon->save($this->request->data)) {
                    $this->Session->setFlash(__('Your design given has been sent.'));
                    return $this->redirect(array('action' => 'index'));
            } else {
                    $this->Session->setFlash(__('Something went wrong . Please, try again.'));
            }
        }
    }
    
/**
 * admin_index method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */    
    public function admin_index(){
        $this->Coupon->recursive = 0;
        $this->set('coupons', $this->Paginator->paginate());
    }
    
    
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Coupon->exists($id)) {
			throw new NotFoundException(__('Invalid rugpng'));
		}
		$options = array('conditions' => array('Coupon.' . $this->Coupon->primaryKey => $id));
		$this->set('coupon', $this->Coupon->find('first', $options));
	}    
/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */    
        public function admin_edit($id = null) {
                $this->Coupon->id=$id;
		if (!$this->Coupon->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Coupon->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Coupon.' . $this->Coupon->primaryKey => $id));
			$this->request->data = $this->Coupon->find('first', $options);
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
            $this->Coupon->id = $id;
            if (!$this->Coupon->exists()) {
                throw new NotFoundException(__('Invalid rug'));
            }
            $this->request->allowMethod('post', 'delete');
            if ($this->Coupon->delete()) {
                $this->Session->setFlash(__('The coupon has been deleted.'));
            } else {
                $this->Session->setFlash(__('The coupon could not be deleted. Please, try again.'));
            }
            return $this->redirect($this->referer());
        }
    
    
}