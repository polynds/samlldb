<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Smalldb\Contract;

interface EngineInterface
{
    public function read();

    public function write();
}
