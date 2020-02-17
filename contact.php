<?php

require_once("Template.php");

$page = new Template("Contact");
$page->addHeadElement("<script src='forms.js'></script>");
$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>
		<link rel='stylesheet' type='text/css' href='styleWeb.css'>
			<ul>
				<li><a href='index.php'>Home</a></li>
				<li><a href='about.php'>About</a></li>
				<li><a href='contact.php'>Contact Us</a></li>
			</ul>
		</h1>\n
		
		<h2>Welcome to the contact page, please fill out the form to get in touch with us!</h2>";
		
	print "<section>";
		print "<form name='myForm' action='thankyou.php' onsubmit=' return validateForm()' method='POST'>";
		print "Full name: <input type='text' name='name'><br/>";
		print "Email: <input type='text' name='email'><br/>";
		print "Subject: <input type='text' name='subject'><br/>";
		print "<textarea name='message' rows='8' cols='80'></textarea><br/>";
		print "<br/><input name='submit' type='submit'>";
		print "</form>";
	print "</section>";
	

print $page->getBottomSection();
