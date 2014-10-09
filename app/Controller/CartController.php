<?php
App::uses("AppController", "Controller");

/**
 * @property Order $Order Description
 * @property Inlineitem $Inlineitem Description
 */
class CartController extends AppController{
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
        if(!$this->request->is('ajax')){
            throw new NotFoundException("API Access Denied");
        }
        $this->autoRender = false;
    }
    public function add(){
        $result = array("key"=>"Item1");
        $this->response->body(json_encode($result));
    }
    
    
}

