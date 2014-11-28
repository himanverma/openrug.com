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
                'limit' => 6,
                'order' => array('Genrug.id DESC'),
                'group' => array('Genrug.rug_id')
            );        
        $x = $this->paginate("Genrug");
        $this->set('popularGenrugs', $x);
        $this->set("view",$this->request->query("view"));
    }
    public function recentRugs(){
        
        $this->layout = 'blank';
        $this->loadModel('Genrug');
        $this->Paginator->settings = array(
                'limit' => 12,
                'order' => array('Genrug.id DESC'),
                //'group' => array('Genrug.rug_id')
            );        
        $x = $this->paginate("Genrug");
        $this->set('recentGenrugs', $x);
        $this->set("view",$this->request->query("view"));
    }
    
    public function bycolor($color=null){
        $this->layout = 'blank';
        $this->loadModel('Genrug');
        $this->Paginator->settings = array(
                'limit' => 18,
                'order' => array('Genrug.id DESC'),
                'contain' => array('Rug'),
                'conditions' => array(
                    'Genrug.colorstamp LIKE' => "%".$color."%"
                )
            );        
        $x = $this->paginate("Genrug");
        $this->set('popularGenrugs', $x);
        $this->set('color',$color);
        $this->set("view",$this->request->query("view"));
    }
    public function bypattern($pattern=null){
        $this->layout = 'blank';
        $this->loadModel('Genrug');
        $this->Paginator->settings = array(
                'limit' => 18,
                'order' => array('Genrug.id DESC'),
                'contain' => array('Rug'),
                'conditions' => array(
                    'Rug.pattern LIKE' => $pattern
                )
            );        
        $x = $this->paginate("Genrug");
        $this->set('popularGenrugs', $x);
        $this->set('c_pattern',$pattern);
        $this->set("view",$this->request->query("view"));
    }
    
    
    
    
    
    public function popularRugs1($shape=null){
        $this->layout = 'blank';
        $this->loadModel('Genrug');
        $this->Paginator->settings = array(
                'limit' => 18,
                'order' => array('Genrug.id DESC'),
                //'group' => array('Genrug.rug_id')
            );        
        $x = $this->paginate("Genrug");
        $this->set('popularGenrugs', $x);
        $this->set('shape',$shape);
    }
    
   
}
