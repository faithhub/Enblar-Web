(function($) {
	// Email Validation
	$.fn.conformyEmailValidate     = function () {
		var emailRegexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return emailRegexp.test(String($(this).val()));
	}
	// Phone Validation
	$.fn.conformyPhoneValidate     = function () {
		var phoneRegexp = /^[0-9]+$/;
			return phoneRegexp.test(Number($(this).val()));
	}
})(jQuery);