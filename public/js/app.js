$( document ).ready(function()
    {
        //inicializa Inputs

        $(".dropdown-trigger").dropdown();
        $('select').formSelect();
        $('.sidenav').sidenav();
        $('.modal').modal();

        //textArea Cadastro Computador

        $('#ObservacaoComp').val('');
        M.textareaAutoResize($('#ObservacaoComp'));

        //inicializa Modal Computador
        

    }   
);