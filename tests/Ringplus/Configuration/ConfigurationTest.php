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
     * Sets up the configuration.
     */
    public function setUp()
    {
        Configuration::begin();
        Configuration::clientId('123456789');
        Configuration::redirectUri('https://google.com');
        Configuration::clientSecret('SECRETSOMETHING');
    }
    /**
     * Tests configuration setup of client id.
     *
     * @return assertion
     */
    public function testConfigurationClientId()
    {
        $this->assertEquals('123456789', Configuration::clientId());
    }

    /**
     * Tests configuration setup of redirect uri.
     *
     * @return assertion
     */
    public function testConfigurationRedirectUri()
    {
        $this->assertEquals('https://google.com', Configuration::redirectUri());
    }

    /**
     * Tests configuration setup of client secret.
     *
     * @return assertion
     */
    public function testConfigurationClientSecret()
    {
        $this->assertEquals('SECRETSOMETHING', Configuration::clientSecret());
    }
}
