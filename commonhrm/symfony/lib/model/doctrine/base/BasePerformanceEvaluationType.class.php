<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePerformanceEvaluationType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_perf_evaluation_type');
        $this->hasColumn('eval_type_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('eval_type_name', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('eval_type_name_si', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('eval_type_name_ta', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
    }

    public function setUp()
    {
        $this->hasMany('PerformanceEvaluationSupervisor', array(
             'local' => 'eval_type_id',
             'foreign' => 'eval_type_id'));

        $this->hasMany('PerformanceEvaluationEmployee', array(
             'local' => 'eval_type_id',
             'foreign' => 'eval_type_id'));
    }
}