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
            ])->asForm()->post(config('tbcbank.api_url').'access-token', [
                'client_Id' => config('tbcbank.client_id'),
                'client_secret' => config('tbcbank.client_secret'),
            ])->json();
            if (! empty($data['access_token'])) {
                return $data['access_token'];
            }
        } catch (\Exception $exception) {
            // todo: log errors
        }

        return null;
    }
}
