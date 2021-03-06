--TEST--
phpunit --list-groups ../../_files/BankAccountTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--list-groups';
$_SERVER['argv'][4] = __DIR__ . '/../_files/BankAccountTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Available test group(s):
 - 1234
 - balanceCannotBecomeNegative
 - balanceIsInitiallyZero
 - specification
