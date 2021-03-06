<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseCompanyProperty extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_comp_property');
        $this->hasColumn('prop_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('prop_name', 'string', 250, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '250',
             ));
        $this->hasColumn('emp_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
    }

}