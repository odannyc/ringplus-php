<?php
namespace tests\Ringplus\Api;

use PHPUnit_Framework_TestCase;
use Ringplus\Configuration\Configuration;
use Ringplus\Api\Accounts;

/**
 * Used to test Pings to different IP addresses.
 */
class AccountsTest extends PHPUnit_Framework_TestCase
{
    /**
     * Setup the configuration.
     */
    public function setUp()
    {
        Configuration::begin();
        Configuration::accessToken();
    }

    /**
     * Tests returning all accounts the user has access to.
     *
     * @return assertion
     */
    public function testAccountsGetAll()
    {
        $accounts = Accounts::all();
        print_r($accounts);
    }

    /**
     * Tests getting all accounts by user id.
     *
     * @return assertion
     */
    public function testAccountsByUserId()
    {
        $accounts = Accounts::user();
        print_r($accounts);
    }
}
