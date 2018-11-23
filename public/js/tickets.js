$(document).ready(function () {

    $('a#edit').on('change', function () {

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
                    $.each(data, function (fabrica, value) {

                        console.log(value.IdFabricante);
                        console.log(value.NomeFabricante);

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

});