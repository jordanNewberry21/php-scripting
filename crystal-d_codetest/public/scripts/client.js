$(document).ready(readyNow);

function readyNow () {
    getApiData();
}

function getApiData () {
    $.ajax({
        method: 'GET',
        url: 'http://localhost:8888/php-scripts/get-api-data.php'
    }).then( (response) => {
        console.log(response)
        let myObject = JSON.parse(response)
        console.log('My Object is.................... ---->', myObject);
        renderData(myObject);
    }).catch((error) => {
        console.log('Error!!', error);
        alert('Something went wrong.');
    });
}

function renderData (array) {
    console.log(array);
    $('#employee-table').empty()
    for (let i = 0; i < array.length; i++) {
        $('#employee-table').append(`
            <tr>
                <td>
                    ${array[i].name}
                </td>
                <td>
                    ${array[i].height}
                </td>
                <td>
                    ${array[i].dob}
                </td>
                <td>
                    ${array[i].hobby}
                </td>
            </tr>
        `)
    }
}