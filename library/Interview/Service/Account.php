<?php

class Interview_Service_Account
{
    public static function getById($id)
    {
        $params = array('id' => $id);
        $form = new Interview_Form_Account();
        if (!$form->isValid($params)) {
            throw new Interview_Exception_Validate();
        }

        $account = Interview_Model_Account::getMapper()->fetchRow(array('id = ?' => $id));
        return $account ? $account->toArray() : null;
    }

    public static function create($balance)
    {

    }

}