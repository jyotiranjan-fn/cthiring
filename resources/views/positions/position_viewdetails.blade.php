 <x-admin-layout>
    <style>
    body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
        margin-left: 0px;
    }

    .box {
        display: none;
    }
    </style>
     <script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script> 
    
    @php



    @endphp
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Positions</h3><br>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Positions
                        </li>
                        <li class="breadcrumb-item"><a href="#">Position Details</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger  mt_b round btn-glow px-2">Upload Resume</button>

                </div>
            </div> -->
    </div>

    @if ($message = Session::get('msg'))
    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{$message}}
    </div>
    @endif

    <!-- for delete -->
        @if(session()->has('delt'))
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('delt')}}
        </div>
        @endif
        
    <!-- Form wizard with icon tabs section start -->
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-tooltip">Position Details</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                    <div class="card-body pd_lr_body">

                        <div class="">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home"><img
                                            src="../assets/position/business.png" class="hi8">Basic Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu1"><img
                                            src="../assets/position/job-offer.png" class="hi8">Job Description</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="home" class="tab-pane pd_0 active"><br>
                                    <div class="card-content collapse show">
                                        <div class="card-body pd_0">
                                            <div class="col-md-12 col-sm-12 col-xs-12 pd_0">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered wd_37">
                                                                <tr>
                                                                    <th>Client Name</th>
                                                                    <td>{{optional ($view->client_na)->client_name}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>SPOC Details</th>
                                                                    <td>
                                                                        <ul style="padding:0px;">
                                                                            <li>{{optional ($view->pos_client_cont)->contact_name}}
                                                                            </li>
                                                                            <li>{{optional ($view->pos_client_cont)->mobile}}
                                                                            </li>
                                                                            <li>{{optional ($view->pos_client_cont)->email}}
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Job Title</th>
                                                                    <td>{{$view->job_title }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Job Location</th>
                                                                    <td>{{$view->job_location}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Job Code</th>
                                                                    <td>{{$view->job_code}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Age</th>
                                                                    <td>{{$view->age_min}}-{{$view->age_max}}Years
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Gender</th>
                                                                    <td>{{$view->gender}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Experience</th>
                                                                    <td>{{$view->min_experience }}-{{$view->max_experience}}Years
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>CTC</th>
                                                                    <td>{{$view->annual_ctc_min}}-{{$view->annual_ctc_max}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Billable Value</th>
                                                                    <td>{{$view->billable_value}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Total Billable Value</th>
                                                                    <td>{{$view->total_billable}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Qualification</th>

                                                                    <td>{{optional ($view->qualification_title)->qualification_name}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Functional Area</th>
                                                                    <td>{{optional ($view->functional_pos)->function}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Created At</th>
                                                                    <td>{{$view->created_at}}</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered wd_37">
                                                                <tr>
                                                                    <th>Created By</th>
                                                                    <td>{{optional($view->position_create)->fname}}{{optional($view->position_create)->lname}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>CRM</th>
                                                                    <td style="text-align: left;">
                                                                        <!-- CRM Name Fetch -->

                                                                        @php

                                                                        $test=json_decode($view->crm);
                                                                        @endphp

                                                                        @foreach($test as $test1)
                                                                        @php

                                                                        $crm_name=App\Models\User::where('id',$test1)->get();

                                                                        @endphp
                                                                        <span class="badge badge-primary">
                                                                            {{$crm_name[0]->fname}}
                                                                            {{$crm_name[0]->lname}}</span>

                                                                        @endforeach
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Technical Skills</th>

                                                                    @php
                                                                    $test='';
                                                                    $test=json_decode($view->technicalskils);
                                                                    $count=count($test);
                                                                    @endphp



                                                                    <td>
                                                                        @php
                                                                        for($i=0;$i<$count;$i++){ @endphp <span
                                                                            class="badge badge-primary">
                                                                            {{$test[$i]}}</span>

                                                                            @php
                                                                            }

                                                                            @endphp
                                                                    </td>

                                                                </tr>

                                                                <tr>
                                                                    <th>Behavioural Skills</th>
                                                                    @php
                                                                    $test1='';
                                                                    $test1=json_decode($view->behaviour_skils);
                                                                    $count=count($test1)
                                                                    @endphp

                                                                    <td>
                                                                        @php
                                                                        for($i=0;$i<$count;$i++){ @endphp <span
                                                                            class="badge badge-secondary">
                                                                            {{$test1[$i]}}
                                                                            </span>
                                                                            @php
                                                                            }
                                                                            @endphp

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Total Openings</th>
                                                                    <td>{{$view->total_opening}}</td>
                                                                </tr>
                                                                <tr>
                                                                        @php
                                                                           $recruiter_id=App\Models\Position::where('position_id', $view->position_id)->get('recruiters');
                                                                        @endphp

                                                                    <th>Recruiters</th>
                                                                    <td>
                                                                         @foreach($recruiter_id as $recruiter_name)
                                                                            <span class="badge badge-primary">
                                                                        
                                                                                {{optional ($recruiter_name->client_requiter)->fname}}{{optional ($recruiter_name->client_requiter)->lname}}
                                                                            </span>
                                                                         @endforeach
                                                                       
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Start Date</th>
                                                                    <td>{{$view->created_at}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Exp. Joining Date</th>
                                                                    <td>{{$view->joining_date}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Resume Type</th>
                                                                    <td>{{$view->resume_type}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Project Type</th>
                                                                    <td>{{$view->project_type}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Hide Resume Contacts</th>
                                                                    <td>{{$view->resume_contact}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Modified On</th>
                                                                    <td>{{$view->joining_date}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Status</th>
                                                                    @if ($view->status == 1)
                                                                    <td><span
                                                                            class="badge badge-default badge-success">Assigned</span>
                                                                    </td>

                                                                    @else

                                                                    <td><span
                                                                            class="badge badge-default badge-danger">Inactive</span>
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
                                </div>
                                <div id="menu1" class="tab-pane fade pd_0"><br>
                                    <div class="card-content collapse show">
                                        <div class="card-body pd_0">
                                            <div class="col-md-12 col-sm-12 col-xs-12 pd_0">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered wd_37">
                                                        <tr>
                                                            <th>Job Description</th>
                                                            <td>{!!html_entity_decode($view->job_description_ckediter)!!}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Attachment</th>
                                                            <td>{{$view->file_attachment}}</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered wd_37">
                                        <tr>
                                            <th>Rev.1 : 02-Apr-2022</th>
                                            <td>yes</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- tab form start -->
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home2"><img
                                            src="../assets/position/resume.png" class="hi8">CV Uploaded <span
                                            class="clr">

                                            {{count($resume_delts)}}

                                        </span></a>
                                </li>
                                @php
                                $cv_send_count=count(App\Models\Resume::where('cv_status','>=',1)
                                                                        ->where('position_id','=',$view->position_id)
                                                                      ->get());
                                @endphp
                               
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu2"><img
                                            src="../assets/position/completed-task.png" class="hi8">CV Sent <span
                                            class="clr_green">{{$cv_send_count}}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu3"><img
                                            src="../assets/position/employee.png" class="hi8">CV Status</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu4"><img
                                            src="../assets/position/check-list.png" class="hi8">Overall Status</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="home2" class="tab-pane pd_0 active"><br>
                                    <table class="table table-striped table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" class="m_r">Code</th>
                                                <th>Candidate Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Location</th>
                                                <th>Pre. CTC</th>
                                                <th>Exp. CTC</th>
                                                <th>Notice</th>
                                                <th>Owner</th>
                                                <th>Download</th>
                                                <th>Action</th>
                                                <th>Created</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                            $i=1;
                                            @endphp
                                            @foreach($resume_delts as $res_show)
                                            <tr>
                                                <td class="pd_20"><input type="checkbox"
                                                        class="m_r">{{$res_show ->resume_code}}</td>
                                                <td><a href="{{url('resume_viewdetails',$res_show->id)}}">{{$res_show ->name}}</a></td>
                                                <td>{{$res_show ->mobile}}</td>
                                                <td>{{$res_show ->email}}</td>
                                                <td>{{$res_show ->present_location}}</td>
                                                <td>{{$res_show ->ctc_min}}</td>
                                                <td>{{$res_show ->ctc_max}}</td>
                                                <td>{{$res_show ->notice_period}}</td>
                                                @php

                                                $creatby_name=App\Models\User::where('id',($res_show->created_by))->get();

                                                @endphp


                                                <td>{{$creatby_name[0]->fname}}</td>
                                                <td class="t_c">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary pd_5" type="button"
                                                            data-toggle="dropdown">
                                                            <span class="caret"><i class="fa fa-angle-down"
                                                                    aria-hidden="true"></i></span></button>
                                                        <ul class="dropdown-menu t_c">
                                                            <li><a href="#">Download Resume</a></li>
                                                            <li><a href="#">View Resume</a></li>
                                                        </ul>
                                                    </div>
                                                </td>

                                                <!-- resume approve and reject ,send cv popup modal inside thid td -->

                                                <td>
                                                    @php
                                                    $fetch_crm=App\Models\Client::where('id',$res_show->client_id)->get();
                                                    @endphp

                                                    @if(in_array(session('USER_ID'),json_decode($fetch_crm[0]->crm_id)))
                                                    @if($res_show->crm_status==0)
                                                    <div class="dropdown">
                                                        <button class="btn pd_slst" type="button"
                                                            data-toggle="dropdown">
                                                            <span class="caret"><img src="../assets/position/gear.png"
                                                                    class="hi8"></span></button>
                                                        <ul class="dropdown-menu t_c">
                                                            <li data-toggle="modal"><a
                                                                    href="{{url('approve_cv',$res_show->id)}}"><img
                                                                        src="../assets/position/shortlist.png"
                                                                        class="hi8">Approve</a>
                                                            </li>
                                                            <li data-toggle="modal" data-target="#rejectcv{{$res_show->id}}">
                                                                    <img src="../assets/position/rejected.png"
                                                                        class="hi8">Rejected
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    @elseif($res_show->crm_status==1 && $res_show->cv_status>=1)<span
                                                        class="badge badge-success" data-toggle="tooltip"
                                                        data-placement="top" title="Billing Pending">CV Sent</span>
                                                            @elseif($res_show->crm_status==2 )
                                                            <span class="badge badge-danger" data-toggle="tooltip"
                                                        data-placement="top" title="Billing Pending">Rejected</span>
                                                    @else<span class="badge badge-success" data-toggle="tooltip"
                                                        data-placement="top" title="Billing Pending">Approved</span>
                                                      
                                                    @endif

                                                       @if($res_show->crm_status==1 && $res_show->cv_status==0) <a
                                                            href="#"><img src="../assets/position/next.png" class="hi8"
                                                                data-toggle="modal"
                                                                data-target="#sendcv{{$res_show->id}}"></a> 
                                                        @endif
                                                    @endif

                                                    @if(!in_array(session('USER_ID'),json_decode($fetch_crm[0]->crm_id)))
                                                        @if($res_show->crm_status==0)
                                                        <span class="badge badge-warning" data-toggle="tooltip"
                                                            data-placement="top" title="Billing Pending">CRM
                                                            Pending</span>
                                                        @elseif($res_show->crm_status==1 && $res_show->cv_status>=1)<span
                                                            class="badge badge-success" data-toggle="tooltip"
                                                            data-placement="top" title="Billing Pending">CV Sent</span>
                                                                @elseif($res_show->crm_status==2 )
                                                                <span class="badge badge-danger" data-toggle="tooltip"
                                                            data-placement="top" title="Billing Pending">Rejected</span>
                                                        @else<span class="badge badge-success" data-toggle="tooltip"
                                                            data-placement="top" title="Billing Pending">Approved</span>
                                                        
                                                        @endif
                                                    @endif<br>

                                                    

                                                    <!-- reject cv by crm from cv uploaded tab start -->
                                                        <form action="{{ url('reject_cv',$res_show->id)}}" method="post" class="form"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal fade" id="rejectcv{{$res_show->id}}" tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header cnt223">
                                                                            <h1 class="modal-title" id="exampleModalLongTitle">Reject CV
                                                                            </h1>
                                                                            <button type="button" class="close" data-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="">
                                                                                <table class="table table-bordered wd_21 t_left">
                                                                                    <tr>
                                                                                        <th class="pd_410">Candidate Name
                                                                                        </th>
                                                                                        <td class="pd_410"><input type="text"
                                                                                                class="form-control"
                                                                                                name="resume_candidate_name"
                                                                                                value="{{$res_show->name}}" readonly></td>
                                                                                    </tr>                      
                                                                                    <tr>
                                                                                        <th class="pd_410">Remarks</th>
                                                                                        <td class="pd_410"><textarea name="reject_cvremark"
                                                                                                class="form-control" id="" cols="30"
                                                                                                rows="2"></textarea></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                            <button type="button" class="btn btn-danger"
                                                                                data-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- reject cv by crm from cv uploaded tab end -->


                                                    <!-- Send CV to Client form  modal start -->

                                                    <form action="{{ url('send-resume',$res_show->id)}}" method="post"
                                                        class="form" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal fade text-left" id="sendcv{{$res_show->id}}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header cnt223">
                                                                        <h1 class="modal-title"
                                                                            id="exampleModalLongTitle">Send CV to
                                                                            Client</h1>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="">
                                                                            <table class="table table-bordered wd_16">
                                                                                <tr>
                                                                                    <th class="pd_410">Client</th>
                                                                                    <td class="pd_410"><input
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            value="{{optional ($view->client_na)->client_name}}<{{optional ($view->pos_client_cont)->contact_name}}> <{{optional ($view->pos_client_cont)->email}}>" readonly>       
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="pd_410">Cc</th>
                                                                                    <td class="pd_410"><input
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            value=""
                                                                                            placeholder="Add multiple emails separated by comma">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="pd_410">Candidate(s)
                                                                                    </th>
                                                                                    <td class="pd_410"><input
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            value="{{$res_show ->name}}"
                                                                                            readonly></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="pd_410">Subject*</th>
                                                                                    <td class="pd_410"><input
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            value="CVs for the Position of {{$view->job_title }},{{ date('j F-Y', time()) }}">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="pd_410">Message*</th>
                                                                                    <td class="pd_410">

                                                                                        <textarea name="editor1"
                                                                                            id="editor{{$res_show->id}}" rows="10" 
                                                                                            cols="80" value="">Dear Mr. {{($view->pos_client_cont)->contact_name}} ,</br>

                                                                                                                    @php
                                                                                                                    $crm_name=App\Models\User::where('id',session('USER_ID'))->get(['fname','lname']);
                                                                                                                    @endphp
                                                                                                    Greetings from {{$crm_name[0]->fname}} {{$crm_name[0]->lname}}.</br>

                                                                                                    Based on the Job Specification shared / revised on {{ date('j F-Y', strtotime($view->updated_at)) }}  for this position,</br> I have sourced the following CVs and the same is attached herewith for your review.

                                                                                                    Kindly go through the CVs and share the details of shortlisted CVs for their interview line-up.</br>

                                                                                                    {{$res_show ->name}}</br>

                                                                                                    Trust you find these candidates suitable. Please do let me know if there requires any further information about the candidate(s) which are not available in the CVs.</br>



                                                                                                    For your reference, I am also sharing the details of CVs shared earlier for this position and its current status.

                                                                                                    </textarea>
                                                                               

                                                                           
                                                                                        <script>
                                                                                        CKEDITOR.replace('editor{{$res_show->id}}');
                                                                                        </script>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="pd_410">Attachment
                                                                                    </th>
                                                                                    <td class="pd_410"><input
                                                                                            type="file"
                                                                                            class="form-control">
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Submit</button>
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- Send CV to Client form modal  end -->
                                                </td>
                                                <td>{{$view->created_at}}</td>
                                            </tr>
                                            @php
                                            $i++;
                                            @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="dropdown">
                                        <button class="btn btn-primary" type="button" data-toggle="dropdown">
                                            <span class="caret">Action <i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu t_c">
                                            <li data-toggle="modal" data-target="#sendcv"><a href="#">Send CV</a>
                                            </li>
                                        </ul>
                                    </div>
                                   

                                    <!-- Modal -->
                                </div>


                                <div id="menu2" class="tab-pane fade pd_0"><br>
                                    <table class="table table-striped table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Candidate Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Location</th>
                                                <th>Pre. CTC</th>
                                                <th>Exp. CTC</th>
                                                <th>Notice</th>
                                                <th>Owner</th>
                                                <th>Download</th>
                                                <th>Created</th>
                                                <th>Sent</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- CV Send data -->
                                            @php
                                            $cv_details=App\Models\Resume::where('cv_status','>=','1')
                                                                          ->where('position_id',$view->position_id)
                                                                          ->get();
                                                                          @endphp

                                            @foreach($cv_details as $res_show)
                                            <tr>
                                                <td class="pd_20"><input type="checkbox"
                                                        class="m_r">{{$res_show ->resume_code}}</td>
                                                <td><a href="{{url('resume_viewdetails',$res_show->id)}}">{{$res_show ->name}}</a></td>
                                                <td>{{$res_show ->mobile}}</td>
                                                <td>{{$res_show ->email}}</td>
                                                <td>{{$res_show ->present_location}}</td>
                                                <td>{{$res_show ->ctc_min}}</td>
                                                <td>{{$res_show ->ctc_max}}</td>
                                                <td>{{$res_show ->notice_period}}</td>
                                                @php

                                                $creatby_name=App\Models\User::where('id',($res_show->created_by))->get();

                                                @endphp


                                                <td>{{$creatby_name[0]->fname}}</td>

                                                <td class="t_c">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary pd_5" type="button"
                                                            data-toggle="dropdown">
                                                            <span class="caret"><i class="fa fa-angle-down"
                                                                    aria-hidden="true"></i></span></button>
                                                        <ul class="dropdown-menu t_c">
                                                            <li><a href="#">Download Resume</a></li>
                                                            <li><a href="#">View Resume</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>{{$res_show ->created_at}}</td>
                                                <td>{{$res_show ->cv_send_date}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <!-- cv status 3tab form-->
                                <div id="menu3" class="tab-pane fade pd_0"><br>
                                    <table class="table table-striped w_100">
                                        <thead>
                                            @php
                                            $cv_status=App\Models\Resume::where('cv_status','>=',1)
                                             ->where('position_id',$view->position_id)
                                            ->get();@endphp


                                            <tr>
                                                <th>#</th>
                                                <th>Candidate Name</th>
                                                <th>Screening Status</th>
                                                <th>Interview Status</th>
                                                <th>Offer Status</th>
                                                <th>Joining Status</th>
                                                <th>Billing Status</th>
                                            </tr>

                                        </thead>

                                        <tbody>
                                            @foreach($cv_status as $key => $res_show)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td> <a href="#"> {{$res_show->name}}</a>
                                                </td>
                                                <td class="t_c">
                                                    @if($res_show->cv_status==1)
                                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                                        title="CV Feedback Awaiting">FA</span>
                                                    @elseif ($res_show->cv_status>=2 && $res_show->cv_status !=3)

                                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                                        title="Shortlisted" style="background-color: #c3facb;">S</span>

                                                    @elseif ($res_show->cv_status==3)

                                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                                        title="Reject" style="background-color: #edd4d0;">R</span>


                                                    @endif
                                                    @if($res_show->cv_status< 2)
                                                        <div class="dropdown d_inblk">
                                                        <button class="btn btn-primary pd_5" type="button"
                                                            data-toggle="dropdown">

                                                            <span class="caret"><i class="fa fa-angle-down"
                                                                    aria-hidden="true"></i></span></button>
                                                        <ul class="dropdown-menu t_c">
                                                            <li>
                                                                <button type="button" class="btn pd_slst"
                                                                    data-toggle="modal"
                                                                    data-target="#screeningstatus_shortlistcv{{$res_show->id}}">

                                                                    <img src="../assets/position/shortlist.png"
                                                                        class="hi8">Shortlisted
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn pd_slst"
                                                                    data-toggle="modal"
                                                                    data-target="#screeningstatus_rejectcv{{$res_show->id}}">

                                                                    <img src="../assets/position/rejected.png"
                                                                        class="hi8">Rejected
                                                                </button>
                                                            </li>
                                                        </ul>
                                </div>
                                @endif
                                <!-- Shortlist CV Modal start -->
                                <form action="{{ url('screening_status',$res_show->id)}}" method="post" class="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal fade" id="screeningstatus_shortlistcv{{$res_show->id}}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header cnt223">
                                                    <h1 class="modal-title" id="exampleModalLongTitle">Shortlist CV
                                                    </h1>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="text" value="{{$res_show ->id}}" id="resume_id_ajax" name="candidate_id"
                                                        hidden>
                                                    <input type="text" value="{{$res_show ->position_id}}" name="pos_id"
                                                        hidden>
                                                    <input type="text" value="{{$res_show ->client_id}}"
                                                        name="client_id" hidden>
                                                    <div class="">
                                                        <table class="table table-bordered wd_21 t_left">
                                                            <tr>
                                                                <th class="pd_410">Candidate Name
                                                                </th>
                                                                <td class="pd_410"><input type="text"
                                                                        class="form-control"
                                                                        name="resume_candidate_name"
                                                                        value="{{$res_show->name}}" readonly></td>
                                                            </tr>
                                                            <tr>
                                                                <th class="pd_410">Remarks</th>
                                                                <td class="pd_410"><textarea name="remarks"
                                                                        class="form-control" id="" cols="30"
                                                                        rows="2"></textarea></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--    Shortlist CV Modal end Modal -->

                                <!--reject interview  Modal start-->
                                <form action="{{ url('screening_stat',$res_show->id)}}" method="post" class="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal fade" id="screeningstatus_rejectcv{{$res_show->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header cnt223">
                                                    <h1 class="modal-title" id="exampleModalLongTitle">Reject CV
                                                    </h1>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="text" value="{{$res_show ->id}}" name="candidate_id"
                                                        hidden>
                                                    <input type="text" value="{{$res_show ->position_id}}" name="pos_id"
                                                        hidden>
                                                    <input type="text" value="{{$res_show ->client_id}}"
                                                        name="client_id" hidden>
                                                    <div class="">
                                                        <table class="table table-bordered wd_21 t_left">
                                                            <tr>
                                                                <th class="pd_410">Candidate Name
                                                                </th>
                                                                <td class="pd_410"><input type="text"
                                                                        class="form-control"
                                                                        name="resume_candidate_name"
                                                                        value="{{$res_show->name}}" readonly></td>
                                                            </tr>
                                                            <tr>
                                                                <th class="pd_410">Reject Reason*
                                                                </th>
                                                                <td class="pd_410">
                                                                    <select class="form-control" name="reject_reson">
                                                                        <option>Select</option>
                                                                        <option value="Already Interviewed
                                                                                Candidate">Already Interviewed
                                                                            Candidate</option>
                                                                        <option value="Barred Candidate">Barred
                                                                            Candidate
                                                                        </option>
                                                                        <option value="Client Changed JD
                                                                                Specification">Client Changed JD
                                                                            Specification</option>
                                                                        <option value="CV Misfit">CV Misfit</option>
                                                                        <option value="Duplicate CV">Duplicate CV
                                                                        </option>
                                                                        <option value="Reason not Shared">Reason not
                                                                            Shared
                                                                        </option>
                                                                        <option value="TAT Non-adherence">TAT
                                                                            Non-adherence
                                                                        </option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="pd_410">Remarks</th>
                                                                <td class="pd_410"><textarea name="remarks"
                                                                        class="form-control" id="" cols="30"
                                                                        rows="2"></textarea></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--reject interview  Modal end-->
                                <br><br>

                                </td>

                                <!-- interview status start -->
                                <!-- ISA code start -->
                                <td class="t_c">
                                    @if($res_show->cv_status==2)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="Interview Schedule Awaited">ISA</span>

                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu t_c">
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#scheduleinterview{{$res_show ->id}}">
                                                    Schedule Interview
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                    <!-- ISA code end -->

                                    <!-- first interview schedule start -->
                                    @if($res_show->cv_status==4 || $res_show->cv_status==5)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="First Interview Scheduled">1 IS</span>
                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu t_c">
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#viewinterview{{$res_show ->id}}">
                                                    View Interview Details
                                                </button>
                                            </li>

                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#rescheduleinterview{{$res_show ->id}}">
                                                    Re-Schedule Interview
                                                </button>
                                            </li><br>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#interviewselected{{$res_show ->id}}">
                                                    <img src="../assets/position/shortlist.png" class="hi8">Interview
                                                    Selected
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#interviewreject{{$res_show ->id}}">
                                                    <img src="../assets/position/rejected.png" class="hi8">Interview
                                                    Rejected
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                    <!-- first interview schedule end -->
                                    @if($res_show->cv_status==7)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top" title="Rejected"
                                        style="background-color: #edd4d0;">R</span>
                                    @endif
                                    <!-- second interview schedule start -->
                                    @if($res_show->cv_status==6)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="Interview Schedule Awaited">2 ISA</span>

                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu t_c">
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#viewinterview{{$res_show ->id}}">
                                                    View Interview Details
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#scheduleinterview{{$res_show ->id}}">
                                                    Schedule Interview
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                    <!-- second interview schedule end -->
                                    <!-- 2nd interview schedule start -->
                                    @if($res_show->cv_status==8 || $res_show->cv_status==9)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="First Interview Scheduled">2 IS</span>
                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu t_c">
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#viewinterview{{$res_show ->id}}">
                                                    View Interview Details
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#rescheduleinterview{{$res_show ->id}}">
                                                    Re-Schedule Interview
                                                </button>
                                            </li><br>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#interviewselected{{$res_show ->id}}">
                                                    <img src="../assets/position/shortlist.png" class="hi8">Interview
                                                    Selected
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#interviewreject{{$res_show ->id}}">
                                                    <img src="../assets/position/rejected.png" class="hi8">Interview
                                                    Rejected
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                    <!-- 2nd interview schedule end -->
                                    <!-- 3rd interview schedule start -->
                                    @if($res_show->cv_status==10)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="Interview Schedule Awaited">3 ISA</span>

                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu t_c">
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#viewinterview{{$res_show ->id}}">
                                                    View Interview Details
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#scheduleinterview{{$res_show ->id}}">
                                                    Schedule Interview
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif

                                    @if($res_show->cv_status==11)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top" title="Rejected"
                                        style="background-color: #edd4d0;">R</span>
                                    @endif
                                    <!-- 3rd interview schedule end -->

                                    <!-- 3rd interview schedule start -->
                                    @if($res_show->cv_status==12 ||$res_show->cv_status==13)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="First Interview Scheduled">3 IS</span>
                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu t_c">
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#viewinterview{{$res_show ->id}}">
                                                    View Interview Details
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#rescheduleinterview{{$res_show ->id}}">
                                                    Re-Schedule Interview
                                                </button>
                                            </li><br>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#interviewselected{{$res_show ->id}}">
                                                    <img src="../assets/position/shortlist.png" class="hi8">Interview
                                                    Selected
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#interviewreject{{$res_show ->id}}">
                                                    <img src="../assets/position/rejected.png" class="hi8">Interview
                                                    Rejected
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                    <!-- 3rd interview schedule end -->

                                    <!-- 4th interview schedule start -->
                                    @if($res_show->cv_status==14)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="Interview Schedule Awaited">4 ISA</span>

                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu t_c">
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#viewinterview{{$res_show ->id}}">
                                                    View Interview Details
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#scheduleinterview{{$res_show ->id}}">
                                                    Schedule Interview
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                    <!-- 4th interview schedule end -->

                                    @if($res_show->cv_status==15)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top" title="Rejected"
                                        style="background-color: #edd4d0;">R</span>
                                    @endif

                                    <!-- 4th interview schedule start -->
                                    @if($res_show->cv_status==16 || $res_show->cv_status==17)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="First Interview Scheduled">4 IS</span>
                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu t_c">
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#viewinterview{{$res_show ->id}}">
                                                    View Interview Details
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#rescheduleinterview{{$res_show ->id}}">
                                                    Re-Schedule Interview
                                                </button>
                                            </li><br>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#interviewselected{{$res_show ->id}}">
                                                    <img src="../assets/position/shortlist.png" class="hi8">Interview
                                                    Selected
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#interviewreject{{$res_show ->id}}">
                                                    <img src="../assets/position/rejected.png" class="hi8">Interview
                                                    Rejected
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                    <!-- 4th interview schedule end -->

                                    <!-- final interview -->
                                    @if($res_show->cv_status==18)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="First Interview Scheduled">FISA</span>
                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu t_c">
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#viewinterview{{$res_show ->id}}">
                                                    View Interview Details
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#scheduleinterview{{$res_show ->id}}">
                                                    Schedule Interview
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                    <!--  final interview end-->

                                    @if($res_show->cv_status==19)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top" title="Rejected"
                                        style="background-color: #edd4d0;">R</span>
                                    @endif

                                    <!-- final interview schedule start -->
                                    @if($res_show->cv_status==20 || $res_show->cv_status==21)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="First Interview Scheduled">FIS
                                    
                                    </span>
                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu t_c">
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#viewinterview{{$res_show ->id}}">
                                                    View Interview Details
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#rescheduleinterview{{$res_show ->id}}">
                                                    Re-Schedule Interview
                                                </button>
                                            </li><br>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#interviewselected{{$res_show ->id}}">
                                                    <img src="../assets/position/shortlist.png" class="hi8">Interview
                                                    Selected
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#interviewreject{{$res_show ->id}}">
                                                    <img src="../assets/position/rejected.png" class="hi8">Interview
                                                    Rejected
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                    <!-- final interview schedule end -->

                                    @if($res_show->cv_status>=22 && $res_show->cv_status !=23)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top" title="Shortlisted"
                                        style="background-color: #c3facb;">S</span>
                                    @endif
                                    <!-- final rejected start -->
                                    @if($res_show->cv_status==23)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top" title="Rejected"
                                        style="background-color: #edd4d0;">R</span>
                                    @endif
                                    <!-- final rejected start -->

                                    <!-- scheduleinterview form start -->
                                    <div class="modal fade bd-example-modal-lg" id="scheduleinterview{{$res_show ->id}}"
                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header cnt223">
                                                    <h1 class="modal-title" id="exampleModalLongTitle">Schedule
                                                        Interview </h1>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <!-- interview schedule form start  -->
                                                <form action="{{url('/schedule_interview',$res_show ->id)}}"  method='post'>
                                                   
                                                    @csrf
                                                    <div class="modal-body">
                                                            


                                                            <input type="text" value="{{$res_show ->id}}" name="candidate_id" id="resumeid_ajax_address"
                                                                hidden>
                                                            <input type="text" value="{{$res_show ->position_id}}" name="pos_id"
                                                                hidden>
                                                            <input type="text" value="{{$res_show ->client_id}}"
                                                                name="client_id" hidden>
                                                            


                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-toggle="tab"
                                                                        href="#ID{{$res_show ->id}}">Interview Details</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="tab"
                                                                        href="#ICclient{{$res_show ->id}}">Interview
                                                                        Confirmation to Clients</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="tab"
                                                                        href="#ICcandidate{{$res_show ->id}}">Interview
                                                                        Confirmation to Candidate</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div id="ID{{$res_show ->id}}" class="tab-pane active pd_0">
                                                                    <br>
                                                                    <table class="table table-bordered wd_21 t_left">
                                                                        <tr>
                                                                            <th class="pd_410">Client</th>
                                                                                <td class="pd_410">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    value="{{optional ($view->client_na)->client_name}}<{{optional ($view->pos_client_cont)->contact_name}}> <{{optional ($view->pos_client_cont)->email}}>"
                                                                                    name="client_data_interview"
                                                                                    readonly>
                                                                                </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="pd_410">Cc</th>
                                                                            <td class="pd_410"><input type="text"
                                                                                    class="form-control" name="gmail_name_cc"
                                                                                    placeholder="Add multiple emails separated by comma">
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th class="pd_410">Candidate(s)
                                                                            </th>
                                                                            <td class="pd_410"><input type="text"
                                                                                    class="form-control" name="cand_name_interview"
                                                                                    value="{{$res_show->name}}" readonly>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="pd_410">Interview
                                                                                Level*</th>
                                                                            <td class="pd_410">
                                                                                <ul>
                                                                                    @if($res_show->cv_status==2)
                                                                                    <li class="d_inblk li_rdo">
                                                                                        <label class="form-check-label"
                                                                                            for="radio1">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                id="xyz"
                                                                                                name="interview_level"
                                                                                                value="1">First
                                                                                            Interview
                                                                                        </label>
                                                                                    </li>
                                                                                    @endif
                                                                                    @if($res_show->cv_status<=6 ) <li
                                                                                        class="d_inblk li_rdo">
                                                                                        <label class="form-check-label"
                                                                                            for="radio2">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                id="first"
                                                                                                name="interview_level"
                                                                                                value="2">Second
                                                                                            Interview
                                                                                        </label>
                                                                                        </li>
                                                                                        @endif
                                                                                        @if($res_show->cv_status<=10) <li
                                                                                            class="d_inblk li_rdo">
                                                                                            <label class="form-check-label"
                                                                                                for="radio3">
                                                                                                <input type="radio"
                                                                                                    class="form-check-input"
                                                                                                    id="first"
                                                                                                    name="interview_level"
                                                                                                    value="3">Third
                                                                                                Interview
                                                                                            </label>
                                                                                            </li>
                                                                                            @endif
                                                                                            @if($res_show->cv_status<=14) <li
                                                                                                class="d_inblk li_rdo">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="radio4">
                                                                                                    <input type="radio"
                                                                                                        class="form-check-input"
                                                                                                        id="first"
                                                                                                        name="interview_level"
                                                                                                        value="4">Fourth
                                                                                                    Interview
                                                                                                </label>
                                                                                                </li>
                                                                                                @endif
                                                                                                @if($res_show->cv_status<=18)
                                                                                                    <li
                                                                                                    class="d_inblk li_rdo">
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="radio5">
                                                                                                        <input type="radio"
                                                                                                            class="form-check-input"
                                                                                                            id="first"
                                                                                                            name="interview_level"
                                                                                                            value="5">Final
                                                                                                        Interview
                                                                                                    </label>
                                                                                                    </li>
                                                                                                    @endif
                                                                                    </ul>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="pd_410">Interview
                                                                                Mode*</th>
                                                                            <td class="pd_410">
                                                                                <ul>
                                                                                    <li class="d_inblk li_rdo">
                                                                                        <label class="form-check-label"
                                                                                            for="radio6">
                                                                                            <a href="#!" class="show-btn">
                                                                                                <input type="radio"
                                                                                                    class="form-check-input"
                                                                                                    id="f2f"
                                                                                                    name="interview_mode"
                                                                                                    value="Face to Face">
                                                                                            </a>
                                                                                            Face to Face
                                                                                        </label>
                                                                                    </li>
                                                                                    <li class="d_inblk li_rdo">
                                                                                        <label class="form-check-label"
                                                                                            for="radio7">
                                                                                            <a href="#!" class="hide-btn">
                                                                                                <input type="radio"
                                                                                                    class="form-check-input"
                                                                                                    id="telecon"
                                                                                                    name="interview_mode"
                                                                                                    value="telecon">
                                                                                            </a>
                                                                                            TeleCon
                                                                                        </label>
                                                                                    </li>
                                                                                    <li class="d_inblk li_rdo">
                                                                                        <label class="form-check-label"
                                                                                            for="radio8">
                                                                                            <a href="#!" class="hide-btn">
                                                                                                <input type="radio"
                                                                                                    class="form-check-input"
                                                                                                    id="vc"
                                                                                                    name="interview_mode"
                                                                                                    value="vc">
                                                                                            </a>
                                                                                            Video Conference
                                                                                        </label>
                                                                                    </li>
                                                                                </ul>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="box">
                                                                            <th class="pd_410">Interview Venue Address </th>
                                                                            
                                                                            <td class="pd_410">
                                                                                <select class="form-control"
                                                                                    id="get_address{{$res_show ->id}}" name="interview_venue_adrs">
                                                                                    <option value="0" selected>Choose Interview Venue 
                                                                                        Address                                                                                                                      
                                                                                        </option>
                                                                                    <option value="1">Corporate/Plant
                                                                                        Address</option>
                                                                                    <option value="2">Other Location
                                                                                    </option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="pd_410">Interview
                                                                                Date*</th>
                                                                            <td class="pd_410">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-md-8 col-sm-8 col-xs-12">
                                                                                        <input type="datetime-local"
                                                                                            class="form-control" id=""
                                                                                            name="interview_date">
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control" id=""
                                                                                            name="interview_time_period">
                                                                                            <option selected>
                                                                                                Duration
                                                                                            </option>
                                                                                            <option>30 Mins.
                                                                                            </option>
                                                                                            <option>45 Mins.
                                                                                            </option>
                                                                                            <option>1 Hr
                                                                                            </option>
                                                                                            <option>2 Hrs
                                                                                            </option>
                                                                                            <option>3 Hrs
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>


                                                                        <tr class="box3">
                                                                            <th class="pd_410">Interview
                                                                                Venue*</th>
                                                                            <td class="pd_410" id="">
                                                                                <textarea  name="interview_venue"
                                                                                    class="form-control" id=""
                                                                                    rows="2">
                                                                                </textarea>    
                                                                            </td>
                                                                          
                                                                        </tr>
                                                                        
                                                                        <tr class="box">
                                                                            <th class="pd_410">Interview
                                                                                Venue*</th>
                                                                            <td class="pd_410" id="interview{{$res_show ->id}}" name="interview_venue">    
                                                                            </td>
                                                                          
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="pd_410">Choose Spoc
                                                                            </th>
                                                                            <td class="pd_410">
                                                                                @php
                                                                                $get_client_id=APP\Models\client::where('id',$res_show->client_id)->get();
                                                                                $get_spoc=APP\Models\ClientContact::where('client_id',$get_client_id[0]->id)->get();

                                                                                @endphp

                                                                                <select class="form-control" id="spoc{{$res_show ->id}}"
                                                                                    name="spoc_interview">

                                                                                    <option>Choose Spoc
                                                                                    </option>
                                                                                    @foreach($get_spoc as $scpo_name)
                                                                                    <option value="{{$scpo_name->id}}">
                                                                                        {{$scpo_name->contact_name}}
                                                                                    </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="pd_410">Contact
                                                                                Details*</th>
                                                                            <td class="pd_410">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="contact_name{{$res_show ->id}}" name="client_contact_name"
                                                                                            placeholder="Contact Person Name">
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="contact_phone{{$res_show ->id}}" name="client_contact_number"
                                                                                            placeholder="Contact Mobile No.">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="pd_410">Additional
                                                                                Info</th>
                                                                            <td class="pd_410"><textarea name="additional_info"
                                                                                    class="form-control" id="" cols="63"
                                                                                    rows="2"></textarea>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <!-- 2nd tab start for Schedule Interview form -->
                                                                <div id="ICclient{{$res_show ->id}}" class="tab-pane fade">
                                                                    <br>
                                                                    <table class="table table-bordered wd_16 t_left">
                                                                        <tr>
                                                                            <th class="pd_410">Client</th>
                                                                            <td class="pd_410"><input type="text"
                                                                                    class="form-control" name="client_name_interview"
                                                                                    value="{{optional ($view->client_na)->client_name}}<{{optional ($view->pos_client_cont)->contact_name}}> <{{optional ($view->pos_client_cont)->email}}>"
                                                                                    readonly></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th class="pd_410">Subject*</th>
                                                                            <td class="pd_410"><input type="text"
                                                                                    class="form-control" name="client_subject_interview"
                                                                                    value="Interview Schedule of Candidates for the Position of {{$view->job_title}}">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            @php
                                                                            $get_crm_name=APP\Models\User::where('id',session('USER_ID'))->get()
                                                                            @endphp

                                                                            <th class="pd_410">Message*</th>
                                                                            @foreach($get_crm_name as $crm_details)
                                                                            <td class="pd_410">
                                                                                <textarea name="second_msg_interview" id="editortwo{{$res_show ->id}}"
                                                                                    rows="10" cols="80"
                                                                                    value=""><p>Dear {{($view->pos_client_cont)->contact_name}},<br /><br />Greetings from {{$crm_details->fname}} {{$crm_details->lname}}<br /><br />In continuation to our telephonic discussions, I have lined-up the shortlisted candidate(s) for the interview(s) as per the following schedule.<br /><br />POSITION TITLE: {{$view->job_title }}<br /><br />{{$res_show ->name}}<br /><br />Trust this schedule is fine. Please do let me know if there requires any further information about the candidate(s) or the schedule.<br /><br />{{$crm_details->signature}}</p></textarea>
                                                                                <script>
                                                                                CKEDITOR.replace('editortwo{{$res_show ->id}}');
                                                                                </script>
                                                                            </td>
                                                                            @endforeach
                                                                        </tr>

                                                                    </table>
                                                                </div>
                                                                <!-- 3rd tab form schudel interview form -->                                 
                                                                <div id="ICcandidate{{$res_show ->id}}" class="tab-pane">
                                                                    <br>



                                                                    <table class="table table-bordered wd_16 t_left">
                                                                        <tr>
                                                                            <th class="pd_410">Candidate(s)
                                                                            </th>
                                                                            <td class="pd_410"><input type="text"
                                                                                    class="form-control" name="third_candidate_interview"
                                                                                    value="{{$res_show->name}}" readonly>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th class="pd_410">Subject*</th>
                                                                            <td class="pd_410"><input type="text"
                                                                                    class="form-control" name="third_subject_interview"
                                                                                    value="Interview Schedule for the Position of {{$view->job_title}}">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="pd_410">Message*</th>
                                                                            <td class="pd_410">
                                                                                
                                                                                <textarea  id="editorthree{{$res_show->id}}"
                                                                                    rows="10" cols="80" name="third_msg_interview"
                                                                                    value=""><p>Dear&nbsp;{{$res_show->name}}<br /><br /><strong>Greetings from {{($view->pos_client_cont)->contact_name}}&nbsp;</strong><br /><br />In continuation to our telephonic discussions, I am confirming your interview schedule with our client as below:</p>
                                                                                            <p>&nbsp;</p>
                                                                                            <table style="width: 500px; border-collapse: collapse; float: left; border:0px;"  cellspacing="4" cellpadding="4">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                            <td style="width: 193.217px;">COMPANY NAME</td>
                                                                                            <td style="width: 287.783px;">{{($view->client_na)->client_name}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            <td style="width: 193.217px;">POSITION TITLE</td>
                                                                                            <td style="width: 287.783px;">{{$view->job_title }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            <td style="width: 193.217px;">Interview Level</td>
                                                                                            <td id="Interview_span" style="width: 287.783px;"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            <td style="width: 193.217px;">Interview Date</td>
                                                                                            <td style="width: 287.783px;">[interview_date]</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            <td style="width: 193.217px;">Interview Time</td>
                                                                                            <td style="width: 287.783px;">[interview_time]</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            <td style="width: 193.217px;">Mode of Interview</td>
                                                                                            <td style="width: 287.783px;">[interview_mode]</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            <td style="width: 193.217px;">Venue</td>
                                                                                            <td style="width: 287.783px;" id="nights"><span id="nights"></span>[]</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            <td style="width: 193.217px;">Contact Person</td>
                                                                                            <td style="width: 287.783px;">[interview_contact_person]</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            <td style="width: 193.217px;">Contact No.</td>
                                                                                            <td style="width: 287.783px;">[interview_contact_no]</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            <td style="width: 193.217px;">Additional Info</td>
                                                                                            <td style="width: 287.783px;">[interview_additional]</td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                            </table>

                                                                                            <p><br />Trust this schedule is fine. Request your confirmation on the receipt of the mail and also your confirmation, through a reply mail, for attending the interview as per the schedule give above in this mail.<br />Please do carry all relevant documents as needed for the interview.<br /><br />Also, do let me know if there requires any further information about the interviewing process or the schedule. &nbsp;For more details about the company do refer to their website [website]<br /><br />Wish you all the best! Thanks.<br />Warm Regards<br /><br />[signature]</p></textarea>
                                                                                                <script>
                                                                                                CKEDITOR.replace('editorthree{{$res_show->id}}');
                                                                                                </script>
                                                                            </td>
                                                                        </tr>

                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>  

                                                    <!-- interview venue address choose interview venue and contact details ajax start -->
                                                    <script> 
                                                        
                                                        
                                                        $("#get_address{{$res_show ->id}}").on('change', function() {
                                                        
                                                        
                                                            var ab = $(this).val();
                                                            var resume_id= $('#resumeid_ajax_address').val();
                                                            if (ab == 1) {
                                                                $.ajax({
                                                                    url: "{{url('getaddtess')}}",
                                                                    type: "POST",
                                                                    data: {
                                                                        resume_id: resume_id,
                                                                        _token: '{{csrf_token()}}'
                                                                    },
                                                                    dataType: 'json',

                                                                    success: function(result) {
                                                                        $('#interview{{$res_show ->id}}').html('<textarea  resize=none name="interview_venue"' +
                                                                            'class="form-control" id="interview{{$res_show ->id}}" ' +
                                                                            'rows="4">' + result[0][0].client_name +
                                                                            '\nAddress: ' + result[0][0].door_no + ', ' + result[0][0]
                                                                            .street_name + ', ' + result[0][0].area_name +
                                                                            '\nCity/Town: ' + result[1][0].name + '\nDistricts: ' + result[
                                                                                2][0].district_title + '\n' + result[3][0].state_title +
                                                                            ' ,' + result[0][0].pincode + '</textarea>');

                                                                    },
                                                                });
                                                            } else {
                                                                $('#interview').html('<textarea name="interview_venue"' +
                                                                    'class="form-control" id="interview" cols="63"' +
                                                                    'rows="2"></textarea>');
                                                            }

                                                        });

                                                        $("#spoc{{$res_show ->id}}").on('change', function() {
                                                            var test = $(this).val();


                                                            $.ajax({
                                                                url: "{{url('getspoc')}}",
                                                                type: "POST",
                                                                data: {
                                                                    id: test,
                                                                    _token: '{{csrf_token()}}'
                                                                },
                                                                dataType: 'json',

                                                                success: function(spoc_details) {
                                                                    $('#contact_name{{$res_show ->id}}').val(spoc_details[0].contact_name);
                                                                    $('#contact_phone{{$res_show ->id}}').val(spoc_details[0].mobile);

                                                                },
                                                            });


                                                        });
                                                    </script>
                                                    <!-- interview venue address choose interview venue and contact details ajax end -->
                                               


                                                </form>
                                        </div>
                                    </div>
                                    <!-- end scheduleinterview form -->

                                    <!-- Interview view Details form page-->
                                    @php 
                                     
                                         
                                    if($res_show ->cv_status==6 || $res_show ->cv_status==4 || $res_show ->cv_status==5){
                                        $interview_level=1;
                                    }
                                    elseif($res_show ->cv_status==10 || $res_show ->cv_status==8 || $res_show ->cv_status==9){
                                        $interview_level=2;
                                    }
                                    elseif($res_show ->cv_status==14 || $res_show ->cv_status==12 || $res_show ->cv_status==13){
                                         $interview_level=3;
                                    }
                                    elseif($res_show ->cv_status==18 || $res_show ->cv_status==16 || $res_show ->cv_status==17 ){
                                         $interview_level=4;
                                    }
                                    elseif($res_show ->cv_status==20 || $res_show ->cv_status==21 ){
                                         $interview_level=5;
                                    }

                                    else{
                                        $interview_level="";
                                    }
                                                                   
                
                                    $interview_details = App\Models\Interview::where('candidate_id',$res_show ->id)->where('interview_level', $interview_level)->orderBy('id', 'DESC')->first();
                                
                                    @endphp 

                    
                                    

                                
  
                                   @if(!empty ($interview_details))
                                    <div class="modal fade bd-example-modal-lg" id="viewinterview{{$res_show ->id}}"
                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header cnt223">
                                                    <h1 class="modal-title" id="exampleModalLongTitle">View
                                                        Interview
                                                        Details</h1>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <table class="table table-bordered wd_21 t_left">
                                                        <tr>
                                                            <th class="pd_410">Candidate Name</th>
                                                            <td class="pd_410">{{$interview_details->candidate_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pd_410">Interview Level</th>
                                                            @if($interview_details->interview_level==1)
                                                            <td class="pd_410">First Interview</td>
                                                               @elseif($interview_details->interview_level==2)
                                                               <td class="pd_410">Second Interview</td>
                                                               @elseif($interview_details->interview_level==3)
                                                               <td class="pd_410">Third Interview</td>
                                                               @elseif($interview_details->interview_level==4)
                                                               <td class="pd_410">Four Interview</td>
                                                               @elseif($interview_details->interview_level==5)
                                                               <td class="pd_410">Five Interview</td>



                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            <th class="pd_410">Interview Mode</th>
                                                            <td class="pd_410">{{$interview_details->interview_mode}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pd_410">Interview Date</th>
                                                            <td class="pd_410">{{$interview_details->interview_date}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pd_410">Interview Time</th>
                                                            <td class="pd_410">{{$interview_details->interview_date}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pd_410">Interview Duration
                                                            </th>
                                                            <td class="pd_410">{{$interview_details->interview_timeperiod}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pd_410">Venue</th>
                                                            <td class="pd_410">{{$interview_details->interview_venue}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pd_410">Contact Person</th>
                                                            <td class="pd_410">{{$interview_details->client_contact_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pd_410">Contact No.</th>
                                                            <td class="pd_410">{{$interview_details->client_contact_number}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pd_410">Additional Info</th>
                                                            <td class="pd_410">{{$interview_details->addition_info}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pd_410">Last Updated</th>
                                                            <td class="pd_410">{{$interview_details->updated_at}}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- Interview view Details form page end-->


                                    <!-- resrescheduleinterview form start -->
                                    <form action="{{url('/reschedule_interview',$res_show ->id)}}" method='post'>
                                        @csrf
                                        <div class="modal fade bd-example-modal-lg"
                                            id="rescheduleinterview{{$res_show ->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header cnt223">
                                                        <h1 class="modal-title" id="exampleModalLongTitle">Reschedule
                                                            {{$res_show->id}}
                                                            Interview</h1>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <input type="text" value="{{$res_show ->id}}" id="resume_id_ajax_reschedul" name="re_candidate_id" hidden>
                                                        <input type="text" value="{{$res_show ->position_id}}" name="re_pos_id" hidden>
                                                        <input type="text" value="{{$res_show ->client_id}}" name="re_client_id" hidden>

                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab"
                                                                    href="#RID{{$res_show ->id}}">Interview Details</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab"
                                                                    href="#RICclient{{$res_show ->id}}">Interview
                                                                    Confirmation to Clients</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab"
                                                                    href="#RICcandidate{{$res_show ->id}}">Interview
                                                                    Confirmation to Candidate</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div id="RID{{$res_show ->id}}" class="tab-pane active pd_0">
                                                                <br>
                                                                <table class="table table-bordered wd_21 t_left">
                                                                    <tr>
                                                                        <th class="pd_410">Client</th>
                                                                        <td class="pd_410"><input type="text"
                                                                                class="form-control" name="client_data_reschedule_interview"
                                                                                value="{{optional ($view->client_na)->client_name}}<{{optional ($view->pos_client_cont)->contact_name}}> <{{optional ($view->pos_client_cont)->email}}>"
                                                                                readonly></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Cc</th>
                                                                        <td class="pd_410"><input type="text"
                                                                                class="form-control" name="gmail_name_cc_reschedule_interview"
                                                                                placeholder="Add multiple emails separated by comma">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Candidate(s)
                                                                        </th>
                                                                        <td class="pd_410"><input type="text"
                                                                                class="form-control" name="re_cand_name_interview"
                                                                                value="{{$res_show->name}}" readonly></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Reason for
                                                                            Re-Schedule*</th>
                                                                        <td class="pd_410">
                                                                            <select class="form-control" name="reschedule_reason">
                                                                                <option>Select</option>
                                                                                <option>Candidate
                                                                                    No-Show for
                                                                                    Interview</option>
                                                                                <option>Client requested
                                                                                    Rescheduling
                                                                                </option>
                                                                                <option>Problem in
                                                                                    Online Connectivity
                                                                                </option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Interview
                                                                            Level*</th>
                                                                        <td class="pd_410">
                                                                            <ul>
                                                                                @if($res_show->cv_status==4 || $res_show->cv_status==5)
                                                                                <li class="d_inblk li_rdo">
                                                                                    <label class="form-check-label"
                                                                                        for="radio1">
                                                                                        <input type="radio"
                                                                                            class="form-check-input"
                                                                                            id="reschedule_first" name="reschedule_interview_level"
                                                                                            value="1">First Interview                                                                                      
                                                                                    </label>
                                                                                </li>
                                                                                @endif
                                                                                @if($res_show->cv_status<=9) <li
                                                                                    class="d_inblk li_rdo">
                                                                                    <label class="form-check-label"
                                                                                        for="radio2">
                                                                                        <input type="radio"
                                                                                            class="form-check-input"
                                                                                            id="reschedule_first" name="reschedule_interview_level"
                                                                                            value="2">Second  Interview                                                                 
                                                                                    </label>
                                                                                    </li>
                                                                                    @endif
                                                                                    @if($res_show->cv_status<=13) <li
                                                                                        class="d_inblk li_rdo">
                                                                                        <label class="form-check-label"
                                                                                            for="radio3">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                id="reschedule_first" name="reschedule_interview_level" value="3">
                                                                                              Third Interview                                                                                           
                                                                                        </label>
                                                                                        </li>
                                                                                        @endif
                                                                                        @if($res_show->cv_status<=17) <li
                                                                                            class="d_inblk li_rdo">
                                                                                            <label class="form-check-label"
                                                                                                for="radio4">
                                                                                                <input type="radio"
                                                                                                    class="form-check-input"
                                                                                                    id="reschedule_first"
                                                                                                    name="reschedule_interview_level"
                                                                                                    value="4">Fourth
                                                                                                Interview
                                                                                            </label>
                                                                                            </li>
                                                                                            @endif
                                                                                            @if($res_show->cv_status<=21) <li
                                                                                                class="d_inblk li_rdo">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="radio5">
                                                                                                    <input type="radio"
                                                                                                        class="form-check-input"
                                                                                                        id="reschedule_first"
                                                                                                        name="reschedule_interview_level"
                                                                                                        value="5">Final
                                                                                                    Interview
                                                                                                </label>
                                                                                                </li>
                                                                                                @endif
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Interview
                                                                            Mode*</th>
                                                                        <td class="pd_410">
                                                                            <ul>
                                                                                <li class="d_inblk li_rdo">
                                                                                    <label class="form-check-label"
                                                                                        for="radio6">
                                                                                        <a href="#!" class="show-btn">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                id="f2f" name="re_interview_mode"
                                                                                                value="Face to Face">
                                                                                        </a>
                                                                                        Face to Face
                                                                                    </label>
                                                                                </li>
                                                                                <li class="d_inblk li_rdo">
                                                                                    <label class="form-check-label"
                                                                                        for="radio7">
                                                                                        <a href="#!" class="hide-btn">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                id="telecon" name="re_interview_mode"
                                                                                                value="telecon">
                                                                                        </a>
                                                                                        TeleCon
                                                                                    </label>
                                                                                </li>
                                                                                <li class="d_inblk li_rdo">
                                                                                    <label class="form-check-label"
                                                                                        for="radio8">
                                                                                        <a href="#!" class="hide-btn">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                id="vc" name="re_interview_mode"
                                                                                                value="vc">
                                                                                        </a>
                                                                                        Video Conference
                                                                                    </label>
                                                                                </li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="box">
                                                                        <th class="pd_410">Interview
                                                                            Venue Address</th>
                                                                        <td class="pd_410">
                                                                            <select id="reschedule_get_address{{$res_show->id}}" name="re_interview_venue_adrs" class="form-control">
                                                                                <option value="0" selected>Choose Interview Venue  Address</option>                                                                             
                                                                                <option value="1">Corporate/Plant
                                                                                    Address</option>
                                                                                <option value="2">Other Location
                                                                                </option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Interview
                                                                            Date*</th>
                                                                        <td class="pd_410">
                                                                            <div class="row">
                                                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                                                    <input type="datetime-local"
                                                                                        class="form-control" id="" name="re_interview_date">
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                                                    <select class="form-control" id=""
                                                                                        name="re_interview_time_period">
                                                                                        <option selected>
                                                                                            Duration
                                                                                        </option>
                                                                                        <option>30 Mins.
                                                                                        </option>
                                                                                        <option>45 Mins.
                                                                                        </option>
                                                                                        <option>1 Hr
                                                                                        </option>
                                                                                        <option>2 Hrs
                                                                                        </option>
                                                                                        <option>3 Hrs
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Interview  Venue* </th>
                                                                          
                                                                        <td class="pd_410" 
                                                                                class="form-control" id="reschedule_interview_venue{{$res_show->id}}" name="re_interview_venue">
                                                                               
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Choose Spoc
                                                                        </th>
                                                                        <td class="pd_410">
                                                                            @php
                                                                            $get_client_id=APP\Models\client::where('id',$res_show->client_id)->get();
                                                                            $get_spoc=APP\Models\ClientContact::where('client_id',$get_client_id[0]->id)->get();
                                                                            @endphp
                                                                            <select class="form-control" id="reschedule_spoc{{$res_show->id}}" name="re_spoc_interview">
                                                                                <option>Choose Spoc </option>
                                                                                @foreach($get_spoc as $scpo_name)
                                                                                <option value="{{$scpo_name->id}}">
                                                                                    {{$scpo_name->contact_name}}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Contact
                                                                            Details*</th>
                                                                        <td class="pd_410">
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                    <input type="text" class="form-control"
                                                                                        id="reschedule_contact_name{{$res_show->id}}" name="re_client_contact_name"
                                                                                        placeholder="Contact Person Name">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                    <input type="text" class="form-control"
                                                                                        id="reschedule_contact_phone{{$res_show->id}}" name="re_client_contact_number"
                                                                                        placeholder="Contact Mobile No.">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Additional
                                                                            Info</th>
                                                                        <td class="pd_410"><textarea name="re_additional_info"
                                                                                class="form-control" id="" cols="63"
                                                                                rows="2"></textarea>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!-- 2nd tab start for ReSchedule Interview form -->
                                                            <div id="RICclient{{$res_show ->id}}" class="tab-pane">
                                                                <br>
                                                                <table class="table table-bordered wd_16 t_left">
                                                                    <tr>
                                                                        <th class="pd_410">Client</th>
                                                                        <td class="pd_410"><input type="text"
                                                                                class="form-control" name="reschedule_client_name_interview"
                                                                                value="{{optional ($view->client_na)->client_name}}<{{optional ($view->pos_client_cont)->contact_name}}> <{{optional ($view->pos_client_cont)->email}}>"
                                                                                readonly></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th class="pd_410">Subject*</th>
                                                                        <td class="pd_410"><input type="text"
                                                                                class="form-control" name="reschedule_client_subject_interview"
                                                                                value="Interview Schedule of Candidates for the Position of {{$view->job_title}}">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        @php
                                                                        $get_crm_name=APP\Models\User::where('id',session('USER_ID'))->get()
                                                                        @endphp
                                                                        
                                                                        <th class="pd_410">Message*</th>
                                                                         @foreach($get_crm_name as $crm_details)
                                                                        <td class="pd_410">
                                                                            <textarea name="reschedule_second_msg_interview" id="editor4{{$res_show ->id}}" rows="10"
                                                                                cols="80" value="">
                                                                                 <p>Dear {{($view->pos_client_cont)->contact_name}},<br /><br />Greetings from {{$crm_details->fname}} {{$crm_details->lname}}<br /><br />In continuation to our telephonic discussions, I have lined-up the shortlisted candidate(s) for the interview(s) as per the following schedule.<br /><br />POSITION TITLE: {{$view->job_title }}<br /><br />{{$res_show ->name}}<br /><br />Trust this schedule is fine. Please do let me know if there requires any further information about the candidate(s) or the schedule.<br /><br />{{$crm_details->signature}}</p>
                                                                            </textarea>
                                                                            <script>
                                                                            CKEDITOR.replace('editor4{{$res_show ->id}}');
                                                                            </script>
                                                                        </td>
                                                                        @endforeach
                                                                    </tr>

                                                                </table>
                                                            </div>
                                                             <!-- 3rd tab form reschudel interview form -->
                                                            <div id="RICcandidate{{$res_show ->id}}" class="tab-pane"><br>
                                                                <div class="">
                                                                    <table class="table table-bordered wd_16 t_left w_100">
                                                                        <tr>
                                                                            <th class="pd_410">
                                                                                Candidate(s)
                                                                            </th>
                                                                            <td class="pd_410"><input type="text"
                                                                                    class="form-control" name="reschedule_third_candidate_interview"
                                                                                    value="{{$res_show->name}}" readonly>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th class="pd_410">Subject*
                                                                            </th>
                                                                            <td class="pd_410"><input type="text" name="reschedule_third_subject_interview"
                                                                                    class="form-control"
                                                                                    value="Interview Schedule for the Position of {{$view->job_title}}">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="pd_410">Message*
                                                                            </th>
                                                                            <td class="pd_410">
                                                                                <textarea name="reschdule_editor_five" id="editor5{{$res_show ->id}}"
                                                                                    rows="10" cols="80"  name="reschedule_third_msg_interview" value="">
                                                                                    <p>Dear&nbsp;{{$res_show->name}}<br /><br /><strong>Greetings from {{($view->pos_client_cont)->contact_name}}&nbsp;</strong><br /><br />In continuation to our telephonic discussions, I am confirming your interview schedule with our client as below:</p>
                                                                                        <p>&nbsp;</p>
                                                                                        <table style="width: 500px; border-collapse: collapse; float: left; border:0px;"  cellspacing="4" cellpadding="4">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">COMPANY NAME</td>
                                                                                        <td style="width: 287.783px;">{{($view->client_na)->client_name}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">POSITION TITLE</td>
                                                                                        <td style="width: 287.783px;">{{$view->job_title }}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Interview Level</td>
                                                                                        <td style="width: 287.783px;">[interview_level]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Interview Date</td>
                                                                                        <td style="width: 287.783px;">[interview_date]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Interview Time</td>
                                                                                        <td style="width: 287.783px;">[interview_time]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Mode of Interview</td>
                                                                                        <td style="width: 287.783px;">[interview_mode]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Venue</td>
                                                                                        <td style="width: 287.783px;" id="nights"><span id="nights"></span>[]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Contact Person</td>
                                                                                        <td style="width: 287.783px;">[interview_contact_person]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Contact No.</td>
                                                                                        <td style="width: 287.783px;">[interview_contact_no]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Additional Info</td>
                                                                                        <td style="width: 287.783px;">[interview_additional]</td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                        </table>

                                                                                        <p><br />Trust this schedule is fine. Request your confirmation on the receipt of the mail and also your confirmation, through a reply mail, for attending the interview as per the schedule give above in this mail.<br />Please do carry all relevant documents as needed for the interview.<br /><br />Also, do let me know if there requires any further information about the interviewing process or the schedule. &nbsp;For more details about the company do refer to their website [website]<br /><br />Wish you all the best! Thanks.<br />Warm Regards<br /><br />[signature]</p>
                                                                                </textarea>
                                                                                <script>
                                                                                CKEDITOR.replace(
                                                                                    'editor5{{$res_show ->id}}');
                                                                                </script>
                                                                            </td>
                                                                        </tr>

                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            $("#reschedule_get_address{{$res_show->id}}").on('change', function() {
                                                var ab = $(this).val();
                                                var reschdul_resume_id= $('#resume_id_ajax_reschedul').val();
                                                if (ab == 1) {
                                                    $.ajax({
                                                        url: "{{url('getaddtess')}}",
                                                        type: "POST",
                                                        data: {
                                                            resume_id: reschdul_resume_id,
                                                            _token: '{{csrf_token()}}'
                                                        },
                                                        dataType: 'json',

                                                        success: function(result) {
                                                            $('#reschedule_interview_venue{{$res_show->id}}').html('<textarea name="re_interview_venue"' +
                                                                'class="form-control" id="reschedule_interview_venue{{$res_show->id}}" cols="63"' +
                                                                'rows="2">' + result[0][0].client_name +
                                                                '\nAddress: ' + result[0][0].door_no + ', ' + result[0][0]
                                                                .street_name + ', ' + result[0][0].area_name +
                                                                '\nCity/Town: ' + result[1][0].name + '\nDistricts: ' + result[
                                                                    2][0].district_title + '\n' + result[3][0].state_title +
                                                                ' ,' + result[0][0].pincode + '</textarea>');

                                                        },
                                                    });
                                                } else {
                                                    $('#reschedule_interview_venue').html('<textarea name="re_interview_venue"' +
                                                        'class="form-control" id="reschedule_interview_venue" cols="63"' +
                                                        'rows="2"></textarea>');
                                                }

                                            });

                                            $("#reschedule_spoc{{$res_show->id}}").on('change', function() {
                                                var test = $(this).val();


                                                $.ajax({
                                                    url: "{{url('getspoc')}}",
                                                    type: "POST",
                                                    data: {
                                                        id: test,
                                                        _token: '{{csrf_token()}}'
                                                    },
                                                    dataType: 'json',

                                                    success: function(spoc_details) {
                                                        $('#reschedule_contact_name{{$res_show->id}}').val(spoc_details[0].contact_name);
                                                        $('#reschedule_contact_phone{{$res_show->id}}').val(spoc_details[0].mobile);

                                                    },
                                                });


                                            });
                                        </script>                   

                                    </form>

                                    <!-- Resrescheduleinterview form end -->



                                    <!-- interview select popup form start -->
                                    <form action="{{url('/select_interview',$res_show ->id)}}" method='post'>
                                        @csrf
                                        <div class="modal fade" id="interviewselected{{$res_show ->id}}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header cnt223">
                                                        <h1 class="modal-title" id="exampleModalLongTitle">Interview
                                                            Selected
                                                        </h1>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                    <input type="text" value="{{$res_show ->id}}" name="candidate_id" hidden>                          
                                                    <input type="text" value="{{$res_show ->position_id}}" name="pos_id" hidden>                   
                                                    <input type="text" value="{{$res_show ->client_id}}" name="client_id" hidden>
                                                    <input type="text" value="{{$res_show ->cv_status}}" name="interview_selected" >   


                                                        <div class="">
                                                            <table class="table table-bordered wd_21 t_left">
                                                                <tr>
                                                                    <th class="pd_410">Candidate Name
                                                                    </th>
                                                                    <td class="pd_410"><input type="text"
                                                                            class="form-control" value="{{$res_show->name}}" name="candidate_name"
                                                                            readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <th class="pd_410">Remarks</th>
                                                                    <td class="pd_410"><textarea name="remarks"
                                                                            class="form-control" id="" cols="30"
                                                                            rows="2" required></textarea></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Next Interview*
                                                                    </th>
                                                                    <td>
                                                                        <ul>
                                                                            <li class="d_inblk li_rdo">
                                                                                <label class="form-check-label"
                                                                                    for="radio1">
                                                                                    <input type="radio"
                                                                                        class="form-check-input"
                                                                                        id="applicable" name="net_interview_decision"
                                                                                        value="applicable">Applicable
                                                                                </label>
                                                                            </li>
                                                                            <li class="d_inblk li_rdo">
                                                                                <label class="form-check-label"
                                                                                    for="radio2">
                                                                                    <input type="radio"
                                                                                        class="form-check-input"
                                                                                        id="notapplicable" name="net_interview_decision"
                                                                                        value="notapplicable">Not
                                                                                    Applicable
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- interview select popup form end -->

                                    <!-- interview rejected form start -->
                                    <form action="{{url('/reject_interview',$res_show ->id)}}" method='post'>
                                        @csrf
                                        <div class="modal fade" id="interviewreject{{$res_show ->id}}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header cnt223">
                                                        <h1 class="modal-title" id="exampleModalLongTitle">Interview
                                                            Rejected
                                                        </h1>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <input type="text" value="{{$res_show ->id}}" name="candidate_id" hidden>                          
                                                            <input type="text" value="{{$res_show ->position_id}}" name="pos_id" hidden>                   
                                                            <input type="text" value="{{$res_show ->client_id}}" name="client_id" hidden>
                                                            <input type="text" value="{{$res_show ->cv_status}}" name="interview_rejected" > 
                                                        <div class="">
                                                            <table class="table table-bordered wd_21 t_left">
                                                                <tr>
                                                                    <th class="pd_410">Candidate Name
                                                                    </th>
                                                                    <td class="pd_410"><input type="text"
                                                                            class="form-control" value="{{$res_show->name}}" name="candidate_name"
                                                                            readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Reject Reason*
                                                                    </th>
                                                                    <td class="pd_410">
                                                                        <select class="form-control" name="reject_interview_reason">
                                                                            <option>Select</option>
                                                                            <option>Candidate No Show
                                                                                for Interview</option>
                                                                            <option>Candidate not
                                                                                Flexible
                                                                            </option>
                                                                            <option>Culture
                                                                                Compatibility Misfit
                                                                            </option>
                                                                            <option>Inadequate
                                                                                Experience</option>
                                                                            <option>Inadequate Exposuer
                                                                            </option>
                                                                            <option>Inadequate Knowledge
                                                                                / Skill
                                                                            </option>
                                                                            <option>Inappropriate
                                                                                behaviours /
                                                                                Professionalism
                                                                            </option>
                                                                            <option>Potential Offer &
                                                                                Expectation Mismatch
                                                                            </option>
                                                                            <option>Reason not Shared
                                                                            </option>
                                                                            <option>Unaffordable Notice
                                                                                Period</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Remarks</th>
                                                                    <td class="pd_410"><textarea name="remarks"
                                                                            class="form-control" id="" cols="30"
                                                                            rows="2"></textarea></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- interview rejected form end -->

                                </td>
                                <!-- interview status  end -->


                                <!-- offer status start -->
                                <td class="t_c">
                                    @if($res_show->cv_status==22)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="Offer Pending">OP</span>
                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu t_c">
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#offer_accepted{{$res_show ->id}}">
                                                    <img src="../assets/position/shortlist.png" class="hi8">Accepted
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#offerdeclined{{$res_show ->id}}">
                                                    <img src="../assets/position/rejected.png" class="hi8">Declined
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif

                                    @if($res_show->cv_status>=24 && $res_show->cv_status !=25)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top" title="Offer Accepted"
                                        style="background-color: #c3facb;">OA</span>
                                    @endif

                                    @if($res_show->cv_status==25)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top" title="Offer Rejected"
                                        style="background-color: #edd4d0;">OR</span>
                                    @endif



                                    <!-- offer accepted form start -->
                                    <form action="{{url('/offer_accepted',$res_show ->id)}}" method='post'>
                                        @csrf
                                        <div class="modal fade" id="offer_accepted{{$res_show ->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header cnt223">
                                                        <h1 class="modal-title" id="exampleModalLongTitle">Offer Accepted </h1>
                                                       
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <input type="text" value="{{$res_show ->id}}" name="candidate_id" hidden>                          
                                                            <input type="text" value="{{$res_show ->position_id}}" name="pos_id" hidden>                   
                                                            <input type="text" value="{{$res_show ->client_id}}" name="client_id" hidden>
                                                            <input type="text" value="{{$res_show ->cv_status}}" name="offer_accept" > 
                                                        <div class="">
                                                            <table class="table table-bordered  wd_21 t_left">
                                                                <tr>
                                                                    <th class="pd_410">Candidate Name
                                                                    </th>
                                                                    <td class="pd_410"><input type="text"
                                                                            class="form-control" value="{{$res_show->name}}" name="candidate_name"
                                                                            readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Offered Date*
                                                                    </th>
                                                                    <td class="pd_410"><input type="date"
                                                                            class="form-control" value="" name="offer_date"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Offered CTC*</th>
                                                                    <td class="pd_410"><input type="text"
                                                                            class="form-control" value="" name="offer_ctc"
                                                                            placeholder="Write Full Value">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Remarks</th>
                                                                    <td class="pd_410"><textarea name="remarks"
                                                                            class="form-control" id="" cols="30"
                                                                            rows="2"></textarea></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!--  offer accepted form end -->
                                    <!-- Offer Rejected Form Start -->
                                    <form action="{{url('/offer_rejected',$res_show ->id)}}" method='post'>
                                        @csrf
                                        <div class="modal fade" id="offerdeclined{{$res_show ->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header cnt223">
                                                        <h1 class="modal-title" id="exampleModalLongTitle">Offer
                                                            Declined
                                                        </h1>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <input type="text" value="{{$res_show ->id}}" name="candidate_id" hidden>                          
                                                        <input type="text" value="{{$res_show ->position_id}}" name="pos_id" hidden>                   
                                                        <input type="text" value="{{$res_show ->client_id}}" name="client_id" hidden>
                                                        <input type="text" value="{{$res_show ->cv_status}}" name="offer_rejected"> 

                                                        <div class="">
                                                            <table class="table table-bordered  wd_21 t_left">
                                                                <tr>
                                                                    <th class="pd_410">Candidate Name
                                                                    </th>
                                                                    <td class="pd_410"><input type="text"
                                                                            class="form-control" value="{{$res_show->name}}" name="candidate_name"
                                                                            readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Reject Reason*
                                                                    </th>
                                                                    <td class="pd_410">
                                                                        <select class="form-control" name="offer_rejected_reason">
                                                                            <option>Select</option>
                                                                            <option>Cannot Join with the
                                                                                Notice Period Offered
                                                                            </option>
                                                                            <option>Changed his/her Mind
                                                                                in the Last Minute w/o
                                                                                any Reason</option>
                                                                            <option>Company Changed its
                                                                                Decision in the Last
                                                                                Minute w/o any Reason
                                                                            </option>
                                                                            <option>Expectation of the
                                                                                Candidate on Benefits &
                                                                                Allowances</option>
                                                                            <option>Expectation of the
                                                                                Candidate on Designation
                                                                            </option>
                                                                            <option>Expectation of the
                                                                                Candidate on Job Profile
                                                                            </option>
                                                                            <option>Expectation of the
                                                                                Candidate on Reporting
                                                                                Structure</option>
                                                                            <option>Expectation of the
                                                                                Candidate on Work
                                                                                Location</option>
                                                                            <option>Failure In Medical
                                                                                Test</option>
                                                                            <option>Failure In Reference
                                                                                Check</option>
                                                                            <option>Found Better
                                                                                Candidate</option>
                                                                            <option>Found Better
                                                                                Opportunity Within
                                                                            </option>
                                                                            <option>Found Candidate from
                                                                                Within</option>
                                                                            <option>Got Better Offer
                                                                                Elsewhere</option>
                                                                            <option>Inappropriate /
                                                                                Inconsistent Response
                                                                                from Candidate</option>
                                                                            <option>Not Satisfied with
                                                                                Benefits & Allowances
                                                                            </option>
                                                                            <option>Not Satisfied with
                                                                                Company Culture</option>
                                                                            <option>Not Satisfied with
                                                                                Company Reputation
                                                                            </option>
                                                                            <option>Not Satisfied with
                                                                                CTC</option>
                                                                            <option>Not Satisfied with
                                                                                CTC Break-up</option>
                                                                            <option>Not Satisfied with
                                                                                Designation</option>
                                                                            <option>Not Satisfied with
                                                                                Employment Terms &
                                                                                Conditions</option>
                                                                            <option>Not Satisfied with
                                                                                Job Profile</option>
                                                                            <option>Not Satisfied with
                                                                                Reporting Structure
                                                                            </option>
                                                                            <option>Not Satisfied with
                                                                                Work Location</option>
                                                                            <option>Not Submitted
                                                                                Relevant Documents
                                                                                In-time</option>
                                                                            <option>Notice Period
                                                                                Demanded by the
                                                                                Candidate</option>
                                                                            <option>Present Employer Not
                                                                                Willing to Relieve
                                                                            </option>
                                                                            <option>Reason not Shared
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Remarks</th>
                                                                    <td class="pd_410"><textarea name="offer_rejected_remarks"
                                                                            class="form-control" id="" cols="30"
                                                                            rows="2"></textarea></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Offer Rejected Form end -->
                                    
                                </td>
                                <!-- offer status tab send -->
                                <!-- Joining status tab start -->
                                <td class="t_c">
                                    @if($res_show->cv_status==24)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="Joining Awaited">JA</span>
                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu t_c">
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#joined{{$res_show ->id}}">
                                                    Joined
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#notjoined{{$res_show ->id}}">
                                                    Not Joined
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn pd_slst" data-toggle="modal"
                                                    data-target="#joiningdeferred{{$res_show ->id}}">
                                                    Deferred(Hold)
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif

                                   

                                   @if($res_show->cv_status>=26)

                                        @if($res_show->cv_status==26 || $res_show->cv_status==29)
                                        <span class="p_d" data-toggle="tooltip" data-placement="top" title="Joined"
                                        style="background-color: #c3facb;">J</span>
                                        @endif
                                 
                                    @if($res_show->cv_status==27)
                                        <span class="p_d" data-toggle="tooltip" data-placement="top" title="Not Joined"
                                        style="background-color: #edd4d0;">NJ</span>
                                    @endif
                                    @if($res_show->cv_status==28)
                                         <span class="p_d" data-toggle="tooltip" data-placement="top" title=" Joining Deferred"
                                        style="background-color: #e5df96;">JD</span>

                                        <div class="dropdown d_inblk">
                                            <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                                <span class="caret"><i class="fa fa-angle-down"
                                                        aria-hidden="true"></i></span></button>
                                            <ul class="dropdown-menu t_c">
                                                <li>
                                                    <button type="button" class="btn pd_slst" data-toggle="modal"
                                                        data-target="#joined{{$res_show ->id}}">
                                                        Joined
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn pd_slst" data-toggle="modal"
                                                        data-target="#notjoined{{$res_show ->id}}">
                                                        Not Joined
                                                    </button>
                                                </li>
                                                
                                            </ul>
                                         </div>
                                    @endif                                 
                                    @endif                                
                                  

                                    <!-- joined form start -->
                                    <form action="{{url('/job_joined',$res_show ->id)}}" method='post'>
                                        @csrf
                                        <div class="modal fade" id="joined{{$res_show ->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header cnt223">
                                                        <h1 class="modal-title" id="exampleModalLongTitle">Candidate
                                                            Joined
                                                        </h1>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <input type="text" value="{{$res_show ->id}}" name="candidate_id" hidden>                          
                                                        <input type="text" value="{{$res_show ->position_id}}" name="pos_id" hidden>                   
                                                        <input type="text" value="{{$res_show ->client_id}}" name="client_id" hidden>
                                                        <input type="text" value="{{$res_show ->cv_status}}" name="joined">

                                                        <div class="">
                                                            <table class="table table-bordered  wd_21 t_left">
                                                                <tr>
                                                                    <th class="pd_410">Candidate Name
                                                                    </th>
                                                                    <td class="pd_410"><input type="text"
                                                                            class="form-control" value="{{$res_show->name}}" name="candidate_name"
                                                                            readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Joined On*</th>
                                                                    <td class="pd_410"><input type="date" name="job_joined_date"
                                                                            class="form-control" value=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Remarks</th>
                                                                    <td class="pd_410"><textarea name="job_joined_remark"
                                                                            class="form-control" id="" cols="30"
                                                                            rows="2"></textarea></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- joined form end -->
                                   <!-- Not joined form start -->
                                   <form action="{{url('/job_not_joined',$res_show ->id)}}" method='post'>
                                        @csrf
                                        <div class="modal fade" id="notjoined{{$res_show ->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header cnt223">
                                                        <h1 class="modal-title" id="exampleModalLongTitle">Candidate Not
                                                            Joined</h1>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="text" value="{{$res_show ->id}}" name="candidate_id" hidden>                          
                                                        <input type="text" value="{{$res_show ->position_id}}" name="pos_id" hidden>                   
                                                        <input type="text" value="{{$res_show ->client_id}}" name="client_id" hidden>
                                                        <input type="text" value="{{$res_show ->cv_status}}" name="not_joined_candidate">


                                                        <div class="">
                                                            <table class="table table-bordered  wd_21 t_left">
                                                                <tr>
                                                                    <th class="pd_410">Candidate Name
                                                                    </th>
                                                                    <td class="pd_410"><input type="text"
                                                                            class="form-control" value="{{$res_show->name}}" name="candidate_name"
                                                                            readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Reject Reason*
                                                                    </th>
                                                                    <td class="pd_410">
                                                                        <select class="form-control" name="candidate_not_joined_reason">
                                                                            <option>Select</option>
                                                                            <option>Cannot Join with the
                                                                                Notice Period Offered
                                                                            </option>
                                                                            <option>Changed his/her Mind
                                                                                in the Last Minute w/o
                                                                                any Reason</option>
                                                                            <option>Company Changed its
                                                                                Decision in the Last
                                                                                Minute w/o any Reason
                                                                            </option>
                                                                            <option>Expectation of the
                                                                                Candidate on Benefits &
                                                                                Allowances</option>
                                                                            <option>Expectation of the
                                                                                Candidate on Designation
                                                                            </option>
                                                                            <option>Expectation of the
                                                                                Candidate on Job Profile
                                                                            </option>
                                                                            <option>Expectation of the
                                                                                Candidate on Reporting
                                                                                Structure</option>
                                                                            <option>Expectation of the
                                                                                Candidate on Work
                                                                                Location</option>
                                                                            <option>Failure In Medical
                                                                                Test</option>
                                                                            <option>Failure In Reference
                                                                                Check</option>
                                                                            <option>Found Better
                                                                                Candidate</option>
                                                                            <option>Found Better
                                                                                Opportunity Within
                                                                            </option>
                                                                            <option>Found Candidate from
                                                                                Within</option>
                                                                            <option>Got Better Offer
                                                                                Elsewhere</option>
                                                                            <option>Inappropriate /
                                                                                Inconsistent Response
                                                                                from Candidate</option>
                                                                            <option>Not Satisfied with
                                                                                Benefits & Allowances
                                                                            </option>
                                                                            <option>Not Satisfied with
                                                                                Company Culture</option>
                                                                            <option>Not Satisfied with
                                                                                Company Reputation
                                                                            </option>
                                                                            <option>Not Satisfied with
                                                                                CTC</option>
                                                                            <option>Not Satisfied with
                                                                                CTC Break-up</option>
                                                                            <option>Not Satisfied with
                                                                                Designation</option>
                                                                            <option>Not Satisfied with
                                                                                Employment Terms &
                                                                                Conditions</option>
                                                                            <option>Not Satisfied with
                                                                                Job Profile</option>
                                                                            <option>Not Satisfied with
                                                                                Reporting Structure
                                                                            </option>
                                                                            <option>Not Satisfied with
                                                                                Work Location</option>
                                                                            <option>Not Submitted
                                                                                Relevant Documents
                                                                                In-time</option>
                                                                            <option>Notice Period
                                                                                Demanded by the
                                                                                Candidate</option>
                                                                            <option>Present Employer Not
                                                                                Willing to Relieve
                                                                            </option>
                                                                            <option>Reason not Shared
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Remarks</th>
                                                                    <td class="pd_410"><textarea name="not_joined_remarks"
                                                                            class="form-control" id="" cols="30"
                                                                            rows="2"></textarea></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!--Not joined form end -->
                                    <!-- Joining Deferred form start -->
                                    <form action="{{url('/job_defered',$res_show ->id)}}" method='post'>
                                        @csrf
                                        <div class="modal fade" id="joiningdeferred{{$res_show ->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header cnt223">
                                                        <h1 class="modal-title" id="exampleModalLongTitle">Joining
                                                            Deferred
                                                        </h1>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="text" value="{{$res_show ->id}}" name="candidate_id" hidden>                          
                                                        <input type="text" value="{{$res_show ->position_id}}" name="pos_id" hidden>                   
                                                        <input type="text" value="{{$res_show ->client_id}}" name="client_id" hidden>
                                                        <input type="text" value="{{$res_show ->cv_status}}" name="candidate_defered">
                                                        <div class="">
                                                            <table class="table table-bordered  wd_21 t_left">
                                                                <tr>
                                                                    <th class="pd_410">Candidate Name
                                                                    </th>
                                                                    <td class="pd_410"><input type="text"
                                                                            class="form-control" value="{{$res_show->name}}" name="candidate_name"
                                                                            readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">New Joining Date*
                                                                    </th>
                                                                    <td class="pd_410"><input type="date" name="new_joiningdate"
                                                                            class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Reason*</th>
                                                                    <td class="pd_410">
                                                                        <select class="form-control" name="defered_reason">
                                                                            <option>Select</option>
                                                                            <option>Candidate requested
                                                                                Change of Date</option>
                                                                            <option>Client requested
                                                                                Change of Date</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Remarks</th>
                                                                    <td class="pd_410"><textarea name="defered_remarks"
                                                                            class="form-control" id="" cols="30"
                                                                            rows="2"></textarea></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                   <!-- Joining Deferred form end -->
                                </td>
                                <!-- Joining status tab end -->

                                <td>
                                    @if($res_show->cv_status==26)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top"
                                        title="Billing Pending">BP</span>
                                    <div class="dropdown d_inblk">
                                        <button class="btn btn-primary pd_5" type="button" data-toggle="dropdown">
                                            <span class="caret"><i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu t_c">
                                            @php
                                            $fetch_crm_billing=App\Models\Client::where('id',$res_show->client_id)->get();
                                            @endphp

                                            @if(in_array(session('USER_ID'),json_decode($fetch_crm_billing[0]->crm_id)))

                                            

                                            
                                            

                                           
                                            <li>
                                                <a href="{{url('/showbilling',$res_show ->id)}}">
                                                    <button type="button" class="btn pd_slst">
                                                        Add Billing
                                                    </button>
                                                </a>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                    @endif
                                    @if($res_show->cv_status==29)
                                    <span class="p_d" data-toggle="tooltip" data-placement="top" title="Billed"
                                        style="background-color: #c3facb;">B</span>
                                    @endif
                                </td>
                                </tr>
                                @endforeach
                                </tbody>
                                </table>
                                <div>
                                    <ul class="over_h">
                                        <li class="l_style"><span class="p_d">S</span> Shortlisted</li>
                                        <li class="l_style"><span class="p_d">R</span> Rejected</li>
                                        <li class="l_style"><span class="p_d">ISA</span> Interview Schedule
                                            Awaited</li>
                                        <li class="l_style"><span class="p_d">IS</span> Interview Scheduled /
                                            Re-Scheduled</li>
                                        <li class="l_style"><span class="p_d">FIS</span> Final Interview
                                            Scheduled</li>
                                        <li class="l_style"><span class="p_d">OP</span> Offer Pending</li>
                                        <li class="l_style"><span class="p_d">OA</span> Offer Accepted
                                        </li>
                                        <li class="l_style"><span class="p_d">OR</span> Offer Rejected</li>
                                        <li class="l_style"><span class="p_d">JA</span> Joining Awaited</li>
                                        <li class="l_style"><span class="p_d">J</span> Joined</li>
                                        <li class="l_style"><span class="p_d">NJ</span> Not Joined</li>
                                        <li class="l_style"><span class="p_d">JD</span> Joining Deferred</li>
                                        <li class="l_style"><span class="p_d">BP</span> Billing Pending</li>
                                        <li class="l_style"><span class="p_d">B</span> Billed</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="menu4" class="tab-pane fade pd_0"><br>
                                <div>
                                    <table class="table table-responsive">
                                        <tr>
                                            <th>Status</th>
                                            <th>No. of Candidates</th>
                                        </tr>
                                        <tr>
                                            <td>CRM Validation Pending</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>CRM Validated</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>CRM Rejected</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>CV Sent</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>CV Shortlisted</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>CV Rejected</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Feedback Awaiting</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Candidates Interviewed</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Interview Dropouts</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Interview Rejected</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Candidates Offered</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Offer Dropouts</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Candidates Joined</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Candidates Billed</td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt_btn">
                <a href="{{url('/positionview')}}">
                    <button type="button" class="btn btn-primary">Back</button>
                </a>
                <button type="button" class="btn btn-secondary">Print</button>
            </div>

        @if(!empty($res_show))
            <script type="text/javascript">
            $('#files').on('change', function() {
                var result = $("#files").text();
               
                fileChosen(this, document.getElementById('editor{{$res_show->id}}'));
                CKEDITOR.instances['editor{{$res_show->id}}'].setData(result);
            });
            </script>
            <script type="text/javascript">
            $('#files').on('change', function() {
                var result = $("#files").text();

                fileChosen(this, document.getElementById('editortwo{{$res_show->id}}'));
                CKEDITOR.instances['editortwo{{$res_show->id}}'].setData(result);
            });
            </script>
            <script type="text/javascript">
            $('#files').on('change', function() {
                var result = $("#files").text();

                fileChosen(this, document.getElementById('editorthree{{$res_show->id}}'));
                CKEDITOR.instances['editorthree{{$res_show->id}}'].setData(result);
            });
            </script>
            <script type="text/javascript">
            $('#files').on('change', function() {
                var result = $("#files").text();

                fileChosen(this, document.getElementById('editor4{{$res_show->id}}'));
                CKEDITOR.instances['editor4{{$res_show->id}}'].setData(result);
            });
            </script>
            <script type="text/javascript">
            $('#files').on('change', function() {
                var result = $("#files").text();

                fileChosen(this, document.getElementById('editor5{{$res_show->id}}'));
                CKEDITOR.instances['editor5{{$res_show->id}}'].setData(result);
            });
            </script>
        @endif


            <script>
            $(document).ready(function() {
                $(".hide-btn").click(function() {
                    $(".box").hide();
                });
                $(".show-btn").click(function() {
                    $(".box").show();
                    $(".box3").hide();
                });
            });
            </script>

            
            <script>
                
                $('#xyz').on('click',function(){
                    var interview_level=$(this).val();
                    
                    if(interview_level==1){
                      console.log("First Interview");
                        $('#Interview_span').text("First Interview");
                    }
                   
                });
            </script>

        </div>
    </div>
</x-admin-layout>