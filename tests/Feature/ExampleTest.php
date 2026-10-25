<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('the feed page returns a successful response', function () {
    $response = $this->get('/feed');

    $response->assertStatus(200);
    $response->assertSee('alessia_draws');
    $response->assertSee('/images/alessia.png');
});
