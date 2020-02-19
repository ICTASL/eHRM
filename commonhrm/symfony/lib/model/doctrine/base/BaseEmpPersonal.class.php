<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseEmpPersonal extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_personal');
        $this->hasColumn('epd_id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '20',
             ));
        $this->hasColumn('epd_name', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('epd_name_si', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('epd_name_ta', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('eattach_type_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => '10',
             ));
        $this->hasColumn('epd_link', 'string', 500, array(
             'type' => 'string',
             'length' => '500',
             ));
        $this->hasColumn('epd_order', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('epd_active', 'string', 1, array(
             'type' => 'string',
             'length' => '1',
             ));
    }

    public function setUp()
    {
        $this->hasOne('EmpAttahmentType', array(
             'local' => 'eattach_type_id',
             'foreign' => 'eattach_type_id'));
    }
}