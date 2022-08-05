<?php

use GiorgiGigauri\TbcBank\Actions\GetAccessToken;

beforeEach(function () {
    $this->GetAccessToken = new GetAccessToken();
});

it('can test', function () {
    expect(true)->toBeTrue();
});

it('returns array', function () {
    expect($this->GetAccessToken->execute())->toBeString();
});
