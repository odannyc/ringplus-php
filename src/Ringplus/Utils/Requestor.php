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
        $this->client = new Client();
    }

    public function get($path, $variables = array())
    {
        $variables['access_token'] = $this->config->getAccessToken();
        return $this->process('GET', $this->config->baseUrl() . $path, $variables);
    }

    private function process($verb, $path, $variables)
    {
        return json_decode($this->client->request($verb, $path, ['query' => $variables])->getBody()->getContents());
    }
}
