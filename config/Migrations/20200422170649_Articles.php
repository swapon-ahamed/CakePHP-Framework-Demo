<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Articles extends AbstractMigration
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
            $table = $this->table('articles');
            
            $table->addColumn('title','string',[
                'default' => null,
                'limit' => 255,
                'null' => true
            ]);
            $table->addColumn('details','text',[
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
            $this->dropTable('articles');
        }
}
