<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>
        @if(isset($page_title))
            {{ $page_title }}
        @else
            Building blocks for Web of tomorrow
        @endif
    </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if(isset($page_meta_description))
        <meta name="description" itemprop="description" content="{{ $page_meta_description }}">
    @else
        <meta name="description" itemprop="description" content="Set of tutorials for developers, how to build smarter, faster and great applications. Tips and tricks from experienced developers.">
    @endif

    @if(isset($page_meta_keywords))
        <meta name="keywords" itemprop="keywords" content="{{ $page_meta_keywords }}">
    @else
        <meta name="keywords" itemprop="keywords" content="laravel,tutorials,coding,school,learn,programming,php,html,js,css">
    @endif

<!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/box.png') }}">

    <!-- Web Fonts -->
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Raleway%3A400%2C100%2C200%2C300%2C500%2C600%2C700&#038;ver=4.2.2' type='text/css' media='all'/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

    <!-- CSS Customization -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    @yield('head')
</head>

<body class="index-page" data-page="index">

<div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container-fluid">

            <!-- Logo -->
            <a class="logo" href="/">
                <img src="https://placehold.it/350x150" alt="Codingo Logo">
            </a>
            <!-- End Logo -->

        </div><!--/end container-->


    </div>
    <!--=== End Header ===-->

    @yield('breadcrumb')

    @yield('content')

    {{--@include('widgets.footer')--}}

</div><!--/wrapper-->

<!-- JS Customization -->
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<!-- JS Page Level -->

<!--[if lt IE 9]>
<script src="{{ asset('assets/plugins/respond.js') }}"></script>
<script src="{{ asset('assets/plugins/html5shiv.js') }}"></script>
<script src="{{ asset('assets/plugins/placeholder-IE-fixes.js') }}"></script>
<![endif]-->

@yield('footer')

</body>
</html>