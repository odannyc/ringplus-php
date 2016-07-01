<?php
namespace Ringplus\Api;

use Ringplus\Configuration\Configuration;

/**
 * Manages accounts that a user has access to.
 */
class Accounts extends Base
{
    /**
     * Returns all accounts belonging to the user.
     *
     * @return dataset
     */
    public static function all()
    {
        return Configuration::gateway()->accounts()->all();
    }

    /**
     * Gets all accounts belonging to a user.
     *
     * @param int $userId
     *
     * @return dataset
     */
    public static function user($userId)
    {
        return Configuration::gateway()->accounts()->user($userId);
    }
}
