@extends('category.layout')
@section('content')

<html>
  <head>
      <title>salon</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">

  </head>
  <body>
      <div class="container-fluid shadow" style="background-image: url('cover/pic1.jpg'); min-height:60vh;background-position:cover;">

      </div>
      <div class="container-fluid mt-5" style="text-align: center; font-style:bold;">
          <h1>RECOMMENDED SERVICES</h1>
          <h4 class="text-center">Our runway experts have curated some of the most popular services at Lakmé Salon, just for you. Take your pick and head to your nearest salon and get started on your makeover!</h4>
      </div>
      <div class="container-fluid mt-5">
    <div class="row">
      @foreach ($cat as $item)
      <div class="col-lg-3  mt-3 ml-3">

  <div class="card ml-3 shadow">
    
    <img src="{{asset('image/'.$item->image)}}" width="100%" height="200px">
  </a>
  <h4 class="text-dark text-center">{{$item->c_name}}</h4>
      <h4 class="text-dark text-center" style="-webkit-text-fill-color:#CF000F ">Rs.{{$item->price}}</h4>
    
  </div>
</div>
          
      @endforeach
     
    </div>
    <div class="container-fluid mt-5 bg-light shadow">
<div class="row">
  <div class="col-lg-6">
    <h2 style="-webkit-text-fill-color:#CF000F; ">WHAT’S TRENDING? UFF TERI ADA LOOK</h2>
     <h4> The Uff Teri Ada look from our Blockbuster Brides collection is designed for the coy bride whose excitement at her sangeet is palpable but measured. She is a vision of pure radiance as she prepares to embark on this new journey in her life. 
      
      The shades of mint green that this stunning bride adorns befits her strong sense of individuality and independence.
      
      Check out our complete Blockbuster Bridal Collection. </h4>
  </div>
  <div class="col-lg-6">
    <img src="cover/bride1.jpg" width="100%" height="300px">
  </div>
</div>
    </div>
    

              


     
  </body>
</html>
@endsection
