<?php
/**
 * @author Danny Carrillo <odannycx@gmail.com>
 * @package ringplus-php
 */

namespace Ringplus\Gateways;


use Ringplus\Utils\Requestor;
use Ringplus\Utils\Responder;

class PhoneDataGateway
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

    /**
     * Returns all phone calls based on an account id
     */
    public function all($accountId)
    {
        $path = "/accounts/{$accountId}/phone_data";
        $response = $this->requestor->get($path);

        return (new Responder($response))->buildResponse();
    }
}