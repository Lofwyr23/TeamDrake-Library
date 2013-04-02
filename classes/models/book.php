<?php

namespace library;

Class Model_Series extends \Orm\Model_Soft {

    static protected $_table_name = 'authors';
    static protected $_primary_key = 'id';
    static protected $_properties = array(
        'id',
        'name' => array(
            'data_type' => 'varchar',
            'label' => 'Author Name'
        ),
        'created' => array(
            'data_type' => 'int',
            'label' => 'Created At',
            'form' => array(
                'type' => false, // this prevents this field from being rendered on a form
            ),
        ),
        'updated' => array('data_type' => 'int', 'form' => array('type' => false)),
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
    protected static $_has_many = array(
    'cycles' => array(
        'key_from' => 'id',
        'model_to' => 'Model_Cycle',
        'key_to' => 'series_id',
        'cascade_save' => true,
        'cascade_delete' => false,
    )
);
    
}