error meaage:Sorry you are not allowed to access this page

Make sure your database prefix hasn't changed.By default it is "wp_" but changing this to anything else or manually editing the table names will break the permission checking.
You can fix by editing wp_options and wp_usermeta and look for any option_name or meta_key with the value of wp_% and change it to the new table.


How to add jquery script in wordpress?
Initially create a theme folder and inside the theme folder create another folder for keeping the js file i.e sample.js. Then you can add your jQuery script to that file.
You can see below example:
jQuery(document).ready(function($) {
  $('#nav a').last().addClass('last');
})

Then you can open the theme's functions.php file and you can use wp_enqueue_script() function such that you can add your script. You can see below function:

add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_enqueue_script(
        'your-script', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/js/your-script.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

Why wordpress is asking for my FTP credentials to install plugins?
If you need to configure for wordpress to upload without FTP then add the following code in wp-config.php:

define('FS_METHOD', 'direct');

How can I display wordpress search results?
See the below code for displaying the search results:

<?php
get_header(); ?>

        <section id="primary" class="content-area">
            <div id="content" class="site-content" role="main">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->

                <?php shape_content_nav( 'nav-above' ); ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'search' ); ?>

                <?php endwhile; ?>

                <?php shape_content_nav( 'nav-below' ); ?>

            <?php else : ?>

                <?php get_template_part( 'no-results', 'search' ); ?>

            <?php endif; ?>

            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


How to debug a wordpress plugin?
Initially, wordpress debugging is turned off. so inorder to enable it, open wp-config.php file there you can see the below code:
define('WP_DEBUG', false);

Turn on the wordpress debugging and Replace the above line of code with the below code:

define('WP_DEBUG', true);

// Tells WordPress to log everything to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Doesn't force the PHP 'display_errors' variable to be on
define('WP_DEBUG_DISPLAY', false);

// Hides errors from being displayed on-screen
@ini_set('display_errors', 0);



// laravel
Error message while upgrading Laravel 5.5 to 5.6
1.In composer.json file you can see the below code:
"require": {
        "php": ">=7.0.0",
        "fideloper/proxy": "~3.3",
        "laravel/framework": "5.5.*",
        "laravel/tinker": "~1.0"
    },

  Replace the above code with:
  "require": {
        "php": ">=7.1.3",
        "fideloper/proxy": "~4.0",
        "laravel/framework": "5.6.*",
        "laravel/tinker": "~1.0"
    },

 2.In the directory app\Http\Middleware\TrustedProxies.php file copy the content below:

 <?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var string
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}


3.Update the Composer by the following command:
composer Update


What is content management system(CMS)?
CMS is a software which stores all the data such as music, text, files, documents, photos, etc. and it makes available in your website.Wtih the help of CMS we can easily modify, edit and can publish in your website.
The main purpose of CMS is to enable the users to create and maintain basic websites without any coding.Only some technical skills is required to setup a CMS.

What are the system requirements for wordpress?
System requirements:
1.MySQL database
2.Select any Web server:-
XAMPP
LAMP
WAMP
3.OPERATING SYSTEM
4.BROWSER SUPPORT:Firefox, Google chrome, etc
5.PHP Compatibility:PHP 5.2 +


What are the features of wordpress themes?
Some features of wordpress themes are listed below:
User management
Extend with plugins
Search engine optimize
Theme customization
Auto upgrade and support
Social sharing features
Multiple page styles

What is the purpose of Quick Draft section in wordpress dashboard?
It is a mini post editor which allows in writing post, saving and publishing the post from admin dashboard.

What is the purpose of wordpress general setting?
It is used to set the basic confirguration settings for you website.

What is the use of permalink setting?
As the name itself suggest that it is the permanent link to a particular blog or category.This permalink settings are used to add the permanent links to your posts in wordpress.


What is the role of the contributor in wordpress?
Contributor are only allowed to write and edit their posts before publishing the post.But they are not allow to publish them.Only admin will publish the post.Supposed they want to publish then first the admin should be notified personally and when the post is approved by the admin then the contributor are not allow to modify the post.


Can you customize the wordpress themes?
Offcourse you can customize your wordpress themes by using the a child theme style.css and functions.php file.Not only this you can also edit the templates files and can use plugins to change things like SEO tags also.

How can I change themes in wordpress?
First of all you need to install an new wordpress themes and you need to login to your admin page.There you can see the Apperance on the sidebar.Go to themes,here you can see the currently installed themes in your application.If you want to add another theme just click the Add new button.Then based on your requirement you can change your themes.

What is Customize theme in wordpress?
Customizing themes helps you to make a themes based on the requirement of the user.It will provide new look to your website.In the customize themes you can change background images,colors, can add post,titles, so on.

What can I optimize my wordpress?
Content should be high quality and meaningful.
Use short permalinks that include keyboards.
Include right names in images.
Monitor your plugins.
Delete your trash box.
Keep checking your website statistics.
Choose your advertisements wisely.
Use CSS and JavaScript effectively.
Connect posts to social networks.


