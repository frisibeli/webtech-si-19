export class QueryResultComponent{
    constructor(data){
        let {name, main, weather} = data;
        this.temperature = main.temp;
        this.humidity = main.temp;
        this.city = name;
        this.description = weather[0];
    }

    render(){
        let parent = document.createElement('div');
        parent.className += "query-result-component"

        let temperatureContainer = document.createElement('div');
        temperatureContainer.className += "temp-container";
        temperatureContainer.innerHTML = `${this.temperature}°C`

        parent.append(temperatureContainer)
        
        return parent;
    }
}