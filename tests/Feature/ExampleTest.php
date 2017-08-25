<?php

namespace Tests\Feature;

use Tests\FeatureTestCase;

class ExampleTest extends FeatureTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function testBasicTest()
    {
        $response = $this->visit('/')
                        ->seeStatusCode(200);
    }
}
