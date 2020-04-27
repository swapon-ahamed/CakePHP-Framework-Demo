<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Students extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $table = $this->table('students');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('age', 'integer', [
            'default' => null,
            'null' => true,
        ]);

        $table->addColumn('country', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);

        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }

    function down(){
        $this->dropTable('students');
    }


}
