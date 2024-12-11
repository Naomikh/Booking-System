# WordPress Website Project Booking-Sysem

This is a booking system repository that contains all the necessary files and instructions to set up and run a WordPress website locally for development purposes. Additionally, it includes configurations for the following plugins to enhance functionality:
  
   1. Responsive Menu
   2. Booking Calendar
   3. WP Mail SMTP
   4. WP Mail Logging
******************************************************************************************
# INTRODUCTION

   This project serves as the foundation for developing and customizing a WordPress website. It provides detailed instructions for setting up a local development environment and pre-configures essential plugins for advanced website functionality.


******************************************************************************************

  # FEATURES 
  
*   Customizable Booking System theme. 
 *  Pre-installed plugins for enhanced features. 
 *  Easyily installable new plugins for enhanced features. 
*   Easy-to-setup local development environment. 
 *  Configurable database and WordPress settings. 
    
       *Responsive Design: Optimized and efficient access on all devices (desktop, tablet, mobile).*

       *[About Form]: The teams details and the clinics physical address .*

       *[Booking Form]: Allows users to schedule appointments online and sends a confirmation email.*

       *[Contact Form]: Get intouch with us form for easy communication with the clinic for inquiries or requesting a call back with    the address of the clinic.*

       *[Service Pages]: Detailed descriptions of physiotherapy treatments.*

       *[Testimonials Form]: services and clients feedback.*

***************************************************************************************
#  PREREQUISITES

*   TECHNOLOGY STACK
     
     WordPress: Content management system [wordpress](https://wordpress.com/).
     Theme: [Physiotherapy Booking System, Free] (put the theme link here).
     
     
  Before you begin, ensure you have the following installed on your system:

  1. PHP (v7.4 or later)
  2. MySQL/MariaDB
  3. Apache/Nginx
  4. Composer (for managing PHP dependencies, if applicable)
  5. Node.js (for theme development, optional)
  6. Git
  OR 
  Alternatively, you can use an all-in-one local development tool like XAMPP, MAMP, or Local by Flywheel.
     
# PLUGINS

  1. [Responsive Menu, Free](https://responsive.menu/?utm_source=readme&utm_medium=plugin&utm_campaign=reponsivemenu_plugin)
   * Provides a user-friendly mobile navigation experience. 
   * Allows customizations for menus on mobile and desktop. 
   
  2. [Booking Calender, Free](https://wpbookingcalendar.com/)
  *  Enables users to book appointments and manage bookings easily. 
*    Supports multiple configurations for scheduling. 

  3. [WP Mail SMTP, Free](https://wpmailsmtp.com/docs/a-complete-guide-to-wp-mail-smtp-mailers/?utm_source=wprepo&utm_medium=link&utm_campaign=liteplugin&utm_content=readme)
 *  Configures WordPress to send emails using a secure SMTP service. 
 *  Ensures reliable email delivery using Gmail/Mailgun/SendGrid/SMTP instead of the default mail(). 
 
  4. [WP Mail Logging, Free](https://wordpress.org/plugins/wp-mail-logging/)
 *  Logs all outgoing emails sent from your WordPress website. 
*   Useful for debugging and tracking email delivery issues.  

 5. [WPForms Lite, Free](https://wordpress.org/plugins/wpforms-lite/)
  * WordPress friendly contact form plugin. 

***************************************************************************************
# INSTALLATION 

#  Step 1 : Clone the Repository

1. Open your terminal and navigate to the directory where you want to clone the project.
2. Run the following command:
   https://github.com/Naomikh/Booking-System.git
3. Navigate into the project folder:
   cd wordpress-website
   
 # Step 2: Install Local Server
 
 1. Install and set up a local server like XAMPP or MAMP.
 2. Place the cloned repository in the htdocs (XAMPP) or Sites (MAMP) directory.
   
 # Step 3: Set Up The Database
 
 1. Start your local server and open phpMyAdmin (usually accessible at http://localhost/phpmyadmin).
 2.	Create a database (e.g., wordpress-website) :  If using Xampp go to Myphp admin.
*	Import the .sql file located in the root directory into your project.
 3.	Configure the wp-config.php file:
*	Update database credentials:php Copy code
       * define('DB_NAME', 'your_database_name');
       * define('DB_USER', 'your_database_user');
       * define('DB_PASSWORD', 'your_database_password');
       * define('DB_HOST', 'localhost');    
 4. Note down the database name, username, and password for the next step.
 
  #  Step 4: Configure WordPress

   1. Navigate to the cloned repository folder in your browser (e.g., http://localhost/wordpress-website).
   2. Follow the WordPress installation Wizard:
   * Select your preferred language. 
   * Enter the database details: 
     * Database Name: wordpress_site 
     * Username: root (or your MySQL username) 
     * Password: Leave blank for XAMPP or enter your MySQL password. 
     * Database Host: localhost 
     * Table Prefix: wp_ 
     * Complete the setup by creating an admin account and setting up your site name. 
     
 # Step 5: Install Plugins
 
   1. Log in to the WordPress admin panel at http://localhost/wordpress-website/wp-admin.
   2. Navigate to Plugins > Add New.
   3. Search for and install the following plugins:
   
      Responsive Menu: Download from WordPress.org. 
      Booking Calendar: Download from WordPress.org. 
      WP Mail SMTP: Download from WordPress.org. 
      WP Mail Logging: Download from WordPress.org. 
      
   4. Activate all installed plugins.
   5. Configure each plugin as needed via their respective settings pages in the admin panel.
       
 # Step 6: Update the site URLs:
   Open phpMyAdmin, find the wp_options table in your database.
   Change the values of siteurl and home to http://localhost/[your-folder-name]

  # Step 6: SITE CONFIGURATION

If the menu on your WordPress website is redirecting to the XAMPP dashboard instead of the expected page, it's usually an indication that there is a misconfiguration in the site's URL or an issue with your server settings, do the following:

 #  Step 1: Verify the Site URL and Home URL in WordPress Settings
Sometimes, the issue occurs because the WordPress Address (URL) and Site Address (URL) are incorrectly configured, especially when working with a local server (like XAMPP).

  1. Login to the WordPress Admin Panel.
  2. Go to Settings > General.
  3. Check the values of the following fields:
    * WordPress Address (URL): This should be set to http://localhost/your-wordpress-folder (or http://127.0.0.1/your-  wordpress-folder if that's your setup).
   * Site Address (URL): This should be the same as the WordPress Address, or if your site is set up in a subfolder, it should reflect that folder (e.g., http://localhost/your-site-name).
   
 Make sure there are no extra slashes at the end of the URLs, as this can cause issues.
  
  4. If necessary, save the changes after adjusting the URLs.
  
# Step 2: Clear Your Browser Cache
Sometimes, browser cache may cause issues by loading outdated pages or URLs. Clear your browser cache or try loading your website in Incognito mode to ensure you're not seeing cached data.

# Step 3: Check the Menu Links in WordPress

 The menu items themselves might be incorrectly linked to the XAMPP dashboard due to hardcoded URLs or incorrect links.
 1. Go to your WordPress dashboard.
 2. Navigate to Appearance > Menus.
 3. In the menu structure, check the URLs of each menu item:
 
*    If any of the links are pointing to http://localhost or http://127.0.0.1, change them to the correct site URL (e.g.,      http://localhost/your-wordpress-folder/page-name or http://localhost/your-site-name/page-name).
*     If you are using custom links, make sure they are correct and do not point to the XAMPP dashboard.
After correcting the links, click Save Menu.

# Step 4: Check .htaccess File

In some cases, the .htaccess file in your WordPress directory can cause redirects if it's misconfigured. The .htaccess file controls how URLs are handled and redirected on the server.

1. Check the .htaccess file:
  * Go to your WordPress directory (C:\xampp\htdocs\your-site-name\).
  * Look for the .htaccess file. If it's not visible, make sure that hidden files are displayed.

2. Reset the .htaccess file:
  * Backup the existing .htaccess file (if you have one).
  * Delete the .htaccess file from your WordPress folder.
  * In your WordPress dashboard, go to Settings > Permalinks, and simply click Save Changes. This will regenerate a new .htaccess file with default settings.

3. The default .htaccess file for WordPress should look like this:
  ![Picture](https://github.com/Naomikh/Booking-System/blob/main/Pictures/htaccessFile.PNG ".htacces file")

4. After regenerating the *.htaccess* file, test if the menu still redirects to the XAMPP dashboard.


# Step 5: Check XAMPP Configuration

Sometimes, XAMPP can be set to serve its default dashboard page on certain URLs, which can interfere with WordPress. Check the following:

1. Check the Apache Configuration:
   * In your XAMPP Control Panel, click Config next to Apache and choose httpd.conf.
   * Look for the DocumentRoot directive to ensure it points to your WordPress directory (e.g., C:/xampp/htdocs/your-site-name).
   * If the DocumentRoot is set to the default XAMPP directory (like C:/xampp/htdocs), it may be serving the XAMPP dashboard by default.

2. Ensure WordPress Files Are in the Correct Directory:
  * Ensure that your WordPress files (like index.php, wp-config.php, etc.) are located in the correct folder inside htdocs and not in a subfolder where XAMPP’s default page could be served.

# Step 6: Check for Incorrect Theme or Plugin Behavior
  
   Sometimes, plugins or themes can cause redirection issues if they are misconfigured or have conflicting settings.

1. Deactivate Plugins:
  * Go to Plugins > Installed Plugins and deactivate all plugins.
  * After deactivating plugins, check if the issue persists.
  * If the issue is resolved, reactivate the plugins one by one to find the culprit.

2. Switch to a Default WordPress Theme:
  * If the problem persists after deactivating plugins, try switching to a default WordPress theme (like Twenty Twenty-Three).
  * Go to Appearance > Themes, activate a default theme, and test if the issue persists.
# Step 7: Debugging with Browser Developer Tools
  
  If the issue still persists, use your browser's Developer Tools to inspect the network requests and see where the redirects are happening.

   1. Right-click on your webpage and choose Inspect (in Chrome or Firefox).
   2. Go to the Network tab.
   3. Click the menu items on your site and observe the network activity. Check if any of the links are being redirected to the    XAMPP dashboard.
   4. This can give you clues about which resource or URL is causing the issue.

#   SUMMARY
 
 To fix the issue of your WordPress menu redirecting to the XAMPP dashboard:

 1. Verify that your WordPress Address (URL) and Site Address (URL) are correct in the General Settings.
 2. Check the menu links in Appearance > Menus to make sure they are correct.
 3. Reset or regenerate the .htaccess file.
 4. Ensure your XAMPP configuration points to the correct WordPress directory.
 5. Deactivate plugins or switch to a default theme to rule out conflicts.
 6. Use Developer Tools to inspect network requests and identify where the redirect is happening.
 ![Picture](https://github.com/Naomikh/Booking-System/blob/main/Pictures/wordPressModule.PNG "Wordpressmodule rewrite")
  
 * For every button, update the button to point to your local website e.g:
 ![Picture](https://github.com/Naomikh/Booking-System/blob/main/Pictures/button.PNG ".htacces file")
 
**********************************************************************************************
# USAGE

 1. Start your local server.
 2. Open a web browser and navigate to http://localhost/wordpress-website.
 3. Log in to the WordPress admin panel at http://localhost/wordpress-website/wp-admin.
 4. Customize your website and test features provided by the installed plugins.

************************************************************************************************

# FOLDER STRUCTURE
 ![Picture](https://github.com/Naomikh/Booking-System/blob/main/Pictures/TREEMAIN.PNG "Tree")
********************************************************************************************

# CUSTOMIZATION

•	Theme Customization: Modify the theme through the WordPress admin panel under Appearance > Customize.
•	Content Updates: Update text, images, and other content via the WordPress dashboard.
•	Plugins: Activate/deactivate plugins as needed to enable additional functionality

**********************************************************************************************

# DOCUMENTATION
•	Refer to the WordPress Codex for general guidance.
•	Detailed plugin documentation is available on their respective websites:
    	Elementor Docs
    	WPForms Documentation
    	WooCommerce Appointments Guide.

********************************************************************************************


# DEPLOYMENT

1.	Export the website using a plugin like All-in-One WP Migration or manually via FTP.
2.	Upload to a live server with the required database and WordPress setup.
3.	Update permalinks and ensure proper domain settings.

***************************************************************************************

# What the front page looks like so far

![Picture](https://github.com/Naomikh/Booking-System/blob/main/Pictures/mainForm.PNG "Booking-System front page")
 
***************************************************************************************

# Contact For Support
  physiotherapykhoza@gmail.com