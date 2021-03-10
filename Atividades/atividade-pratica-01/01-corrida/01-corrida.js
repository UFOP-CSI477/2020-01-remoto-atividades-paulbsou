var listaCompetidores = [];
var NParticipantes = 0;

function Competicao(largada, competidor, tempo) {
  this.largada = largada;
  this.competidor = competidor;
  this.tempo = tempo;
}

function verificarCompetidor(campo) {
  let n = campo.value;
  if (n.length == 0) {
    window.alert("Por favor, insira o nome do competidor!");
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

function verificarTempo(campo) {
  let n = campo.value;
  if (n.length == 0 || parseInt(n) <= 0) {
    window.alert("Por favor, insira o tempo de prova do competidor!");
    campo.classList.add('is-invalid');
    campo.value = "";
    campo.focus();
    return false
  } else {
    campo.classList.remove('is-invalid');
    campo.classList.add('is-valid');
    return true;
  }
}


function inserirCompetidor() {

  var competidor = document.getElementById('competidor');
  var tempo = document.getElementById('tempo');

  /*Considerar o padrão de até 06 pessoas competindo ao mesmo tempo*/
  if (NParticipantes < 6) {
    if (verificarCompetidor(competidor) && verificarTempo(tempo)) {
      NParticipantes = NParticipantes + 1;
      var tabela = document.createElement('tr');
      tabela.insertCell(0).innerHTML = NParticipantes;
      tabela.insertCell(1).innerHTML = competidor.value;
      tabela.insertCell(2).innerHTML = tempo.value;

      const compet = new Competicao(NParticipantes, competidor.value, tempo.value);
      listaCompetidores.push(compet);

      document.getElementById('dadosTabela').appendChild(tabela);
      document.getElementById('Resultados').disabled=false;

      competidor.value = "";
      tempo.value = "";
    }
  } if (NParticipantes == 6) {
    window.alert('Número de participantes atingido!');
    return false;
  }
}

function ordenarPorTempo(tempo1, tempo2) {
  return tempo1.tempo - tempo2.tempo;
}

function checarResultado() {


  if(listaCompetidores.length> 0){

    listaCompetidores.sort(ordenarPorTempo);
    
    var inicio = listaCompetidores[0].tempo;

    for(var cont = 0; cont < listaCompetidores.length; cont++){
      var tabela = document.createElement('tr');
      tabela.insertCell(0).innerHTML = cont +1;
      tabela.insertCell(1).innerHTML = listaCompetidores[cont].largada;
      tabela.insertCell(2).innerHTML = listaCompetidores[cont].competidor;
  
      tabela.insertCell(3).innerHTML = listaCompetidores[cont].tempo;

      if(listaCompetidores[cont].tempo=== inicio){
        tabela.insertCell(4).innerHTML = "Vencedor(a)!"
      } else {
        tabela.insertCell(4).innerHTML = "---"
      }

      document.getElementById('tabelaResultados').appendChild(tabela);
      document.getElementById('Nova_apuracao').disabled = false;
    }
  }
}

function novaApuracao(){
  location.reload();
}