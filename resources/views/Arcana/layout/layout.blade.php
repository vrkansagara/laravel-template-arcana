<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
    html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Arcana by HTML5 UP</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="{{asset('assets/Arcana/js/ie/html5shiv.js')}}"></script><![endif]-->
    <link rel="stylesheet" href="{{@asset('assets/Arcana/assets/css/main.css')}}"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="{{@asset('assets/css/ie8.css')}}"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{@asset('assets/css/ie9.css')}}"/><![endif]-->
</head>
<body>
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        <!-- Logo -->
        <h1><a href="{{url('/arcana')}}" id="logo">Arcana <em>by HTML5 UP</em></a></h1>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="current"><a href="index.html">Home</a></li>
                <li>
                    <a href="#">Dropdown</a>
                    <ul>
                        <li><a href="#">Lorem dolor</a></li>
                        <li><a href="#">Magna phasellus</a></li>
                        <li><a href="#">Etiam sed tempus</a></li>
                        <li>
                            <a href="#">Submenu</a>
                            <ul>
                                <li><a href="#">Lorem dolor</a></li>
                                <li><a href="#">Phasellus magna</a></li>
                                <li><a href="#">Magna phasellus</a></li>
                                <li><a href="#">Etiam nisl</a></li>
                                <li><a href="#">Veroeros feugiat</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Veroeros feugiat</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/arcana/left-sidebar')}}">Left Sidebar</a></li>
                <li><a href="{{url('/arcana/right-sidebar')}}">Right Sidebar</a></li>
                <li><a href="{{url('/arcana/two-sidebar')}}">Two Sidebar</a></li>
                <li><a href="{{url('/arcana/no-sidebar')}}">No Sidebar</a></li>
            </ul>
        </nav>

    </div>

    @section('content')
    @show
    @include('Arcana.layout.footer')


</div>

<!-- Scripts -->
<script src="{{@asset('assets/Arcana/assets/js/jquery.min.js')}}"></script>
<script src="{{@asset('assets/Arcana/assets/js/jquery.dropotron.min.js')}}"></script>
<script src="{{@asset('assets/Arcana/assets/js/skel.min.js')}}"></script>
<script src="{{@asset('assets/Arcana/assets/js/util.js')}}"></script>
<!--[if lte IE 8]>
<script src="{{@asset('assets/Arcana/assets/js/ie/respond.min.js')}}"></script><![endif]-->
<script src="{{@asset('assets/Arcana/assets/js/main.js')}}"></script>

</body>
</html>