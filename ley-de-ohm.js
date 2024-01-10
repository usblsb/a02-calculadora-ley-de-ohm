jQuery(document).ready(function ($) {

	$('#borrar').on('click', function () {
    $('#voltaje').val('');
    $('#corriente').val('');
    $('#resistencia').val('');
    $('.resultado').html('');
});

    $('#calcular').on('click', function () {
        var voltaje = parseFloat($('#voltaje').val());
        var corriente = parseFloat($('#corriente').val());
        var resistencia = parseFloat($('#resistencia').val());

        if (!isNaN(voltaje) && !isNaN(corriente)) {
            resistencia = voltaje / corriente;
            $('.resultado').html('Resistencia (R): ' + resistencia.toFixed(2) + ' Ω');
        } else if (!isNaN(voltaje) && !isNaN(resistencia)) {
            corriente = voltaje / resistencia;
            $('.resultado').html('Corriente (I): ' + corriente.toFixed(2) + ' A');
        } else if (!isNaN(corriente) && !isNaN(resistencia)) {
            voltaje = corriente * resistencia;
            $('.resultado').html('Voltaje (V): ' + voltaje.toFixed(2) + ' V');
        } else {
            $('.resultado').html('Por favor, ingrese dos valores para calcular el tercero.');
        }
    });
});

