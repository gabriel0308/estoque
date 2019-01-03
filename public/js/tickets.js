$(document).ready(function () 
{

    $('input:text.search').on('keyup', function(){

        var hostnameComp = $('input:text.search').val();

        if(hostnameComp){
            $.ajax({
                url: 'listagemComputadores/ajax/search/' + hostnameComp,
                type: "get",
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    if(data){
                        console.log('teste')
                        $('div.lista-notebook').removeAttr('hidden');
                        $('div.lista-notebook').empty();
                        $.each(data, function(count, value){

                        var radio = $('<div class="input-field col s3"><p><label><input name="IdComp" id="'+ value.IdComp + '" type="radio" value="'+ value.IdComp +'"/><span>'+value.HostnameComp+'</span></label><p></div>');
                        console.log(radio);
                        var divRadio = document.getElementsByClassName("divRadio")
                        divRadio.append(radio);

                        });
                    }
                    else
                    {
                        
                        $('div.lista-notebook').removeAttr('hidden');
                        $('div.lista-notebook').empty();
                        var erro = $('<h3>ERROU!!</h3>');
                        $('div.lista-notebook').append(erro);

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