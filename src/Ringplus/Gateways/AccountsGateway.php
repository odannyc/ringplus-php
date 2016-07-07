<?php
namespace Ringplus\Gateways;

use Ringplus\Utils\Requestor;
use Ringplus\Utils\Responder;

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

        return (new Responder($response))->buildResponse();
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

        return (new Responder($response))->buildResponse();
    }

    /**
     * Gets a specific account by Id.
     *
     * @param int $accountId
     *
     * @return dataset
     */
    public function fetch($accountId)
    {
        $path = "/accounts/{$accountId}";
        $response = $this->requestor->get($path);

        return (new Responder($response))->buildResponse();
    }

    /**
     * Updates a specific record.
     * Only name is accepted right now.
     *
     * @param int The account Id to update
     * @param array $options
     *
     * @return boolean Whether the update was successful or not
     */
    public function update($accountId, $options)
    {
        $path = "/accounts/{$accountId}";
        $response = $this->requestor->put($path, $options);

        return (new Responder($response))->buildResponse();
    }
}
