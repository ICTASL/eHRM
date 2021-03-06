<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePerformanceEvaluationProject extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_perf_evaluation_project');
        $this->hasColumn('eval_prj_id', 'integer', 10, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '10',
             ));
        $this->hasColumn('eval_prj_name', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('eval_prj_name_si', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('eval_prj_name_ta', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('eval_prj_completed', 'string', 10, array(
             'type' => 'string',
             'length' => '10',
             ));
        $this->hasColumn('eval_prj_user_code', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
    }

    public function setUp()
    {
        $this->hasMany('PerformanceEvaluationEmployeeProject', array(
             'local' => 'eval_prj_id',
             'foreign' => 'eval_prj_id'));

        $this->hasMany('PerformanceEmployeeProject', array(
             'local' => 'eval_prj_id',
             'foreign' => 'eval_prj_id'));
    }
}