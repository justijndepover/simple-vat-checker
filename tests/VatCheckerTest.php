<?php

namespace Justijndepover\SimpleVatChecker\Test;

use Justijndepover\SimpleVatChecker\VatChecker;
use PHPUnit\Framework\TestCase;

class VatCheckerTest extends TestCase
{
    /** @test */
    public function it_can_validate_BE()
    {
        $this->assertTrue(VatChecker::validate('BE0123456749'));
        $this->assertFalse(VatChecker::validate('BE'));
    }
}
