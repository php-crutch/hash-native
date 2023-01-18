<?php

declare(strict_types=1);

namespace Crutch\NativeHash;

abstract class Argon2Hash extends NativeHash
{
    public function __construct(
        string $algo,
        int $memoryCost,
        int $timeCost,
        int $threads
    ) {
        $options = [];
        if ($memoryCost > 0) {
            $options['m'] = $memoryCost;
        }
        if ($timeCost > 0) {
            $options['t'] = $timeCost;
        }
        if ($threads > 0) {
            $options['p'] = $threads;
        }
        parent::__construct($algo, $options);
    }
}
