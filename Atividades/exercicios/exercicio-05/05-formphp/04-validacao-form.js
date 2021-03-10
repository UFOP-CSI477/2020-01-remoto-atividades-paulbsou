function validarString(campo) {
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

function validarRG(campo) {
  let n = campo.value;

  if (n.length < 8 || n.length > 10 || isNaN(parseInt(n))) {
    window.alert("Por favor, verifique o RG, inserir apenas números!");
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

function validarCPF(campo) {
  let n = campo.value;

  if (n.length < 11 || n.length > 11 || isNaN(parseInt(n))) {
    window.alert("Por favor, verifique o CPF. Inserir apenas números!");
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

function validarDN(campo) {

  let n = campo.value;
  var dataAtual = new Date();
  var dataNascimento = n.split("-");
  /*var idade = (dataAtual.getFullYear() - dataNascimento.getFullYear());*/

  if (n.length === 0 || dataNascimento[0] > (dataAtual.getFullYear()-18) || dataNascimento > dataAtual) {
    window.alert("Por favor, informe sua data de nascimento! Necessário ter mais de 18 anos.");

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


function validarEC() {

  let estadocivil = document.getElementsByName('estadocivil');
  let checked = false;

  for(let i=0;i< estadocivil.length;i++){
    if(estadocivil[i].checked){
      checked = true;
      return true;
    }
  }
  if(!checked){
    estadocivil[0].focus();
    window.alert('Por favor, selecione o estado civil.');
    }
  }
  

function validarTelefone(campo) {

  let n = campo.value;
  if (n.length < 10 || n.length > 11 || isNaN(parseInt(n))) {
    window.alert("Por favor, verifique o telefone. Digite seu número de telefone no formato (xx)xxxx-xxxx");
    campo.classList.add("is-invalid");
    campo.value = "";
    campo.focus();
    return false
  } else {
    campo.classList.remove("is-invalid");
    campo.classList.add("is-valid");
    return true;
  }
}

function validarEmail() {

  var simbolos = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  
  if(!simbolos.test(document.getElementById("email").value)){
  alert('Por favor, digite o e-mail corretamente.');
  document.getElementById("email").focus();
  return false
  }else {
    document.getElementById("email").classList.remove("is-invalid");
    document.getElementById("email").classList.add("is-valid");
    return true;
  }
}

function cadastrar() {
  let nome = document.getElementById('nome');
  let endereco = document.getElementById('endereco');
  let rg = document.getElementById('rg');
  let cpf = document.getElementById('cpf');
  let nascimento = document.getElementById('nascimento');
  let nacionalidade = document.getElementById('nacionalidade');
  let estadocivil = document.getElementsByName('estadocivil');
  let telefone = document.getElementById('telefone');
  let email = document.getElementById('email');


  if (
    validarString(nome) &&
    validarString(endereco) &&
    validarRG(rg) &&
    validarCPF(cpf) &&
    validarDN(nascimento) &&
    validarString(nacionalidade) &&
    validarEC(estadocivil) &&
    validarTelefone(telefone) &&
    validarEmail(email))  {
    window.alert("Dados verificados com sucesso ! Cadastro realizado.")
  }
}
