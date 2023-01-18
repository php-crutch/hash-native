<?php

declare(strict_types=1);

namespace Crutch\NativeHash;

final class BcryptHash extends NativeHash
{
    public function __construct(int $cost = 10)
    {
        $options = [
            'cost' => $cost,
        ];
        parent::__construct(PASSWORD_BCRYPT, $options);
    }
}
