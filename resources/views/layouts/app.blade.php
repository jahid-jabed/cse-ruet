<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/favicon.png') }}"/>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script type="text/javascript">
        tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
        tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

        function GetClock(){
        var d=new Date();
        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
        if(nyear<1000) nyear+=1900;
        var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
        if(nhour==0){ap=" AM";nhour=12;}
        else if(nhour<12){ap=" AM";}
        else if(nhour==12){ap=" PM";}
        else if(nhour>12){ap=" PM";nhour-=12;}

        if(nmin<=9) nmin="0"+nmin;
        if(nsec<=9) nsec="0"+nsec

        document.getElementById('clockbox').innerHTML="<table class='w3-table w3-text-white w3-border w3-striped'><tr><td class='w3-center'>"+ndate+" "+tmonth[nmonth]+", "+nyear+"</td></tr><tr><td class='w3-center w3-text-black w3-large'>"+tday[nday]+"</td></tr><tr><td class='w3-center w3-large'>"+nhour+":"+nmin+":"+nsec+ap+"</td></tr></table>";
        }

        window.onload=function(){
        GetClock();
        setInterval(GetClock,1000);
        }
    </script>
    <script src="{{ asset('/js/app.js') }}"></script>
    
    <!--Online Styles, Scripts-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
      <!--style>
        .affix {
            top: 0;
            width: 100%
        }
    </style-->
    
</head>
<body>
    <nav class="navbar navbar-default" style="background-color: #377d06;">
        <div class="container">
            <div class="row">
                <br><br>
                <div class="col-md-2" style="font-family: monospace">
                    <table class="w3-table w3-border w3-striped">
                        <tr><td>&nbsp;</td></tr>
                        <tr><td class="w3-center w3-xlarge"><a href="http://cse.ruet.ac.bd" target="_blank" style="text-decoration:none;" class="w3-text-black">CSE RUET</a></td></tr>
                        <tr><td>&nbsp;</td></tr>
                    </table>
                </div>
                <div class="navbar-header col-md-8">
                    
<!--                   <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown" style="background-color: #377d06">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true" style="background-color: #377d06">
                                    <button type="button" class="btn btn-primary w3-indigo w3-xlarge" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                                    </button><span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu w3-indigo" role="menu">
                                <li>
                                    <a href="{{ url('/home') }}" class="w3-indigo">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('library') }}" class="w3-indigo">Rental Library</a>
                                </li>
                                <li class="divider"></li>
                                @if (Auth::guest())
                                <li>
                                    <a href="{{ url('/login') }}" class="w3-indigo">Sign In</a>
                                </li>
                                <li>
                                    <a href="{{ url('/register') }}" class="w3-indigo">Sign Up</a>
                                </li>
                                @endif
                                @if (Auth::user())
                                <li>
                                    <a href="{{ route('admit_card', ['id' => Auth::user()->roll]) }}" class="w3-indigo">Admit Card</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ route('admin') }}" class="w3-indigo">Admin Panel</a>
                                </li>
                                @endif
                                <li class="divider"></li>
                                <li class="divider"></li>
                                @if (Auth::user())
                                <li>
                                    <a href="{{ route('faq') }}" class="w3-indigo">FAQs</a>
                                </li>
                                @endif
                                <li>
                                    <a href="http://cse.ruet.ac.bd" class="w3-indigo">About Us</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                     Collapsed Hamburger 
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>-->

                    <!-- Branding Image -->
                    <img src="{{ asset('images/ruet.png') }}" style="size: auto;">
                </div>
                <div class="col-md-2" id="clockbox" style="font-family: monospace;"></div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar 
                    <ul class="nav navbar-nav navbar-right">
                         Authentication Links 
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><button class="w3-indigo btn btn-primary">Login</button></a></li>
                        <li><a href="{{ url('/register') }}"><button class="w3-indigo btn btn-primary">Register</button></a></li>
                        @else
                            <li class="dropdown" style="background-color: #377d06">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true" style="background-color: #377d06">
                                    <button class="w3-indigo btn btn-primary">{{ Auth::user()->name }}</button> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu w3-indigo" role="menu">
                                    <li>
                                        <a href="{{ route('full.profile', ['id' => Auth::user()->roll, 'user' => Auth::user()->name]) }}" class="w3-indigo">
                                            Profile
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" class="w3-indigo">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>-->
                </div>
                <br>
                <div class="nav">
                    <ul class="nav nav-tabs w3-darkgreen" style="width: auto; border-bottom: #377d06">
                        <li role="presentation"><a href="{{ url('/home') }}" class="w3-indigo w3-text-white btn btn-primary">Home</a></li>
                        <li>&nbsp;</li>
                        <li role="presentation"><a href="{{ route('library') }}" class="w3-indigo w3-text-white btn btn-primary">Rental Library</a></li>
                        <li>&nbsp;</li>
                        <li role="presentation"><a href="{{ route('pdf.viewer', ['filename' => 'Syllabus']) }}" target="_blank" class="w3-indigo w3-text-white btn btn-primary">Syllabus</a></li>
                        <li>&nbsp;</li>
                        <li role="presentation"><a href="{{ route('pdf.viewer', ['filename' => 'Routine']) }}" target="_blank" class="w3-indigo w3-text-white btn btn-primary">Class Routine</a></li>
                        @if (Auth::guest())
                        <li role="presentation" class="w3-right"><a href="{{ url('/register') }}" class="w3-indigo w3-text-white btn btn-primary">Sign Up</a></li>
                        <li class="w3-right">&nbsp;</li>
                        <li role="presentation" class="w3-right"><a href="{{ url('/login') }}" class="w3-indigo w3-text-white btn btn-primary">Sign In</a></li>                        
                        @endif
                        @if (Auth::user())
                        <li>&nbsp;</li>
                        <li role="presentation"><a href="{{ route('faq') }}" class="w3-indigo w3-text-white btn btn-primary">FAQs</a></li>
                        @endif
                        <li>&nbsp;</li>
                        <li role="presentation"><a href="#contact" class="w3-indigo w3-text-white btn btn-primary">Contact</a></li>
                        @if (Auth::user())
                        <li class="dropdown w3-right" style="background-color: #377d06">
                                <a href="#" class="dropdown-toggle w3-indigo btn btn-primary" data-toggle="dropdown" role="button" aria-expanded="true" style="background-color: #377d06">
                                    {{ Auth::user()->name }}&emsp;<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu w3-indigo" role="menu">
                                    <li>
                                        <a href="{{ route('full.profile', ['id' => Auth::user()->roll, 'user' => Auth::user()->name]) }}" class="w3-indigo">
                                            Profile
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" class="w3-indigo">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                    <ul></ul>
                </div>
            </div>
        </nav>

    @yield('content')
    
    <nav class="navbar navbar-default navbar-static-bottom w3-center w3-text-white" style="background-color: #377d06;">
        <div class="container">
            <div class="navbar-footer">
                <h3>Copyright © students of <a href="http://cse.ruet.ac.bd" target="_blank" style="text-decoration:none;" class="w3-text-white">CSE RUET</a></h3>
            </div>
            <div id='contact' style="font-family: monospace">
                <p><b>Address:</b> Dept. of Computer Science and Engineering (CSE),&nbsp;
                    Rajshahi University of Engineering & Technology (RUET),&nbsp;
                    Rajshahi-6204, Bangladesh.<br>
                    <b>Fax:</b> +88 (0721) 750105&emsp;
                    <b>PABX:</b> +88 (0721) 750742-3, 751320-1<br>
                    <b>Website:</b> <a class="w3-text-white" href="http://cse.ruet.ac.bd" target="_blank">http://cse.ruet.ac.bd</a> &emsp;
                    <b>E-mail:</b> <a class="w3-text-white" href="https://mail.google.com/mail/u/0/#inbox?compose=159abdcb64ee63ba" target="_blank">cse@ruet.ac.bd</a>
                </p>
            </div>
        </div>
    </nav>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}"></script>
    
</body>
</html>
