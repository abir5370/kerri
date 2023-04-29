@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            @if (session('update'))
                <div class="alert alert-success">{{session('update')}}</div>
            @endif
            @if (session('delete'))
                <div class="alert alert-success">{{session('delete')}}</div>
            @endif
            <div class="card-header">
                <h3>Manage Client</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-responsive">
                    <tr>
                        <th>Si</th>
                        <th>Name</th>
                        <th>Review</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($clients as $key=>$client)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->review}}</td>
                            <td>
                                <img src="{{asset($client->photo)}}" alt="" class="img-fluid" height="50px">
                            </td>
                            <td>
                                <a href="{{route('status.client',$client->id)}}" class="btn btn-sm btn-{{$client->status == 1?'success':'secondary'}}">{{$client->status == 1?'Active':'Deactive'}}</a>
                            </td>
                            <td class="btn-group">
                                <a href="{{route('edit.client',$client->id)}}" class="btn btn-success btn-sm mx-1">Edit</a>
                                <form action="{{route('delete.client')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$client->id}}">
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure Delete this!!')">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
