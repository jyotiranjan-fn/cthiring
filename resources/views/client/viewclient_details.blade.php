<x-admin-layout>
<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<style>
body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
    margin-left: 0px;
}
</style>

        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new mb_3">
                <h3 class="content-header-title mb-0 d-inline-block">Client</h3><br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Client</a>
                            </li>
                            <li class="breadcrumb-item active">Client Detail
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger mt_b round btn-glow px-2">Add </button>
                </div>
            </div> -->
        </div>

        @if(session()->has('roleinster'))
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('roleinster')}}
        </div>
        @endif
        <!-- Form wizard with icon tabs section start -->
        <div class="row match-height">
            <div class="col-md-12">
                <div id="user-profile">
                    <div class="row">
                        <div class="col-12 mt_94">
                            <div class="card profile-with-cover">



                                <!-- <div class="card-img-top img-fluid bg-cover height-300" style="background: url('../../../app-assets/images/carousel/22.jpg') 50%;"></div> -->
                                <div class="media profil-cover-details w-100">
                                    <div class="media-left pl-2 pt-2">
                                        <a href="#" class="profile-image">
                                            <img src="/clients/{{$view->logo}}"
                                                class="rounded-circle img-border height-100" alt="Card image">
                                        </a>
                                    </div>
                                    <!--<div class="media-body pt-3 px-2">-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col">-->
                                    <!--            <h3 class="card-title">{{$view->client_name}}</h3>-->
                                    <!--        </div>-->

                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                                
                                  <h3 class="card-title" style="position: absolute;left: 70px;top: 24px;">{{$view->client_name}}</h3>
                                  
                                <nav class=" navbar navbar-light navbar-profile align-self-end">
                                    
                                              
                                          
                                   
                                    <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse"
                                        aria-expanded="false" aria-label="Toggle navigation"></button>
                                    <nav class="navbar navbar-expand-lg">
                                        
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#home"><i
                                                            class="la la-user"></i> Profile</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#menu1"><i
                                                            class="la la-users"></i> Contact</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#menu2"><i
                                                            class="la la-briefcase"></i> Position</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#menu3"><i
                                                            class="la la-heart-o"></i> Reports</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#menu4"><i
                                                            class="la la-bell-o"></i> Notifications</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 pd_0">
                    <div class="card">
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active">
                                <div class="card-header pd_15">
                                    <h4 class="card-title" id="basic-layout-tooltip">Client</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body pd_0">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered wd_37">
                                                            <tr>
                                                                <th>Client Name</th>
                                                                <td>{{$view->client_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Address</th>
                                                                <td>{{$view->area_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>City/Town</th>
                                                                <td>{{optional ($view->citys)->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>CRM</th>
                                                                @php
                                                                $test='';
                                                                $test=json_decode($view->crm_id);
                                                                $count=count($test);

                                                                @endphp



                                                                <td style="text-align: left;">
                                                                    @php
                                                                    for($i=0;$i<$count;$i++){
                                                                        $crm_name=App\Models\User::where('id',$test[$i])->
                                                                        get();
                                                                        @endphp <span class="badge badge-primary">
                                                                            {{$crm_name[0]->fname}}
                                                                            {{$crm_name[0]->lname}}</span>

                                                                        @php
                                                                        }

                                                                        @endphp
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Created By</th>
                                                                <td>{{optional($view->Use)->fname}}{{optional($view->Use)->lname}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Created</th>
                                                                <td>{{date('j F-Y', strtotime($view->created_at))}}</td>
                                                            </tr>
                                                            @if($view->edit_remark != null)
                                                            <tr>
                                                                <th>Revision Remarks</th>
                                                                <td>{{$view->edit_remark}}</td>
                                                            </tr>
                                                            @endif
                                                          
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered wd_37">
                                                            @if($view->edit_remark != null)
                                                            <tr>
                                                                <th>Modified By</th>
                                                                <td>{{optional($view->Use)->fname}}{{optional($view->Use)->lname}}</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th>Modified</th>
                                                                <td>{{date('j F-Y', strtotime($view->updated_at))}}</td>
                                                            </tr>
                                                            @endif
                                                            <tr>
                                                                <th>State</th>
                                                                <td>{{optional ($view->state)->state_title }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>District</th>
                                                                <td>{{optional ($view->dist)->district_title }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pincode</th>
                                                                <td>{{$view->pincode}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Approv</th>
                                                                @if ($view->is_approve == 1)
                                                                <td><span class="btn_size">Approved</span>
                                                                </td>


                                                                @else
                                                                <td><span class="btn_size_pending">Pending</span>
                                                                </td>


                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                <th>Status (Reporting)</th>
                                                                @if ($view->status == 1)
                                                                <td><span class="btn_size_2">Active</span>
                                                                </td>


                                                                @else
                                                                <td><span class="btn_size_3">Inactive</span>
                                                                </td>


                                                                @endif
                                                            </tr>
                                                        </table>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row match-height">
                                    <div class="col-md-12">
                                        <div class="card">

                                            <div class="card-header pd_15">
                                                <h4 class="card-title" id="basic-layout-tooltip">Client Contact</h4>
                                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                            </div>
                                            
                                            <div class="card-content collapse show table-responsive">
                                                <div class="card-body">
                                                    <table class="table table-striped table-bordered ">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <!-- <th>Primary SPOC</th> -->
                                                                <th>Mobile</th>
                                                                <th>Designation</th>
                                                                
                                                                <th>Branch</th>
                                                                <th>Created By</th>
                                                                <th>Created</th>
                                                                <th>Modified</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $i=1;
                                                                @endphp
                                                                @foreach ($view2 as $key=>$re)
                                                            <tr>
                                                                <td>{{$key+1}}</td>
                                                                <td>{{$re->contact_name}}</td>
                                                                <td>{{$re->email}}</td>
                                                                
                                                                <!-- <td></td> -->
                                                                
                                                                <td>{{$re->mobile}}</td>
                                                                <td>{{$re->designation}}</td>
                                                               
                                                                <td>{{optional ($re->c_branch)->location}}</td>
                                                                <td>{{optional($view->Use)->fname}} {{optional($view->Use)->lname}}</td>
                                                                <td>{{date('j F-Y', strtotime($re->created_at))}}</td>
                                                                <td>{{date('j F-Y', strtotime($re->updated_at))}}</td>
                                                            </tr>
                                                            @endforeach
                                                            @php
                                                            $i++;
                                                            @endphp
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt_btn">
                                            <a href="{{url('/viewclient')}}"><button type="button"
                                                    class="btn btn-primary">Back</button></a>
                                        </div>
                                    </div>
                                    <!-- Form wizard with icon tabs section end -->

                                </div>
                            </div>

                            <!-- tab form -->
                            <div id="menu1" class="container tab-pane fade"><br>
                                <div class="row match-height">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header pd_15">
                                                <h4 class="card-title" id="basic-layout-tooltip">Client Contact</h4>
                                                <a class="heading-elements-toggle"><i
                                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                                <div class="heading-elements">
                                                    <ul class="list-inline mb-0">
                                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                                        </li>
                                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-content collapse show table-responsive">
                                                <div class="card-body">
                                                    <table class="table table-striped table-bordered ">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <!-- <th>Primary SPOC</th> -->
                                                                <th>Mobile</th>
                                                                <th>Designation</th>
                                                                
                                                                <th>Branch</th>
                                                                <th>Created By</th>
                                                                <th>Created</th>
                                                                <th>Modified</th>

                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @php
                                                                $i=1;
                                                                @endphp
                                                                @foreach ($view2 as $key=>$re)
                                                            <tr>
                                                                <td>{{$key+1}}</td>
                                                                <td>{{$re->contact_name}}</td>
                                                                <td>{{$re->email}}</td>
                                                                
                                                                <!-- <td></td> -->
                                                                
                                                                <td>{{$re->mobile}}</td>
                                                                <td>{{$re->designation}}</td>
                                                               
                                                                <td>{{optional ($re->c_branch)->location}}</td>
                                                                <td>{{optional($view->Use)->fname}} {{optional($view->Use)->lname}}</td>
                                                                <td>{{date('j F-Y', strtotime($re->created_at))}}</td>
                                                                <td>{{date('j F-Y', strtotime($re->updated_at))}}</td>
                                                            </tr>
                                                            @endforeach
                                                            @php
                                                            $i++;
                                                            @endphp
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt_btn">
                                            <a href="{{url('/viewclient')}}"><button type="button"
                                                    class="btn btn-primary">Back</button></a>
                                        </div>
                                    </div>
                                    <!-- Form wizard with icon tabs section end -->
                                </div>
                            </div>
                             <div id="menu2" class="container tab-pane fade"><br>
                                <div class="row match-height">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header pd_15">
                                                <h4 class="card-title" id="basic-layout-tooltip">Positions</h4>
                                                <a class="heading-elements-toggle"><i
                                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                                <div class="heading-elements">
                                                    <ul class="list-inline mb-0">
                                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-content collapse show table-responsive">
                                                <div class="card-body ">
                                                    <table class="table table-striped table-bordered dataex-html5-selectors table-responsive">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Job Title</th>
                                                                <th>Client</th>
                                                                <th>Total Openings</th>
                                                                <th>CRM</th>
                                                                <th>Recruiters</th>
                                                                <th>CV Sent</th>
                                                                <th>Joined</th>
                                                                <th>Created By</th>
                                                                <th>Status</th>
                                                                <th>Created</th>
                                                                <th>Modified</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                        
                                                        <tbody>
                                                            @php
                                                            $i=1;
                                                            $views = App\Models\Position::where('client_name','=',$view->id)->get()->unique('position_id');
                                                            @endphp
                                                            
                                                            @foreach($views as $loc)
                                                            @php
                                                            if($loc->is_approve==1){
                                                            @endphp
                                                            <tr>
                                                                <td>{{ $i }}</td>
                                                                <td data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                                                    data-title="click to view the details" style="text-align: left;"><a
                                                                        href="{{url('/position_view_details',$loc->position_id)}}">{{$loc->job_title}}</a>
                                                                </td>
                                                                <td style="text-align: left;">{{optional ($loc->client_na)->client_name }}</td>
                        
                                                                <td style="text-align: left;">{{$loc->total_opening}}</td>
                        
                                                                @php
                                                                $test='';
                                                                $test=json_decode($view->crm_id);
                                                                $count=count($test);

                                                                @endphp



                                                                <td style="text-align: left;">
                                                                    @php
                                                                    for($i=0;$i<$count;$i++){
                                                                        $crm_name=App\Models\User::where('id',$test[$i])->
                                                                        get();
                                                                        @endphp <span class="badge badge-primary">
                                                                            {{$crm_name[0]->fname}}
                                                                            {{$crm_name[0]->lname}}</span>

                                                                        @php
                                                                        }

                                                                        @endphp
                        
                                                                <td>
                                                                    @php
                                                                    $recruiter = App\Models\Position::where('client_name','=',$view->id)->get('recruiters');
                                                                    @endphp
                                                                    @foreach($recruiter as $req)
                                                                    
                                                                    <span class="badge badge-primary">{{optional ($req->client_requiter)->fname}} {{optional ($req->client_requiter)->lname}}</span>
                                                                    
                                                                    @endforeach
                                                                </td>
                                                                <td style="text-align: left;"> </td>
                                                                <td> {{$loc->joining_date}}</td>
                                                                <td>
                                                                    <span class="badge badge-primary">
                                                                        {{optional ($loc->position_create)->fname}} {{optional ($loc->position_create)->lname}}
                                                                    </span>
                                                                </td>
                                                                @if ($loc->status == 1)
                                                                <td><span class="badge badge-default badge-success">Assigned</span></td>
                        
                                                                @else
                        
                                                                <td><span class="badge badge-default badge-danger">Inactive</span></td>
                        
                                                                @endif
                        
                                                                <td>{{$loc->created_at}}</td>
                                                                <td>{{$loc->updated_at}}</td>
                                                                @if (session('USER_ID')==$loc->created_by)
                                                                <td>
                                                                    <a href="{{url('/position_edit',$loc->position_id)}}">
                                                                        <i class="ft-edit text-success"></i>
                                                                    </a>
                                                                    @else
                                                                <td></td>
                                                                @endif
                                                                <!-- <a href="" onclick="return confirm('Are you sure?')">
                                                                        <i class="ft-trash-2 ml-1 text-warning"></i>
                                                                    </a> -->
                                                                </td>
                                                            </tr>
                                                            @php
                                                            $i++;
                                                            }
                                                            @endphp
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Job Title</th>
                                                                <th>Client</th>
                                                                <th>Total Openings</th>
                                                                <th>CRM</th>
                                                                <th>Recruiters</th>
                                                                <th>CV Sent</th>
                                                                <th>Joined</th>
                                                                <th>Created By</th>
                                                                <th>Status</th>
                                                                <th>Created</th>
                                                                <th>Modified</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt_btn">
                                            <a href="{{url('/viewclient')}}"><button type="button"
                                                    class="btn btn-primary">Back</button></a>
                                        </div>
                                    </div>
                                    <!-- Form wizard with icon tabs section end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form wizard with icon tabs section end -->
        </div>
       
  
    <!-- Modal -->

</x-admin-layout>