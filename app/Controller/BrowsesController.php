<?php
App::uses('AppController', 'Controller');

/**
 * Browses Controller
 *
 * @property Rug $Rug
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
        $this->Auth->allow(array('browse','shape','color'));
    }
    
    public function browse(){
        $this->loadModel('Rug');
        $rugs=$this->Rug->find('all',array('conditions'=>array(
                                    "NOT"=>array(
                                        "Rug.discount"=>'0'
                                    )
                                ),'contain'=>array('Genrug')));
        $this->set('rugs',$rugs);
    }
    public function shape(){
        
    }
    public function color(){
        
    }
    
    
}
