@extends('layout.main')

@section('content')

    <!--=== Content Part ===-->
    <div class="bg-color-light">
        <div class="container-fluid content">

            <div class="row">
                <div class="col-md-2 hidden-sm hidden-xs">
                    {{--@include('sidebars.left')--}}
                </div>

                <div class="col-md-8">

                    <div class="blog_masonry_3col grid-boxes">

                        @foreach($posts as $post)

                            <div class="grid-boxes-in">
                                <a href="{{ route('get.post', ['slug' => $post->slug]) }}"><img class="img-responsive" src="{{ $post->cover_image }}" alt="Cover Image"></a>
                                <div class="grid-boxes-caption">
                                    <h3><a href="{{ route('get.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h3>
                                    <ul class="list-inline grid-boxes-news">
                                        <li><span>By</span> Ivan Radunovic</li>
                                        <li>|</li>
                                        <li><i class="fa fa-clock-o"></i> {{ date('jS M Y', strtotime($post->created_at)) }}</li>
                                        <li>|</li>
                                        <li><a href="{{ route('get.post', ['slug' => $post->slug]) }}"><i class="fa fa-comments-o"></i> </a></li>
                                    </ul>
                                    <p>{{ $post->short_content }}</p>
                                </div>
                            </div>

                        @endforeach


                    </div><!--/container-->
                </div>

                <!-- Blog Sidebar -->
                <div class="col-md-2">
                    {{--@include('sidebars.right')--}}
                </div>
                <!-- End Blog Sidebar -->
            </div>
        </div>
    </div>
    <!--=== End Content Part ===-->

@stop