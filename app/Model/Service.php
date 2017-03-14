<?php
App::uses('AppModel', 'Model');
/**
 * Service Model
 *
 */
class Service extends AppModel {
    public $actsAs = array(
        'Upload.Upload' => array(
            'image_name' => array(
                'rootDir' => ROOT,
            ),
            
        )
    );
}
