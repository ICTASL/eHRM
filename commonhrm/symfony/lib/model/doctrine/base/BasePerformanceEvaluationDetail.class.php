<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePerformanceEvaluationDetail extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_perf_evaluation_detail');
        $this->hasColumn('eval_dtl_id', 'integer', 10, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '10',
             ));
        $this->hasColumn('eval_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('jobtit_code', 'string', 13, array(
             'type' => 'string',
             'length' => '13',
             ));
        $this->hasColumn('level_code', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('service_code', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('eval_dtl_project_percentage', 'string', 10, array(
             'type' => 'string',
             'length' => '10',
             ));
        $this->hasColumn('eval_dtl_duty_percentage', 'string', 10, array(
             'type' => 'string',
             'length' => '10',
             ));
    }

    public function setUp()
    {
        $this->hasOne('PerformanceEvaluation', array(
             'local' => 'eval_id',
             'foreign' => 'eval_id'));

        $this->hasOne('JobTitle', array(
             'local' => 'jobtit_code',
             'foreign' => 'jobtit_code'));

        $this->hasOne('Level', array(
             'local' => 'level_code',
             'foreign' => 'level_code'));

        $this->hasOne('ServiceDetails', array(
             'local' => 'service_code',
             'foreign' => 'service_code'));

        $this->hasMany('PerformanceEvaluationJobRole', array(
             'local' => 'eval_dtl_id',
             'foreign' => 'eval_dtl_id'));

        $this->hasMany('PerformanceEvaluationDuty', array(
             'local' => 'eval_dtl_id',
             'foreign' => 'eval_dtl_id'));

        $this->hasMany('PerformanceEvaluationEmployee', array(
             'local' => 'eval_dtl_id',
             'foreign' => 'eval_dtl_id'));

        $this->hasMany('PerformanceEvaluationEmployeeProject', array(
             'local' => 'eval_dtl_id',
             'foreign' => 'eval_dtl_id'));

        $this->hasMany('PerformanceEvaluationEmployeeDuty', array(
             'local' => 'eval_dtl_id',
             'foreign' => 'eval_dtl_id'));
    }
}