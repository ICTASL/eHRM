<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseLoanCheckListCatagory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_ln_checklist_catagory');
        $this->hasColumn('ln_chk_cat_number', 'numeric', null, array(
             'type' => 'numeric',
             'primary' => true,
             ));
        $this->hasColumn('ln_chk_cat_name', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('ln_chk_cat_type', 'numeric', null, array(
             'type' => 'numeric',
             ));
        $this->hasColumn('dbgroup_user_id', 'string', 20, array(
             'type' => 'string',
             'length' => '20',
             ));
    }

    public function setUp()
    {
        $this->hasMany('LoanCheckList', array(
             'local' => 'ln_chk_cat_number',
             'foreign' => 'ln_chk_cat_number'));

        $this->hasMany('LoanDocument', array(
             'local' => 'ln_chk_cat_number',
             'foreign' => 'ln_chk_cat_number'));

        $this->hasMany('LoanGuarantee', array(
             'local' => 'ln_chk_cat_number',
             'foreign' => 'ln_chk_cat_number'));
    }
}