<?php

use function PHPUnit\Framework\assertStringContainsString;

use Spatie\QueueableAction\Tests\TestCase;

uses(TestCase::class)->in('.');

// Functions

function assertLogHas(string $text)
{
    $log = file_get_contents(TestCase::LOG_PATH);

    assertStringContainsString($text, $log);
}

function clearLog()
{
    if (! file_exists(TestCase::LOG_PATH)) {
        return;
    }

    unlink(TestCase::LOG_PATH);
}
