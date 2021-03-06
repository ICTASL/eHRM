<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseEmpDisAction extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_disciaction');
        $this->hasColumn('emp_dis_id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '20',
             ));
        $this->hasColumn('emp_number', 'string', 7, array(
             'type' => 'string',
             'length' => '7',
             ));
        $this->hasColumn('emp_dis_effectfrom', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('emp_dis_effectto', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('emp_dis_action', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('emp_dis_comment', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
    }

    public function setUp()
    {
        $this->hasOne('Employee', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));
    }
}