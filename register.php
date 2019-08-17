<?php 
    include_once "./db-config.php";

    $firstname       =       $_POST['firstname'];
    $lastname        =       $_POST['lastname'];
    $email           =       $_POST['email'];
    $password        =       $_POST['password'];
    $address         =       $_POST['address'];
    $city            =       $_POST['city'];
    $state           =       $_POST['state'];
    $zipcode         =       $_POST['zipcode'];


    if($_POST) {
        $sql        =       "INSERT INTO registration (first_name, last_name, email, password, address, city, state, zip_code) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$password."', '".$address."', '".$city."', '".$state."', '".$zipcode."') ";
        $result     =       mysqli_query($conn, $sql);
        if($result) {
            echo "<div class='alert alert-success alert-dismissible'>
                    <strong>Success!</strong> Registration completed successfully.
                    <button type='button' class='close' data-dismiss='alert> &times; </button>
                  </div>";
        }   
        else {
            echo "<div class='alert alert-danger alert-dismissible'>
                    <strong>Alert! </strong> Failed to register please try again.
                    <button type='button' class='close' data-dismiss='alert> &times; </button>
            </div>";
        }
    }
