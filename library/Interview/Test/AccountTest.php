<?php

class Interview_Test_AccountTest extends Interview_TestCase {

    public function testGetById()
    {
        $account = Interview_Service_Account::getById(1);
        $this->assertTrue($account['id'] == 1);

        $account = Interview_Service_Account::getById(2);
        $this->assertTrue($account === null);
    }

    /**
     * @expectedException Interview_Exception_Validate
     */
    public function testGetByIdBadParams()
    {
        $account = Interview_Service_Account::getById("BAD");
    }
}