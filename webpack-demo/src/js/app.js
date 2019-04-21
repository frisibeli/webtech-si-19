import {Api} from './api'
Api.queryWeather("Sofia").then(result => {
    console.log(result);
})