require('./../../../node_modules/jquery/dist/jquery.min.js');
require('./../../../node_modules/jquery-mask-plugin/dist/jquery.mask.min.js');

require('./bootstrap');

$(document).ready(function () {
	$("input[name=sex]").change(function () {
		$( 'input#other' ).prop('disabled', true)
		if ($('input#other_r').prop ('checked')) {
			$( 'input#other' ).prop('disabled', false)
		}
	})
});