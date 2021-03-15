function validarnome(campo) {
  let n = campo.value;
  if (n.length === 0) {
    window.alert("Campo obrigatório, favor preencher corretamente!")
    campo.classList.add('is-invalid');
    campo.value = "";
    campo.focus();
    return false;
  }
  campo.classList.remove('is-invalid');
  campo.classList.add('is-valid');
  return true;
}

function validarUm(campo) {
  let n = campo.value;

  if (n.length === 0 || n.length > 3) {
    window.alert("Campo obrigatório, favor preencher corretamente!");
    campo.classList.add('is-invalid');
    campo.value = "";
    campo.focus();
    return false;
  } else {
    campo.classList.remove('is-invalid');
    campo.classList.add('is-valid');
    return true;
  }
}
function voltar() {
  window.history.back()
}

function cadastrar() {
  let nome = document.getElementById('nome');
  let um = document.getElementById('um');
 
  if (
    validarnome(nome) &&
    validarUm(um))  {
    window.alert("Dados verificados com sucesso ! Produto cadastrado.");
  }
  
}
