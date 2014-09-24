<?php
App::uses('AppController', 'Controller');

/**
 * Browses Controller
 *
 * @property Browse $Browse
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BrowsesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');

    
    public function beforeFilter() {
        parent::beforeFilter();
//        $this->Auth->allow(array('browse'));
    }
    
    public function browse(){
        
    }
    public function shape(){
        
    }
    public function color(){
        
    }
    
    
}
