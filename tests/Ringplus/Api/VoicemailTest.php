<?php
namespace tests\Ringplus\Api;

use Ringplus\Api\Accounts;
use Ringplus\Api\Voicemail;

/**
 * Used to test Account endpoints.
 */
class VoicemailTest extends Base
{
    /**
     * Tests that voicemail has result
     *
     * @return assertion
     */
    public function testVoicemailGetAll()
    {
        $accounts = Accounts::all();
        $account = Accounts::fetch($accounts['data']['accounts'][0]['id']);
        $voicemailBox = Voicemail::all($account['data']['account']['voicemail_box']['id']);

        $this->assertEquals($voicemailBox['status'], 200);
        $this->assertArrayHasKey('voicemail_messages', $voicemailBox['data']);
    }
}
