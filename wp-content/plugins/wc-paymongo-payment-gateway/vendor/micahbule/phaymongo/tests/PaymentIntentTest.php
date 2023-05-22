<?php

/**
 * @runInSeparateProcess
 */

it('can create a payment intent without optional fields', function () {
    $dummyAttributes = array(
        'amount' => 10000,
        'payment_method_allowed' => ['gcash', 'card'],
        'currency' => 'PHP',
    );

    $dummyPayload = array(
        'data' => array(
            'attributes' => $dummyAttributes,
        ),
    );

    $utilsMock = \Mockery::mock('alias:Paymongo\Phaymongo\PaymongoUtils');
    $utilsMock->shouldReceive('constructPayload')
        ->withArgs([$dummyAttributes])
        ->atLeast()
        ->times(1)
        ->andReturn($dummyPayload);

    $paymentIntentMock = \Mockery::mock('Paymongo\Phaymongo\PaymentIntent')->makePartial();
    $paymentIntentMock->shouldReceive('createResource')
        ->withArgs([$dummyPayload])
        ->atLeast()
        ->times(1)
        ->andReturn(['success' => true]);

    $response = $paymentIntentMock->create(100, ['gcash', 'card']);

    expect($response)->toBe(['success' => true]);
});

it('can create a payment intent with optional fields', function () {
    $dummyAttributes = array(
        'amount' => 10000,
        'payment_method_allowed' => ['gcash', 'card'],
        'currency' => 'PHP',
        'description' => 'Sample description',
        'metadata' => ['some' => 'data'],
    );

    $dummyPayload = array(
        'data' => array(
            'attributes' => $dummyAttributes,
        ),
    );

    $utilsMock = \Mockery::mock('alias:Paymongo\Phaymongo\PaymongoUtils');
    $utilsMock->shouldReceive('constructPayload')
        ->withArgs([$dummyAttributes])
        ->atLeast()
        ->times(1)
        ->andReturn($dummyPayload);

    $paymentIntentMock = \Mockery::mock('Paymongo\Phaymongo\PaymentIntent')->makePartial();
    $paymentIntentMock->shouldReceive('createResource')
        ->withArgs([$dummyPayload])
        ->atLeast()
        ->times(1)
        ->andReturn(['success' => true]);

    $response = $paymentIntentMock->create(100, ['gcash', 'card'], 'Sample description', ['some' => 'data']);

    expect($response)->toBe(['success' => true]);
});

it('can retrieve a payment intent by ID', function () {
    $paymentIntentMock = \Mockery::mock('Paymongo\Phaymongo\PaymentIntent')->makePartial();
    $paymentIntentMock->shouldReceive('retrieveResourceById')
        ->withArgs([1])
        ->atLeast()
        ->times(1);
    
    $paymentIntentMock->retrieveById(1);
});

it('can attach a payment method without optional fields', function () {
    $dummyAttributes = array(
        'payment_method' => 1,
    );

    $dummyPayload = array(
        'data' => array(
            'attributes' => $dummyAttributes,
        ),
    );

    $utilsMock = \Mockery::mock('alias:Paymongo\Phaymongo\PaymongoUtils');
    $utilsMock->shouldReceive('constructPayload')
        ->withArgs([$dummyAttributes])
        ->atLeast()
        ->times(1)
        ->andReturn($dummyPayload);

    $paymentIntentMock = \Mockery::mock('Paymongo\Phaymongo\PaymentIntent')->makePartial();
    $paymentIntentMock->shouldReceive('createRequest')
        ->withArgs(['POST', '/payment_intents/8/attach', $dummyPayload])
        ->atLeast()
        ->times(1)
        ->andReturn(true);
    
    $paymentIntentMock->shouldReceive('sendRequest')
        ->withArgs([true])
        ->atLeast()
        ->times(1)
        ->andReturn(['success' => true]);
    
    $response = $paymentIntentMock->attachPaymentMethod(8, 1);

    expect($response)->toBe(['success' => true]);
});

it('can attach a payment method with optional fields', function () {
    $dummyAttributes = array(
        'payment_method' => 1,
        'client_key' => 'someKey',
        'return_url' => 'https://some-domain.com',
    );

    $dummyPayload = array(
        'data' => array(
            'attributes' => $dummyAttributes,
        ),
    );

    $utilsMock = \Mockery::mock('alias:Paymongo\Phaymongo\PaymongoUtils');
    $utilsMock->shouldReceive('constructPayload')
        ->withArgs([$dummyAttributes])
        ->atLeast()
        ->times(1)
        ->andReturn($dummyPayload);

    $paymentIntentMock = \Mockery::mock('Paymongo\Phaymongo\PaymentIntent')->makePartial();
    $paymentIntentMock->shouldReceive('createRequest')
        ->withArgs(['POST', '/payment_intents/8/attach', $dummyPayload])
        ->atLeast()
        ->times(1)
        ->andReturn(true);
    
    $paymentIntentMock->shouldReceive('sendRequest')
        ->withArgs([true])
        ->atLeast()
        ->times(1)
        ->andReturn(['success' => true]);
    
    $response = $paymentIntentMock->attachPaymentMethod(8, 1, 'https://some-domain.com', 'someKey');

    expect($response)->toBe(['success' => true]);
});
