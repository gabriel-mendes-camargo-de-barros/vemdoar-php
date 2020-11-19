function populateUFs(){
    const ufSelect = document.querySelector("select[name=uf]")

    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
    //forma mis curta de criar uma função
    .then ( res => res.json() )
    //estrutura de repetição para incluir os valores variaveis dos estados, nesse caso.
    .then ( states => {

        for( const state of states ) {

            ufSelect.innerHTML += `<option value="${state.id}">${state.nome}</option>`
            
        } 
    } )
}

populateUFs()

function getCities(event) {

    const citySelect = document.querySelector("select[name=city]")
    const stateInput = document.querySelector("input[name=state]")

    const ufValue = event.target.value
    const indexOfSelectedState = event.target.selectedIndex
    stateInput.value = event.target.options[indexOfSelectedState].text


    const url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${ufValue}/municipios`

    citySelect.innerHTML = "<option value>Selecione a Cidade</option>"
    citySelect.disabled = true

    fetch(url)
    //forma mais curta de criar uma função
    .then ( res => res.json() )
    //estrutura de repetição para incluir os valores variaveis dos estados, nesse caso.
    .then ( cities => {
        for( const city of cities ) {
            citySelect.innerHTML += `<option value="${city.nome}">${city.nome}</option>`           
        }
        citySelect.disabled = false
    } )
}


document
    .querySelector("select[name=uf]")
    .addEventListener("change", getCities)
