<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Products extends AbstractMigration
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
            $table = $this->table('products');
            
            $table->addColumn('category_id', 'integer', [
                'default' => null,
                'null' => false            
            ]);

            $table->addColumn('name','string',[
                'default' => null,
                'limit' => 20,
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
            $this->dropTable('products');
        }
}
