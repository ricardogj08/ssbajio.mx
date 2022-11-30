<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAuthTable extends Migration
{
    /**
     * Crea la tabla de autorizaciones.
     */
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'     => 'int',
                'unsigned' => true,
            ],
            'hash' => [
                'type'       => 'varchar',
                'constraint' => 256,
            ],
            'expires' => [
                'type' => 'datetime',
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

        $this->forge->addPrimaryKey('user_id');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'restric', 'cascade');

        $this->forge->createTable('auth', true);
    }

    public function down()
    {
        $this->forge->dropTable('auth', true);
    }
}
