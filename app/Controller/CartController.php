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
        $this->response->type('json');
    }
    public function add(){
        $d  = $this->request->data;
        $sid = $this->Session->id();
        $this->loadModel('Order');
        $order = $this->Order->find("first",array(
            'conditions' => array(
                'Order.sessionid' => $sid
            )
        ));
        if(empty($order)){
            $this->Order->create(); 
            $order = $this->Order->save(array(
                'Order' => array(
                    'user_id' => AuthComponent::user() ? AuthComponent::user('id') : 0,
                    'sessionid' => $sid,
                    'timestamp' => time(),
                    'status' => 'Not Confirmed'
                )
            ));
        }
        if(!empty($order)){
            $item = $this->Order->Inlineitem->find("first",array(
                "conditions" => array(
                    "Inlineitem.order_id" => $order['Order']['id'],
                    "genrug_id" => $d["rid"],
                    "length" => $d["l"],
                    "bredth" => $d["b"],
                    "pile_size" => $d["s"],
                    "shape" => $d["shp"],
                    "colors" => $d["clr"]
                )
            ));
            $itemData = array(
                "Inlineitem" => array(
                    "order_id" => $order['Order']['id'],
                    "genrug_id" => $d["rid"],
                    "qty" => $d["qty"],
                    "length" => $d["l"],
                    "bredth" => $d["b"],
                    "pile_size" => $d["s"],
                    "shape" => $d["shp"],
                    "colors" => $d["clr"]
                )
            );
            if(empty($item)){
                $this->Order->Inlineitem->create();
                $item = $this->Order->Inlineitem->save($itemData);
            }else{
                $this->Order->Inlineitem->id = $item['Inlineitem']['id'];
                $item['Inlineitem']['qty'] += $d["qty"];
                $s = $this->Order->Inlineitem->saveField("qty", $item['Inlineitem']['qty']);
            }
        }

        // $order = {"Order":{"user_id":0,"sessionid":"kpc64t1kk8nvmeh2p2n24icmm6","timestamp":1412856993,"status":"Not Confirmed","id":"1"}}
        // $item = {"Inlineitem":{"order_id":"1","genrug_id":"5","qty":"1","length":"5","bredth":"5","pile_size":"option1","shape":"square","colors":"b791a6-3045e0","id":"3"}}
        
        $result = $this->Order->find("first",array(
            "conditions" => array(
                "sessionid" => $sid
            )
        ));        
        $this->response->body(json_encode($result));
    }
    public function removeitem(){
        $this->loadModel('Inlineitem');
        if($this->Inlineitem->delete($this->request->data['iid'])){
            $result = array(
                "msg" => "Item removed from cart.",
                "type" => "info"
            );
        }else{
            $result = array(
                "msg" => "Unable to remove Item from cart.",
                "type" => "error"
            );
        }
        $this->response->body(json_encode($result));
    }

    public function cart(){
        $sid = $this->Session->id();
        $this->loadModel("Order");
        $result = $this->Order->find("first",array(
            "conditions" => array(
                "sessionid" => $sid
            )
        ));
        $this->response->body(json_encode($result));
    }
    
    
    
}

