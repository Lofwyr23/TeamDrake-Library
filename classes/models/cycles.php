<?php

namespace library;

Class Model_Cycle extends \Orm\Model_Soft {

    static protected $_table_name = 'cycles';
    static protected $_primary_key = 'id';
    static protected $_properties = array(
        'id',
        'name' => array(
            'data_type' => 'varchar',
            'label' => 'Author Name'
        ),
        'series_id' => array(
            'data_type' => 'int',
            'form' => array('type' => false)
        ),
        'created' => array(
            'data_type' => 'int',
            'label' => 'Created At',
            'form' => array(
                'type' => false, // this prevents this field from being rendered on a form
            ),
        ),
        'updated' => array('data_type' => 'int', 'label' => 'Updated At'),
        'deleted' => array('form' => array('type' => false))
    );
    protected static $_observers = array(
        'Orm\\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => false,
            'property' => 'created',
        ),
        'Orm\\Observer_UpdatedAt' => array(
            'events' => array('before_save'),
            'mysql_timestamp' => false,
            'property' => 'updated',
        ),
    );
    protected static $_soft_delete = array(
        'deleted_field' => 'deleted',
        'mysql_timestamp' => false,
    );
    protected static $_belongs_to = array(
        'post' => array(
            'key_from' => 'series_id',
            'model_to' => 'Model_Series',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )
    );

}