<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Endorfin Admin Page</title>

    <!-- Bootstrap Core CSS -->
    <link href={{ url("/css/bootstrap.min.css") }} rel="stylesheet">

    <!-- Custom CSS -->
    <link href={{ url("/css/sb-admin.css") }} rel="stylesheet">

    <!-- Custom Fonts -->
    <link href={{ url("/font-awesome/css/font-awesome.min.css") }} rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href={{ url("home") }}>Endorphin Home Page</a>
                {{-- <img src="../images/LOGO1.png"> --}}
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->name}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
{{--                         <li>
                            <a href="/admins/{{Auth::user()->id}}/edit"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="/admins/{{Auth::user()->id}}/edit"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
 --}}                        <li>
                            <a href={{ url("http://localhost:8000/logout") }}><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href={{ url("/services") }}><i class="fa fa-fw fa-edit"></i> Services</a>
                    </li>     
                    <li>
                        <a href={{ url("/portfolio") }}><i class="fa fa-fw fa-dashboard"></i>Portfolio</a>
                    </li>
                    <li>
                        <a href={{ url("/staff") }}><i class="fa fa-fw fa-bar-chart-o"></i> Staff</a>
                    </li>
                    <li>
                        <a href={{ url("/clients") }}><i class="fa fa-fw fa-table"></i> Clients</a>
                    </li>
                    <li>
                        <a href={{ url("/messages") }}><i class="fa fa-fw fa-edit"></i> Messages</a>
                    </li>
                   {{--  @if (Auth::user()->type_id == 1)
                        <li>
                            <a href="/registers"><i class="fa fa-fw fa-facebook"></i> Register</a>
                        </li>
                        <li>
                            <a href="/admins"><i class="fa fa-fw fa-twitter"></i> Admins</a>
                        </li>                          
                    @endif    --}}
                    <li class="active">
                        <a href={{ url("/admin") }}><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div>

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-hover">
								@yield('content')			 
							</table>				
						</div>
						
						<div class="col-md-5 ">			
							@yield('form')
						</div>	
					</div>			
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src={{ url("/js/jquery.js") }}></script>

    <!-- Bootstrap Core JavaScript -->
    <script src={{ url("/js/bootstrap.min.js") }}></script>

</body>

</html>
