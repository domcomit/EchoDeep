<?php
/**
 * Tests for EchoDeep
 */

use PHPUnit\Framework\TestCase;
use Echodeep\Echodeep;

class EchodeepTest extends TestCase {
    private Echodeep $instance;

    protected function setUp(): void {
        $this->instance = new Echodeep(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Echodeep::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
