$( document ).ready(function()
    {
        $(".dropdown-trigger").dropdown();
        $('select').formSelect();
        $('.sidenav').sidenav();
        $('#ObservacaoComp').val('');
        M.textareaAutoResize($('#ObservacaoComp'));
    }   
);