<?php 
require_once 'class/Database.php';

$db = new Database();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>EDU</title>
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
	<script type="text/javascript" src="base.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="stylesheets/base.css"/>
</head>
<body>
	<div id="page-wrapper">
	  <h1 id="heading">Kontaktforma</h1>
		<div id="errors"></div>
		<h2>Lūdzu, ievadiet savus datus</h2>
		<form action="app/FormHandle.php" method="post" id="contactForm">
			<div class="row">
				<label for="name">Name, Surname: <span>*</span></label>
				<input type="text" name="name" value="" id="name" data-label="Name, Surname"/>
			</div>
			<div class="row">
				<label for="phone">Phone no: <span>*</span></label>
				<input type="text" name="phone" value="" id="phone" data-label="Phone no"/>
			</div>
			<div class="row">
				<label for="address">Adrese:</label>
				<input type="text" name="address" value="" id="address" data-label="Adrese"/>
			</div>
			<div class="row">
				<label for="message">Ziņojums: <span>*</span></label>
				<textarea name="message" value="" id="message" data-label="Ziņojums"></textarea>
			</div>
			<div class="row">
				<a class="large" href="#" id="submit">Sūtīt</a>
			</div>
		</form>
	</div>
	<!-- Table for dispalying information already inside database -->
	<div id="page-wrapper">
		<table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone number</th>
                    <th>Address</th>
                    <th>Message</th>
                </tr>
            </thead>
	    	<tbody>
				<?php foreach ($db->getRecords() as $row): ?>
			        <tr>
				        <td><?= htmlentities($row['name']) ?></td>
				        <td><?= htmlentities($row['phone']) ?></td>
				        <td><?= htmlentities($row['address']) ?></td>
				        <td><?= htmlentities($row['message']) ?></td>
			        </tr>
				<?php endforeach; ?>
	        </tbody>
        </table>
	</div>
</body>
</html>