<?php

define('VIEW_FOLDER','app/Views'.DIRECTORY_SEPARATOR);
define('MODEL_FOLDER','app/Models'.DIRECTORY_SEPARATOR);
define('CONTROLLER_FOLDER','app/Controllers'.DIRECTORY_SEPARATOR);
# Define o caminho base da aplicação conforme a necessidade
# Se a pasta da aplicação for /empregos, o basepath passa a ser define('BASE_PATH','/empregos');
define('BASE_PATH','/ProgramadorWebSenac/MVC');

// defines para o banco de dados
define('HOST','localhost');
define('DB_NAME','mvc');
define('USERNAME','root');
define('PASSWORD','');
$_ENV['APP_ENV']='development';


