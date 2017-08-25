<?php

namespace Tests;

use Laravel\BrowserKitTesting\TestCase;
use Tests\CreatesApplication;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FeatureTestCase extends TestCase
{
    use CreatesApplication, DatabaseTransactions;
}
