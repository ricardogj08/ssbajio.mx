<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Migración que crea la tabla de prospectos.
 */
class CreateProspectsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'bigint',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'origin_id' => [
                'type'     => 'tinyint',
                'unsigned' => true,
            ],
            'solution_id' => [
                'type'     => 'int',
                'unsigned' => true,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 64,
            ],
            'phone' => [
                'type'       => 'varchar',
                'constraint' => 15,
            ],
            'email' => [
                'type'       => 'varchar',
                'constraint' => 256,
            ],
            'company' => [
                'type'       => 'varchar',
                'constraint' => 64,
            ],
            'message' => [
                'type' => 'text',
                'null' => true,
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
        $this->forge->addForeignKey('origin_id', 'origins', 'id', 'restrict', 'restrict');
        $this->forge->addForeignKey('solution_id', 'solutions', 'id', 'restrict', 'restrict');

        $this->forge->createTable('prospects', true);
    }

    public function down()
    {
        $this->forge->dropTable('prospects', true);
    }
}
