# crutch/hash-native

Hash interface

# Install

```bash
composer require crutch/hash-native
```

# Using

```php
<?php

$hasher = new \Crutch\NativeHash\BcryptHash(10); // one argument cost
// or
$hasher = new \Crutch\NativeHash\Argon2IHash(65536, 4, 1); // arguments: memoryCost, timeCost, threads
// or
$hasher = new \Crutch\NativeHash\Argon2IdHash(65536, 4, 1); // arguments: memoryCost, timeCost, threads

$value = 'password';
$hash = $hasher->hash($value);
var_dump($hasher->verify($hash, $value)); // true
var_dump($hasher->isNeedRehash($hash)); // false
```
