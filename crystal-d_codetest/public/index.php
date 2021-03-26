<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Code Test</title>
    <script src="vendors/jQuery.js"></script>
    <script src="scripts/client.js"></script>
    <link rel="stylesheet" href="vendors/bootstrap.min.css" />
    <link rel="stylesheet" href="scripts/styles/style.css" />
</head>
<body>
    <?php file_get_contents('../public/scripts/get-api-data.php'); ?>
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
                        <th scope="col">Name</th>
                        <th scope="col">Height</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Hobby</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($peopleArray as $employee) { ?>
                            <td><?php echo $employee->name ?></td>
                            <td><?php echo $employee->height ?></td>
                            <td><?php echo $employee->dob ?></td>
                            <td><?php echo $employee->hobby ?></td>
                            <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>