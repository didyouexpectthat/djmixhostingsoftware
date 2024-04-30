<?php

// read toml config file

require 'vendor/autoload.php';
require 'functions/i18n.php';
use Yosymfony\Toml\Toml;

$config = Toml::ParseFile('includes/config.toml');
// $config['app']['name']

// load locale
$locale = loadLocale($config['app']['locale']);
// $locale['string']