@extends('layouts.dashboard')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="card-header">
                    <h3>Add Client</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('store.client')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Client Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Client Review</label>
                            <textarea name="review" id="" cols="20" rows="5" class="form-control"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Photo</label>
                            <input type="file" name="photo" class="form-control"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img width="70" id="blah" src="" alt="">
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
