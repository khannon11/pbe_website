<?php
$table = 'brothers';
 
$fields = array (
    array (
        'name' => 'id'
        , 'type' => 'key'
        , 'title' => 'ID'
    )
    , array (
        'name' => 'brotherPledgeClass'
        , 'type' => 'input'
        , 'title' => 'Class'
    )
    , array (
        'name' => 'brotherPledgeNumber'
        , 'type' => 'input'
        , 'title' => 'Number'
    )
    , array (
        'name' => 'brotherName'
        , 'type' => 'input'
        , 'title' => 'Brother Name'
        , 'is_link' => 1
        , 'link' => '/pbe/brothers/edit/*'
    )
    , array (
        'name' => 'brotherPosition'
        , 'type' => 'lookup'
        , 'title' => 'Brother Position'
		//lookup field specific parameters
		, 'lookup_table' => 'position'
		, 'key_field' => 'textDescription'
		, 'values_field' => 'title'
    )
    , array (
        'name' => 'brotherMajor'
        , 'type' => 'input'
        , 'title' => 'Major'
        , 'list_mode' => 0

    )
    , array (
        'name' => 'brotherEmail'
        , 'type' => 'input'
        , 'title' => 'Athena'
        , 'list_mode' => 0

    )
    , array (
        'name' => 'brotherBirthday'
        , 'type' => 'date'
        , 'title' => 'Birthday<br/>(y-m-d)'
        , 'list_mode' => 0

    )
    , array (
        'name' => 'brotherBio'
        , 'type' => 'textarea'
        , 'title' => 'Short Bio'
        , 'rows' => 5
        , 'cols' => 60
        , 'list_mode' => 0
    )
    , array (
        'name' => 'is_active'
        , 'type' => 'check'
        , 'title' => 'Is Active'
    )
    , array (
        'name' => 'managing'
        , 'type' => 'managing'
        , 'title' => 'Actions'
        , 'delete_link' => '/pbe/brothers/delete/*'
        , 'edit_link' => '/pbe/brothers/edit/*'
        , 'non_db' => 1
        , 'single_mode' => 0
    )
);