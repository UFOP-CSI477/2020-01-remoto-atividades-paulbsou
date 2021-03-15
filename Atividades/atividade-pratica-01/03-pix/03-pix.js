var cont = 0;
var listaOperacao=[];

function limparSelecao(campo){
  while(campo.lenght > 1){
    campo.remove(1);
  }
}

function Transacao(op, valor) {
  this.op = op;
  this.valor = valor;
}

function Saldo (saldo){
  this.saldo = saldo;
}

function preencherBancos(data){

  let banco = document.getElementById('banco');
  limparSelecao(banco);

  for (let index in data){
    const {code, fullName} = data[index];

    let option = document.createElement("option");
    option.value = code;
    option.innerHTML = fullName;

    banco.appendChild(option);
  }
}

function carregarBancos(){

  fetch("https://brasilapi.com.br/api/banks/v1")
  .then(response => response.json())
      .then(data => preencherBancos(data))
      .catch(error => console.error(error))
}

function validarChavePix(campo) {
  let n = campo.value;
  if (n.length === 0) {
    window.alert("Por favor, insira a sua chave pix!")
    campo.classList.add('is-invalid');
    campo.value = "";
    campo.focus();
    return false;
  }
  campo.classList.remove('is-invalid');
  campo.classList.add('is-valid');
  return true;
}

function validarTipoChave() {

  let chaveTipo = document.getElementById("chaveTipo");

      if (chaveTipo.value == "") {
        window.alert("Por favor, selecione o tipo de chave!");
        chaveTipo.focus();
      }else{
        chaveTipo.classList.remove("is-invalid");
        chaveTipo.classList.add("is-valid");
        return true;
      }
  }

  function validarBanco() {

    let banco = document.getElementById("banco");
  
        if (banco.value == "") {
          window.alert("Por favor, selecione o banco!");
          banco.focus();
        }else{
          banco.classList.remove("is-invalid");
          banco.classList.add("is-valid");
          return true;
        }
    }

    function validarTipoOperacao() {

      let op = document.getElementById("op");
    
          if (op.value == "") {
            window.alert("Por favor, selecione o tipo da operação!");
            op.focus();
          }else{
            op.classList.remove("is-invalid");
            op.classList.add("is-valid");
            return true;
          }
    }

    function validarValor(campo) {
      let n = campo.value;
      if (n.length === 0 || isNaN(parseFloat(n))) {
        window.alert("Por favor, insira o valor da transação!")
        campo.classList.add('is-invalid');
        campo.value = "";
        campo.focus();
        return false;
      }
      campo.classList.remove('is-invalid');
      campo.classList.add('is-valid');
      return true;
    }

  function validarData(campo) {

   let n = campo.value;
    var dataAtual = new Date();
    var data= new Date(data);
  
    if (n.length === 0 || data<dataAtual) {
      window.alert("Por favor, uma data válida a partir de hoje.");
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
  
   function inserir() {

    let op = document.getElementById('op');
    let valor = document.getElementById('valor');

    if (validarTipoChave(chaveTipo) && validarChavePix(chavepix) && validarBanco(banco) &&validarTipoOperacao(op) && validarValor(valor) &&validarData(data)) {
        var tabela = document.createElement('tr');
        tabela.insertCell(0).innerHTML = op.value;
        tabela.insertCell(1).innerHTML = valor.value;
    
        const t = new Transacao(op.value, valor.value);
          
        listaOperacao.push(t);
        console.log(listaOperacao);
  
        document.getElementById('tabela').appendChild(tabela);
      }
  }


  function finalizar() {

    let saldo = 0.0;
    let saldoenvio = 0.0;
    let saldorecebimento = 0.0;

   for(cont = 0; cont < listaOperacao.length; cont++){
     if(listaOperacao[cont].op == '01-Envio'){
       saldoenvio += parseFloat(listaOperacao[cont].valor);
       
     }else if (listaOperacao[cont].op == '02-Recebimento'){
       saldorecebimento += parseFloat(listaOperacao[cont].valor);
     
     }
   }

     saldo = saldorecebimento - saldoenvio;
     console.log(saldo);

     var tabela = document.createElement('tr');
     tabela.insertCell(0).innerHTML = saldo;
     console.log(tabela);

     const sld = new Saldo(saldo);
     listaOperacao.push(sld);
     console.log(listaOperacao);
     document.getElementById('SaldoFinal').appendChild(tabela);
 }
    
  function limpar() {
    location.reload();
  }

