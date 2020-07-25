$('#main-title').text('Login - Bemol Omni');

$('#login-form').submit(function (e) {
    e.preventDefault();
    var formulario = document.getElementById("login-form");
    var formData = new FormData(formulario);
    $.ajax({
        type: "POST",
        url: "controllers/ClienteController.php?action=login",
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.tipo == 'success') {
                window.location.href = 'Usuario_Home?view=dashboard'
            } else {
                alert(response.mensagem);
            }
        },
    });
});