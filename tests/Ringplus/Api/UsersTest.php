<?php
namespace tests\Ringplus\Api;

use Ringplus\Api\Users;

/**
 * Used to test User endpoints.
 */
class UsersTest extends Base
{
    /**
     * Tests returning all users the user has access to.
     *
     * @return assertion
     */
    public function testUsersGetAll()
    {
        $users = Users::all();
        
        $this->assertEquals($users['status'], 200);
        $this->assertArrayHasKey('users', $users['data']);
    }

    /**
     * Tests getting user by Id.
     *
     * @return assertion
     */
    public function testUserById()
    {
        $user = Users::fetch($this->getTestUserId());
        
        $this->assertEquals($user['status'], 200);
        $this->assertArrayHasKey('user', $user['data']);
    }
}
