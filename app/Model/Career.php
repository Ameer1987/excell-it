<?php
App::uses('AppModel', 'Model');
/**
 * Career Model
 *
 */
class Career extends AppModel {
    public $actsAs = array(
        'Upload.Upload' => array(
            'image_name' => array(
                'rootDir' => ROOT,
            ),
            
        )
    );
}
