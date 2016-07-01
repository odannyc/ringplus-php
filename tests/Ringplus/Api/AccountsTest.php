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
     * Tests configuration setup of client id.
     *
     * @return assertion
     */
    public function testAccountsGetAll()
    {
        Configuration::begin();
        Configuration::accessToken();

        $accounts = Accounts::all();

        print_r($accounts);
    }
}
