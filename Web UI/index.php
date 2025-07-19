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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-dark text-white">

    <?php
    require_once './config.php';
    if (isset($_POST['setdata'])) {

        $name = $_POST["name"];
        $location = $_POST["location"];

            $query_insert = "INSERT INTO `users` (`name`, `location`) VALUES ('$name', '$location');";
            $query_run = mysqli_query($Connector, $query_insert);

            echo "
            <script>
            Swal.fire(
                'Data Set!',
                'Data has been successfully set.',
                'success'
              ).then(function() {
                window.location.href = './index.php';
            })
            </script>
            ";
    }
    if (isset($_GET['del'])) {

        $id = $_GET["del"];
        
        $sql = "DELETE FROM `users` WHERE `id` = $id;";
        $result = mysqli_query($Connector, $sql);
        
            echo "
            <script>
            Swal.fire(
                'Deleted!',
                'Data has been successfully Deleted.',
                'success'
              ).then(function() {
                window.location.href = './index.php';
            })
            </script>
            ";
    }
    ?>
    <div class="container-flide justify-content-center align-items-center d-flex flex-column mt-5">
        <center>
            <h2>Sample Data Input</h2>
        </center>
        <form class="mt-5 col-md-6" method="post">
            <div class="form-group">
                <label for="exampleInputName">Enter Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputName" required
                    placeholder="Jhone wick">
            </div>
            <div class="form-group">
                <label for="exampleInputLocation">Set Location</label>
                <input type="text" class="form-control" name="location" id="exampleInputLocation" required
                    placeholder="New York">
            </div>
            <button type="submit" name="setdata" class="btn btn-outline-light" style="width: 150px;">Set</button>
        </form>

        <div class="container-fluid m-5 table-responsive-sm">
            <h4 class="text-center m-4">Data Table</h4>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Time Stamp</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
        $sql = "SELECT * FROM `users`;";
        $result = mysqli_query($Connector, $sql);
        $i = 0;

        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)) {
                $i++;

                $dbid= $row['id'];
                $dbname = $row['name'];
                $dblocation = $row['location'];
                $dbtimestamp = $row['time'];
                ?>
                    <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $dbname ?></td>
                        <td><?php echo $dblocation ?></td>
                        <td><?php echo $dbtimestamp ?></td>
                        <td>
                            <a type="button" class="btn btn-outline-danger" href="index.php?del=<?php echo $dbid ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <?php
            }
        }else{
?>
                    <tr style="text-align: center;">
                        <th colspan="4">No Data</th>
                    </tr>
                    <?php
        }
                    ?>
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