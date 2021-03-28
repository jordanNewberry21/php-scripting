$(document).ready(readyNow);

function readyNow () {
    getApiData();
}

function getApiData () {
    let myVar = {};
    $.ajax({
        method: 'GET',
        url: 'http://localhost:8888/php-scripts/get-api-data.php'
    }).then( (response) => {
        console.log(response)
        myVar = response;
        renderData(myVar);
    }).catch((error) => {
        console.log('Error!!', error);
        alert('Something went wrong.');
    });
}

function renderData (array) {
    console.log(array);
    for (let i = 1; i < array.length - 1; i++) {
        console.log(array[i]);
    }
}