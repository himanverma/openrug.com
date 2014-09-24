<?php

App::uses('AppController', 'Controller');

/**
 * Rugs Controller
 *
 * @property Rug $Rug
 * @property Genrug $Genrug
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RugsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('genImg', 'editor', 'index'));
    }

    /**
     * Rugs Editior Method
     * 
     * @return void Description
     */
    private function createDirGen($rug_id = null, $colorStamp = null, $genFolder = "files/gen/") {
        if ($rug_id == NULL || $colorStamp == NULL)
            return false;
        $colorStamp = str_replace("#", "", $colorStamp);
        $dir = $genFolder . $rug_id . "/" . $colorStamp . "/";
        if (!is_dir($dir)) {
            $rugInfo = $this->Rug->find('first', array('recursive' => -1, 'conditions' => array('Rug.id' => $rug_id)));
            $this->loadModel('Genrug');
            $this->request->data['Genrug']['rug_id'] = $rug_id;
            $this->request->data['Genrug']['price'] = $rugInfo['Rug']['price'];
            $this->request->data['Genrug']['name'] = $rugInfo['Rug']['name'];
            $this->request->data['Genrug']['path'] = $dir;
            $this->request->data['Genrug']['colorstamp'] = $colorStamp;
            $this->request->data['Genrug']['pattern'] = $rugInfo['Rug']['pattern'];
            $this->request->data['Genrug']['timestamp'] = time();
            $this->Genrug->create();
            $this->Genrug->save($this->request->data);
            mkdir($dir, 0777, true);
        }
        return $dir;
    }

    private function genImgRound($rugpngs, $colors = array(), $location = "files/temp/") {
        if (is_file($location . "gen.png")) {
            return $location;
        }
        ini_set("max_execution_time", -1);
        $layers = array();
        $bg = null;

        foreach ($rugpngs as $rp) {
            if ($rp['type'] == "LAYER") {
                $layers[] = new Imagick($rp['path']);
            } else {
                $bg = new Imagick($rp['path']);
            }
        }
        if ($bg == NULL) {
            $bg = new Imagick();
            $bg->newImage(910, 475, new ImagickPixel('none'));
            $bg->setimageformat('png');
        }
        foreach ($layers as $layer) {
            //$layer->resizeImage(910, 475, Imagick::FILTER_LANCZOS, 1, TRUE);
            $layer->setimageformat("png");
        }

        $bg->resizeImage($layer->getimagewidth(), $layer->getimageheight(), Imagick::FILTER_LANCZOS, 1, TRUE);
        $bg->setimageformat("png");
        $cnt_a = 0;
        foreach ($layers as $layer) {
            $layer->paintopaqueimage(new ImagickPixel('#000'), $colors[$cnt_a], 900000);
            $bg->compositeimage($layer, \Imagick::COMPOSITE_MULTIPLY, 0, 0);
            $cnt_a++;
            $layer->destroy();
        }
        $bg->mergeimagelayers(Imagick::LAYERMETHOD_COALESCE);


        $presp = 100;
        $controlPoints = array(
            -$presp, -$presp, 0, $presp, # top left ( x1, y1 , x2 ,y2)
            $bg->getimagewidth() + $presp, -$presp, $bg->getimagewidth(), $presp, # top right ( x1, y1 , x2 ,y2) 
            $bg->getimagewidth(), $bg->getimageheight(), $bg->getimagewidth() + $presp, $bg->getimageheight() - $presp, # bottom right ( x1, y1 , x2 ,y2)
            0, $bg->getimageheight(), -$presp, $bg->getimageheight() + $presp # bottom left ( x1, y1 , x2 ,y2)
        );
        $bg->distortImage(Imagick::DISTORTION_PERSPECTIVE, $controlPoints, true);

        $rnd = new Imagick("files/templates/round2.png");
        $rnd->compositeimage($bg, \Imagick::COMPOSITE_MULTIPLY, 0, 0);
        $rnd->mergeimagelayers(Imagick::LAYERMETHOD_COALESCE);

        $rnd->compositeimage(new Imagick("files/templates/round2.png"), \Imagick::COMPOSITE_COPYOPACITY, 0, 0, Imagick::CHANNEL_ALPHA);
        $rnd->setimageformat("png");
        $rnd->setImageFileName($location . "gen.png");
        $rnd->writeimage();
        $rnd->destroy();

        $rnd = new Imagick("files/templates/round3.png");
        $rnd->compositeimage($bg, \Imagick::COMPOSITE_MULTIPLY, 0, 30);
        $rnd->mergeimagelayers(Imagick::LAYERMETHOD_COALESCE);

        $rnd->compositeimage(new Imagick("files/templates/round3.png"), \Imagick::COMPOSITE_COPYOPACITY, 0, 0, Imagick::CHANNEL_ALPHA);
        $rnd->setimageformat("png");
        $rnd->setImageFileName($location . "gen1.png");
        $rnd->writeimage();
        $rnd->destroy();

        $rnd = new Imagick("files/templates/round4.png");
        $rnd->compositeimage($bg, \Imagick::COMPOSITE_MULTIPLY, 0, 20);
        $rnd->mergeimagelayers(Imagick::LAYERMETHOD_COALESCE);

        $rnd->compositeimage(new Imagick("files/templates/round4.png"), \Imagick::COMPOSITE_COPYOPACITY, 0, 0, Imagick::CHANNEL_ALPHA);
        $rnd->setimageformat("png");
        $rnd->setImageFileName($location . "gen2.png");
        $rnd->writeimage();
        $rnd->destroy();

        $rnd = new Imagick("files/templates/roundroom.png");
        $rnd->compositeimage($bg, \Imagick::COMPOSITE_MULTIPLY, 0, 200);
        $rnd->mergeimagelayers(Imagick::LAYERMETHOD_COALESCE);

        $rnd->compositeimage(new Imagick("files/templates/roundroom.png"), \Imagick::COMPOSITE_COPYOPACITY, 0, 0, Imagick::CHANNEL_ALPHA);
        $rnd->mergeimagelayers(Imagick::LAYERMETHOD_COALESCE);
        $rnd->compositeimage(new Imagick("files/templates/roundroom-bg.png"), \Imagick::COMPOSITE_DEFAULT, 0, 0, Imagick::CHANNEL_ALPHA);
        $rnd->setimageformat("png");
        $rnd->setImageFileName($location . "gen3.png");
        $rnd->writeimage();
        $rnd->destroy();

        return $location;
    }

    
    private function genImgRect($rugpngs, $colors = array(), $location = "files/temp/") {
        if (is_file($location . "rect.png")) {
            return $location;
        }
        ini_set("max_execution_time", -1);
        $layers = array();
        $bg = null;

        foreach ($rugpngs as $rp) {
            if ($rp['type'] == "LAYER") {
                $layers[] = new Imagick($rp['path']);
            } else {
                $bg = new Imagick($rp['path']);
            }
        }
        if ($bg == NULL) {
            $bg = new Imagick();
            $bg->newImage(910, 475, new ImagickPixel('none'));
            $bg->setimageformat('png');
        }
        foreach ($layers as $layer) {
            //$layer->resizeImage(910, 475, Imagick::FILTER_LANCZOS, 1, TRUE);
            $layer->setimageformat("png");
        }

        $bg->resizeImage($layer->getimagewidth(), $layer->getimageheight(), Imagick::FILTER_LANCZOS, 1, TRUE);
        $bg->setimageformat("png");
        $cnt_a = 0;
        foreach ($layers as $layer) {
            $layer->paintopaqueimage(new ImagickPixel('#000'), $colors[$cnt_a], 900000);
            $bg->compositeimage($layer, \Imagick::COMPOSITE_MULTIPLY, 0, 0);
            $cnt_a++;
            $layer->destroy();
        }
        $bg->mergeimagelayers(Imagick::LAYERMETHOD_COALESCE);


        $presp = 100;
        $controlPoints = array(
            -$presp, -$presp, 0, $presp, # top left ( x1, y1 , x2 ,y2)
            $bg->getimagewidth() + $presp, -$presp, $bg->getimagewidth(), $presp, # top right ( x1, y1 , x2 ,y2) 
            $bg->getimagewidth(), $bg->getimageheight(), $bg->getimagewidth() + $presp, $bg->getimageheight() - $presp, # bottom right ( x1, y1 , x2 ,y2)
            0, $bg->getimageheight(), -$presp, $bg->getimageheight() + $presp # bottom left ( x1, y1 , x2 ,y2)
        );
        $bg->distortImage(Imagick::DISTORTION_PERSPECTIVE, $controlPoints, true);

        $rnd = new Imagick("files/templates/rect/ptrn-1.png");
        $rnd->compositeimage($bg, \Imagick::COMPOSITE_MULTIPLY, 0, 0);
        $rnd->mergeimagelayers(Imagick::LAYERMETHOD_COALESCE);

        $rnd->compositeimage(new Imagick("files/templates/rect/ptrn-1.png"), \Imagick::COMPOSITE_COPYOPACITY, 0, 0, Imagick::CHANNEL_ALPHA);
        $rnd->setimageformat("png");
        $rnd->setImageFileName($location . "rect.png");
        $rnd->writeimage();
        $rnd->destroy();

        $rnd = new Imagick("files/templates/rect/ptrn-2.png");
        $rnd->compositeimage($bg, \Imagick::COMPOSITE_MULTIPLY, 0, 30);
        $rnd->mergeimagelayers(Imagick::LAYERMETHOD_COALESCE);

        $rnd->compositeimage(new Imagick("files/templates/rect/ptrn-2.png"), \Imagick::COMPOSITE_COPYOPACITY, 0, 0, Imagick::CHANNEL_ALPHA);
        $rnd->setimageformat("png");
        $rnd->setImageFileName($location . "rect1.png");
        $rnd->writeimage();
        $rnd->destroy();

        $rnd = new Imagick("files/templates/rect/ptrn-3.png");
        $rnd->compositeimage($bg, \Imagick::COMPOSITE_MULTIPLY, 0, 20);
        $rnd->mergeimagelayers(Imagick::LAYERMETHOD_COALESCE);

        $rnd->compositeimage(new Imagick("files/templates/rect/ptrn-3.png"), \Imagick::COMPOSITE_COPYOPACITY, 0, 0, Imagick::CHANNEL_ALPHA);
        $rnd->setimageformat("png");
        $rnd->setImageFileName($location . "rect2.png");
        $rnd->writeimage();
        $rnd->destroy();

        $rnd = new Imagick("files/templates/rect/ptrn-4.png");
        $rnd->compositeimage($bg, \Imagick::COMPOSITE_MULTIPLY, 0, 200);
        $rnd->mergeimagelayers(Imagick::LAYERMETHOD_COALESCE);

        $rnd->compositeimage(new Imagick("files/templates/rect/ptrn-4.png"), \Imagick::COMPOSITE_COPYOPACITY, 0, 0, Imagick::CHANNEL_ALPHA);
        $rnd->mergeimagelayers(Imagick::LAYERMETHOD_COALESCE);
        $rnd->compositeimage(new Imagick("files/templates/rect/ptrn-5.png"), \Imagick::COMPOSITE_DEFAULT, 0, 0, Imagick::CHANNEL_ALPHA);
        $rnd->setimageformat("png");
        $rnd->setImageFileName($location . "rect3.png");
        $rnd->writeimage();
        $rnd->destroy();

        return $location;
    }

    
    public function editor($id = null, $shape = "Rectangle") {
        if ($id == null) {
            $id = 4;
        }
        $rug = $this->Rug->find("first", array(
            'conditions' => array(
                'Rug.id' => $id
            )
        ));
        //debug($rug);
        $colorCount = $this->Rug->Rugpng->find("count", array(
            'conditions' => array(
                'Rugpng.type' => "LAYER",
                'Rugpng.shape' => $shape,
                'Rugpng.rug_id' => $rug['Rug']['id']
            )
        ));
        $this->set("colorCount", $colorCount);
        if ($this->Session->check("rug-" . $rug['Rug']['id'])) {
            
        }
        $defaultClr = array();

        //debug($rug);
        //exit;
        foreach ($rug['Rugpng'] as $rp) {
            if ($rp['type'] == "LAYER") {
                $defaultClr[] = array(
                    "png" => $rp['color'] . ".png",
                    "clr" => "#" . $rp['color']
                );
            }
        }
        $s = explode("/", $rug['Rugpng'][0]['path']);
        $shapeCounts = $this->countDir($s[0] . "/" . $s[1] . "/" . $s[2] . "/");
        if ($this->request->is(array('post'))) {
            $colorstamp = implode("-", $this->request->data['clr_sb']);
            $ims = $this->genImgRound($rug['Rugpng'], $this->request->data['clr_sb'], $dir =  $this->createDirGen($rug['Rug']['id'], $colorstamp));
            $this->genImgRect($rug['Rugpng'], $this->request->data['clr_sb'], $dir, $colorstamp);
            $defaultClr = array();
            foreach ($this->request->data['clr_sb'] as $clrs) {
                $defaultClr[] = array(
                    "png" => ltrim($clrs, "#") . ".png",
                    "clr" => $clrs
                );
            }
            //debug($this->request->data);
            //exit;
        }
        $this->set("ims", "/" . $ims);
        $this->set("defaultClr", $defaultClr);
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Rug->recursive = 0;
        $this->set('rugs', $this->Paginator->paginate());
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Rug->recursive = 0;
        $this->set('rugs', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Rug->exists($id)) {
            throw new NotFoundException(__('Invalid rug'));
        }
        $options = array('conditions' => array('Rug.' . $this->Rug->primaryKey => $id));
        $this->set('rug', $this->Rug->find('first', $options));
    }

    private function nextHigh($dir) {
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        $dir = new DirectoryIterator($dir);
        $dirs = array();
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                if ($fileinfo->isDir()) {
                    $dirs[] = $fileinfo->getFilename();
                }
            }
        }
        sort($dirs);
        if (count($dirs) == 0)
            return 1;
        return $dirs[count($dirs) - 1];
    }

    private function countDir($dir) {
        if (!is_dir($dir)) {
            return false;
        }
        $dir = new DirectoryIterator($dir);
        $dirs = 0;
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                if ($fileinfo->isDir()) {
                    $dirs++;
                }
            }
        }
        return $dirs;
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Rug->create();
            if ($this->Rug->save($this->request->data)) {
                $id = $this->Rug->getLastInsertID();
                $dir = "files/templates/" . $id . "/" . $this->request->data['Rug']['shape'] . "/" . ($this->nextHigh("files/templates/" . $id . "/" . $this->request->data['Rug']['shape'] . "/") + 1) . "/";
                if (!is_dir($dir)) {
                    mkdir($dir, 0777, true);
                }
                $cnt = 1;
                foreach ($this->request->data['Rug']['path'] as $p) {
                    if ($p['error'] == 0) {
                        $ext = "." . pathinfo($p['name'], PATHINFO_EXTENSION);
                        if (strtolower($ext) != ".png") {
                            $this->Session->setFlash("Please use transparent PNGs only.");
                            return $this->redirect("/admin/rugs/add");
                        }
                        if (move_uploaded_file($p['tmp_name'], $dir . $cnt . $ext)) {
                            $this->Rug->Rugpng->create();
                            $this->Rug->Rugpng->save(array(
                                'Rugpng' => array(
                                    'path' => $dir . $cnt . $ext,
                                    'type' => 'LAYER',
                                    'shape' => $this->request->data['Rug']['shape'],
                                    'rug_id' => $id
                                )
                            ));
                        }
                    }
                    $cnt++;
                }
                if ($this->request->data['Rug']['pathbg']['size'] > 0) {
                    $ext = "." . pathinfo($this->request->data['Rug']['pathbg']['name'], PATHINFO_EXTENSION);
                    if (move_uploaded_file($this->request->data['Rug']['pathbg']['tmp_name'], $dir . "bg" . $ext)) {
                        $this->Rug->Rugpng->create();
                        $this->Rug->Rugpng->save(array(
                            'Rugpng' => array(
                                'path' => $dir . "bg" . $ext,
                                'type' => 'BG',
                                'shape' => $this->request->data['Rug']['shape'],
                                'rug_id' => $id
                            )
                        ));
                    }
                }
                $this->Session->setFlash(__('The rug has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The rug could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->Rug->exists($id)) {
            throw new NotFoundException(__('Invalid rug'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Rug->save($this->request->data)) {
                $this->Session->setFlash(__('The rug has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The rug could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Rug.' . $this->Rug->primaryKey => $id));
            $this->request->data = $this->Rug->find('first', $options);
        }
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Rug->id = $id;
        if (!$this->Rug->exists()) {
            throw new NotFoundException(__('Invalid rug'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Rug->delete()) {
            $this->Session->setFlash(__('The rug has been deleted.'));
        } else {
            $this->Session->setFlash(__('The rug could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
