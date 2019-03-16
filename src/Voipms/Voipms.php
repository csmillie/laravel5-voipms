<?php namespace Voipms;

use Services_Twilio;

class Voipms {

    /**
     * @var Services_Twilio
     */
    private $client;

    /**
     * @var
     */
    private $from;

    /**
     * @var bool
     */
    private $sslVerify;

    public function __construct($sid, $token, $from, $sslVerify = true) {
        $this->from = $from;
        $this->sslVerify = $sslVerify;

        $this->client = new Services_Voipms($sid, $token);
/*$http = new Services_Twilio_TinyHttp(
    'https://api.twilio.com',
    array('curlopts' => array(
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_SSL_VERIFYHOST => 2,
    ))
);

$client = new Services_Twilio($sid, $token, "2010-04-01", $http);
*/
    }

    /**
     * Get Voipms Client ..
     *
     * @return Services_Voipms
     */
    private function getClient() {
        return $this->client;
    }

    /**
     * Call an specific phone by number
     *
     * @param $phone
     * @param $twiml
     * @return mixed
     */
    public function call($phone, $twiml = '') {
        return self::getClient()->account->calls->create($this->from, $phone, $twiml);
    }

    /**
     * Send an sms to phone number .
     *
     * @param $phone
     * @param $message
     * @param $mms
     * @return mixed
     */
    public function sms($phone, $message, $mms = []) {
        return self::getClient()->account->messages->sendMessage($this->from, $phone, $message, $mms);
    }
}
