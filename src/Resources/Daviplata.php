<?php

namespace Epayco\Resources;

use Epayco\Resource;

/**
 * Charge payment methods
 */
class Charge extends Resource
{
    /**
     * Create daviplata trx
     * @param  object $options data
     * @return object
     */
    public function create($options = null)
    {
        return $this->request(
               "POST",
               "/payment/process/daviplata",
               $api_key = $this->epayco->api_key,
               $options,
               $private_key = $this->epayco->private_key,
               $test = $this->epayco->test,
               $switch = false,
               $lang = $this->epayco->lang,
               $apify = true
        );
    }

    /**
     * Return data confirm
     * @param  object $options data
     * @return object
     */
    public function confirm($options = null)
    {
        return $this->request(
                "POST",
                "/payment/confirm/daviplata",
                $api_key = $this->epayco->api_key,
                $options,
                $private_key = $this->epayco->private_key,
                $test = $this->epayco->test,
                $switch = true,
                $lang = $this->epayco->lang,
                $apify = true
        );
    }
}