<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Classic - Responsive Bootstrap 4.0 Template</title>
   <!-- Google web font "Open Sans" -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="{{url('assets/css/templatemo-style.css')}}">                                  <!-- Templatemo style -->
</head>

    <body>
       
        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="#" class="navbar-brand tm-site-name">Classic</a>
                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                @php $home = Session::get('aktif'); @endphp
                                <li class="nav-item {{ ( $home == 1) ? 'active' : '' }} " >
                                    <a href="{{url('/')}}" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item {{ ( $home == 4) ? 'active' : '' }}">
                                    <a href="{{url('about')}}" class="nav-link">About</a>
                                </li>
                                <li class="nav-item {{ ( $home == 3) ? 'active' : '' }}">
                                    <a href="{{url('blog')}}" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item {{ ( $home == 2) ? 'active' : '' }}">
                                    <a href="{{url('contact')}}" class="nav-link">Contact</a>
                                </li>
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>

        
        @yield('content');
        @include('layouts.footer');