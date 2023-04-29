@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Client</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('update.client')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$client->id}}">
                        <div class="form-group">
                            <label for="">Client Name</label>
                            <input type="text" name="name" value="{{$client->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Client Review</label>
                            <textarea name="review" cols="20" rows="5" class="form-control">{{$client->review}}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Photo</label>
                            <input type="file" name="photo" class="form-control"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"><br>
                            <img width="70" id="blah" src="{{asset($client->photo)}}" alt="">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Add" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
