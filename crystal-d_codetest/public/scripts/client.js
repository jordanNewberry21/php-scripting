$(document).ready(readyNow);

function readyNow () {
    getApiData();
    
    $('th').click(function(){
        var table = $(this).parents('table').eq(0)
        var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
        this.asc = !this.asc
        if (!this.asc){rows = rows.reverse()}
        for (var i = 0; i < rows.length; i++){table.append(rows[i])}
    })
    function comparer(index) {
        return function(a, b) {
            var valA = getCellValue(a, index), valB = getCellValue(b, index)
            return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
        }
    }
    function getCellValue(row, index){ return $(row).children('td').eq(index).text() }
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

