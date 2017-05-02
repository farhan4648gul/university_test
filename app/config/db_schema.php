<?php
/**
 * Created by PhpStorm.
 * User: farhan.gul
 * Date: 4/28/17
 * Time: 5:11 PM
 */

    $schema = new \Doctrine\DBAL\Schema\Schema();

    //TABLE: user
    $userTable = $schema->createTable('user');

    $userTable->addColumn('id', 'integer', array('unsigned' => true) );
    $userTable->setPrimaryKey( array('id') );

    $userTable->addColumn('email', 'string', array('length' => 255 ) );
    $userTable->addUniqueIndex(array('email'));

    $userTable->addColumn('username', 'string', array('length' => 128) );
    $userTable->addUniqueIndex(array('username'));

    $userTable->addColumn('password', 'string', array('length' => 100) );

    $userTable->addColumn('first_name', 'string', array('length' => 50 ) );
    $userTable->addColumn('middle_name', 'string', array('length' => 50 ) );
    $userTable->addColumn('last_name', 'string', array('length' => 50 ) );

    $userTable->addColumn('phone', 'string', array('length' => 50 ) );
    $userTable->addColumn('address', 'string', array('length' => 1024 ) );

    $userTable->addColumn('user_role', 'integer', array('length' => 1 ) );
    $userTable->addColumn('university_id', 'string', array('length' => 100 ) );

    $userTable->addColumn('added_on', 'datetime');
    $userTable->addColumn('updated_on', 'datetime');
    $userTable->addColumn('added_by', 'integer');
    $userTable->addColumn('updated_by', 'integer');
    $userTable->addColumn('status', 'boolean');
    $userTable->addColumn('blocked', 'boolean');


    //TABLE: role
    $roleTable = $schema->createTable('role');

    $roleTable->addColumn('id', 'integer', array('unsigned' => true) );
    $roleTable->setPrimaryKey( array('id') );
    $roleTable->addColumn('title', 'string', array('length' => 255 ) );
    $roleTable->addColumn('description', 'string', array('length' => 1024) );



    //TABLE: course
    $courseTable = $schema->createTable('course');

    $courseTable->addColumn('id', 'integer', array('unsigned' => true) );
    $courseTable->setPrimaryKey( array('id') );

    $courseTable->addColumn('title', 'string', array('length' => 255 ) );
    $courseTable->addColumn('description', 'string', array('length' => 1024) );

    $courseTable->addColumn('course_code', 'string', array('length' => 128) );
    $courseTable->addUniqueIndex(array('course_code'));

    $courseTable->addColumn('start_on', 'date');
    $courseTable->addColumn('end_on', 'date');

    $courseTable->addColumn('added_on', 'datetime');
    $courseTable->addColumn('updated_on', 'datetime');
    $courseTable->addColumn('added_by', 'integer');
    $courseTable->addColumn('updated_by', 'integer');
    $courseTable->addColumn('active', 'boolean');
    $courseTable->addColumn('archived', 'boolean');
    $courseTable->addColumn('archived_at', 'datetime');
    $courseTable->addColumn('archived_by', 'integer');




    //TABLE: user_course
    $userCourseTable = $schema->createTable('user_course');

    $userCourseTable->addColumn('id', 'integer', array('unsigned' => true) );
    $userCourseTable->setPrimaryKey( array('id') );

    $userCourseTable->addColumn('user_id', 'integer');
    $userCourseTable->addColumn('course_id', 'integer');
    $userCourseTable->addColumn('added_on', 'datetime');
    $userCourseTable->addColumn('added_by', 'integer');
    $userCourseTable->addColumn('completed', 'boolean');
