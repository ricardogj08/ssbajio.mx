<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Migración que crea la tabla de artículos.
 */
class CreatePostsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'slug' => [
                'type'       => 'varchar',
                'constraint' => 256,
                'unique'     => true,
            ],
            'cover' => [
                'type'       => 'varchar',
                'constraint' => 64,
                'unique'     => true,
            ],
            'user_id' => [
                'type'     => 'int',
                'unsigned' => true,
            ],
            'title' => [
                'type'       => 'varchar',
                'constraint' => 256,
            ],
            'excerpt' => [
                'type'       => 'varchar',
                'constraint' => 512,
            ],
            'body' => [
                'type' => 'mediumtext',
            ],
            'active' => [
                'type'       => 'tinyint',
                'constraint' => 1,
                'unsigned'   => true,
                'default'    => true,
            ],
            'started_at' => [
                'type' => 'datetime',
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
        $this->forge->addForeignKey('user_id', 'users', 'id', 'restrict', 'restrict');

        $this->forge->createTable('posts', true);
    }

    public function down()
    {
        $this->forge->dropTable('posts', true);
    }
}
