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

    /**
     * Gets a specific account by Id.
     *
     * @param int $accountId
     *
     * @return dataset
     */
    public static function fetch($accountId)
    {
        return Configuration::gateway()->accounts()->fetch($accountId);
    }

    /**
     * Gets a specific account by Id.
     *
     * @param int The account Id to update
     * @param array $options Only accepts name right now
     *
     * @return boolean Whether the update was successful or not
     */
    public static function update($accountId, $options)
    {
        return Configuration::gateway()->accounts()->update($accountId, $options);
    }
}
