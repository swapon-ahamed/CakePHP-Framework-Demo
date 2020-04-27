<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Users extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');

        $table->addColumn('username', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);

        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);

        $table->addColumn('image', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);

        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('active', 'boolean', [
            'default' => 0,
            'null' => true,
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
        $this->dropTable('users');
    }
}
