@extends('layout.main')

@section('content')

    <!--=== Content Part ===-->
    <div class="bg-color-light">
        <div class="container-fluid content-sm">
            <div class="row">
                <div class="col-md-8">
                    <div class="news-v3 bg-color-white margin-bottom-30">

                        <div class="news-v3-in post-widget">

                            <h1><a href="#">{{ $post->title }}</a></h1>
                            <ul class="list-inline posted-info">
                                <li>By <a href="#">Ivan Radunovic</a></li>
                                <li>Posted {{ date('jS M Y', strtotime($post->created_at)) }}</li>
                            </ul>

                            <div class="post-content-only">
                                {!! $post_content !!}
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!--=== End Content Part ===-->

@stop


