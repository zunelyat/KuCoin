<?php
/**
 * Tests for KuCoinAPI
 */

use PHPUnit\Framework\TestCase;
use Kucoinapi\Kucoinapi;

class KucoinapiTest extends TestCase {
    private Kucoinapi $instance;

    protected function setUp(): void {
        $this->instance = new Kucoinapi(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Kucoinapi::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
