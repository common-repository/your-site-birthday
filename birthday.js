
jQuery(document).ready(function(e) {
	jQuery(".countdown").jCounter({
		date: "17 January 2015 18:00:00",
		timezone: "Asia/Tehran",
		format: "dd:hh:mm:ss",
		callback: true,
		twoDigits: 'on',
		callback: function() {console.log("Counter 1 finished!") }
	});
});
