<?php
/**
 * @author Danny Carrillo <odannycx@gmail.com>
 * @package ringplus-php
 */
namespace Ringplus\Api;

use Ringplus\Configuration\Configuration;

class PhoneData
{
    /**
     * Returns all phone calls for an account
     *
     * @param int $accountId
     * @return mixed
     */
    public static function all($accountId)
    {
        return Configuration::gateway()->phoneData()->all($accountId);
    }
}
