<?php
// auto-generated by sfDatabaseConfigHandler
// date: 2015/12/03 09:04:28

$database = new sfPropelDatabase();
$database->initialize(array (
  'phptype' => 'mysql',
  'persistent' => true,
  'host' => '10.10.10.2',
  'database' => 'orion_snapps_sfguard',
  'username' => 'snapps',
  'password' => 'athousandless',
), 'sfguard');
$this->databases['sfguard'] = $database;

$database = new sfPropelDatabase();
$database->initialize(array (
  'phptype' => 'mysql',
  'persistent' => true,
  'host' => '10.10.10.2',
  'database' => 'orion_snapps_general',
  'username' => 'snapps',
  'password' => 'athousandless',
), 'general');
$this->databases['general'] = $database;

$database = new sfPropelDatabase();
$database->initialize(array (
  'phptype' => 'mysql',
  'persistent' => true,
  'host' => '10.10.10.2',
  'database' => 'orion_snapps_garment',
  'username' => 'snapps',
  'password' => 'athousandless',
), 'garment');
$this->databases['garment'] = $database;

$database = new sfPropelDatabase();
$database->initialize(array (
  'phptype' => 'mysql',
  'persistent' => true,
  'host' => '10.10.10.2',
  'database' => 'orion_snapps_particle',
  'username' => 'snapps',
  'password' => 'athousandless',
), 'particle');
$this->databases['particle'] = $database;

$database = new sfPropelDatabase();
$database->initialize(array (
  'phptype' => 'mysql',
  'persistent' => true,
  'host' => '10.10.10.2',
  'database' => 'orion_snapps_inspection',
  'username' => 'snapps',
  'password' => 'athousandless',
), 'inspection');
$this->databases['inspection'] = $database;

$database = new sfPropelDatabase();
$database->initialize(array (
  'phptype' => 'mysql',
  'persistent' => true,
  'host' => '10.10.10.2',
  'database' => 'orion_snapps_iso',
  'username' => 'snapps',
  'password' => 'athousandless',
), 'iso');
$this->databases['iso'] = $database;

$database = new sfPropelDatabase();
$database->initialize(array (
  'phptype' => 'mysql',
  'persistent' => true,
  'host' => '10.10.10.2',
  'database' => 'orion_snapps_hr',
  'username' => 'snapps',
  'password' => 'athousandless',
), 'hr');
$this->databases['hr'] = $database;

$database = new sfPropelDatabase();
$database->initialize(array (
  'phptype' => 'mysql',
  'persistent' => true,
  'host' => '10.10.10.2',
  'database' => 'mercury_online_garment',
  'username' => 'mercury',
  'password' => 'mercury',
), 'mercury_online_garment');
$this->databases['mercury_online_garment'] = $database;

$database = new sfPropelDatabase();
$database->initialize(array (
  'phptype' => 'mysql',
  'persistent' => true,
  'host' => '10.10.10.2',
  'database' => 'mercury_particle',
  'username' => 'mercury',
  'password' => 'mercury',
), 'mercury_particle');
$this->databases['mercury_particle'] = $database;