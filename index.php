<!doctype html>
<html lang="en">

<head>
    <title>PHP Ajax Form Handling - Programming Fiels</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 m-auto d-block shadow pt-2 pb-3">
                <form id="regform" method="post" autocomplete="off">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="state">State</label>
                            <select id="state" class="form-control" name="state">
                                <option selected>Choose...</option>
                                <option>Jharkhand</option>
                                <option>Bihar</option>
                                <option>New Delhi</option>
                                <option>Haryana</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="zipcode">Zip</label>
                            <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zip code">
                        </div>
                    </div>
                    <button type="button" id="submitBtn" name="submit" class="btn btn-primary">Submit</button>

                    <div id="result" class="mt-2"></div>

                </form>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


    <!----------------------- jQuery Script --------------------------->
    <script>
        $(document).ready(function() {
            $("#submitBtn").click(function(event) {
                var formData = $('#regform').serialize();
                $.ajax({
                    type: "POST",
                    url: 'register.php',
                    data: formData,
                    success: function(res) {
                        $("#result").html(res);
                    },
                    error: function(e) {
                        $("#result").text("Failed to save. Please try again.");
                    }
                });

            });
        });
    </script>
</body>

</html>