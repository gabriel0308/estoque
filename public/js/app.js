$( document ).ready(function()
    {
        //inicializa Inputs

        $(".dropdown-trigger").dropdown();
        $('select').formSelect();
        $('.sidenav').sidenav();

        //textArea Cadastro Computador

        $('#ObservacaoComp').val('');
        M.textareaAutoResize($('#ObservacaoComp'));

        //inicializa Modal Computador
        

    }   
);