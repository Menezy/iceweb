<?php
# Database Configuration
defined('DATABASE_HOST') or Define('DATABASE_HOST', 'localhost');
defined('DATABASE_USER') or define('DATABASE_USER', 'root');
defined('DATABASE_CODE') or define('DATABASE_CODE', '');
defined('DATABASE_NAME') or define('DATABASE_NAME', 'ice');
# Date and Time Configurations
defined('GLOBAL_DATE') or define('GLOBAL_DATE', date(DATE_RFC2822));
defined('DATE') or define('DATE', date("Y/m/d"));
defined('TIME') or define('TIME', date("H-i-s"));
# Server Configuration
defined('SERVER_PORT') or define('SERVER_PORT', $_SERVER['SERVER_PORT']);
defined('SERVER_PROTOCOL') or define('SERVER_PROTOCOL', $_SERVER['SERVER_PROTOCOL']);
defined('IP_ADDRESS') or define('IP_ADDRESS', $_SERVER['REMOTE_ADDR']);
defined('DOCUMENT_ROOT') or define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
defined('REQUEST_METHOD') or define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);  
# Permissions
defined('ENV') or define('ENV', 1);
# Error  Configuration
error_reporting(E_ALL);
ini_set('display_errors', true);
defined('DEBUG_MODE') or define('DEBUG_MODE', true);
# Authentification and Device Data
defined('VALID_USERNAME') or define('VALID_USERNAME', 'admin');
defined('VALID_PASSWORD') or define('VALID_PASSWORD', 'letmein');
defined('DEVICE_IP') or define('DEVICE_IP', $_SERVER['REMOTE_ADDR']);
defined('USER_AGENT') or define('USER_AGENT', getenv("HTTP_USER_AGENT"));
# Secrets
defined('TOKEN') or define('TOKEN', '0192018301405783929180479');
defined('HASHKEY') or define('HASHKEY', 'ssh-rsa AAAAB3NzaC1yc2EAAADAQABAAACAQCzZlD5fMkWzER');
# Path and Directory
defined('APPPATH') or define('APPPATH', dirname(__FILE__));
defined('DOCUMENT_ROOT') or define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
defined('BASEPATH') or define('BASEPATH', 'http://icecommpower.com/');