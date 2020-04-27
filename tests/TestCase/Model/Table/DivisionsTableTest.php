<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DivisionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DivisionsTable Test Case
 */
class DivisionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DivisionsTable
     */
    protected $Divisions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Divisions',
        'app.Districts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Divisions') ? [] : ['className' => DivisionsTable::class];
        $this->Divisions = TableRegistry::getTableLocator()->get('Divisions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Divisions);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
