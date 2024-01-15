<?php

use Illuminate\Support\Facades\DB;
use function Pest\Laravel\artisan;

it('can test', function() {
    expect(true)->toBeTrue();
});

it('runs redo command', function() {
    artisan('migrate')->assertExitCode(0);
    artisan('migrate:redo')->assertExitCode(0);
    $stepCount = random_int(1, 50);
    artisan('migrate:redo --step=' . $stepCount)->assertExitCode(0);
});
