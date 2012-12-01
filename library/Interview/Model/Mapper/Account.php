<?php

class Interview_Model_Mapper_Account extends Zend_Db_Table
{
    protected $_name = 'accounts';
    protected $_primary = 'id';
    protected $_rowClass = 'Interview_Model_Account';

}