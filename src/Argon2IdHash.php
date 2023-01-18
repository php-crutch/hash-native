<?php

declare(strict_types=1);

namespace Crutch\NativeHash;

final class Argon2IdHash extends Argon2Hash
{
    public function __construct(
        int $memoryCost = PASSWORD_ARGON2_DEFAULT_MEMORY_COST,
        int $timeCost = PASSWORD_ARGON2_DEFAULT_TIME_COST,
        int $threads = PASSWORD_ARGON2_DEFAULT_THREADS
    ) {
        parent::__construct(PASSWORD_ARGON2ID, $memoryCost, $timeCost, $threads);
    }
}
