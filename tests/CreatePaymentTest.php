<?php

use GiorgiGigauri\TbcBank\Facades\TbcBank;

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

it('has token', function () {
    expect($this->payment)->toHaveKey('token');
});

it('has amount', function () {
    expect($this->payment)->toHaveKey('url');
});
