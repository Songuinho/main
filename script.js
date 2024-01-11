let infos = document.querySelector('section');

var capitalElement = document.createElement('div');
var flagElement = document.createElement('div');
var countryElement = document.createElement('div');
var continentElement = document.createElement('div');
var superficieElement = document.createElement('div');
var langueElement = document.createElement('div');
var populationElement = document.createElement('div');

const inputElement = document.querySelector('.text');
inputElement.addEventListener('keypress', function(event) {
    // Vérifiez si la touche pressée est "Enter"
    if (event.keyCode === 13) {
      search();
    }
  });


function search() {
    let textCountry = document.querySelector(".text").value
    countryElement.innerHTML = `<span>pays<span/><br><p>${textCountry}</p>`
    
    let url = "https://restcountries.com/v3.1/name/" + textCountry;
    
    fetch(url)
        .then(res => res.json()
            .then(data => {
                console.log(data)
                const country = data[0];
                const capital = country.capital;
                const continent = country.continents;
                const flag = country.flags.svg;
                const superficie = country.area + " km²";
                const langue = country.languages.fra;
                const population = country.population + " habitants";
                
                capitalElement.innerHTML = `<span>capital<span/><br><p>${capital}</p>`
                continentElement.innerHTML = `<span>continent<span/><br><p>${continent}</p>`
                flagElement.innerHTML = `<span>drapeau<span/><br><img src=${flag} />`
                superficieElement.innerHTML = `<span>superficie<span/><br><p>${superficie}<p/>`
                langueElement.innerHTML = `<span>langue<span/><br><p>${langue}<p/>`
                populationElement.innerHTML = `<span>population<span/><br><p>${population}<p/>`

                infos.appendChild(countryElement)
                infos.appendChild(continentElement)
                infos.appendChild(capitalElement)
                infos.appendChild(superficieElement)
                // infos.appendChild(langueElement)
                infos.appendChild(populationElement)
                infos.appendChild(flagElement)
            }))

}
