<?php
App::uses('AppModel', 'Model');
/**
 * Contact Model
 *
 */
class Contact extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
        public $actsAs = array(
        'Upload.Upload' => array(
            'image_name' => array(
                'rootDir' => ROOT,
            ),
            
        )
    );

}
