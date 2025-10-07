<?php
require_once "../vendor/autoload.php";
use App\Logger\Logger;
use App\Logger\LogToEmail;
use App\Logger\LogToFile;
use App\Services\AuthService;

// Настройка
$logger = new Logger();
$logger->attach(new LogToFile());
$logger->attach(new LogToEmail());

$auth = new AuthService($logger);
$auth->login('user', 'password'); // Вызовет warning

