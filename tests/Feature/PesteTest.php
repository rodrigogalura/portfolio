<?php

test('peste', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
