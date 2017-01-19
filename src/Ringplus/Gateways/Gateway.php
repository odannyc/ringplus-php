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

    public function users()
    {
        return new UsersGateway($this->config);
    }

    public function fluidcall()
    {
        return new FluidCallGateway($this->config);
    }

    public function phoneCalls()
    {
        return new PhoneCallsGateway($this->config);
    }

    public function phoneTexts()
    {
        return new PhoneTextsGateway($this->config);
    }

    public function phoneData()
    {
        return new PhoneDataGateway($this->config);
    }

    public function voicemail()
    {
        return new VoicemailGateway($this->config);
    }
}
