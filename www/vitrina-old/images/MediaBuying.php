<?php

class MediaBuying
{
    const UTM_SOURCE          = 'utm_source';
    const UTM_MEDIUM          = 'utm_medium';
    const UTM_CAMPAIGN        = 'utm_campaign';
    const UTM_CONTENT         = 'utm_content';
    const GCLID               = 'gclid';
    const USER_AGENT          = 'user_agent';
    const IP                  = 'ip';
    const Q_WORDS             = 'q_word';
    const Q_WORDS_GET         = 'q';
    const SUB_CODE_TID        = 'sub_code';
    const DATE_VISIT          = 'date_visit';
    const IDENT_ANALYTICS_TID = 'ident_analytics_tid';
    const ANALYTICS_TID       = 'UA-118752159-1';
    const SALT                = 'mediabuying';
    const TOKEN               = '4841d27398e843b6a51bd2edf5b7d334'; //dev token
    const DOMAIN              = 'http://api.sd.test.dev.clients.in.ua'; //dev DOMAIN
    const PATH                = '/festi/media_buying/MediaBuying/'; //dev PATH

    public $subCode;

    public function sendGetParams()
    {
        $subCode = $this->_getSubCode();
        $this->_setSubCode($subCode);

        $params = $this->_getParamsToSend();

        $this->_sendParams($params);

        return true;
    }

    private function _getParamsToSend()
    {
        $params = array();

        if (array_key_exists(static::UTM_SOURCE, $_GET)) {
            $params[static::UTM_SOURCE] = $_date_visitGET[static::UTM_SOURCE];
        }

        if (array_key_exists(static::UTM_MEDIUM, $_GET)) {
            $params[static::UTM_MEDIUM] = $_GET[static::UTM_MEDIUM];
        }

        if (array_key_exists(static::UTM_CAMPAIGN, $_GET)) {
            $params[static::UTM_CAMPAIGN] = $_GET[static::UTM_CAMPAIGN];
        }

        if (array_key_exists(static::UTM_CONTENT, $_GET)) {
            $params[static::UTM_CONTENT] = $_GET[static::UTM_CONTENT];
        }

        if (array_key_exists(static::GCLID, $_GET)) {
            $params[static::GCLID] = $_GET[static::GCLID];
        }

        if (array_key_exists(static::Q_WORDS_GET, $_GET)) {
            $params['q_word'] = $_GET[static::Q_WORDS];
        }

        $params[static::SUB_CODE_TID]        = $this->subCode;
        $params[static::IDENT_ANALYTICS_TID] = static::ANALYTICS_TID;
        $params[static::IP]                  = $_SERVER['REMOTE_ADDR'];
        $params[static::USER_AGENT]          = $_SERVER['HTTP_USER_AGENT'];
        $params[static::USER_AGENT]          = $_SERVER['HTTP_USER_AGENT'];
        $params[static::DATE_VISIT]          = date('Y-m-d ');

        return json_encode($params);
    }

    private function _getSubCode()
    {
        $subCode = md5(time().static::SALT);

        return $subCode;
    }

    private function _setSubCode($subCode)
    {
        $this->subCode = $subCode;

        return true;
    }

    private function _sendParams($params)
    {
        $url     = static::DOMAIN.static::PATH;
        $headers = $this->_getHeaders();
        $ch      = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_exec($ch);

        curl_close ($ch);

        return true;
    }

    private function _getHeaders()
    {
        return array(
            'Access-Token:'.static::TOKEN,
            'Content-Type: application/json',
        );
    }
}