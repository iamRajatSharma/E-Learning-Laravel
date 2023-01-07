@extends('include/layout')

@section('content')
    <style>
        .profile-content-bx {
            height: 400px !important;
        }
    </style>
    <div class="page-content bg-white">
        <div class="page-banner ovbl-dark" style="background-image: url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Course Videos</h1>
                </div>
            </div>
        </div>

        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>Video</li>
                </ul>
            </div>
        </div>

        <div class="content-block">
            <!-- About Us -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                            @include ('include/sidebar')
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 m-b30">
                            <div class="profile-content-bx" style="max-height: 400px; overflow-y: scroll;">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="courses">
                                        <div class="profile-head">
                                            <h3>Course Video</h3>
                                        </div>
                                        <div class="courses-filter">
                                            <ul class="list-group mb-5">
                                                @php $i = 1; @endphp
                                                @if (count($data) > 0)
                                                    @foreach ($data as $item)
                                                        <li class="list-group-item">{{ $i++ }} .
                                                            {{ $item->video_name }}
                                                            <a style="float: right;" data-toggle="modal"
                                                                data-target="#myModal" data-backdrop="static" href="#"
                                                                onclick="document.getElementById('video_src').src='https://player.vimeo.com/video/{{ $item->video_id }}?autoplay=1';">
                                                                <i onclick="document.getElementById('lesson_name').innerHTML='{{ $item->video_name }}';"
                                                                    class="fa fa-file-video-o" aria-hidden="true"
                                                                    style="font-size: 30px"></i>
                                                            </a>
                                                        </li>
                                                        <div class="modal fade" id="myModal" data-keyboard="false"
                                                            data-backdrop="static" style="margin-top: 50px;">
                                                            <div class="modal-dialog modal-lg"">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">

                                                                        <h4 class="modal-title" id="lesson_name">Demo
                                                                            Videos</h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            onclick="">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body"
                                                                        style="background: #000; padding: 0px;">
                                                                        <iframe class="vimeo_video" id="video_src"
                                                                            src="" allow="autoplay" frameborder="0"
                                                                            allowfullscreen=""
                                                                            style="width: 100%; height: 400px;"></iframe>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="alert alert-danger text-center" style="width: 100%;">
                                                        <strong>No Video Available</strong>
                                                    </div>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
@endsection
