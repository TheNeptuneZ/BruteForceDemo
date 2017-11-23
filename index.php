<?php
if(isset($_GET["pin"]) && !empty($_GET["pin"]))
{
	$pin = $_GET["pin"];

	if($pin == "2999")
	{
		echo "You're Welcome";
	}
	else
	{
		echo "F*** off";
	}
}
else
{
	include("form.html");
}
#EOF