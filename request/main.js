const findMyState = () =>{
    const status = document.querySelector('.status')
    const success = (position) =>{
        console.log(position)
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        // document.write("Location Detected");
        // console.log(latitude);
        // console.log(longitude);

        let data = {
            "lat" : latitude,
            "long" : longitude
        }

        fetch('data.php', {
            'method' : 'POST',
            'headers' :{
            'Content-Type' : 'application/json; charset = utf-8'
            },
            'body': JSON.stringify(data)
        })
        // .then(function(response){
        //     return response.json();
        // }).then(function(info){
        //     console.log(info);
            
        // })

        // document.cookie = "selected_item="+latitude;

        // const api = `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguage=en`
        // fetch(api)
        // .then(res => res.json())
        // .then(data => {
        //     status.textContent = data.city
        // })

    }
    const error = () => {
        status.textContent = 'Not allowed';
    }
    navigator.geolocation.getCurrentPosition(success, error);
}
document.querySelector('.find-state').addEventListener('click', findMyState);

