document.addEventListener9("DOMcontentLoaded" , () => {
    const apikey = "https: //api.weatherapi.com/v1/current.json?";
    const city = "Ahemdabad";
    const url = 'https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=$(apikey)&units=metric';
    fetch(url).then(Response => Response.json()).then(data => {
        const weather = 'city: ${city}, temp:{data.main.temp}celsios condition: ${data.weather[0].main}';
        document.getElementById("weather-info").textContent = weather;
        
    })
    .catch(err => {
        document.getElementById("weather-info").textContent = "Unable to fetch weather . ";
    });
    
});