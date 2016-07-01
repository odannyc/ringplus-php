<?php
namespace Ringplus\Gateways;

use Ringplus\Utils\Requestor;

/**
 * Acts as the Accounts gateway.
 * Logic on where requests route to.
 */
class AccountsGateway
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
     * Returns all accounts belonging to the user.
     *
     * @return type
     */
    public function all()
    {
        $path = '/accounts';
        $response = $this->requestor->get($path);

        return $response;
    }

    /**
     * Returns all accounts belonging to one user.
     *
     * @param int $userId
     *
     * @return dataset
     */
    public function user($userId)
    {
        $path = "/users/{$userId}/accounts";
        $response = $this->requestor->get($path);

        return $response;
    }
}
