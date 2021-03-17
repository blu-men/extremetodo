<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TasksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TasksTable Test Case
 */
class TasksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TasksTable
     */
    public $TasksTable;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tasks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() :void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tasks') ? [] : ['className' => TasksTable::class];
        $this->TasksTable = TableRegistry::getTableLocator()->get('Tasks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() :void
    {
        unset($this->TasksTable);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    // public function testInitialize()
    // {
    //     $this->markTestIncomplete('Not implemented yet.');
    // }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    // public function testValidationDefault()
    // {
    //     $this->markTestIncomplete('Not implemented yet.');
    // }
    
    public function testTaskTableFind() {
        $result = $this->TasksTable->find('all')->first();
        $this->assertFalse(empty($result));
        $this->assertTrue(is_a($result,'App\Model\Entity\Task'));
        $this->assertEquals($result->id, 1001);
        $this->assertStringStartsWith('ミルク購入', $result->task);
    }
}
