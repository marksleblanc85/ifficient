<?php
// References to the name values in your HTML form
$field_name		=	$_POST['name'];
$field_email	=	$_POST['email'];
$field_comment	=	$_POST['message'];

// Since some emails are unknown, I reccomend using a known email sender to avoid messages to go directly to the SPAM folder
$field_sender	=	'sales@ifficient.com';

// In which address would you like to recieve the messages? Would you like a custom Subject for each?
$mail_to	=	'smccormick@ifficient.com, ahaider@ifficient.com';

$subject	=	'Message via ifficient from '.$field_name;

// This builds the message
$body_message	=	'From: '.$field_name."\n";
$body_message  .=	'Email: '.$field_email."\n\n";
$body_message  .=	'Comment: '.$field_comment;

// Email headers 'From' a known email address to avoid being taken as SPAM and 'Reply-to' the one that filed in the form
$headers	=	'From: '.$field_sender."\r\n";
$headers       .=	'Reply-To: '.$field_email."\r\n";

// Status, builds whole email structure
$mail_status	=	mail($mail_to, $subject, $body_message, $headers);