<?php
App::uses("AppController", "Controller");
App::uses("CakeEmail", "Network/Email");
class TestController extends AppController {
    
    public $components = array('Paginator', 'Session');

    private function fromRGB($R, $G, $B) {

        $R = dechex($R);
        If (strlen($R) < 2)
            $R = '0' . $R;

        $G = dechex($G);
        If (strlen($G) < 2)
            $G = '0' . $G;

        $B = dechex($B);
        If (strlen($B) < 2)
            $B = '0' . $B;

        return   $R . $G . $B;
    }

    public function index() {
        //exit;
        ini_set("max_execution_time", -1);
        $dir = new DirectoryIterator("swatch");
        foreach ($dir as $fl){
            if (!$fl->isDot()) {
                if(!$fl->isDir()){
                    $name = $fl->getFilename();
                    
                    $image = new Imagick('swatch/'.$name); 
                    $x = rand(4,10); 
                    $y = rand(4,10); 
                    $pixel = $image->getImagePixelColor($x, $y); 
                    $clr = $pixel->getColor();
                    $hex = $this->fromRGB($clr['r'], $clr['g'], $clr['b']);
                    $tn = explode("_", $name);
                    $tn = explode(".", $tn[1]);
                    $tn = $tn[0];
                    rename('swatch/'.$name, 'swatch/'.$tn."-".$hex.".png");
                    
                }
            }
        }
        exit;
    }
    public function check(){
        $engine = 'file';
        if (extension_loaded('apc') && function_exists('apc_dec') && (php_sapi_name() !== 'cli' || ini_get('apc.enable_cli'))) {
            $engine = 'Apc';
        }
        debug($engine);
        exit;
    }
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('mail','test2');
    }
    public function mail(){
        $m = new CakeEmail("smtp");
        $m->to("web@avainfotech.com")
                ->subject("Test Mail")
                ->replyTo("support@rugbuilder.com", "Rug Builder Customer Support");
        try{
            $x = $m->send("Hello Papaa");
            debug($x);
        } catch (Exception $ex) {
            debug($ex);
        }
        exit;
    }
    
    public function test2(){
        $this->loadModel('Genrug');
        $this->Paginator->settings = array(
                "limit" => 2
            );
        $x = $this->paginate("Genrug");
        debug($x);
    }

}
