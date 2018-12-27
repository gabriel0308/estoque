$(document).ready(function () {

    //textArea Cadastro Computador

    $('#ObservacaoComp').val('');
    M.textareaAutoResize($('#ObservacaoComp'));

    $('select').formSelect();

    $('select[name="IdTipo"]').on('change', function () {


        var idTipo = $(this).val();
        if (idTipo) {

            $.ajax({
                url: 'cadastrarComputador/ajax/tipo/' + idTipo,
                type: "get",
                dataType: "json",
                success: function (data) {

                    $('#DivIdFabricante').removeAttr('hidden');
                    $('select[name="IdFabricante"]').empty();
                    $('select[name="IdModelo"]').empty();
                    $('select[name="IdFabricante"]').append('<option value=""></option>');
                    $.each(data, function (fabricante , value) {

                        //$('select[name="IdFabricante"]').append('<option value="'+ value.IdFabricante + '">' + value.NomeFabricante + '</option>');
                        $('select[name="IdFabricante"]').append($("<option>").attr('value', value.IdFabricante).text(value.NomeFabricante));

                    });

                    $('select').formSelect();

                }
                //$("#IdFabricante").wrap("<div class='col-md-6' id='lblFabricante'></div>")
            });

        } else {
            $('select[name="IdFabricante"]').empty();
            $('select[name="IdModelo"]').empty();
        }

    });


    $('select[name="IdFabricante"]').on('change', function () {


        var idTipo = $('select[name="IdTipo"]').val();
        var idFabricante = $(this).val();
        if (idTipo) {
            if (idFabricante) {

                $.ajax({
                    url: 'cadastrarComputador/ajax/tipo/' + idTipo + '/fabricante/' + idFabricante,
                    type: "get",
                    dataType: "json",
                    success: function (data) {
                        console.log(data);

                        $('#DivIdModelo').removeAttr('hidden');
                        $('select[name="IdModelo"]').empty();
                        $('select[name="IdModelo"]').append('<option value=""></option>');
                        $.each(data, function (modelo, value) {

                            console.log(value.IdModelo);
                            console.log(value.NomeModelo);

                            //$('select[name="IdFabricante"]').append('<option value="'+ value.IdFabricante + '">' + value.NomeFabricante + '</option>');
                            $('select[name="IdModelo"]').append($("<option>").attr('value', value.IdModelo).text(value.NomeModelo));

                        });

                        $('select').formSelect();

                    }
                    //$("#IdFabricante").wrap("<div class='col-md-6' id='lblFabricante'></div>")
                });

            } else {
                $('select[name="IdModelo"]').empty();
            }
        } else {
            $('select[name="IdFabricante"]').empty();
        }

    });

});