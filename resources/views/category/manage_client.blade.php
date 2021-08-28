@extends('category.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-5">
            <h1>All clients</h1>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>NAME</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Status</th>
                </tr>
                @foreach($clients as $cs)
                <tr>
                    <th>{{$cs->id}}</th>
                    <th>{{$cs->client_name}}</th>
                    <th>{{$cs->address}}</th>
                    <th>{{$cs->contact}}</th>
                 <th>
                 <div class="btn-group">
                <a href="{{url('/done',$cs->id)}}" class="btn btn-success">accept</a>
                <a href="{{url('/remove',$cs->id)}}" class="btn btn-danger">reject</a>
                <a href="{{url('/pending',$cs->id)}}" class="btn btn-info">pending</a>
 
                </div>
                 </th>
                </tr>
                @endforeach
            </table>
        </div>

    </div>

    <div class="row">
        <h1>pending client</h1>
        <div class="col-lg-6 mt-5">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>NAME</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Status</th>
                </tr>
                @foreach($pending as $cs)
                <tr>
                    <th>{{$cs->id}}</th>
                    <th>{{$cs->client_name}}</th>
                    <th>{{$cs->address}}</th>
                    <th>{{$cs->contact}}</th>
         <th>
            <?php
            $ct = $cs->status; 
        
            ?>
            @if($ct== 2)

            <div class="btn-group">
                <a href="{{url('/done',$cs->id)}}" class="btn btn-success">accept</a>
                <a href="{{url('/remove',$cs->id)}}" class="btn btn-danger">reject</a>
                
 
            </div>
            @endif
         </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-5">
            <h1>Rejected clients</h1>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>NAME</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Status</th>
                </tr>
                @foreach($reject as $cs)
                <tr>
                    <th>{{$cs->id}}</th>
                    <th>{{$cs->client_name}}</th>
                    <th>{{$cs->address}}</th>
                    <th>{{$cs->contact}}</th>
         <th>
            <?php
            $ct = $cs->status; 
        
            ?>
            @if($ct== 3)

            <div class="btn-group">
                <a href="" class="btn btn-danger">reject</a>
 
            </div>
            @endif
         </th>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
    <div class="row">
        <h1>Accepted client</h1>
        <div class="col-lg-6 mt-5">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>NAME</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Status</th>
                </tr>
                @foreach($done as $cs)
                <?php
                $ct = $cs->status; 
            
                ?>
                @if($ct == 1)
    
                <tr>
                    <th>{{$cs->id}}</th>
                    <th>{{$cs->client_name}}</th>
                    <th>{{$cs->address}}</th>
                    <th>{{$cs->contact}}</th>
         <th>
           
            <div class="btn-group">
                <a href="{{"/time_update/".$cs['id']}}" class="btn btn-success">accept</a>
                
 
            </div>
            @endif
         </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection