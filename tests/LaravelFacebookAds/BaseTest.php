<?php

namespace LaravelFacebookAds\Tests;

use Edbizarro\LaravelFacebookAds\Providers\LaravelFacebookServiceProvider;
use Mockery as m;
use Orchestra\Testbench\TestCase;

/**
 * Class BaseTest.
 */
class BaseTest extends TestCase
{
    public function test_test()
    {
    }

    public function tearDown()
    {
        parent::tearDown();
        m::close();
    }

    public function setUp()
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [LaravelFacebookServiceProvider::class];
    }
}
