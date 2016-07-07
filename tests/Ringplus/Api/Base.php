<?php
namespace tests\Ringplus\Api;

use PHPUnit_Framework_TestCase;
use Ringplus\Configuration\Configuration;
use tests\Ringplus\RingplusTestCredentials;

/**
 * Used to test Pings to different IP addresses.
 */
class Base extends PHPUnit_Framework_TestCase
{
    /**
     * Setup the configuration.
     */
    public function setUp()
    {
        Configuration::begin();
        Configuration::clientId(RingplusTestCredentials::$clientId);
        Configuration::redirectUri('https://my.ringplus.net');
        Configuration::clientSecret(RingplusTestCredentials::$clientSecret);
        Configuration::accessToken(RingplusTestCredentials::$accessToken);
    }

    /**
     * @return int The test user ID
     */
    protected function getTestUserId()
    {
        return RingplusTestCredentials::$testUserId;
    }

    /**
     * @return int The test user ID
     */
    protected function getTestAccountId()
    {
        return RingplusTestCredentials::$testAccountId;
    }
}
