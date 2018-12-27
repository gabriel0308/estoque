$(document).ready(function () 
{

    $('#HostnameCompAjax').on('keyup', function(){

        var hostnameComp = $('#HostnameCompAjax').val();

        if(hostnameComp){
            $.ajax({
                url: 'listagemComputadores/ajax/search/' + hostnameComp,
                type: "get",
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    if(data){
                        console.log('teste')
                        $('#divRadio').removeAttr('hidden');
                        $('#divRadio').empty();
                        $.each(data, function(count, value){

                        var radio = $('<div class="input-field col s3"><p><label><input name="HostnameComp" id="'+ value.IdComp + '" type="radio" value="'+ value.IdComp +'"/><span>'+value.HostnameComp+'</span></label><p></div>');
                        console.log(radio);
                        $('#divRadio').append(radio);

                        });
                    }
                    else
                    {
                        
                        $('#divRadio').removeAttr('hidden');
                        $('#divRadio').empty();
                        var erro = $('<h3>ERROU!!</h3>');
                        $('#divRadio').append(erro);

                    }

                }
            });
        }
        else{

            
            $('#divRadio').removeAttr('hidden');
            $('#divRadio').empty();

        }

    });

});