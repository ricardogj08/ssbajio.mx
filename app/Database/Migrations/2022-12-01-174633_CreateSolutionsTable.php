<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Migración que crea la tabla de soluciones de ssbajio.
 */
class CreateSolutionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 32,
                'unique'     => true,
                'null'       => true,
            ],
            'description' => [
                'type'       => 'varchar',
                'constraint' => 64,
            ],
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('solutions', true);
    }

    public function down()
    {
        $this->forge->dropTable('solutions', true);
    }
}
