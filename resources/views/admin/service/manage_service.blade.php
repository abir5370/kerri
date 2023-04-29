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
                <h3>Manage Service</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Si</th>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($services as $key=>$service)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td style="font-family: fontawesome;">
                                <i class="{{$service->icon}}"></i>
                            </td>
                            <td>{{$service->title}}</td>
                            <td>{{$service->description}}</td>
                            <td>
                                <a href="{{route('status.service',$service->id)}}" class="btn btn-sm btn-{{$service->status == 1?'success':'secondary'}}">{{$service->status == 1?'Active':'Deactive'}}</a>
                            </td>
                            <td class="btn-group">
                                <a href="{{route('edit.service',$service->id)}}" class="btn btn-success btn-sm mx-1">Edit</a>
                                <form action="{{route('service.destroy')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$service->id}}">
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

{{-- <table id="dataTableExample" class="table">
    <thead>
    <tr>
        <th>Si</th>
        <th>Icon</th>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($services as $key=>$service)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$service->icon}}</td>
            <td>{{$service->title}}</td>
            <td>{{$service->description}}</td>
            <td>
                <a href="" class="btn btn-success">Active</a>
            </td>
            <td>
                <a href="" class="btn btn-success">Active</a>
                <a href="" class="btn btn-success">Active</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table --}}
