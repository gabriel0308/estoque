$( document ).ready(function()
    {
        //inicializa Inputs

        $(".dropdown-trigger").dropdown();
        $('select').formSelect();
        $('.sidenav').sidenav();

        //inicializa Modal
        $('.modal').modal();

        //inicializa dataTable

            $('#dataTable').DataTable();

    }   
);