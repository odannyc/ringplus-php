<?php
/**
 * @author Danny Carrillo <odannycx@gmail.com>
 * @package ringplus-php
 */
namespace Ringplus\Gateways;

use Ringplus\Utils\Requestor;
use Ringplus\Utils\Responder;

class FluidCallGateway
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
     * Returns the fluidcall info belonging to an account.
     */
    public function all($accountId)
    {
        $path = "/accounts/{$accountId}/fluidcall_credentials";
        $response = $this->requestor->get($path);

        return (new Responder($response))->buildResponse();
    }
}
