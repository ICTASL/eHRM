<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseNationality extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_nationality');
        $this->hasColumn('nat_code', 'string', 13, array(
             'type' => 'string',
             'primary' => true,
             'length' => '13',
             ));
        $this->hasColumn('nat_name', 'string', 120, array(
             'type' => 'string',
             'length' => '120',
             ));
        $this->hasColumn('nat_name_si', 'string', 120, array(
             'type' => 'string',
             'length' => '120',
             ));
        $this->hasColumn('nat_name_ta', 'string', 120, array(
             'type' => 'string',
             'length' => '120',
             ));
    }

    public function setUp()
    {
        $this->hasMany('Employee', array(
             'local' => 'nat_code',
             'foreign' => 'nation_code'));
    }
}