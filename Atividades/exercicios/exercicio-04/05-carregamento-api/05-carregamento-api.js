function limparSelect(campo) {
  while( campo.length > 1 ) {
      campo.remove(1);
  }
}


function preencherSelectRegiao(data){

  let regiao = document.getElementById("regiao");
  limparSelect(regiao);

  for (let index in data){
    const {id, nome} = data [index];

    let option = document.createElement("option");
    option.value = id;
    option.innerHTML = nome;

    regiao.appendChild(option);
  }

}
function preencherSelectEstados(data) {

  let estados = document.getElementById("estados");
  limparSelect(estados);

  for( let index in data ) {
      const { id, nome, sigla } = data[index];

      let option = document.createElement("option");
      option.value = id;
      option.innerHTML = `${nome} - ${sigla}`;

      estados.appendChild(option);
  }
}

function preencherSelectCidades(data) {

  let cidades = document.getElementById("cidades");
  limparSelect(cidades);

  for( let index in data ) {
      //const id = data[index].id;
      const { id, nome } = data[index];

      let option = document.createElement("option");
      option.value = id;
      option.innerHTML = nome;

      cidades.appendChild(option);

  }

}

function carregarRegiao() {

  fetch("https://servicodados.ibge.gov.br/api/v1/localidades/regioes")
      .then(response => response.json())
      .then(data => preencherSelectRegiao(data))
      .catch(error => console.error(error))

}

function carregarEstados(){

  const regiao = document.getElementById('regiao');
  const regiao_index = regiao.selectedIndex;
  const regiao_id = regiao.options[regiao_index].value;

  const estados = document.getElementById("estados");
  limparSelect(estados);

  if (regiao_id == ""){
      return;
  }

  const url_estados = `https://servicodados.ibge.gov.br/api/v1/localidades/regioes/${regiao_id}/estados`;

  fetch (url_estados)
  .then(response => response.json())
  .then(data => preencherSelectEstados(data))
  .catch (error => console.error(error))

}

function carregarCidades() {

  const estados = document.getElementById("estados");
  const estado_index = estados.selectedIndex;
  const estado_id = estados.options[ estado_index ].value;

  const cidades = document.getElementById("cidades");
  limparSelect(cidades);

  if ( estado_id == "" ) {
      return;
  }

  const url_cidades = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estado_id}/municipios`;

  fetch(url_cidades)
      .then(response => response.json())
      .then(data => preencherSelectCidades(data))
      .catch(error => console.error(error))

}