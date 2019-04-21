import {API_URL, APP_ID} from './config'

export class Api{
    static queryWeather(city) {
        return fetch(`${API_URL}/weather?q=${city}&appid=${APP_ID}&units=metric`)
                .then(response => response.json())
    }
}