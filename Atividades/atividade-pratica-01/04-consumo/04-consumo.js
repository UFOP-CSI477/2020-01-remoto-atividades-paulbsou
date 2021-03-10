let listaCarros = [];
let listaInfoCarros = [];
let cont = 0;

//teste
//teste
function Veiculos(combustivel, quilometros, resultado) {
  this.combustivel = combustivel;
  this.quilometros = quilometros;
  this.resultado = resultado;
}
//informações dos veículos
function InfoVeiculos(somacomb, somakmrodado, mediacons, mediakmrodado, mediakml) {
  this.somacomb = somacomb;
  this.somakmrodado = somakmrodado;
  this.mediacons = mediacons;
  this.mediakmrodado = mediakmrodado;
  this.mediakml = mediakml;

}

function ValidarCombustivel(campo) {
  let n = campo.value;
  if (n.length == 0 || isNaN(parseInt(n))) {
    window.alert("Por favor, inserir a quantidade de combustível!");
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

function ValidarQuilometros(campo) {
  let n = campo.value;

  if (n.length == 0 || isNaN(parseInt(n))) {
    window.alert("Por favor, inserir a quantidade de combustível!");
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


function Adicionar() {

  let combustivel = document.getElementById('QtdCbt');
  console.log(combustivel.value);
  let quilometros = document.getElementById('QtdKM');
  console.log(quilometros.value);
  let resul = (parseFloat(document.getElementById('QtdKM').value) / parseFloat(document.getElementById('QtdCbt').value));
  let resultado = resul.toFixed(2);
  console.log(resultado);

  if (
    ValidarCombustivel(QtdCbt) &&
    ValidarQuilometros(QtdKM)) {
    window.alert("Veículo registrado!");
    var tabela = document.createElement('tr');
    tabela.insertCell(0).innerHTML = combustivel.value;
    tabela.insertCell(1).innerHTML = quilometros.value;
    tabela.insertCell(2).innerHTML = resultado;

    const car = new Veiculos(combustivel.value, quilometros.value, resultado);
    listaCarros.push(car);
    console.log(listaCarros)

    document.getElementById('dadosTabela').appendChild(tabela);
  }
}

function Finalizar() {

  let somacomb = 0.0;
  let somakmrodado = 0.0;

  console.log(listaCarros);

  for(cont = 0; cont < listaCarros.length; cont++){
    somacomb += parseFloat(listaCarros[cont].combustivel);
    somakmrodado += parseFloat(listaCarros[cont].quilometros);
  }
  console.log(somacomb);
  console.log(somakmrodado);
  
    let sc = somacomb.toFixed(2);
    let sk = somakmrodado.toFixed(2);

    let mediacons = somacomb/listaCarros.length;
    let md = mediacons.toFixed(2);
    let mediakmrodado = somakmrodado/listaCarros.length;
    let mdkm = mediakmrodado.toFixed(2);
    let mediakml = parseFloat(somakmrodado / somacomb);
    let mdkml = mediakml.toFixed(2);
  
  var tabela = document.createElement('tr');
  tabela.insertCell(0).innerHTML = sc;
  tabela.insertCell(1).innerHTML = sk;
  tabela.insertCell(2).innerHTML = md;
  tabela.insertCell(3).innerHTML = mdkm;
  tabela.insertCell(4).innerHTML = mdkml;

  const info = new InfoVeiculos(somacomb, somakmrodado, mediacons, mediakmrodado, mediakml);

  listaCarros.push(info);
  console.log(listaCarros)

  document.getElementById('tabelaresult').appendChild(tabela);
}


function Reiniciar() {
  location.reload();
}