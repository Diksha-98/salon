@extends('category.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow">
                <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">C_name</label>
                    <input type="text" name="c_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">image</label>
                    <input type="file" name="image" class="form-control">
                </div>


                   
                    <input type="submit" name="submit" class=" w-100" style="background-color:#CF000F">
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection