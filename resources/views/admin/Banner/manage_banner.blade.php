@extends('layouts.dashboard')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                @if (session('update'))
                    <div class="alert alert-success">{{session('update')}}</div>
                @endif
                @if (session('delete'))
                    <div class="alert alert-success">{{session('delete')}}</div>
                @endif
                <div class="card-header">
                    <h3>Manage Banner</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Si</th>
                            <th>Title</th>
                            <th>Header</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($banners as $key=>$banner)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$banner->title}}</td>
                                <td>{{$banner->header_name}}</td>
                                <td>{{$banner->header_desp}}</td>
                                <td>
                                    <img src="{{asset($banner->image)}}" alt="">
                                </td>
                                <td>
                                    <a href="{{route('status.banner',$banner->id)}}" class="btn btn-sm btn-{{$banner->status == 1?'success':'secondary'}}">{{$banner->status == 1?'Active':'Deactive'}}</a>
                                </td>
                                <td class="btn-group">
                                    <a href="{{route('edit.banner',$banner->id)}}" class="btn btn-success btn-sm mx-1">Edit</a>
                                    <form action="{{route('delete.banner')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$banner->id}}">
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


