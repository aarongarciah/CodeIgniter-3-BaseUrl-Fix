<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Config Class
 *
 * This class contains functions that enable config files to be managed
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Libraries
 * @author      EllisLab Dev Team
 * @link        https://codeigniter.com/user_guide/libraries/config.html
 */
class MY_Config extends CI_Config {

    public function __construct()
    {
        $this->config =& get_config();

        // Set the base_url automatically if none was provided
        if (empty($this->config['base_url']))
        {
            // The regular expression is only a basic validation for a valid "Host" header.
            // It's not exhaustive, only checks for valid characters.
            if (isset($_SERVER['HTTP_HOST']) && preg_match('/^((\[[0-9a-f:]+\])|(\d{1,3}(\.\d{1,3}){3})|[a-z0-9\-\.]+)(:\d+)?$/i', $_SERVER['HTTP_HOST']))
            {
                $base_url = (is_https() ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST']
                    .substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], basename($_SERVER['SCRIPT_FILENAME'])));
            }
            else
            {
                $base_url = 'http://localhost/';
            }

            $this->set_item('base_url', $base_url);
        }

        log_message('info', 'Config Class Initialized');
    }

}
