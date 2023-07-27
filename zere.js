function formatarCPF() {
    var input = document.getElementById("cpf");
    var cpf = input.value.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); // Insere um ponto após os primeiros 3 dígitos
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); // Insere um ponto após os próximos 3 dígitos
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); // Insere um traço antes dos últimos 2 dígitos
    input.value = cpf;
  }
function formatarCEP() {
    var input = document.getElementById("cep");
    var cep = input.value.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
    cep = cep.replace(/(\d{5})(\d)/, "$1-$2"); // Insere um traço após os primeiros 5 dígitos
    input.value = cep;
  }
  function validarEmail() {
    var input = document.getElementById("emailInput");
    var error = document.getElementById("emailError");

    if (input.checkValidity()) {
      // O e-mail é válido
      error.style.display = "none";
      alert("E-mail válido: " + input.value);
    } else {
      // O e-mail é inválido
      error.style.display = "block";
    }
  }