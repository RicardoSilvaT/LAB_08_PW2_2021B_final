<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BoletosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BoletosTable Test Case
 */
class BoletosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BoletosTable
     */
    public $Boletos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Boletos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Boletos') ? [] : ['className' => BoletosTable::class];
        $this->Boletos = TableRegistry::getTableLocator()->get('Boletos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Boletos);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
