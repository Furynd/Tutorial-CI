<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About Me</title>

	<style type="text/css">

	::selection { background-color: #000000; color: black; }
	::-moz-selection { background-color: #FFFFFF; color: black; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>About Me</h1>

	<div id="body">
		<h2>This Page Describe About Me</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut metus nulla, tincidunt placerat velit ut, varius efficitur tellus. Vivamus a ex mi. Suspendisse gravida, mi eu feugiat tincidunt, velit risus placerat sapien, eget euismod dolor nisl vitae urna. Duis ut sollicitudin est. Donec sagittis, turpis sed mollis feugiat, quam nisl scelerisque justo, sit amet dapibus justo nisi a lacus. Phasellus sagittis felis pulvinar tempor tempus. Aenean tristique convallis lectus. Duis est leo, condimentum et tellus ut, viverra egestas turpis. Donec nec ipsum auctor, tempor tortor eu, mattis eros.
		</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>