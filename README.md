# WordPress Website Project Booking-Sysem

This ois a booking system repository that contains all the necessary files and instructions to set up and run a WordPress website locally for development purposes. Additionally, it includes configurations for the following plugins to enhance functionality:
  
   1. Responsive Menu
   2. Booking Calendar
   3. WP Mail SMTP
   4. WP Mail Logging
******************************************************************************************
# INTRODUCTION

   This project serves as the foundation for developing and customizing a WordPress website. It provides detailed instructions for setting up a local development environment and pre-configures essential plugins for advanced website functionality.


******************************************************************************************

  # FEATURES 
  
*   Customizable Booking System theme. *
 *  Pre-installed plugins for enhanced features. *
 *  Easyily installable new plugins for enhanced features. *
*   Easy-to-setup local development environment. *
 *  Configurable database and WordPress settings. *
    
   Responsive Design: Optimized and efficient access on all devices (desktop, tablet, mobile).

   [About Form]: The teams details and the clinics physical address .

   [Booking Form]: Allows users to schedule appointments online and sends a confirmation email.

   [Contact Form]: Get intouch with us form for easy communication with the clinic for inquiries or requesting a call back with    the address of the clinic.

   [Service Pages]: Detailed descriptions of physiotherapy treatments.

   [More Services Button]: Educational content related to health, wellness, and physiotherapy.

   [Testimonials Form]: services and clients feedback.

******************************************************************************************



******************************************************************************************
# TECHNOLOGY STACK

WordPress: Content management system [wordpress](https://wordpress.com/).

Theme: [Physiotherapy Booking System, Free] (put the theme link here).

# PLUGINS:


# Responsive Menu
  1. [Responsive Menu, Free] 
   * Provides a user-friendly mobile navigation experience. *
   * Allows customizations for menus on mobile and desktop. *
   
  2. [Booking Calender, Free](https://wpbookingcalendar.com/)
  *  Enables users to book appointments and manage bookings easily. *
*    Supports multiple configurations for scheduling. *
  3. [WP Mail SMTP, Free]
 *  Configures WordPress to send emails using a secure SMTP service. *
 *  Ensures reliable email delivery using Gmail/Mailgun/SendGrid/SMTP instead of the default mail(). *
  4. [WP Mail Logging, Free]
 *  Logs all outgoing emails sent from your WordPress website. *
*   Useful for debugging and tracking email delivery issues.  *
 5. [WPForms Lite, Free] 
  * WordPress friendly contact form plugin. *

***************************************************************************************
#  PREREQUISITES
#  Before you begin, ensure you have the following installed on your system:

  1. PHP (v7.4 or later)
  2. MySQL/MariaDB
  3. Apache/Nginx
  4. Composer (for managing PHP dependencies, if applicable)
  5. Node.js (for theme development, optional)
  6. Git
  OR 
  Alternatively, you can use an all-in-one local development tool like XAMPP, MAMP, or Local by Flywheel.
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
   * Select your preferred language. *
   * Enter the database details: *
     ** Database Name: wordpress_site **
     ** Username: root (or your MySQL username) **
     ** Password: Leave blank for XAMPP or enter your MySQL password. **
     ** Database Host: localhost **
     ** Table Prefix: wp_ **
     ** Complete the setup by creating an admin account and setting up your site name. **
     
 # Step 5: Install Plugins
 
   1. Log in to the WordPress admin panel at http://localhost/wordpress-website/wp-admin.
   2. Navigate to Plugins > Add New.
   3.Search for and install the following plugins:
    ** Responsive Menu: Download from WordPress.org. **
    ** Booking Calendar: Download from WordPress.org. **
    ** WP Mail SMTP: Download from WordPress.org. **
    ** WP Mail Logging: Download from WordPress.org. **
   4. Activate all installed plugins.
   5. Configure each plugin as needed via their respective settings pages in the admin panel.


**********************************************************************************************
# USAGE

 1. Start your local server.
 2. Open a web browser and navigate to http://localhost/wordpress-website.
 3. Log in to the WordPress admin panel at http://localhost/wordpress-website/wp-admin.
 4. Customize your website and test features provided by the installed plugins.

************************************************************************************************

# FOLDER STRUCTURE

wordpress-website/
├── wp-content/        # Contains themes, plugins, and uploads
│   ├── plugins/       # Custom and downloaded plugins
│   ├── themes/        # Custom and downloaded themes
├── wp-config.php      # WordPress configuration file
├── index.php          # Entry point for WordPress
├── .htaccess          # URL rewriting rules
└── other WordPress core files...
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