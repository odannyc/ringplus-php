<?php
namespace Ringplus\Api;

use Ringplus\Configuration\Configuration;

/**
 * Manages user accounts.
 */
class Users extends Base
{
    /**
     * Returns all users the user has access to.
     *
     * @return dataset
     */
    public static function all()
    {
        return Configuration::gateway()->users()->all();
    }

    /**
     * Gets a specific user by Id.
     *
     * @param int $userId
     *
     * @return dataset
     */
    public static function fetch($userId)
    {
        return Configuration::gateway()->users()->fetch($userId);
    }
}
