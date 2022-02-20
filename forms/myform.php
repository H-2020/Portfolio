<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'hlldmr23@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = 'hlldmr23@gmail.com';
  $contact->from_name = $_POST[' sender_name'];
  $contact->from_email = $_POST['email_address'];
  $contact->subject = $_POST['from_subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
 
  $contact->smtp = array(
    'host' => 'student.intecbrussel.be',
    'username' => 'hilal.demir',
    'password' => 'HilalD-753',
    'port' => '587'
  );
 

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

//*new control message */
  if($_POST['privacy'] !='accept') {
    die('Please, accept our terms of service and privacy acy policy');
    }
    forms/contact.php
  echo $contact->send();
?>
