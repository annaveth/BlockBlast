<?php
/**
 * Tests for BlockBlast
 */

use PHPUnit\Framework\TestCase;
use Blockblast\Blockblast;

class BlockblastTest extends TestCase {
    private Blockblast $instance;

    protected function setUp(): void {
        $this->instance = new Blockblast(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockblast::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
