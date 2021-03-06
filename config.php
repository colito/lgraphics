<?php
Class Config
{
    public $app_name = '';

    # Initial content to be displayed
    public $default_landing_category = 'coming-soon'; # needs to be defined
    public $default_landing_article = ''; # if empty, uses index by default
    public $default_landing_sub_article = ''; # also uses index by default if not defined

    public $user_name = '';
    public $password = '';
    public $right_click = 1; # disables right-click event on the site if set to 0. default = 1

    # Template
    public $navigation_links = 'includes/links.php'; # this is relative within the actual template's root directory
    public $active_template = 'lgraphics';

    # Email
    public $email_to = 'somebody@somewhere.com';

    # Resources
    public $templata_content_directory = 'content';
    public $templata_images_directory = 'images';
    public $templata_libraries = 'libs';
    public $templata_jquey_path = 'libs/js/jquery';

}

# define application root
define('APP_ROOT_DIR', dirname(__FILE__));
