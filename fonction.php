<?php 
// Pre printr /pre
function pr($users)
{
	echo '<pre style="text-align: left; font-size: 15px;">';
	print_r($users);
	echo '</pre>';
}