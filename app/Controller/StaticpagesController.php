<?php
App::uses("AppController", "Controller");
/**
 * Description of StaticpagesController
 * @property Staticpage $Staticpage Description
 * @author Himanshu
 */
class StaticpagesController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
    }
    
    public function admin_index(){
        $x  = $this->paginate('Staticpage');
        $this->set('staticpages', $x);
    }
    public function admin_edit($id=null){
        if($this->request->is(array('post','put'))){
            if($this->Staticpage->save($this->request->data)){
                $this->redirect("/admin/Staticpages/index");
            }
        }else{
            if($id != NULL){
                $this->request->data = $this->Staticpage->find("first",array(
                    'conditions' => array(
                        'Staticpage.id' => $id
                    )
                ));
            }
        }
    }
    public function view($id=null){
        $this->set("content", $x = $this->Staticpage->find("first", array(
            'conditions' => array(
                'Staticpage.id' => $id
            )
        )));
        $this->set("title_for_layout", $x['Staticpage']['title']);
    }
    
}
