<!DOCTYPE html>
<html>
<head>
  <title>Let's Build! </title>
<link rel="stylesheet" href="styleCreate.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
  <div id="HTMLtoPDF">
<div id="myDIV" class="header">
<?php
  $destination = $_REQUEST['destination'];
?>
  <h1>Itinerary for your Trip to <?php echo($destination) ?></h1>

</div>
</header>
<ul id="myUL">
  <li>Flight from London to Paris</li>
  <li class="checked">Lunch at The Beer Cafe</li>
  <li>Meet George at 7pm</li>
  <li>Buy eggs</li>
  <li>Read a book</li>
</ul>
<div id="myDIV" class="header">
        <input type="text" id="myInput" placeholder="Add your flight, accomodation, tasks and other details...">
        <span onclick="newElement()" class="addBtn">Add</span>
</div>
</div>
   <script src="scriptCreate.js"></script>
	<!-- here we call the function that makes PDF -->
	<a href="#" onclick="HTMLtoPDF()">Download PDF</a>

	<!-- these js files are used for making PDF -->
	<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
</body>
</html>
