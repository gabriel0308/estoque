$(document).on("click", ".modal-trigger", function () 
{

    console.log($(this).data('id'));

    var id = $(this).data('id');

    $('#HostnameCompAjax'.concat(id)).on('keyup', function(){

        var hostnameComp = $('#HostnameCompAjax'.concat(id)).val();

        console.log(hostnameComp);

        if(hostnameComp){
            $.ajax({
                url: 'listagemComputadores/ajax/search/' + hostnameComp,
                type: "get",
                dataType: "json",
                success: function (data) {
                    if(data){
                        $('#divRadio'.concat(id)).removeAttr('hidden');
                        $('#divRadio'.concat(id)).empty();
                        $.each(data, function(count, value){

                        var radio = $('<div class="input-field col s3"><p><label><input name="IdComp" id="'+ value.IdComp + '" type="radio" value="'+ value.IdComp +'"/><span>'+value.HostnameComp+'</span></label><p></div>');
                        $('#divRadio'.concat(id)).append(radio);

                        });
                    }
                    else
                    {
                        
                        $('#divRadio'.concat(id)).removeAttr('hidden');
                        $('#divRadio'.concat(id)).empty();
                        var erro = $('<h3>ERROU!!</h3>');
                        $('#divRadio'.concat(id)).append(erro);

                    }

                }
            });
        }
        else{

            
            $('div.lista-notebook').removeAttr('hidden');
            $('div.lista-notebook').empty();

        }

    });

});