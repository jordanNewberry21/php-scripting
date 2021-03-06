<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Code Test</title>
    <script src="vendors/jQuery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js" type="text/javascript"></script>
    <script src="scripts/client.js"></script>
    <link rel="stylesheet" href="vendors/bootstrap.min.css" />
    <link rel="stylesheet" href="scripts/styles/style.css" />
</head>
<body>
    <header>
        <h1>
            Crystal-D Employee Information List
        </h1>
    </header>
    <main>
        <div>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Height</th>
                        <th>Date of Birth</th>
                        <th>Hobby</th>
                    </tr>
                </thead>
                <tbody id="employee-table">
                    <tr>
                        <!-- jQuery will fill this in -->
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>