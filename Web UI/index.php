<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body class="bg-dark text-white">
    <!-- <style>
    div{
      border:solid 1px white;
    }
  </style> -->
    <div class="container-flide justify-content-center align-items-center d-flex flex-column mt-5">
        <center>
            <h2>Sample Data Input</h2>
        </center>
        <form class="mt-5 col-md-6" action="#" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Jhone wick">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Set Location</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New York">
            </div>
            <button type="submit" class="btn btn-outline-light" style="width: 150px;">Set</button>
        </form>

        <div class="container-fluid m-5 table-responsive-sm">
            <h4 class="text-center m-4">Data Table</h4>
            <table class="table table-hover table-dark" style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Time Stamp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th colspan="4">No Data</th>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>