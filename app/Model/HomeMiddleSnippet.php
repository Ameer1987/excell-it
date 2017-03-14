<?php
App::uses('AppModel', 'Model');
/**
 * HomeMiddleSnippet Model
 *
 */
class HomeMiddleSnippet extends AppModel {
    public $actsAs = array(
        'Upload.Upload' => array(
            'image_name' => array(
                'rootDir' => ROOT,
            ),
            
        )
    );
}
