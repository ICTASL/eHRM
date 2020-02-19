<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseMailNotification extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_mailnotifications');
        $this->hasColumn('user_id', 'string', 36, array(
             'type' => 'string',
             'primary' => true,
             'length' => '36',
             ));
        $this->hasColumn('notification_type_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('status', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        $this->hasOne('Users', array(
             'local' => 'user_id',
             'foreign' => 'id'));
    }
}