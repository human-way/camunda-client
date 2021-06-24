<?php

class ClientTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testClassShoulExists()
    {
        $this->assertTrue(class_exists('\HumanWay\CamundaClient'));
    }

}
