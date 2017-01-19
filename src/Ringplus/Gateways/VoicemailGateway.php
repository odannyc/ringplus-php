<?php
/**
 * @author Danny Carrillo <odannycx@gmail.com>
 * @package ringplus-php
 */

namespace Ringplus\Gateways;


use Ringplus\Utils\Requestor;
use Ringplus\Utils\Responder;

class VoicemailGateway
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
     * Returns all voicemails for a given voicemail box id.
     */
    public function all($vmBoxId)
    {
        $path = "/voicemail_boxes/{$vmBoxId}/voicemail_messages";
        $response = $this->requestor->get($path);

        return (new Responder($response))->buildResponse();
    }

    /**
     * Deletes a voicemail by its ID.
     */
    public function delete($vmMessageId)
    {
        $path = "/voicemail_messages/{$vmMessageId}";
        $response = $this->requestor->delete($path);

        return (new Responder($response))->buildResponse();
    }
}