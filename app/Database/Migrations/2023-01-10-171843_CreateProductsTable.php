<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Migración que crea la tabla de productos.
 */
class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'category_id' => [
                'type'     => 'int',
                'unsigned' => true,
                'null'     => true,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 256,
            ],
            'title' => [
                'type'       => 'varchar',
                'constraint' => 256,
                'null'       => true,
            ],
            'cover' => [
                'type'       => 'varchar',
                'constraint' => 64,
                'unique'     => true,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('category_id', 'categories', 'id', 'restrict', 'cascade');

        $this->forge->createTable('products', true);
    }

    public function down()
    {
        $this->forge->dropTable('products', true);
    }
}
