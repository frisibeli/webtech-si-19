import {Api} from './api';
import {QueryResultComponent} from './queryResultComponent';

const cityInput = document.querySelector("#city");
const btn = document.querySelector("#get-weather");
const queryResults = document.querySelector("#query-results");

btn.addEventListener('click', () => {
    let cityName = cityInput.value;
    Api.queryWeather(cityName).then(handleResult).catch(handleError)
})

function handleResult(data){
    let queryResult = new QueryResultComponent(data);
    
    queryResults.appendChild(queryResult.render());
}

function handleError(error){
    console.error(error);
}