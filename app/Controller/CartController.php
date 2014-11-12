<?php

App::uses("AppController", "Controller");
App::uses('Paypal', 'Paypal.Lib');

/**
 * @property Order $Order Description
 * @property Inlineitem $Inlineitem Description
 */
class CartController extends AppController {

    public $Paypal;

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
        if(!in_array($this->request->param('action'), array("paypaldirect"))){
            if (!$this->request->is('ajax')) {
                throw new NotFoundException("API Access Denied");
            }
            $this->autoRender = false;
            $this->response->type('json');
        }
    }
    public function billAddOnOrder(){
            if($this->request->is('ajax')){
                $sid = $this->Session->id();
                $this->loadModel('Order');
                $this->Order->updateAll(array(
                    'Order.billingadd_id' => $this->request->data['id']
                ), array(
                    'Order.sessionid' => $sid
                ));
                $this->response->body(json_encode(1));
            }else{
                exit;
            }
    }

    public function add() {
        $d = $this->request->data;
        $sid = $this->Session->id();
        $this->loadModel('Order');
        $order = $this->Order->find("first", array(
            'conditions' => array(
                'Order.sessionid' => $sid
            )
        ));
        if (empty($order)) {
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
        if (!empty($order)) {
            $item = $this->Order->Inlineitem->find("first", array(
                "conditions" => array(
                    "Inlineitem.order_id" => $order['Order']['id'],
                    "genrug_id" => $d["rid"],
                    "length" => $d["size"],
                    "bredth" => 0,//$d["b"],
                    "pile_size" => 0,//$d["s"],
                    "shape" => $d["shp"],
                    "colors" => $d["clr"]
                )
            ));
            $itemData = array(
                "Inlineitem" => array(
                    "order_id" => $order['Order']['id'],
                    "genrug_id" => $d["rid"],
                    "qty" => $d["qty"],
                    "length" => $d["size"],
                    "bredth" => 0,//$d["b"],
                    "pile_size" => 0,//$d["s"],
                    "shape" => $d["shp"],
                    "colors" => $d["clr"]
                )
            );
            if (empty($item)) {
                $this->Order->Inlineitem->create();
                $item = $this->Order->Inlineitem->save($itemData);
            } else {
                $this->Order->Inlineitem->id = $item['Inlineitem']['id'];
                $item['Inlineitem']['qty'] += $d["qty"];
                $s = $this->Order->Inlineitem->saveField("qty", $item['Inlineitem']['qty']);
            }
        }

        // $order = {"Order":{"user_id":0,"sessionid":"kpc64t1kk8nvmeh2p2n24icmm6","timestamp":1412856993,"status":"Not Confirmed","id":"1"}}
        // $item = {"Inlineitem":{"order_id":"1","genrug_id":"5","qty":"1","length":"5","bredth":"5","pile_size":"option1","shape":"square","colors":"b791a6-3045e0","id":"3"}}

        $result = $this->Order->find("first", array(
            "conditions" => array(
                "sessionid" => $sid
            )
        ));
        $this->response->body(json_encode($result));
    }

    public function removeitem() {
        $d = $this->request->data;
        $this->loadModel("Inlineitem");
        $this->Inlineitem->id = $d['id'];
        if ($this->Inlineitem->exists($d['id'])) {
            $x = $this->Inlineitem->delete($d['id']);
            if ($x) {
                $this->response->body(json_encode(array("error" => 0, "msg" => "Item has been removed from cart...")));
            } else {
                $this->response->body(json_encode(array("error" => 1, "msg" => "Unable to remove item...")));
            }
        }
    }

    public function cart() {
        $sid = $this->Session->id();
        $this->loadModel("Order");
        $result = $this->Order->find("first", array(
            "recursive" => 3,
            "conditions" => array(
                "sessionid" => $sid
            )
        ));
        $this->response->body(json_encode($result));
    }
    public function makepayment(){
        $this->loadModel('Order');
        $sid = $this->Session->id();
        $this->Order->recursive = 3;
        $odr = $this->Order->find('first',array('contain'=>array('Inlineitem','Inlineitem.Genrug','Inlineitem.Genrug.Rug'),'conditions'=>array('Order.sessionid'=>$sid)));
        
        $this->Paypal = new Paypal(array(
            'sandboxMode' => true,  
            'nvpUsername' => 'payments-facilitator_api1.modernrugs.com',
            'nvpPassword' => '1380641932',
            'nvpSignature' => 'AwyQ-r.6obAXd4Dxr0H-NWmJzlNaAj9iMRS.TSvcK3s1WPabX59oMJqO'
        ));
        $this->loadModel('Size');
        $cart_items = array();
        foreach ($odr['Inlineitem'] as $i){
            $size = $this->Size->find("first",array('conditions'=>array('Size.label'=>$i['length'])));
            $size = $size['Size']['size_in_ft'];
            $price = ($size * $i['Genrug']['price'] * $i['qty']) - ($size * $i['Genrug']['price'] * $i['qty']) * $i['Genrug']['Rug']['discount'] / 100 ;
            $cart_items[] = array(
                'name' => $i['Genrug']['name']." ID: ".$i['id']."ITM".$i['genrug_id'],
                'description' => $i['Genrug']['description'],
                'tax' => 0.00,
                'shipping' => 0.00,
                'subtotal' => $price,
            );
        }
        $order = array(
            'description' => 'Your purchase with RugBuilder.com',
            'currency' => 'USD',
            'return' => 'https://rugbuilder.com/cart/thankyou',
            'cancel' => 'https://rugbuilder.com/cart/cancel',
            'custom' => $odr['Order']['id'],
            'items' => $cart_items,
        );
        try {
            $redirectUri = $this->Paypal->setExpressCheckout($order);
            $this->response->body(json_encode(array('error'=>0,'data'=>$redirectUri)));
        } catch (Exception $e) {
            $this->response->body(json_encode(array('error'=>1,'data'=>$e->getMessage())));
        } 
        
    }
    
    public function thankyou($data){
        debug($this->request);
        exit;
    }
    public function cancel($data){
        debug($this->request);
        exit;
    }

    public function updateitem() {
        $d = $this->request->data;
        $this->loadModel("Inlineitem");
        $this->Inlineitem->id = $d['id'];
        if ($this->Inlineitem->exists($d['id'])) {
            $x = $this->Inlineitem->save(array(
                "Inlineitem" => array(
                    "qty" => $d['qty']
                )
            ));
            if ($x) {
                $this->response->body(json_encode(array("error" => 0, "msg" => "Item count updated...")));
            } else {
                $this->response->body(json_encode(array("error" => 1, "msg" => "Unable to update item count...")));
            }
        }
    }
    
    public function updategross(){
        $d = $this->request->data;
        $this->loadModel('Order');
        $this->Order->id = $d['id'];
        if($this->Order->exists($d['id'])){
            if($this->Order->updateAll(array('Order.gross_total'=>  round($d['gross_total'],2)), array("Order.id"=>$d['id']))){
                $this->response->body(json_encode(array("msg"=>"gross_total updated...")));
            }
        }
    }

    public function paypaldirect() {
        $this->response->type("html");
        $this->autoRender = true;
        $this->Paypal = new Paypal(array(
            'sandboxMode' => true,  
            'nvpUsername' => 'payments-facilitator_api1.modernrugs.com',
            'nvpPassword' => '1380641932',
            'nvpSignature' => 'AwyQ-r.6obAXd4Dxr0H-NWmJzlNaAj9iMRS.TSvcK3s1WPabX59oMJqO'
        ));
        
        

        $order = array(
            'description' => 'Your purchase with Acme clothes store',
            'currency' => 'USD',
            'return' => 'https://www.my-amazing-clothes-store.com/review-paypal.php',
            'cancel' => 'https://www.my-amazing-clothes-store.com/checkout.php',
            'custom' => 'bingbong',
            'items' => array(
                0 => array(
                    'name' => 'Blue shoes',
                    'description' => 'A pair of really great blue shoes',
                    'tax' => 2.00,
                    'shipping' => 0.00,
                    'subtotal' => 8.00,
                ),
                1 => array(
                    'name' => 'Red trousers',
                    'description' => 'Tight pair of red pants, look good with a hat.',
                    'tax' => 2.00,
                    'shipping' => 2.00,
                    'subtotal' => 6.00
                ),
            )
        );
        try {
            $redirectUri = $this->Paypal->setExpressCheckout($order);
            debug($redirectUri);
        } catch (Exception $e) {
            debug($e->getMessage());
        } 
    }
    

}
