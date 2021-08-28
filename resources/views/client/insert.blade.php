@extends('client.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow">
                <form action="{{route('client.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Client_name</label>
                    <input type="text" name="client_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">contact</label>
                    <input type="text" name="contact" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="">time</label>
                  <select name="time" class="form-control">
                      <option>
                          10:30ap to 06:00pm 
                      </option>
                      <option>
                        11:30 am to 05:00 pm
                    </option>
                    <option>
                        7:30 am to 05:00 pm
                    </option>
                    <option>
                        8:30 am to 05:00 pm
                    </option>
                    <option>
                        9:30 am to 05:00 pm
                    </option>
                    <option>
                        10:30 am to 05:00 pm
                    </option>
                  </select>
                    
                </div>
                <div class="mb-3">
                    <label for="">status</label>
                    <input type="text" name="status" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" >Cat_id</label>
                    <select name="category" class="form-control">
                        @foreach ($categories as $item)
                            <option value="<?= $item['id'];?>"><?= $item['c_name'];?>,(<?= $item['id'];?>) </option>
                            
                        @endforeach
                     
                    </select>
         
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" class=" w-100" style="background-color:#CF000F">
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection