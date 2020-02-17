<?php

require_once("Template.php");

$page = new Template("Home");
$page->addHeadElement("<script src='hello.js'></script>");
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
		
		<h2>Welcome to the home page, please use the menu to navigate!</h2>";
print $page->getBottomSection();

