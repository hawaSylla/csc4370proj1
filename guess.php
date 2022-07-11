<?php

$form->addRadio('guess', 'Name', 'name', 'data-toggle=false');
$form->addRadio('guess', 'Gender', 'value-2', 'data-toggle=false');
$form->addRadio('guess', 'Hair Length', 'hair_length', 'data-toggle=false');
$form->addRadio('guess', 'Hair Color', 'hair_color', 'data-toggle=false');
$form->addRadio('guess', 'Eye Color', 'eye_color', 'data-toggle=false');
$form->addRadio('guess', 'Eye Size', 'eye_size', 'data-toggle=false');
$form->printRadioGroup('guess', 'Guess the ', true, '');
$form->addOption('name', 'null', '-', '', 'selected');
$form->addOption('name', 'alex', 'alex', '', '');
$form->addOption('name', 'alfred', 'alfred', '', '');
$form->addOption('name', 'anit', 'anita', '', '');
$form->addOption('name', 'anne', 'anne', '', '');
$form->addOption('name', 'bernard', 'bernard', '', '');
$form->addOption('name', 'bill', 'bill', '', '');
$form->addOption('name', 'charles', 'charles', '', '');
$form->addOption('name', 'claire', 'claire', '', '');
$form->addOption('name', 'david', 'david', '', '');
$form->addOption('name', 'eric', 'eric', '', '');
$form->addOption('name', 'frans', 'franse', '', '');
$form->addOption('name', 'george', 'george', '', '');
$form->addOption('name', 'herman', 'herman', '', '');
$form->addOption('name', 'joe', 'joe', '', '');
$form->addOption('name', 'maria', 'maria', '', '');
$form->addOption('name', 'max', 'max', '', '');
$form->addOption('name', 'paul', 'paul', '', '');
$form->addOption('name', 'peter', 'peter', '', '');
$form->addOption('name', 'philip', 'philip', '', '');
$form->addOption('name', 'richard', 'richard', '', '');
$form->addOption('name', 'robert', 'robert', '', '');
$form->addOption('name', 'sam', 'sam', '', '');
$form->addOption('name', 'susan', 'susan', '', '');
$form->addOption('name', 'tom', 'tom', '', '');
$form->addSelect('name', 'Name', '');
$form->addOption('gender', 'true', 'male', '', '');
$form->addOption('gender', 'false', 'female', '', '');
$form->addOption('gender', 'null', '-', '', 'selected');
$form->addSelect('gender', 'gender', '');
$form->addOption('hair', 'black', 'black', '', '');
$form->addOption('hair', 'red', 'male', '', '');
$form->addOption('hair', 'null', '-', '', 'selected');
$form->addOption('hair', 'blonde', 'blonde', '', '');
$form->addOption('hair', 'brown', 'brown', '', '');
$form->addOption('hair', 'bald', 'bald', '', '');
$form->addOption('hair', 'white', 'white', '', '');
$form->addSelect('hair', 'Hair Color', '');
$form->addOption('length', 'long', 'long', '', '');
$form->addOption('length', 'short', 'Option 2', '', '');
$form->addOption('length', 'null', '-', '', 'selected');
$form->addSelect('length', 'Hair length', '');
$form->addOption('eye_color', 'brown', 'brown', '', '');
$form->addOption('eye_color', 'blue', 'Option 2', '', '');
$form->addOption('eye_color', 'null', '-', '', 'selected');
$form->addSelect('eye_color', 'Eye Color', '');
$form->addOption('eye_size', 'large', 'large', '', '');
$form->addOption('eye_size', 'small', 'small', '', '');
$form->addOption('eye_size', 'null', '-', '', 'selected');
$form->addSelect('eye_size', 'Eye Size', '');
$form->addPlugin('formvalidation', '#fg-form', 'default', array('language' => 'en_US'));
?>