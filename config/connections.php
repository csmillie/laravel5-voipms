<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | DEFAULT CONNECTION
    |--------------------------------------------------------------------------
    |
    | Your Voip.ms default connections which will be used.
    |
    */

    'default' => 'Voipms',

    'connections' => array(

        'voipms' => array(

            /*
            |--------------------------------------------------------------------------
            | SID
            |--------------------------------------------------------------------------
            |
            | Your Twilio Account SID #
            |
            */

            'sid'    => '',

            /*
            |--------------------------------------------------------------------------
            | Access Token
            |--------------------------------------------------------------------------
            |
            | Access token that can be found in your Twilio dashboard
            |
            */
            'token'  => '',

            /*
            |--------------------------------------------------------------------------
            | From Number
            |--------------------------------------------------------------------------
            |
            | The Phone number registered with Twilio that your SMS & Calls will come from
            |
            */
            'from'   => '',
        )
    )
);