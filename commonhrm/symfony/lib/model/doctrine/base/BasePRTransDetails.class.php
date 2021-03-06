<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePRTransDetails extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_pr_transaction_details');
        $this->hasColumn('trn_dtl_code', 'integer', 6, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '6',
             ));
        $this->hasColumn('trn_dtl_name', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('trn_dtl_name_si', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('trn_dtl_name_ta', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('trn_disable_flg', 'integer', 1, array(
             'type' => 'integer',
             'length' => '1',
             ));
        $this->hasColumn('trn_ishourly', 'integer', 1, array(
             'type' => 'integer',
             'length' => '1',
             ));
        $this->hasColumn('trn_typ_code', 'integer', 6, array(
             'type' => 'integer',
             'length' => '6',
             ));
        $this->hasColumn('trn_dtl_payslipnarration', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('trn_dtl_payslipnarration_si', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('trn_dtl_payslipnarration_ta', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('trn_dtl_addtonetpay', 'integer', 1, array(
             'type' => 'integer',
             'length' => '1',
             ));
        $this->hasColumn('trn_dtl_display_order', 'decimal', 4, array(
             'type' => 'decimal',
             'length' => '4',
             ));
        $this->hasColumn('trn_dtl_isdefault_flg', 'integer', 1, array(
             'type' => 'integer',
             'length' => '1',
             ));
        $this->hasColumn('trn_dtl_comment', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('trn_dtl_isprorate_flg', 'integer', 1, array(
             'type' => 'integer',
             'length' => '1',
             ));
        $this->hasColumn('trn_dtl_user_code', 'string', 10, array(
             'type' => 'string',
             'length' => '10',
             ));
        $this->hasColumn('trn_dtl_formula', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('trn_dtl_isbasetxn_flg', 'integer', 1, array(
             'type' => 'integer',
             'length' => '1',
             ));
        $this->hasColumn('dbgroup_user_id', 'string', 20, array(
             'type' => 'string',
             'length' => '20',
             ));
        $this->hasColumn('trn_dtl_empcont', 'decimal', 13, array(
             'type' => 'decimal',
             'length' => '13',
             ));
        $this->hasColumn('trn_dtl_eyrcont', 'decimal', 13, array(
             'type' => 'decimal',
             'length' => '13',
             ));
        $this->hasColumn('trn_dtl_agent_bank_flg', 'string', 1, array(
             'type' => 'string',
             'length' => '1',
             ));
        $this->hasColumn('trn_dtl_bank_code', 'string', 8, array(
             'type' => 'string',
             'length' => '8',
             ));
        $this->hasColumn('trn_dtl_branch_code', 'string', 6, array(
             'type' => 'string',
             'length' => '6',
             ));
        $this->hasColumn('trn_dtl_account_no', 'string', 20, array(
             'type' => 'string',
             'length' => '20',
             ));
    }

    public function setUp()
    {
        $this->hasOne('PRTransActiontype', array(
             'local' => 'trn_typ_code',
             'foreign' => 'trn_typ_code'));

        $this->hasOne('PayRollBranch', array(
             'local' => 'bbranch_code',
             'foreign' => 'bbranch_code'));

        $this->hasOne('PayRollBank', array(
             'local' => 'bank_code',
             'foreign' => 'bank_code'));

        $this->hasMany('PayRollTransBase', array(
             'local' => 'trn_dtl_code',
             'foreign' => 'trn_dtl_code'));

        $this->hasMany('PayRollContributeBase', array(
             'local' => 'trn_dtl_code',
             'foreign' => 'trn_dtl_code'));

        $this->hasMany('PayRollEligibility', array(
             'local' => 'trn_dtl_code',
             'foreign' => 'trn_dtl_code'));

        $this->hasMany('hsPrProcessedtxn', array(
             'local' => 'trn_dtl_code',
             'foreign' => 'trn_dtl_code'));
    }
}