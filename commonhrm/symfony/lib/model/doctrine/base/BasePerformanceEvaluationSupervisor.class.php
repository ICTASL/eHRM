<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePerformanceEvaluationSupervisor extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_perf_evaluation_supervisor');
        $this->hasColumn('eval_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('emp_number', 'integer', 7, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '7',
             ));
        $this->hasColumn('sup_num', 'integer', 7, array(
             'type' => 'integer',
             'length' => '7',
             ));
        $this->hasColumn('eval_sup_flag', 'string', 1, array(
             'type' => 'string',
             'length' => '1',
             ));
        $this->hasColumn('eval_type_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
    }

    public function setUp()
    {
        $this->hasOne('PerformanceEvaluation', array(
             'local' => 'eval_id',
             'foreign' => 'eval_id'));

        $this->hasOne('Employee', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));

        $this->hasOne('Employee as SuperVice', array(
             'local' => 'sup_num',
             'foreign' => 'emp_number'));

        $this->hasOne('PerformanceEvaluationType', array(
             'local' => 'eval_type_id',
             'foreign' => 'eval_type_id'));
    }
}