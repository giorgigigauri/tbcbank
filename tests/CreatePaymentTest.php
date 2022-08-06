<?php

use GiorgiGigauri\TbcBank\Facades\TbcBank;
use Illuminate\Http\Response;

beforeEach(function () {
    $this->amount = [
        'currency' => 'GEL',
        'total' => 546,
        'subTotal' => 400,
        'tax' => 0,
        'shipping' => 0,
    ];
    $this->payment = TbcBank::setAmount($this->amount)
        ->setReturnUrl('shopping.ge/callback')
        ->setExtra('Test Text')
        ->createPayment();
});

it('can test', function () {
    expect(true)->toBeTrue();
});

it('returns array', function () {
    expect($this->payment)->toBeArray();
});

it('returns 200', function () {
    expect($this->payment['httpStatusCode'])->toEqual(Response::HTTP_OK);
});

it('has data', function () {
    expect($this->payment)->toHaveKeys(['links', 'payId']);
});

