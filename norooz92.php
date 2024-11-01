<?php
/*
Plugin Name: شمارش معکوس تا ساعت تولد سايت    
Plugin URI: http://des.takhtenama.ir/
Description:نمایش لحظه شمار  تا ساعت تولد سايت در سایت  
Version: 1.1
Author: navid mirzaaghazadeh
Author URI: http://www.takhtenama.ir
License: takhtenama des
*/
function birthday()
{	
	echo'
	<div class="countdown" style="font:11px tahoma; direction:rtl">
	تا تولد سايت
	<span style="font-weight:bold;" class="days">00</span>
	روز و
	 <span style="font-weight:bold;" class="hours">00</span>
	ساعت و 
	<span style="font-weight:bold;" class="minutes">00</span>
	دقیقه و <span class="seconds">00</span> ثانیه زمان مانده است
	</div>
	';
}

function jCounter()
{
	wp_enqueue_script('jquery');
	wp_register_script('jCounter',plugins_url('/jquery.jCounter.js', __FILE__));
	wp_enqueue_script('jCounter');
}
add_action('wp_enqueue_scripts','jCounter');

function JSbirthday()
{
	wp_enqueue_script('jquery');
	wp_register_script('JSbirthday',plugins_url('/birthday.js', __FILE__));
	wp_enqueue_script('JSbirthday');
}
add_action('wp_enqueue_scripts','JSbirthday');

?>
