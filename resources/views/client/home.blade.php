@extends('client.layout')
@section('content')
    

<html>
    <head>
        <title>salon</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">

      
    </head>
    <body>
        <div class="container">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>address</th>
                    <th>contact</th>
                    <th>time</th>
                    <th>status</th>
                </tr>
                @foreach ($clientss as $item)
                    <tr>
                        <th>{{$item->id}}</th>
                        <th>{{$item->client_name}}</th>
                        <th>{{$item->address}}</th>
                        <th>{{$item->contact}}</th>
                        <th>{{$item->time}}</th>
                        <th>
                        <?php
                        $ct = $item->status; 
                    
                        ?>
                        @if($ct== 1)

                        <a href="" class="btn btn-success">accepted</a>
                        @elseif($ct==2)

                        <a href="" class="btn btn-info">pending</a>
                        @elseif($ct==3)

                        <a href="" class="btn btn-danger">rejected</a>
                        @else
                        <a href="" class="btn btn-warning">waiting</a>
                        @endif
                       

                        </th>                
                        </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
@endsection