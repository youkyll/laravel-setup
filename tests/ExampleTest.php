<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function testトップのタイトル確認()
	{
		$response = $this->call('GET', '/');
		$this->assertEquals('Laravel', $response->getTtl());
	}

}
