<?php

App::uses('AppModel', 'Model');

/**
 * Rug Model
 *
 * @property Rugpng $Rugpng
 */
class Banner extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'title';

    /**
     * Validation rules
     *
     * @var array
     */
    

    public function delete($id = null, $cascade = true) {
        if($id == NULL){
                $id = $this->id;
            }
        $x = $this->find('first',array('conditions'=>array('Banner.id'=>$id)));
        unlink('files/banner_image/' . $x['Banner']['image']);
        parent::delete($id, $cascade);
    }

}
