<?php
/**
 * @author Danny Carrillo <odannycx@gmail.com>
 * @package ringplus-php
 */

namespace Ringplus\Api;

use Ringplus\Configuration\Configuration;

class FluidCall
{
    /**
     * Returns the fluidcall credentials for an account
     *
     * @param int $accountId
     * @return mixed
     */
    public static function all($accountId)
    {
        return Configuration::gateway()->fluidcall()->all($accountId);
    }
}
