<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Migración que crea la tabla de categorías.
 */
class CreateCategoriesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'solution_id' => [
                'type'     => 'int',
                'unsigned' => true,
            ],
            'alias' => [
                'type'       => 'varchar',
                'constraint' => 32,
                'unique'     => true,
                'null'       => true,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 256,
            ],
            'description' => [
                'type'       => 'varchar',
                'constraint' => 512,
                'null'       => true,
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
        $this->forge->addForeignKey('solution_id', 'solutions', 'id', 'cascade', 'restrict');

        $this->forge->createTable('categories', true);
    }

    public function down()
    {
        $this->forge->dropTable('categories', true);
    }
}
