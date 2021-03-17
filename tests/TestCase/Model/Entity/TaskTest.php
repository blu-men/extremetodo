<?php
namespace App\Test\TestCase\Model\Entity;

use App\Model\Entity\Task;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Entity\Task Test Case
 */
class TaskTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Entity\Task
     */
    public $Task;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() :void
    {
        parent::setUp();
        $this->Task = new Task();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() :void
    {
        unset($this->Task);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    // public function testInitialization()
    // {
    //     $this->markTestIncomplete('Not implemented yet.');
    // }
    /** $this->Task test */
    public function testTaskInstance() {
        $this->assertTrue(is_a($this->Task,'App\Model\Entity\Task'));
    }
}
