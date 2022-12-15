<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Migración que crea la tabla de newsletter.
 */
class CreateNewsletterTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'bigint',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type'       => 'varchar',
                'constraint' => 256,
                'unique'     => true,
            ],
            'hash' => [
                'type'       => 'varchar',
                'constraint' => 256,
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

        $this->forge->createTable('newsletter', true);
    }

    public function down()
    {
        $this->forge->dropTable('newsletter', true);
    }
}
