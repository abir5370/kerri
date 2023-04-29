@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Service</h6>
                        <form class="forms-sample" action="{{route('update.service')}}" method="post">
                            @csrf
                            <div>
                                @php
                                    $icons = array (

                                        'fa-yelp',
                                        'fa-yen',
                                        'fa-yoast',
                                        'fa-youtube',
                                        'fa-youtube-play',
                                        'fa-youtube-square',
                                        'fa-viadeo',
                                        'fa-viadeo-square',
                                        'fa-video-camera',
                                        'fa-vimeo',
                                        'fa-vimeo-square',
                                        'fa-vine',
                                        'fa-vk',
                                        'fa-volume-control-phone',
                                        'fa-volume-down',
                                        'fa-volume-off',
                                        'fa-volume-up',
                                        'fa-warning',
                                        'fa-wechat',
                                        'fa-weibo',
                                        'fa-weixin',
                                        'fa-whatsapp',
                                        'fa-wheelchair',
                                        'fa-wheelchair-alt',
                                        'fa-wifi',
                                        'fa-wikipedia-w',
                                    );
                                @endphp
                            </div>
                            <input type="hidden" name="id" value="{{$service->id}}">
                            <div class="form-group">select icon</div>
                            <div class="form-group" style="font-family: FontAwesome; font-size: 25px;">
                                @foreach($icons as $icon)
                                    <i class="fa {{$icon}}" data-icon="{{$icon}}"></i>
                                @endforeach
                                    <input type="text" name="icon" id="icon" class="form-control mt-2" value="{{$service->icon}}" placeholder="Icon">
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" value="{{$service->title}}" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" placeholder="Description">{{$service->description}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_script')
    <script>
        $('.fa').click(function () {
            var icon = $(this).attr('data-icon');
            $('#icon').attr('value',icon);
        });
    </script>
@endsection
