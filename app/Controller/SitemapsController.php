<?php
App::uses("AppController", "Controller");
class SitemapsController extends AppController{
    var $name = 'Sitemaps';
    var $helpers = array('Time');
    var $components = array('RequestHandler');

    function index(){
        //$this->response->type('')
        $this->loadModel('Genrug');
        $this->set('genrugs', $this->Genrug->find('all'));
        $this->set('rugcats', $this->_patterns);
        //$this->set('pages', $this->Page->find('all', array( 'conditions' => array('Page.status' => 1 ), 'fields' => array('modified','id','slug'))));
        //debug logs will destroy xml format, make sure were not in drbug mode
        Configure::write ('debug', 2);
    }
}
