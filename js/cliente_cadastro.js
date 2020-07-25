$('#main-title').text('Cadastro - Bemol Omni');
//mascarar o cep e o cpf
$("#CEP").mask("99999-999");
$("#CPF").mask("999.999.999-99");

getUf();

$('#EmailConf').on('keyup', function () {
    validarCampos('Email', 'E-mails não coincidem')
})

$('#SenhaConf').on('keyup', function () {
    validarCampos('Senha', 'Senhas não coincidem')
})



//função para adicionar o cliente ao banco de dados
$("#cadastro_form").submit(function (e) {
    e.preventDefault();
    var formulario = document.getElementById("cadastro_form");
    var formData = new FormData(formulario);
    if (validarCampos('Senha', 'Senhas não coincidem') && validarCampos('Email', 'E-mails não coincidem') && validarCep()) {
        $.ajax({
            type: "POST",
            url: "controllers/ClienteController.php?action=cadastro",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            success: function (response) {
                alert(response.mensagem);
                if (response.tipo == 'success') {
                    window.location.href = 'login'
                }
            },
        });
    }
});

//buscar CEP
$("#CEP").on("keyup", function () {
    //verificar se o cep digitado possui 8 dígitos:
    validarCep()
});

function buscarCep(str) {
    var cep = str.replace(/\D/g, ""); //remover caracteres especiais
    $("#Logradouro").val("...").attr("disabled", "disabled");
    $("#Bairro").val("...").attr("disabled", "disabled");
    $("#Cidade").val("...").attr("disabled", "disabled");
    $("#Complemento").val("...").attr("disabled", "disabled");
    $("#UF").val("...").attr("disabled", "disabled");
    //Consulta o webservice viacep.com.br/
    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (
        dados
    ) {
        if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            $("#Logradouro").removeAttr("disabled", "disabled").val(dados.logradouro);
            $("#Bairro").removeAttr("disabled", "disabled").val(dados.bairro);
            $("#Cidade").removeAttr("disabled", "disabled").val(dados.localidade);
            $("#Complemento")
                .removeAttr("disabled", "disabled")
                .val(dados.complemento);
            $("#UF").removeAttr("disabled", "disabled").val(dados.uf);
        } //end if.
        else {
            //CEP pesquisado não foi encontrado.
            $("#Logradouro").removeAttr("disabled", "disabled").val(null);
            $("#Bairro").removeAttr("disabled", "disabled").val(null);
            $("#Cidade").removeAttr("disabled", "disabled").val(null);
            $("#Complemento").removeAttr("disabled", "disabled").val(null);
            $("#UF").removeAttr("disabled", "disabled").val(null);
            alert("CEP não encontrado.");
        }
    });
}

//preencher select de uf`s
function getUf() {
    $.get("https://servicodados.ibge.gov.br/api/v1/localidades/estados",
        function (response) {
            $.each(response, function (i, v) {
                $('#UF').append(
                    '<option value="' + v.sigla + '">' + v.nome + '</option>'

                )
            });
        },
        "json"
    );
}

function validarCampos(id, texto) {
    var campo = $('#' + id).val()
    var campoconf = $('#' + id + 'Conf').val()

    if (campo === campoconf) {
        $('#' + id + 'Warn').empty()
        return true
    } else {
        $('#' + id + 'Warn')
            .empty()
            .html('<span class="input-warn">' + texto + '</span>');
        $('#' + id + 'Conf').focus()
        return false;
    }

}

function validarCep() {
    var txtcep = $("#CEP").val();
    console.log(txtcep);
    if (txtcep.length < 9 || txtcep.length == 0) {
        $("#cepWarn")
            .empty()
            .html('<span class="input-warn">insira o CEP por completo!</span>');
        $("#CEP").focus()
        return false;
    } else {
        $("#cepWarn").empty();
        buscarCep(txtcep);
        return true
    }
}