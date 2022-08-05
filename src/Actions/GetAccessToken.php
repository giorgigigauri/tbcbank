<?php

namespace GiorgiGigauri\TbcBank\Actions;

use Illuminate\Support\Facades\Http;

class GetAccessToken
{
    public function execute()
    {
        try {
            $data = Http::withHeaders([
                'apikey' => config('tbcbank.api_key'),
            ])->post(config('tbcbank.api_url').'access-token', [
                'client_Id' => config('tbcbank.client_id'),
                'client_secret' => config('tbcbank.client_secret'),
            ]);
        } catch (\Exception $exception) {
            return null;
        }

        return $data;
    }
}
