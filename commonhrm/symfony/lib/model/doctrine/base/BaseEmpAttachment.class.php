<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseEmpAttachment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_attachment');
        $this->hasColumn('emp_number', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('eattach_id as attach_id', 'decimal', 10, array(
             'type' => 'decimal',
             'primary' => true,
             'length' => '10',
             ));
        $this->hasColumn('eattach_type_id as attach_type_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => '10',
             ));
        $this->hasColumn('eattach_size as size', 'integer', 4, array(
             'type' => 'integer',
             'default' => '0',
             'length' => '4',
             ));
        $this->hasColumn('eattach_desc as description', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('eattach_filename as filename', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('eattach_attachment as attachment', 'blob', 2147483647, array(
             'type' => 'blob',
             'length' => '2147483647',
             ));
        $this->hasColumn('eattach_type as file_type', 'string', 50, array(
             'type' => 'string',
             'length' => '50',
             ));
    }

    public function setUp()
    {
        $this->hasOne('Employee', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));

        $this->hasOne('EmpAttahmentType', array(
             'local' => 'attach_type_id',
             'foreign' => 'eattach_type_id'));

        $this->hasOne('EmployeeMaster', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));
    }
}