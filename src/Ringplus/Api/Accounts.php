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
     * @return type
     */
    public static function all()
    {
        return Configuration::gateway()->accounts()->all();
    }
}
