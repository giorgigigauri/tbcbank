<?php

namespace GiorgiGigauri\TbcBank;

use GiorgiGigauri\TbcBank\Actions\GetAccessToken;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Support\Facades\Http;

class TbcBank
{
    private $amount;

    private $returnUrl;

    private $extra = '';

    private $token;

    private $callbackUrl;

    public function __construct(GetAccessToken $token)
    {
        $this->token = $token->execute();
        $this->setCallbackUrl();
    }

    public function setAmount($amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function setExtra($extra): static
    {
        $this->extra = $extra;

        return $this;
    }

    public function setCallbackUrl(): static
    {
        $this->callbackUrl = config('tbcbank.callback_url');

        return $this;
    }

    public function setReturnUrl($returnUrl): static
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    public function createPayment(): array
    {
        try {
            $data = Http::withHeaders([
                'apikey' => config('tbcbank.api_key'),
            ])
                ->withToken($this->token)
                ->post(config('tbcbank.api_url').'payments',
                    [
                        'amount' => $this->amount,
                        'returnUrl' => $this->returnUrl,
                        'callbackUrl' => $this->callbackUrl,
                        'extra' => $this->extra,
                    ])->json();
        } catch (HttpClientException $exception) {
            return [];
        }

        return $data;
    }

    public function getPayment($payId)
    {
        try {
            $data = Http::withHeaders([
                'apikey' => config('tbcbank.api_key'),
            ])
                ->withToken($this->token)
                ->get(config('tbcbank.api_url').'payments/'.$payId);
        } catch (HttpClientException $exception) {
            return [];
        }

        return $data->json();
    }
}
