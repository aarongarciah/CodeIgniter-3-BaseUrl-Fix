# CodeIgniter 3.0.3 base_url Fix
A fix to the issue in CodeIgniter 3.0.3 when working in localhost and the $config['base_url'] is wrong.

## How to
Download the `MY_Config.php` file and put it into the `application/core folder of your CodeIgniter project.  
  

## Important
if you've set in your config file `application/congif/config.php` another value than "*MY_*" in the `$config['subclass_prefix']` option, change the name of `MY_Config.php` replacing "*MY_*" with your value.  

Example:
```
$config['subclass_prefix'] = 'CUSTOM_';
MY_Config.php => CUSTOM_Config.php
```
