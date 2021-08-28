
<html>
    <head>
        <title>salon</title>
        <link href="style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#CF000F;">
            <a href="" class="navbar-brand"><h4>Salon</h4></a>
        </nav>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h6>LogIn Account Here</h6>
                            <form action="" method="POST">
                                @csrf
                              

                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>password</label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-success w-100">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
