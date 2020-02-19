<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseEmployeeReport extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_empreport');
        $this->hasColumn('rep_code as reportCode', 'string', 13, array(
             'type' => 'string',
             'primary' => true,
             'length' => '13',
             ));
        $this->hasColumn('rep_name as reportName', 'string', 50, array(
             'type' => 'string',
             'length' => '50',
             ));
        $this->hasColumn('rep_cridef_str as reportCriteria', 'string', 500, array(
             'type' => 'string',
             'length' => '500',
             ));
        $this->hasColumn('rep_flddef_str as reportFields', 'string', 500, array(
             'type' => 'string',
             'length' => '500',
             ));
    }

    public function setUp()
    {
        $this->hasMany('EmployeeUsergroup', array(
             'local' => 'rep_code',
             'foreign' => 'rep_code'));
    }
}