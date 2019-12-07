<!DOCTYPE html>
<html>

<head>
    <title>My Awesome Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <style>
        .img-fluid {
            width: 1000px;
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card shadow-lg">
                    <div class="card-body" style="background:#ccc; margin-top:-50px;">
                        <img class="img-fluid" src="img/banner.PNG" alt="Chania">
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <h1 class="text-center text-warning mt-4">Attendent List</h1>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row">
                    <!-- wep-a -->
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Class WEP-A</h4>
                            </div>
                            <div class="card-body">
                                <img class="img-fluid" src="img/1.jpg" alt="Chania">
                            </div>
                            <div class="card-footer">
                                <a href="index.php?action=wepa" class="btn btn-outline-warning">More details</a>
                            </div>
                        </div>
                    </div>
                    <!-- wep-b -->
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Class WEP-B</h4>
                            </div>
                            <div class="card-body">
                                <img class="img-fluid" src="img/1.jpg" alt="Chania">
                            </div>
                            <div class="card-footer">
                                <a href="views/class/wep_b.php" class="btn btn-outline-warning">More details</a>
                            </div>
                        </div>
                    </div>
                    <!-- sna -->
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Class SNA</h4>
                            </div>
                            <div class="card-body">
                                <img class="img-fluid" src="img/1.jpg" alt="Chania">
                            </div>
                            <div class="card-footer">
                                <a href="views/class/sna.php" class="btn btn-outline-warning">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

</body>