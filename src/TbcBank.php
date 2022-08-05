<?php

namespace GiorgiGigauri\TbcBank;

class TbcBank
{
    private $amount;

    private $returnUrl;

    private $extra = '';

    public function __construct()
    {
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    public function createPayment()
    {
        return [
            'token' => 'init',
            'url' => 'init',
        ];
    }
}
