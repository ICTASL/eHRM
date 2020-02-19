<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseReinstatement extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_reinstatement');
        $this->hasColumn('rei_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('emp_number', 'integer', 7, array(
             'type' => 'integer',
             'length' => '7',
             ));
        $this->hasColumn('emp_epf_number', 'string', 25, array(
             'type' => 'string',
             'length' => '25',
             ));
        $this->hasColumn('rei_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('job_title_code', 'string', 13, array(
             'type' => 'string',
             'length' => '13',
             ));
        $this->hasColumn('grade_code', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('slt_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => '10',
             ));
        $this->hasColumn('work_station', 'integer', 6, array(
             'type' => 'integer',
             'length' => '6',
             ));
        $this->hasColumn('rei_reason', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('pre_emp_epf_number', 'string', 25, array(
             'type' => 'string',
             'length' => '25',
             ));
        $this->hasColumn('pre_job_title_code', 'string', 13, array(
             'type' => 'string',
             'length' => '13',
             ));
        $this->hasColumn('pre_grade_code', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('pre_slt_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => '10',
             ));
        $this->hasColumn('pre_work_station', 'integer', 6, array(
             'type' => 'integer',
             'length' => '6',
             ));
    }

    public function setUp()
    {
        $this->hasOne('GradeSlot', array(
             'local' => 'slt_id',
             'foreign' => 'slt_id'));

        $this->hasOne('Employee', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));

        $this->hasOne('Grade', array(
             'local' => 'grade_code',
             'foreign' => 'grade_code'));

        $this->hasOne('JobTitle', array(
             'local' => 'job_title_code',
             'foreign' => 'jobtit_code'));

        $this->hasOne('CompanyStructure', array(
             'local' => 'work_station',
             'foreign' => 'id'));
    }
}