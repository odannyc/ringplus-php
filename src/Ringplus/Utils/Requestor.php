<?php
namespace Ringplus\Utils;

use GuzzleHttp\Client;

/**
 * The http request doorman.
 */
class Requestor
{
    private $config = null;
    private $client = null;

    /**
     * Constructor.
     *
     * @return type
     */
    public function __construct($config)
    {
        $this->config = $config;
        $this->client = new Client(['base_uri' => $this->config->baseUrl()]);
    }

    public function get($path, $variables = array())
    {
        $variables['access_token'] = $this->config->getAccessToken();
        return $this->client->get($path, ['query' => $variables]);
    }

    public function put($path, $variables = array())
    {
        $variables['access_token'] = $this->config->getAccessToken();
        return $this->client->put($path, ['json' => $variables]);
    }

    public function delete($path, $variables = array())
    {
        $variables['access_token'] = $this->config->getAccessToken();
        return $this->client->delete($path, ['json' => $variables]);
    }
}
