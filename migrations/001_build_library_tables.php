<?php

namespace Fuel\Migrations;

class Build_Library_Tables {

    public function up() {
        \DBUtil::create_table('authors', array(
            'id' => array(
                'type' => 'int',
                'constraint' => 15,
                'auto_increment' => 'true'
            ),
            'name' => array(
                'type' => 'varchar',
                'constraint' => 2500,
                'default' => 'null'
            ),
            'created' => array(
                'type' => 'int',
                'constraint' => 200,
                'default' => null
            ),
            'updated' => array(
                'type' => 'int',
                'constraint' => 200,
                'default' => null
            ),
            'deleted' => array(
                'type' => 'int',
                'constraint' => 200,
                'default' => null
            )
                ), array('id')
        );
        \DBUtil::create_table('genres', array(
            'id' => array(
                'type' => 'int',
                'constraint' => 15,
                'auto_increment' => 'true'
            ),
            'name' => array(
                'type' => 'varchar',
                'constraint' => 2500,
                'default' => 'null'
            ),
            'created' => array(
                'type' => 'int',
                'constraint' => 200,
                'default' => null
            ),
            'updated' => array(
                'type' => 'int',
                'constraint' => 200,
                'default' => null
            ),
            'deleted' => array(
                'type' => 'int',
                'constraint' => 200,
                'default' => null
            )
                ), array('id')
        );
        \DBUtil::create_table('series', array(
            'id' => array(
                'type' => 'int',
                'constraint' => 15,
                'auto_increment' => 'true'
            ),
            'name' => array(
                'type' => 'varchar',
                'constraint' => 2500,
                'default' => 'null'
            ),
            'created' => array(
                'type' => 'int',
                'constraint' => 200,
                'default' => null
            ),
            'updated' => array(
                'type' => 'int',
                'constraint' => 200,
                'default' => null
            ),
            'deleted' => array(
                'type' => 'int',
                'constraint' => 200,
                'default' => null
            )
                ), array('id')
        );
        \DBUtil::create_table('cycles', array(
            'id' => array(
                'type' => 'int',
                'constraint' => 15,
                'auto_increment' => 'true'
            ),
            'name' => array(
                'type' => 'varchar',
                'constraint' => 2500,
                'default' => 'null'
            ),
            'series_id' => array(
                'type' => 'int',
                'default' => '0'
            ),
            'created' => array(
                'type' => 'int',
                'constraint' => 200,
                'default' => null
            ),
            'updated' => array(
                'type' => 'int',
                'constraint' => 200,
                'default' => null
            ),
            'deleted' => array(
                'type' => 'int',
                'constraint' => 200,
                'default' => null
            )
                ), array('id')
        );
    }

    public function down() {
        \DBUtil::drop_table('authors');
        \DBUtil::drop_table('genres');
        \DBUtil::drop_table('series');
        \DBUtil::drop_table('cycles');
    }

}