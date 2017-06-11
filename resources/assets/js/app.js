require('./../../../node_modules/jquery/dist/jquery.min.js');
require('./../../../node_modules/jquery-mask-plugin/dist/jquery.mask.min.js');

require('./bootstrap');


$(document).ready(function () {
	$("input[name=sex]").change(function () {
		$( 'input#other' ).prop('disabled', true)
		if ($('input#other_r').prop ('checked')) {
			$( 'input#other' ).prop('disabled', false)
		}
	});

	$("input[name=cep]").change(function () {
		let cep = $( this ).val();
		cep = cep.replace('-', '');
		
		if (cep.length == 8) 
		{
			$.get('https://viacep.com.br/ws/' + cep + '/json/', function (data) {
				$('input#address').val(data.logradouro + ", " + data.unidade)
				$('input#neighbourhood').val(data.bairro)
				$('input#city').val(data.localidade)
				$('input#uf').val(data.uf)
			});
		}
	})
});