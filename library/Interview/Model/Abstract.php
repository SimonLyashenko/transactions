<?php

abstract class Interview_Model_Abstract extends Zend_Db_Table_Row
{
    protected static $_mapperClass = 'Zend_Db_Table';
    protected static $_mapper = null;

    private static $_mappers = array();

    /**
     * Get mapper object
     * @return Zend_Db_Table
     */
    public static function getMapper()
    {
        if (!self::$_mapper) {
            self::$_mapper = new static::$_mapperClass;
        }

        return self::$_mapper;
    }
}