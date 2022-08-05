<?php

namespace GiorgiGigauri\TbcBank;

use GiorgiGigauri\TbcBank\Actions\GetAccessToken;
use Illuminate\Support\Facades\Http;

class TbcBank
{
    private $amount;
    private $returnUrl;
    private $extra = '';
    private $token;
    public function __construct(GetAccessToken $token)
    {
        $this->token = $token->execute();
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
        try {
            $data = Http::withHeaders([
                'apikey' => config('tbcbank.api_key')
            ])
                ->withToken($this->token)
                ->post(config('tbcbank.api_url') . 'payments', [
                'client_Id' => config('tbcbank.client_id'),
                'client_secret' => config('tbcbank.client_secret'),
            ]);
        } catch (\Exception $exception) {
            return [
                'error' => $exception
            ];
        }

        return $data;
    }
}
