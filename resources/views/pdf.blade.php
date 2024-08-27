<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Hello, world!</title>
</head>

<body>


    <div class="contenedor mt-2">
        <div class="container">

            <div class="col-md-12">
                <table class="table  ">
                    <thead>
                        <tr>
                            <th scope="col"># ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Fecha </th>
                            <th scope="col">Hora</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach($users as $item)
                        <tr>

                            <td scope="row">FB{{ $item['id'] }} </td>
                            <td>{{ $item['name'] }} </td>
                            <td>{{ $item['email'] }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format(' i:s A') }}</td>
                       

                            
                        </tr>


                    </tbody> @endforeach
                </table>
            </div>
        </div>

    </div>
</body>

</html>