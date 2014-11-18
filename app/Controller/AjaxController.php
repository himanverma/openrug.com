<?php
App::uses("AppController", "Controller");
/**
 * Description of AjaxController
 * @property Paginator $Paginator Description
 * @property Genrug $Genrug Description
 * @author Himanshu
 */
class AjaxController extends AppController {
    
    public $components = array("Paginator","Session");


    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }
    public function popularRugs(){
        $this->layout = 'blank';
        $this->loadModel('Genrug');
        $this->Paginator->settings = array(
                'limit' => 2,
                'order' => array('Genrug.id DESC'),
                'group' => array('Genrug.rug_id')
            );        
        $x = $this->paginate("Genrug");
        $this->set('popularGenrugs', $x);
    }
    public function recentRugs(){
        $this->layout = 'blank';
        $this->loadModel('Genrug');
        $this->Paginator->settings = array(
                'limit' => 18,
                'order' => array('Genrug.id DESC'),
                //'group' => array('Genrug.rug_id')
            );        
        $x = $this->paginate("Genrug");
        $this->set('recentGenrugs', $x);
    }
}
