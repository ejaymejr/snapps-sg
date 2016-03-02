<?php
// auto-generated by sfValidatorConfigHandler
// date: 2015/12/03 13:08:54

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
  $validators = array();
  $context->getRequest()->setAttribute('fillin', array (
), 'symfony/filter');
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $validators = array();
  $validators['sfNumberValidator_rh'] = new sfNumberValidator();
  $validators['sfNumberValidator_rh']->initialize($context, array (
  'nan_error' => 'requires number',
));
  $validators['sfNumberValidator_x_data'] = new sfNumberValidator();
  $validators['sfNumberValidator_x_data']->initialize($context, array (
  'nan_error' => 'requires number',
));
  $validators['sfNumberValidator_temperature'] = new sfNumberValidator();
  $validators['sfNumberValidator_temperature']->initialize($context, array (
  'nan_error' => 'requires number',
));
  $validatorManager->registerName('date_time', 1, 'date required.', null, null, false);
  $validatorManager->registerName('rh', 1, 'required.', null, null, false);
  $validatorManager->registerValidator('rh', $validators['sfNumberValidator_rh'], null);
  $validatorManager->registerName('x_data', 1, 'required.', null, null, false);
  $validatorManager->registerValidator('x_data', $validators['sfNumberValidator_x_data'], null);
  $validatorManager->registerName('temperature', 1, 'required.', null, null, false);
  $validatorManager->registerValidator('temperature', $validators['sfNumberValidator_temperature'], null);
  $validatorManager->registerName('filter_area', 1, 'required.', null, null, false);
  $context->getRequest()->setAttribute('fillin', array (
), 'symfony/filter');
}