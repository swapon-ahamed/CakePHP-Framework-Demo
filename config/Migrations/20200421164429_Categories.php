<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Categories extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $table = $this->table('categories');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false
        ]);

        $table->addColumn('parent', 'integer', [
            'default' => null,
            'null' => true
        ]);

        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false
        ]);

        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false
        ]);
         $table->create();
    }

    function down(){
        $this->dropTable('categories');
    }
}
