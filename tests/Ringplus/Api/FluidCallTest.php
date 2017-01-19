<?php
/**
 * @author Danny Carrillo <odannycx@gmail.com>
 * @package ringplus-php
 */

namespace tests\Ringplus\Api;


use Ringplus\Api\FluidCall;

class FluidCallTest extends Base
{
    /**
     * Tests returning fluidcall based on an account id.
     */
    public function testFluidCallAllByAccountID()
    {
        $fluidcall = FluidCall::all($this->getTestAccountId());

        $this->assertEquals($fluidcall['status'], 200);
        $this->assertArrayHasKey('fluidcall_credentials', $fluidcall['data']);
    }
}