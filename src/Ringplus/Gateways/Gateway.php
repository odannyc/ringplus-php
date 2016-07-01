<?php
namespace Ringplus\Gateways;

/**
 * The gateway to all other gateways.
 */
class Gateway
{
    public $config = null;

    /**
     * Constructor.
     *
     * @return type
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    public function accounts()
    {
        return new AccountsGateway($this->config);
    }
}
