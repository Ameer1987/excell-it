<?php
App::uses('HomeMiddleSnippet', 'Model');

/**
 * HomeMiddleSnippet Test Case
 */
class HomeMiddleSnippetTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.home_middle_snippet'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HomeMiddleSnippet = ClassRegistry::init('HomeMiddleSnippet');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HomeMiddleSnippet);

		parent::tearDown();
	}

}
