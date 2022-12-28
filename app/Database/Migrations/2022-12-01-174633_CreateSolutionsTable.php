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
            'alias' => [
                'type'       => 'varchar',
                'constraint' => 32,
                'unique'     => true,
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
            'thumbnail' => [
                'type'       => 'varchar',
                'constraint' => 64,
                'unique'     => true,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 256,
            ],
            'excerpt' => [
                'type'       => 'varchar',
                'constraint' => 512,
            ],
            'metatitle' => [
                'type'       => 'varchar',
                'constraint' => 256,
            ],
            'metadescription' => [
                'type'       => 'varchar',
                'constraint' => 512,
            ],
            'title' => [
                'type'       => 'varchar',
                'constraint' => 256,
            ],
            'caption' => [
                'type'       => 'varchar',
                'constraint' => 256,
                'null'       => true,
            ],
            'subtitle' => [
                'type'       => 'varchar',
                'constraint' => 256,
            ],
            'description' => [
                'type'       => 'varchar',
                'constraint' => 512,
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

        $this->forge->createTable('solutions', true);
    }

    public function down()
    {
        $this->forge->dropTable('solutions', true);
    }
}
