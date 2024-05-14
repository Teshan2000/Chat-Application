<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid bg-info p-3">
        <div class="row">
            <div class="col-lg-1 text-center"></div>
            <div class="col-lg-10 pt-2 text-center">
                <h3 class="text-uppercase text-light">Chat Application</h3>
            </div>
            <div class="col-lg-1 text-center"><a href="login.php" style="text-decoration: none;">
                <i class="fa fa-user fs-3"></i><br>
                <span class="text-light">Login</span></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-header bg-info text-center text-white pt-3">
                        <h5>Teshan Wijewardhana</h5>
                    </div>
                    <div class="card-body">
                        <!-- <h5 class="card-title text-center">Teshan Wijewardhana</h5> -->
                        <div class="row" style="float: right; width:25%;">
                            <div class="pb-1">                
                                <div class="card shadow-sm bg-white rounded mb-4 p-2">
                                    <div class="flex-fill pl-3">
                                        <h6 class="text-start">Hello!</h6>   
                                        <small class="text-end">Just Now</small>                            
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="row" style="float: right; width:102%;">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group pb-3 d-flex">
                                    <input type="text" class="form-control pe-2" name="message" id="message" placeholder="Type message..."/>
                                    <button type="submit" class="btn btn-info ps-2 ms-2" name="submit" style="border-radius: 10%;"><i class="fa fa-paper-plane"></i></button>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
</body>
</html>
