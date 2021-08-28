<html>
    <head>
        <title>salon</title>
        <link href="style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark shadow ml-5" style="background-color:#CF000F">
            <a href="" class="navbar-brand ml-5"><h4>Salon</h4></a>
            <a href="bridal" class="navbar-brand ms-5"><h4>Bridal</h4></a>
            <a href="offer" class="navbar-brand ms-5"><h4>Offer</h4></a>
            <a href="contact" class="navbar-brand ms-5"><h4>Contact us</h4></a>
            @if(session()->has('login'))
            <a href="logout" class="btn  btn-sm px-3 " style="background-color: #CF000F"><h4>Logout</h4></a>
            @else
            <a href="register" class="navbar-brand ms-5"><h4>Register</h4></a>
            <a href="login" class="navbar-brand ms-5"><h4>Login</h4></a>
           @endif
            <ul class="navbar-nav ml-auto" style="margin-left: 20%">
            <a href="/client/create" class="navbar-brand ml-5"><h4>Book Oppoinment</h4></a>
            </ul>
           
        
            
        </nav>
        @yield('content')
    </body>
</html>