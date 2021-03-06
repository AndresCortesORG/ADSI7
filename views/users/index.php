<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm table-striped ">
                        <thead>
                        <tr class="bg-secondary">
                            <th>NOMBRES</th>
                            <th>APELLIDOS</th>
                            <th>CORREO</th>
                            <th>OPCIONES</th>
                        </tr>
                        </thead>
                  <?php   foreach (parent::get_all() as $result){ ?>
                        <tbody>
                        <tr>
                            <td><?php  echo $result->names ?></td>
                            <td><?php echo $result->lastnames ?></td>
                            <td><?php echo $result->email ?></td>
                            <td><?php echo $result->password ?></td>

                        </tr>
                        </tbody>
                  <?php   } ?>
                    </table>
                    <a href="?clase=Users&method=create">Crear nuevo usuario</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>