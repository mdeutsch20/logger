<?php
namespace Mdeutsch20\Logger;

class EchoLogger implements ILogger {

    public function logEntry(string $line): void
    {
        echo '[LOG]: ' . $line . "\n";
    }
}