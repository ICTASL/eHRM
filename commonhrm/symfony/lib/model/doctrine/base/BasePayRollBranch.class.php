<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePayRollBranch extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_branch');
        $this->hasColumn('bbranch_sliptransfers_flg', 'decimal', 1, array(
             'type' => 'decimal',
             'scale' => 0,
             'length' => '1',
             ));
        $this->hasColumn('bbranch_auto_clr_house_code', 'string', 20, array(
             'type' => 'string',
             'length' => '20',
             ));
        $this->hasColumn('bbranch_address', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('bbranch_address_si', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('bbranch_address_ta', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('bbranch_name', 'string', 120, array(
             'type' => 'string',
             'length' => '120',
             ));
        $this->hasColumn('bbranch_name_si', 'string', 120, array(
             'type' => 'string',
             'length' => '120',
             ));
        $this->hasColumn('bbranch_name_ta', 'string', 120, array(
             'type' => 'string',
             'length' => '120',
             ));
        $this->hasColumn('bbranch_code', 'string', 6, array(
             'type' => 'string',
             'primary' => true,
             'length' => '6',
             ));
        $this->hasColumn('bank_code', 'string', 8, array(
             'type' => 'string',
             'length' => '8',
             ));
        $this->hasColumn('bbranch_user_code', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
    }

    public function setUp()
    {
        $this->hasOne('PayRollBank', array(
             'local' => 'bank_code',
             'foreign' => 'bank_code'));

        $this->hasMany('PRTransDetails', array(
             'local' => 'bbranch_code',
             'foreign' => 'bbranch_code'));

        $this->hasMany('PayRollBankTransfer', array(
             'local' => 'bbranch_code',
             'foreign' => 'bbranch_code'));

        $this->hasMany('PayRollEmployeeBank', array(
             'local' => 'bbranch_code',
             'foreign' => 'bbranch_code'));
    }
}