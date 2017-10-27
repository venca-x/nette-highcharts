<?php

declare(strict_types=1);

namespace Test;

use Tester;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

class SampleTest extends Tester\TestCase
{
	public function testOK()
	{
		Assert::same('OK', 'OK');
	}
}

$test = new SampleTest();
$test->run();
