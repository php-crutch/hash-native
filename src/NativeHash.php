<?php

declare(strict_types=1);

namespace Crutch\NativeHash;

use Crutch\Hash\Hash;

abstract class NativeHash implements Hash
{
    private string $algo;
    private array $options = [];

    public function __construct(string $algo, array $options)
    {
        $this->algo = $algo;
        $this->options = $options;
    }

    /**
     * @inheritDoc
     */
    final public function hash(string $value): string
    {
        return password_hash($value, $this->algo, $this->options);
    }

    /**
     * @inheritDoc
     */
    final public function verify(string $hash, string $value): bool
    {
        return password_verify($value, $hash);
    }

    /**
     * @inheritDoc
     */
    final public function isNeedRehash(string $hash): bool
    {
        return password_needs_rehash($hash, $this->algo, $this->options);
    }
}
