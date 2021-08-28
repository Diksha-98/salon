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
        <div class="container-fluid mt-5">
            <div class="row mt-5">
                <div class="col-lg-4 mt-5">
                    <div class="list-group mt-3">
                        <a href="/manage_client" class="list-group-item list-group-item-action">manage category</a>

                    </div>
                </div>
                <div class="col-lg-8 mt-5">
                    <div class="row mt-2">
                        <div class="col-lg-3">
                            <div class="card bg-success text-center">
                                <h5 class="text-center">Total no of service category</h5>
                                <div class="card-body">
                                    <h4 class="text-center">{{$data}}</h4>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-danger">
                            <h5 class=" mt-2 text-center">Total no of rejected customer</h5>
                            <div class="card-body">
                                <h4 class="text-center">{{$client}}</h4>
                            </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card bg-info">
                        <h5 class=" mt-2 text-center">Total no of accept customer</h5>
                        <div class="card-body">
                            <h4 class="text-center">{{$at}}</h4>
                        </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-white bg-dark">
                    <h5 class=" mt-2 text-center">Total no of  pending customer</h5>
                    <div class="card-body">
                        <h4 class="text-center">{{$pd}}</h4>
                    </div>
            </div>
        </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>