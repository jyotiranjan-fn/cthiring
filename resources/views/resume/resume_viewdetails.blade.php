<x-admin-layout>
<style>
body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
    margin-left: 0px;
}
</style>


        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Resumes</h3><br>
                <div class="row breadcrumbs-top d-inline-block">

                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Resumes
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{$view->name}}</a>
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


        <!-- Form wizard with icon tabs section start -->
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-tooltip">Resume Details</h4>
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
                                                src="../assets/resume/personal.png" class="hi8">Personal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu1"><img
                                                src="../assets/resume/reading.png" class="hi8">Education</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu2"><img
                                                src="../assets/resume/experience.png" class="hi8">Experience</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu3"><img
                                                src="../assets/resume/operator.png" class="hi8">Consultant
                                            Assessment</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="home" class="container tab-pane pd_0 active"><br>
                                        <div class="card-content collapse show">
                                            <div class="card-body pd_0">
                                                <div class="col-md-12 col-sm-12 col-xs-12 pd_0">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered wd_37">
                                                                    <tr>
                                                                        <th>Code</th>
                                                                        <td>{{$view->resume_code}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Candidate Name</th>
                                                                        <td>{{$view->name}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Email</th>
                                                                        <td>{{$view->email}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Mobile</th>
                                                                        <td>{{$view->mobile}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>DOB</th>
                                                                        <td>{{ date('j-F-Y', strtotime($view->dob)) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Current Designation</th>
                                                                        <td>{{$view->current_designation}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Total Years of Exp</th>
                                                                        <td>{{$view->year_experience}}
                                                                            {{$view->month_experience}}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Notice Period</th>
                                                                        <td>{{$view->notice_period}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Current Status</th>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Family (Dependants)</th>
                                                                        <td>{{$view->family_dependent}}</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered wd_37">
                                                                    <tr>
                                                                        <th>Gender</th>
                                                                        <td>{{$view->gender}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>CTC (Present & Expected)</th>
                                                                        <td>
                                                                            {{$view->ctc_min}} - {{$view->ctc_max}}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Marital Status</th>
                                                                        <td>{{$view->marital_status}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Present Location</th>
                                                                        <td>{{$view->present_location}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Native Location</th>
                                                                        <td>{{$view->native_location}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Resume</th>
                                                                        <td>
                                                                            <a href="{{url('/pdfresume',$view->id)}}">Candidate
                                                                                Resume</a>
                                                                        </td>
                                                                        <!-- <td>
                                                                            <iframe
                                                                                src="{{url('/pdfresume',$view->id)}}"
                                                                                style="display:none"
                                                                                name="frame"></iframe>
                                                                            <a onclick="frames['frame'].print()">Candidate
                                                                                Resume</a>
                                                                        </td> -->
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Snapshot</th>
                                                                        <td><a href="">Download Snapshot</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Created By</th>
                                                                        <td>{{optional($view->username_of_resume)->fname}}{{optional($view->username_of_resume)->lname}}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Created</th>
                                                                        <td>{{ date('j-F-Y', strtotime($view->created_at)) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Modified</th>
                                                                        <td>{{ date('j-F-Y', strtotime($view->updated_at)) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>CV Password</th>
                                                                        <td>{{$view->rand_password_pdf}}</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu1" class="container tab-pane fade pd_0"><br>
                                        <div class="card-content collapse show">
                                            <div class="card-body pd_0">



                                                <div class="col-md-12 col-sm-12 col-xs-12 pd_0">
                                                    <div class="row">

                                                        <div class="col-md-6 col-sm-12 col-xs-12">

                                                            <div class="table-responsive">
                                                                @foreach ($result as $results )
                                                                <table class="table table-bordered wd_37">


                                                                    <tr>


                                                                        <th>Qualification</th>

                                                                        @php
                                                                        $quali=App\Models\Qualification::where('id',$results[0])->get();
                                                                        @endphp
                                                                        @foreach ($quali as $qualis )
                                                                        <td>{{$qualis->qualification_name}}
                                                                        </td>
                                                                        @endforeach
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Degree</th>

                                                                        @php
                                                                        $dregree=App\Models\Degree::where('id',$results[1])->get();
                                                                        @endphp
                                                                        @foreach ($dregree as $dregreesssss )
                                                                        <td>{{$dregreesssss->degree}}
                                                                        </td>
                                                                        @endforeach

                                                                    </tr>
                                                                    <tr>
                                                                        <th>Specializations</th>

                                                                        @php
                                                                        $spec=App\Models\Specialization::where('id',$results[2])->get();
                                                                        @endphp
                                                                        @foreach ($spec as $specs )
                                                                        <td>{{$specs->specialization_name}}
                                                                        </td>
                                                                        @endforeach




                                                                </table>
                                                                @endforeach
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-sm-12 col-xs-12">

                                                            <div class="table-responsive">
                                                                @php
                                                                $count=count($result);
                                                                for($i=0;$i<$count;$i++) { @endphp <table
                                                                    class="table table-bordered wd_37">
                                                                    <tr>
                                                                        <th>University</th>
                                                                        <td>
                                                                            {{$result[$i][3]}}</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th>% of Marks / Grade</th>
                                                                        <td>{{$result[$i][4]}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Course Type</th>
                                                                        <td> {{$result[$i][5]}} </td>
                                                                    </tr>
                                                                    </table>
                                                                    @php }
                                                                    @endphp
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu2" class="container tab-pane fade pd_0"><br>
                                        <div class="card-content collapse show">
                                            <div class="card-body pd_0">
                                                @php
                                                $count=count($res);
                                                for($i=0;$i<$count;$i++) { @endphp <div
                                                    class="col-md-12 col-sm-12 col-xs-12 pd_0">
                                                    <div class="row">

                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered wd_37">
                                                                    <tr>
                                                                        <th>Designation</th>
                                                                        <td>{{$res[$i][0]}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Employment Period</th>
                                                                        <td>{{$res[$i][1]}} - {{$res[$i][2]}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Location of work</th>
                                                                        <td>{{$res[$i][3]}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Company Name</th>
                                                                        <td>{{$res[$i][4]}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Project / Certification Details</th>
                                                                        <td>{{$res[$i][5]}}</td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered wd_37">
                                                                    <tr>
                                                                        <th>Specialization/Expertise</th>
                                                                        <td>{{$res[$i][6]}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Other Vital Information (Position Specific)
                                                                        </th>
                                                                        <td>{{$res[$i][7]}}</td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                    </div>
                                            </div>
                                        </div>
                                        @php }
                                        @endphp
                                    </div>

                                    <div id="menu3" class="container tab-pane fade pd_0"><br>
                                        <div class="card-content collapse show">
                                            <div class="card-body pd_0">
                                                <div class="col-md-12 col-sm-12 col-xs-12 pd_0">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered wd_37">
                                                                    <tr>
                                                                        <th>Consultant Assessment</th>
                                                                        <td>{{$view->assessment}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Technical Skills Rating</th>
                                                                        <td>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Any Other Inputs</th>
                                                                        <td>{{$view->other_inputs}}</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered wd_37">
                                                                    <tr>
                                                                        <th>Interview Availability</th>
                                                                        <td>{{$view->interview_availability}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Behavioural Skills Rating</th>
                                                                        <td>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home2">Position Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu4">Interview Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu5">Joining Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu6">Billing Details</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="home2" class="container tab-pane pd_0 active"><br>
                                    <table class="table table-bordered wd_37">
                                        <thead>
                                            <tr>
                                                <th>Job Title</th>
                                                <th>Client</th>
                                                <th>Contact Person</th>
                                                <th>Contact Email</th>
                                                <th>Contact No.</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td>{{optional($view->jobname)->job_title}}</td>
                                                <td>{{optional($view->view_nameofclient)->client_name}}</td>

                                                @php
                                                $spoc_name=App\Models\ClientContact::where('id',($view->jobname)->spoc_name)->get();



                                                @endphp
                                                <td>{{$spoc_name[0]->contact_name}}</td>
                                                <td>{{$spoc_name[0]->email}}</td>
                                                <td>{{$spoc_name[0]->mobile}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="menu4" class="container tab-pane fade pd_0"><br>
                                    <table class="table table-bordered wd_37">
                                        <thead>
                                            <tr>
                                                <th>Interview Date</th>
                                                <th>Stage</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="menu5" class="container tab-pane fade pd_0"><br>
                                    <table class="table table-bordered wd_37">
                                        <thead>
                                            <tr>
                                                <th>Offered Date</th>
                                                <th>Offerred CTC</th>
                                                <th>Joined Date</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="menu6" class="container tab-pane fade pd_0"><br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered wd_37">
                                            <thead>
                                                <tr>
                                                    <th>Billing Date</th>
                                                    <th>Billing Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt_btn">
                            <a href="">
                                <button type="button" class="btn btn-primary">Back</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
       
        <!-- Form wizard with icon tabs section end -->
    

                                                </x-admin-layout>