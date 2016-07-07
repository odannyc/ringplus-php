<?php
namespace Ringplus\Utils;

/**
 * The responder.
 */
class Responder
{
    private $response = null;

    /**
     * Constructor.
     *
     * @return type
     */
    public function __construct($response)
    {
        $this->response = $response;
    }

    public function buildResponse($toArray = false)
    {
        $endResponse = [];
        $endResponse['status'] = $this->response->getStatusCode();

        $buildArray = [];
        foreach ($this->response->getHeaders() as $name => $values) {
            $buildArray[$name] = implode(', ', $values);
        }
        $endResponse['body'] = $buildArray;
        $endResponse['data'] = json_decode((string) $this->response->getBody(), true);

        return $endResponse;
    }
}
