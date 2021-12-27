<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TravelSchedulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TravelSchedulesTable Test Case
 */
class TravelSchedulesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TravelSchedulesTable
     */
    public $TravelSchedules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TravelSchedules',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TravelSchedules') ? [] : ['className' => TravelSchedulesTable::class];
        $this->TravelSchedules = TableRegistry::getTableLocator()->get('TravelSchedules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TravelSchedules);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
