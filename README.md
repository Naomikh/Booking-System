# Booking-Sysem

  This is a booking system [Booking-System](https://github.com/Naomikh/Booking-System) - it uses the language php, the tool word press, a theme, plugins and MySQl. Achieved the goal of creating a website by installing a theme on based on [wordpress](https://wordpress.com/).
  This repository contains the source files and documentation for a Physiotherapy Website built on WordPress.com. The website serves as an online platform for a physiotherapy clinic, providing information about services, booking appointments, and offering resources for patient education.
******************************************************************************************
   *FEATURES
 
Responsive Design: Optimized and efficient access on all devices (desktop, tablet, mobile).

   [About Form]: The teams details and the clinics physical address .

   [Booking Form]: Allows users to schedule appointments online and sends a confirmation email.

   [Contact Form]: Get intouch with us form for easy communication with the clinic for inquiries or requesting a call back with    the address of the clinic.

   [Service Pages]: Detailed descriptions of physiotherapy treatments.

   [More Services Button]: Educational content related to health, wellness, and physiotherapy.

   [Testimonials Form]: services and clients feedback.

******************************************************************************************
* TECHNOLOGY STACK

WordPress: Content management system [wordpress](https://wordpress.com/).

Theme: [Physiotherapy Booking System, Free] (put the theme link here).

PLUGINS:

[Booking Calender, Free](https://wpbookingcalendar.com/)

[Responsive Menu, Free] a mobile menu plugin that allows you to add a highly responsive menu to a WordPress site,

[WP Mail Logging, Free] Logs each email sent by WordPress, 

[WP Mail SMTP, Free]Reconfigures the wp_mail() function to use Gmail/Mailgun/SendGrid/SMTP instead of the default mail(),

[WPForms Lite, Free] WordPress friendly contact form plugin.

***************************************************************************************
* INSTALLATION

1.	Clone or download the repository:
bash Copy code:
git clone https://github.com/username/physiotherapy-website.git
2.	Set up a local development environment using tools like Local by Flywheel, XAMPP, or MAMP.
3.	Import the database:
*	Import the .sql file located in the database/ directory into your WordPress database.
4.	Configure the wp-config.php file:
*	Update database credentials:php Copy code
define('DB_NAME', 'your_database_name');
define('DB_USER', 'your_database_user');
define('DB_PASSWORD', 'your_database_password');
define('DB_HOST', 'localhost');
5.	Upload the repository files to your WordPress installation directory.
6.	Install and activate the required plugins via the WordPress admin dashboard.

***************************************************************************************
CUSTOMIZATION

•	Theme Customization: Modify the theme through the WordPress admin panel under Appearance > Customize.
•	Content Updates: Update text, images, and other content via the WordPress dashboard.
•	Plugins: Activate/deactivate plugins as needed to enable additional functionality

***************************************************************************************

Documentation
•	Refer to the WordPress Codex for general guidance.
•	Detailed plugin documentation is available on their respective websites:
    	Elementor Docs
    	WPForms Documentation
    	WooCommerce Appointments Guide.

***************************************************************************************

DEPLOYMENT

1.	Export the website using a plugin like All-in-One WP Migration or manually via FTP.
2.	Upload to a live server with the required database and WordPress setup.
3.	Update permalinks and ensure proper domain settings.

***************************************************************************************

# What the front page looks like so far

![Picture](https://github.com/Naomikh/Booking-System/upload/main/Pictures/Capture.PNG "Booking-System front page")

***************************************************************************************

# TODO

* Gherkin-editor users won't understand regexp anchors. Display a '*', '?' or '-' instead.
* Move autocomplete widget to ace-autocomplete project once it matures? May improve quality long term (more contributors).
* Fix 404 for jquery-ui png images. Ideally generate jquery-ui css files from current theme.
* Figure out how require-js works so we don't need to require so many files in our HTML.
* Separate displaying of autocompleted text from its content - we may
  want to indent (or use other visual style for) step examples to separate them from step definitions
  
***************************************************************************************

# Contact For Support
* physiotherapykhoza@gmail.com