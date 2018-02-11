<?php

require_once __DIR__ . '/bootstrap.php';

$formValidator = $container->get('form_validator');

if ($formValidator->isFormSubmited()) {
    dump($_POST);
}
