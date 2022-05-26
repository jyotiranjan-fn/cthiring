<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content=", powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">
    <title>CT Hiring
    </title>
    <link rel="apple-touch-icon" href="{{asset('assets/images/careertree.jpg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/careertree.jpg')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/editors/tinymce/tinymce.min.css')}}">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
    <!-- END VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/js/bootstrap.min.js.map')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/validation/form-validation.css')}}">
    <!-- END VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('wizard.css')}}">

    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/custom.css')}}">
    <!-- END MODERN CSS-->

    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/wizard.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/datedropper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/timedropper.min.css')}}">


    <!-- END Custom CSS-->

</head>


@if(!session()->has('otp_verified'))

  <script>
    window.location = "/logout";
  </script>

@endif

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">



    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header" style="background: white;">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto">
                        <a class="navbar-brand" href="/">
                            <img class="brand-logo lgs" alt="logo" src="{{asset('assets/images/careertree.jpg')}}">
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                       
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Modern...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                        @php
                            $request= Auth::id();
                           
                            $role = App\Models\User::where('id','=',$request)->get();
                            @endphp
                            @foreach($role as $loc)
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="mr-1">Hello,
                                    <span class="user-name text-bold-700">{{$loc->fname}} {{$loc->lname}}</span>

                                </span>
                                <span class="avatar avatar-online">
                                    <img src="/images/{{$loc->images}}" alt="avatar">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                            <!--<a class="dropdown-item" href="{{url('/edit_profile',$loc->id)}}"><i class="ft-user"></i> Edit Profile</a>-->
                                <a class="dropdown-item" href="{{url('/view_profile',$loc->id)}}"><i class="ft-user"></i> View Profile</a>
                                <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                                <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                                <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="/logout"><i class="ft-power"></i> Logout</a>
                            </div>
                            @endforeach
                        </li>
                        <!--<li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>-->
                        <!--    <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a>-->
                        <!--        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>-->
                        <!--        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a>-->
                        <!--        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>-->
                        <!--    </div>-->
                        <!--</li>-->
                      
                
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="/"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
                </li>
                
                <li class=" nav-item"><a href="#"><i class="la icon-notebook"></i><span class="menu-title" data-i18n="nav.dash.main">My Plans</a>
                    <ul class="menu-content">

                    @can('Create Today Plan')
                        <li><a class="menu-item" href="{{url('/todays_plan')}}" data-i18n="nav.dash.ecommerce">Create
                                Work Plan
                            </a>
                        </li>
                        @endcan
                        @can('View Today Plan')
                        <li><a class="menu-item" href="{{url('/plan_view')}}" data-i18n="nav.dash.ecommerce">View
                                Work Plan
                            </a>
                        </li>
                        @endcan
                        @can('Approve Today Plan')
                        <li><a class="menu-item" href="{{url('approved')}}" data-i18n="nav.dash.ecommerce">Approve
                                Work Plan</a>
                        </li>
                        @endcan
                        @can('Search Events')
                        <li><a class="menu-item" href="{{url('view_event')}}" data-i18n="nav.dash.ecommerce">View
                                Events</a>
                        </li>
                        @endcan
                        
                    </ul>
                </li>
               
                <li class=" nav-item"><a href="#"><i class="la la-group"></i><span class="menu-title" data-i18n="nav.dash.main">Positions</a>

                    <ul class="menu-content">
                        @can('Create Position')
                        <li><a class="menu-item" href="{{url('/position')}}" data-i18n="nav.dash.ecommerce">Create
                                Positions</a>
                        </li>
                        @endcan

                        @can('View Position')
                        <li><a class="menu-item" href="{{url('/positionview')}}" data-i18n="nav.dash.ecommerce">View
                                Positions</a>
                        </li>
                        @endcan

                        @can('Accept Position')
                        <li><a class="menu-item" href="{{url('/position_approve')}}" data-i18n="nav.dash.ecommerce">
                                Approve Positions</a>
                        </li>
                        @endcan
                        
                        <li><a class="menu-item" href="{{url('/crm_change')}}" data-i18n="nav.dash.ecommerce">
                                View CRM Change Approval</a>
                        </li>
                      


                    </ul>

                </li>
                
                <li class=" nav-item"><a href="#"><i class="la la-file-text-o"></i><span class="menu-title" data-i18n="nav.dash.main">Resume</a>
                    <ul class="menu-content">
                    @can('Create Resume')
                        <li><a class="menu-item" href="{{url('/add/resume')}}" data-i18n="nav.dash.ecommerce">Create Resume</a>
                        </li>
                        @endcan
                        @can('View Resume')
                        <li><a class="menu-item" href="{{url('/resumeview')}}" data-i18n="nav.dash.ecommerce">View
                                Resume</a>
                        </li>
                            @endcan
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-mortar-board"></i><span class="menu-title" data-i18n="nav.dash.main">Interviews</a>
                    <ul>
                        <li>
                        @can('View Interview Schedule')
                            <a class="menu-item" href="{{url('/view_interview_schedule')}}" data-i18n="nav.dash.ecommerce">View Interview Schedule</a>
                        </li>
                        @endcan
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la icon-users"></i><span class="menu-title" data-i18n="nav.dash.main">Clients</span></a>
                    <ul class="menu-content">

                        @can('Create_Client')
                        <li><a class="menu-item" href="{{url('/client')}}" data-i18n="nav.dash.ecommerce">Create
                                Clients</a>
                        </li>
                        @endcan
                       @can('View_Client')
                        <li><a class="menu-item" href="{{url('/viewclient')}}" data-i18n="nav.dash.ecommerce">View
                                Clients</a>
                        </li>
                        @endcan
                      @can('Approval_Client')
                        <li><a class="menu-item" href="{{url('/approveclient')}}" data-i18n="nav.dash.ecommerce">Approve
                                Clients</a>
                        </li>
                        @endcan
                   
                    </ul>
                </li>
               
                 <li class=" nav-item"><a href="#"><i class="la icon-badge"></i><span class="menu-title" data-i18n="nav.dash.main">Performance</a>
                    <ul>
                        <!-- <li>
                            <a class="menu-item" href="" data-i18n="nav.dash.ecommerce">Add Billing</a>
                        </li> -->
                        @can('Approve Billing')
                        <li>
                            <a class="menu-item" href="" data-i18n="nav.dash.ecommerce">Approve Billing</a>
                        </li>
                        @endcan
                        @can('View Billing')
                        <li>
                            <a class="menu-item" href="{{url('/viewbilling')}}" data-i18n="nav.dash.ecommerce">View Billing</a>
                        </li>
                        @endcan
                        @can('View Incentive')
                        <li>
                            <a class="menu-item" href="" data-i18n="nav.dash.ecommerce">View Incentive</a>
                        </li>
                        @endcan
                    </ul>
                </li>

                @can('View Reports')
                <li class=" nav-item"><a href="#"><i class="la icon-bar-chart"></i><span class="menu-title" data-i18n="nav.dash.main">Reports</span></a>
                    <ul class="menu-content">
                  
                        <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">View Reports</a>
                        </li>
                        
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">User Tracking</span></a>
                    <ul class="menu-content">
                    
                        <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">View User Tracking</a>
                        </li>
                        

                    </ul>
                </li>
                @endcan
                <li class=" nav-item"><a href="#"><i class="la icon-info"></i><span class="menu-title" data-i18n="nav.dash.main">Settings</span></a>
                    <ul class="menu-content">
                        @can('Functional Area')
                        <li><a class="menu-item" href="{{url('/functionalarea')}}" data-i18n="nav.dash.ecommerce">Functional
                                Area</a>
                        </li>
                        @endcan
                        @can('View User Tracking')
                        <li><a class="menu-item" href="{{url('/industry')}}" data-i18n="nav.dash.ecommerce">Industry</a>
                        </li>
                        @endcan
                        @can('Generate OTP')
                        <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">Generate OTP</a>
                        </li>
                        @endcan
                        @can('Genrate SPOC OTP')
                        <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">Genrate SPOC OTP</a>
                        </li>
                        @endcan
                        @can('Qualification')
                        <li><a class="menu-item" href="{{url('/qualification')}}" data-i18n="nav.dash.ecommerce">Qualification</a>
                            <ul class="menu-content">
                            
                                <li><a class="menu-item" href="{{url('/qualification')}}" data-i18n="nav.dash.ecommerce">Qualification</a>
                                </li>
                               
                                <li><a class="menu-item" href="{{url('/degree')}}" data-i18n="nav.dash.ecommerce">Degree</a>
                                </li>
                                
                                <li><a class="menu-item" href="{{url('/specialization')}}" data-i18n="nav.dash.ecommerce">Specialization</a>
                                </li>
                                
                            </ul>
                        </li>
                        @endcan
                        @can('Designation')
                        <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">Designation</a>
                            <ul class="menu-content">
                            
                                <li><a class="menu-item" href="{{url('/client_designation')}}" data-i18n="nav.dash.ecommerce">Client Designation</a>
                                </li>
                                
                                <li><a class="menu-item" href="{{url('/user_designation')}}" data-i18n="nav.dash.ecommerce">User
                                        Designation</a>
                                </li>
                               
                            </ul>
                        </li>
                        @endcan

                        @can('Braches')
                        <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">Branch</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="{{url('/client_branch')}}" data-i18n="nav.dash.ecommerce">Client
                                        Branch</a>
                                </li>
                                <li><a class="menu-item" href="{{url('/user_branch')}}" data-i18n="nav.dash.ecommerce">User
                                        Branch</a>
                                </li>
                            </ul>
                        </li>
                        @endcan

                        @can('Users')
                        <li><a class="menu-item" href="{{route('admin.users.index')}}" data-i18n="nav.dash.ecommerce">Users</a>
                        </li>
                         @endcan
                        @can('Roles Access')
                        <li><a class="menu-item" href="{{route('admin.roles.index')}}" data-i18n="nav.dash.ecommerce">Roles</a>
                        </li>
                         @endcan
                        @can('Permission')
                        <li><a class="menu-item" href="{{route('admin.permissions.index')}}" data-i18n="nav.dash.ecommerce">Permissions</a>
                        </li>
                         @endcan
                        @can('API Keys')
                        <li><a class="menu-item" href="{{url('/apikeys')}}" data-i18n="nav.dash.ecommerce">Api Keys</a>
                        </li>
                         @endcan
                        @can('Mailer Templates')
                        <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">Mailer Template</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce"> Send CV to Client</a>
                                </li>
                                <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce"> Interview Confirmation
                                        to client</a>
                                </li>
                                <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce"> Schedule interview to
                                        Candidate</a>
                                </li>
                            </ul>
                        </li>
                        @endcan

                        @can('Incentive')
                        <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">Incentive</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">Eligiblity</a>
                                </li>
                                <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce"> Sharing Criteria</a>
                                </li>
                                <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce"> Salary</a>
                                </li>
                                <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce"> Holiday</a>
                                </li>

                            </ul>
                        </li>
                        @endcan
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <div class="app-content content w-full">
        <div class="content-wrapper">
            @if(Session::has('message'))

            <div class="alert alert-success alert-dismissible" x-data="open: true" x-show="open">

                <strong>{{Session::get('message')}}</strong>
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div>
            <!-- @click="open  -->
            @endif
            {{ $slot }}
        </div>
    </div>


    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2022 <a class="text-bold-800 grey darken-2" href="#" target="_blank">CTHiring</a>, All rights reserved.
            </span>
           
        </p>
    </footer>
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/data/jvector/visitor-data.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('app-assets/vendors/js/tables/jszip.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-html5.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/tables/pdfmake.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/tables/vfs_fonts.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/tables/buttons.html5.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/tables/buttons.print.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/tables/buttons.colVis.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>


    <!-- BEGIN MODERN JS-->
    <script src="{{asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('app-assets/js/scripts/pages/dashboard-sales.js')}}" type="text/javascript"></script>

    <!-- END PAGE LEVEL JS-->
    <script src="{{asset('app-assets/vendors/js/editors/tinymce/tinymce.js')}}" type="text/javascript"></script>

    <script src="{{asset('app-assets/js/scripts/editors/editor-tinymce.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/jquery.steps.min.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/forms/wizard-steps.min.js')}}"></script>


    <!-- for client blade page code -->

    <script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
    <!-- <script src="app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script> -->
    <script src="{{asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('app-assets/js/scripts/forms/form-repeater.js')}}" type="text/javascript"></script>
    <script src="{{asset('jquery.steps.min.js')}}"></script>

    <!-- Select2 JS -->
    <!-- for cliend blade open  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- close -->
    <script src="{{asset('app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('app-assets/js/scripts/forms/validation/form-validation.js')}}" type="text/javascript">
    </script>

    <script src="{{asset('app-assets/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('app-assets/js/scripts/tables/components/table-components.js')}}" type="text/javascript"></script>



</body>

</html>