<?php

App::uses('AppModel', 'Model');

/**
 * Rugpng Model
 *
 * @property Rug $Rug
 */
class Genrug extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'id';

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Rug' => array(
            'className' => 'Rug',
            'foreignKey' => 'rug_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    private function rrmdir($dir) {
        foreach (glob($dir . '/*') as $file) {
            if (is_dir($file))
                rrmdir($file);
            else
                unlink($file);
        }
        rmdir($dir);
    }

    public function delete($id = null, $cascade = true) {
        if ($id == null) {
            $id = $this->id;
        }
        $path = $this->read(array('path'), $id);
        $this->rrmdir($path['Genrug']['path']);
        parent::delete($id, $cascade);
    }

}
