<?php
namespace Ringplus\Gateways;

use Ringplus\Utils\Requestor;
use Ringplus\Utils\Responder;

/**
 * Acts as the users gateway.
 * Logic on where requests route to.
 */
class UsersGateway
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
     * Returns all users belonging to the user.
     *
     * @return type
     */
    public function all()
    {
        $path = '/users';
        $response = $this->requestor->get($path);

        return (new Responder($response))->buildResponse();
    }

    /**
     * Gets a specific user by Id.
     *
     * @param int $userId
     *
     * @return dataset
     */
    public function fetch($userId)
    {
        $path = "/users/{$userId}";
        $response = $this->requestor->get($path);

        return (new Responder($response))->buildResponse();
    }
}
