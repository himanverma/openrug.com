<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property Contact $Contact
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContactsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
        
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow(array('index'));
        }

/**
 * info method
 *
 * @return void
 */
        public function index() {
	}
}
