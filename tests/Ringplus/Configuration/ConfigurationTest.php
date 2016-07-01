<?php
namespace tests\Ringplus\Configuration;

use PHPUnit_Framework_TestCase;
use Ringplus\Configuration\Configuration;

/**
 * Used to test Pings to different IP addresses.
 */
class ConfigurationTest extends PHPUnit_Framework_TestCase
{
    /**
     * Tests configuration setup of client id.
     *
     * @return assertion
     */
    public function testConfigurationClientId()
    {
        Configuration::begin();
        Configuration::clientId('123456789');

        $this->assertEquals('123456789', Configuration::clientId(null));
    }

    /**
     * Tests configuration setup of client id.
     *
     * @return assertion
     */
    public function testConfigurationRedirectUri()
    {
        Configuration::begin();
        Configuration::redirectUri('https://google.com');

        $this->assertEquals('https://google.com', Configuration::redirectUri(null));
    }

    /**
     * Tests configuration setup of client id.
     *
     * @return assertion
     */
    public function testConfigurationClientSecret()
    {
        Configuration::begin();
        Configuration::clientSecret('SECRETSOMETHING');

        $this->assertEquals('SECRETSOMETHING', Configuration::clientSecret(null));
    }
}
