<?php
namespace Ringplus\Configuration;

use Ringplus\Gateways\Gateway;

/**
 * Manages accounts that a user has access to.
 */
class Configuration
{
    /* Only one instance is allowed of Configuration during the request cycle */
    public static $instance = null;

    private $clientId = null;
    private $redirectUri = null;
    private $clientSecret = null;
    private $auth = null;
    private $accessToken = null;

    /**
     * The constructor.
     *
     * @return type
     */
    private function __construct()
    {
        //
    }

    public static function begin()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Configuration();
        }
    }

    public static function gateway()
    {
        return new Gateway(self::$instance);
    }

    public static function authenticate()
    {
        return (new Authenticate(self::$instance))->login();
    }

    public static function clientId($value = null)
    {
        if (empty($value)) {
            return self::$instance->getClientId();
        }
        self::$instance->setClientId($value);
    }

    public static function redirectUri($value = null)
    {
        if (empty($value)) {
            return self::$instance->getRedirectUri();
        }
        self::$instance->setRedirectUri($value);
    }

    public static function clientSecret($value = null)
    {
        if (empty($value)) {
            return self::$instance->getClientSecret();
        }
        self::$instance->setClientSecret($value);
    }

    public static function accessToken($value = null)
    {
        if (empty($value)) {
            return self::$instance->getAccessToken();
        }
        self::$instance->setAccessToken($value);
    }

    private function setClientId($value)
    {
        $this->clientId = $value;
    }

    private function setRedirectUri($value)
    {
        $this->redirectUri = $value;
    }

    private function setClientSecret($value)
    {
        $this->clientSecret = $value;
    }

    private function setAccessToken($value)
    {
        $this->accessToken = $value;
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function baseUrl()
    {
        return sprintf('%s://%s', $this->protocol(), $this->serverName());
    }

    public function protocol()
    {
        return 'https';
    }

    public function serverName()
    {
        return 'api.ringplus.net';
    }
}
