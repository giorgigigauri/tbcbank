<?php

use GiorgiGigauri\TbcBank\Actions\GetAccessToken;

beforeEach(function () {
    $this->GetAccessToken = new GetAccessToken();
});

it('can test', function () {
    expect(true)->toBeTrue();
});

it('returns token', function () {
    expect($this->GetAccessToken->execute())->toBeString();
});
