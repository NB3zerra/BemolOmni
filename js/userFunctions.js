$('#main-title').text('Home - Bemol Omni');

function logout() {
    var conf = confirm('Deseja realmente sair?');
    if (conf) {
        $.post("controllers/ClienteController.php?action=logoff",
            function (response) {
                if (response.tipo == 'success') {
                    window.location.href = 'login';
                } else {
                    alert(response.mensagem);
                }
            },
            "json"
        );
    }
}

function searchProfile(id = $("#session_id").val()) {

    $.post("./controllers/ClienteController.php?action=search", {
            id: id
        },
        function (response) {
            $.each(response, function (i, v) {
                $("#Nome").text(v.Nome);
                $("#CPF").text(v.CPF);
                $("#Email").text(v.Email);
                $("#CEP").text(v.CEP);
                $("#Logradouro").text(v.Logradouro);
                if (v.Complemento != "") {

                    $("#Complemento").text(v.Complemento);
                }else{
                    $("#Complemento").text('N/A');
                }
                $("#Bairro").text(v.Bairro);
                $("#Cidade").text(v.Cidade);
                $("#UF").text(v.UF);

            });
        },
        "json"
    );
}