<?php
namespace tests\Ringplus\Api;

use Ringplus\Api\Accounts;

/**
 * Used to test Account endpoints.
 */
class AccountsTest extends Base
{
    /**
     * Tests returning all accounts the user has access to.
     *
     * @return assertion
     */
    public function testAccountsGetAll()
    {
        $accounts = Accounts::all();
        
        $this->assertEquals($accounts['status'], 200);
        $this->assertArrayHasKey('accounts', $accounts['data']);
    }

    /**
     * Tests getting all accounts by user id.
     *
     * @return assertion
     */
    public function testAccountsByUserId()
    {
        $accounts = Accounts::user($this->getTestUserId());
        
        $this->assertEquals($accounts['status'], 200);
        $this->assertArrayHasKey('accounts', $accounts['data']);
    }

    /**
     * Test to get an account by Id.
     *
     * @return assertion
     */
    public function testAccountById()
    {
        $accounts = Accounts::fetch($this->getTestAccountId());
        
        $this->assertEquals($accounts['status'], 200);
        $this->assertArrayHasKey('account', $accounts['data']);
    }

    /**
     * Test to update an accounts name and set it back.
     *
     * @return type
     */
    public function testUpdateAccountNameAndSetBack()
    {
        $account = Accounts::update($this->getTestAccountId(), [
            'name' => 'Some random test'
        ]);
        
        $this->assertEquals($account['status'], 204);
    }
}
