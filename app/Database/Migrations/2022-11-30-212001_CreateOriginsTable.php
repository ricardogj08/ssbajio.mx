<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Crea la tabla de orígenes de prospectos.
 */
class CreateOriginsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'tinyint',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 32,
                'unique'     => true,
            ],
            'description' => [
                'type'       => 'varchar',
                'constraint' => 64,
            ],
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('origins', true);
    }

    public function down()
    {
        $this->forge->dropTable('origins', true);
    }
}
