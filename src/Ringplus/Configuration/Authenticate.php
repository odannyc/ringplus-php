<?php
namespace Ringplus\Configuration;

use Ringplus\Utils\Requestor;

/**
 * Class used to authenticate and sign in users.
 */
class Authenticate
{
    private $config = null;
    private $requestor = null;

    /**
     * Constructor.
     *
     * @return type
     */
    public function __construct($config)
    {
        $this->config = $config;
        $this->requestor = new Requestor($config);
    }

    public function login()
    {
        $clientId = $this->config->getClientId();
        $redirectUri = $this->config->getRedirectUri();
        $clientSecret = $this->config->getClientSecret();
        $authUrl = 'https://my.ringplus.net/oauth/authorize';
        $tokenUrl = 'https://my.ringplus.net/oauth/token';

        $provider = new \League\OAuth2\Client\Provider\GenericProvider([
            'clientId'                => $clientId,
            'clientSecret'            => $clientSecret,
            'redirectUri'             => $redirectUri,
            'urlAuthorize'            => $authUrl,
            'urlAccessToken'          => $tokenUrl,
            'urlResourceOwnerDetails' => 'https://api.ringplus.net'
        ]);

        if (!isset($_GET['code'])) {
            $authorizationUrl = $provider->getAuthorizationUrl();
            $_SESSION['oauth2state'] = $provider->getState();
            print_r($authorizationUrl);
        }
    }
}
