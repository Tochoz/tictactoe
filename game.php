<?php
session_start();
?>

<html>

<head>
	<title>Крестики-нолики</title>

	<link rel="stylesheet" href="./style.css"></link>

	<script src="./index.js"></script>
</head>

<body>
	<h1>ИГРА</h1>

	<p>Вы играете за: </p>

	<main id="field">
		<div data-cell="1"></div>
		<div data-cell="2"></div>
		<div data-cell="3"></div>

		<div data-cell="4"></div>
		<div data-cell="5"></div>
		<div data-cell="6"></div>

		<div data-cell="7"></div>
		<div data-cell="8"></div>
		<div data-cell="9"></div>
	</main>
</body>

</html>