<?php

require_once __DIR__ . "/../../../src/controllers/UserController.php";
$view = UserController::handleLogout();
$title = $view;
$error = http_response_code() >= 400;

require_once __DIR__ . "/../../../src/templates/api_response.php";
