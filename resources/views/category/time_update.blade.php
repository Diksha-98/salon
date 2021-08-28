@extends('category.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <form action="/time_update" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$data['id']}}">
                <div class="mb-2">
                    <label for="">Data and time</label>
                    <input type="text" name="time" value="{{$data['data_time']}}" class="form-control">
                </div>
                <div class="mb-2">
               
                    <input type="submit" class="btn btn-success form-control" value="update">
                </div>
            </form>

        </div>
    </div>
</div>
@endsection