<?php
namespace Mdeutsch20\Logger;

interface ILogger {
    public function logEntry(string $line): void;
}