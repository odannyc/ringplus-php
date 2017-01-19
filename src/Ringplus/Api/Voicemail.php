<?php
/**
 * @author Danny Carrillo <odannycx@gmail.com>
 * @package ringplus-php
 */
namespace Ringplus\Api;

use Ringplus\Configuration\Configuration;

class Voicemail
{
    /**
     * Returns all voicemails for a given voicemail box id.
     *
     * @param int $vmBoxId
     * @return mixed
     */
    public static function all($vmBoxId)
    {
        return Configuration::gateway()->voicemail()->all($vmBoxId);
    }

    /**
     * Deletes a voicemail by its ID.
     *
     * @param int $vmMessageId
     * @return mixed
     */
    public static function delete($vmMessageId)
    {
        return Configuration::gateway()->voicemail()->delete($vmMessageId);
    }
}
