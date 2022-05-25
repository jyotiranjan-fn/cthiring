<x-admin-layout>

<script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

<!-- technical and behavioural tags start -->
<style>
    .skills {
        border: 1px solid #BABFC7;
        border-radius: 4px;
    }

    .bootstrap-tagsinput {
        margin: 0;
        width: 100%;
        padding: 0.5rem 0.75rem 0;
        font-size: 1rem;
        line-height: 1.25;
        transition: border-color 0.15s ease-in-out;
    }

    .bootstrap-tagsinput .label-info {
        display: inline-block;
        background-color: #56575a;
        padding: 0 0.4em 0.15em;
        border-radius: 0.25rem;
        margin-bottom: 0.4em;
        color: #fff;
    }

    .bootstrap-tagsinput input {
        margin-bottom: 0.5em;
        background: no-repeat bottom, 50% calc(100% - 1px);
        background-image: none, none;
        background-size: auto auto;
        width: 70%;
        border: 0;
        height: 36px;
        transition: background 0s ease-out;
        padding-left: 0;
        padding-right: 0;
        border-radius: 0;
        font-size: 14px;
    }

    .bootstrap-tagsinput .tag [data-role="remove"]:after {
        content: "\00d7";
        padding-left: 5px;
    }
</style>
<!-- tag end -->
<style>
    body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
        margin-left: 0px;
    }

    /* for skil */

    .tags-input-wrapper {
        background: transparent;
        padding: 10px;
        border-radius: 4px;
        max-width: 400px;
        border: 1px solid #ccc
    }

    .tags-input-wrapper input {
        border: none;
        background: transparent;
        outline: none;
        width: 140px;
        margin-left: 8px;
    }

    .tags-input-wrapper .tag {
        display: inline-block;
        background-color: #fa0e7e;
        color: white;
        border-radius: 40px;
        padding: 0px 3px 0px 7px;
        margin-right: 5px;
        margin-bottom: 5px;
        box-shadow: 0 5px 15px -2px rgba(250, 14, 126, .7)
    }

    .tags-input-wrapper .tag a {
        margin: 0 7px 3px;
        display: inline-block;
        cursor: pointer;
    }
</style>


        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Positions</h3><br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Positions
                            </li>
                            <li class="breadcrumb-item"><a href="#">Edit Position</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!--<div class="content-header-right col-md-6 col-12">-->
            <!--    <div class="dropdown float-md-right">-->
            <!--        <button class="btn btn-danger mt_b round btn-glow px-2">Actions</button>-->
            <!--    </div>-->
            <!--</div>-->
        </div>


        <!-- Form wizard with icon tabs section start -->
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-tooltip"></h4>
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
                                        <a class="nav-link active" data-toggle="tab" href="#home"><img src="../assets/position/business.png" class="hi8">Basic Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu1"><img src="../assets/position/job-offer.png" class="hi8">Job Description</a>
                                    </li>
                                </ul>
                                <form class="form frm_select" action="{{url('updateposition',$view[0]->position_id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="home" class="container tab-pane active"><br>
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Client Name</label>
                                                            <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="fullname" id="fullname">
                                                                @foreach ($client1 as $clients)
                                                                <option value="{{$clients->id}}" {{$view[0]->client_name == $clients->id ? 'selected':''}}>
                                                                    {{$clients->client_name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">SPOC Name</label>
                                                            <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="client_contanct_name" id="client_contanct_name">
                                                                
                                                                @foreach ($client_contact as $loc )
                                                                <option value="{{$loc->id}}" {{$view[0]->spoc_name == $loc->id ? 'selected':''}}>
                                                                    {{$loc->contact_name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Job Title </label>
                                                            <input type="text" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" id="jobname" name="jobname" value="{{$view[0]->job_title}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Job Location </label>
                                                            <input type="text" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" id="joblocation" name="joblocation" value="{{$view[0]->job_location}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Job Code</label>
                                                            <input type="text" class="form-control" id="jobcode" name="jobcode" value="{{$view[0]->job_code}}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Experience</label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                    <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="min_experience" id="min_experience">

                                                                        <!-- <option selected>{{$view[0]->min_experience}}
                                                                        </option> -->
                                                                        <option>Min.</option>
                                                                        @php
                                                                        $i=1;
                                                                        for($i;$i<=50;$i++) { @endphp <option value="{{$i}}" {{$i == $view[0]->min_experience ? 'selected':''}}>{{$i}}
                                                                            </option>
                                                                            @php
                                                                            }
                                                                            @endphp
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="max_experience" id="max_experience">

                                                                        <!-- <option selected>
                                                                            {{$view[0]->max_experience}}
                                                                        </option> -->
                                                                        <option>Max.</option>
                                                                        @php
                                                                        $i=1;
                                                                        for($i;$i<=50;$i++) { @endphp <option value="{{$i}}" {{$i == $view[0]->max_experience ? 'selected':''}}>{{$i}}
                                                                            </option>
                                                                            @php
                                                                            }
                                                                            @endphp

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Annual CTC</label>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    @php
                                                                    $annual_ctc_min=explode(" ",($view[0]->annual_ctc_min))
                                                                    @endphp
                                                                    <input type="text" class="form-control" id="" name="min_salary" value="{{$annual_ctc_min[0]}}" placeholder="Min. CTC">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="salary_value">
                                                                        @php
                                                                        $salary_value=explode(" ",($view[0]->annual_ctc_min));
                                                                        @endphp
                                                                        <option>{{($salary_value[1])}}</option>
                                                                        <option>Select</option>
                                                                        <option value="Lakhs">Lakhs</option>
                                                                        <option value="K">Thousand</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    @php
                                                                    $annual_ctc_max=explode(" ",($view[0]->annual_ctc_max))
                                                                    @endphp
                                                                    <input type="text" class="form-control" id="" name="max_salary" value="{{$annual_ctc_max[0]}}" placeholder="Max. CTC">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="salary_value2">
                                                                        @php
                                                                        $max_value=explode(" ",($view[0]->annual_ctc_max));
                                                                        @endphp
                                                                        <option>Select</option>
                                                                        <option value="Lakhs" {{($max_value[1]=="Lakhs")? "selected" : "" }}>Lakhs</option>
                                                                        <option value="k" {{($max_value[1]=="k")? "selected" : "" }}>Thousand</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Qualification</label>
                                                            <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" name="qualification" id="qualification">

                                                                @foreach ($qualification1 as $qualifi2)
                                                                <option value="{{$qualifi2->id}}" {{($qualifi2->id==$view[0]->qualification)? "selected" : "" }}>
                                                                    {{$qualifi2->qualification_name}}
                                                                </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Functional Area</label>
                                                            <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="functionarea">
                                                                @foreach ($function_area1 as $loc )
                                                                <option value="{{$loc->id}}" {{$loc->id == $view[0]->functional_area ? 'selected':''}}>
                                                                    {{$loc->function}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Industry </label>
                                                            <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="industryname">
                                                                @foreach ($industry1 as $loc )
                                                                <option value="{{$loc->id}}" {{$loc->id == $view[0]->industry ? 'selected':''}}>
                                                                    {{$loc->industryfunction}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Age</label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="min_age" id="min_age">
                                                                        <option>Min.</option>
                                                                        @php
                                                                        $i=18;
                                                                        for($i;$i<=70;$i++) { @endphp <option value="{{$i}}" {{$i == $view[0]->age_min ? 'selected':''}}>{{$i}}
                                                                            </option>
                                                                            @php
                                                                            }
                                                                            @endphp
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="max_age" id="max_age">
                                                                        <option>Max.</option>
                                                                        @php
                                                                        $i=18;
                                                                        for($i;$i<=70;$i++) { @endphp <option value="{{$i}}" {{$i == $view[0]->age_max ? 'selected':''}}>{{$i}}
                                                                            </option>
                                                                            @php
                                                                            }
                                                                            @endphp
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <!-- Delete tag on delete -->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Technical Skills </label>
                                                            <div class="skills">
                                                                <input id="tags" type="text" class="form-control techskill" name="technical[]" placeholder="Enter skills separated by comma" value="@foreach ( $edit_result as  $result ){{$result[0]}}, @endforeach">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Delete tag on delete -->

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Behavioural Skills</label>
                                                            <div class="skills">
                                                                <input id="tags" type="text" class="form-control techskill" name="behavioural[]" placeholder="Enter skills separated by comma" value="@foreach ( $edit_bevrl as  $result ){{$result[0]}}, @endforeach">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Total Openings</label>
                                                            <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="opening" id="opening">
                                                                <option>Select</option>
                                                                @php
                                                                $i=1;
                                                                for($i;$i<=50;$i++) { @endphp <option value="{{$i}}" {{$i == $view[0]->total_opening ? 'selected':''}}>{{$i}}
                                                                    </option>
                                                                    @php
                                                                    }
                                                                    @endphp
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb_15">
                                                        <div class="repeater">


                                                            <div data-repeater-list="data">
                                                                @foreach ($view as $recqu)
                                                                <div data-repeater-item>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="">Recruiters</label>
                                                                                <select class="form-control" name="recruitername">
                                                                                    @foreach($requiter as $requiter1)

                                                                                    <option value="{{$requiter1->id}}" {{ $requiter1->id == $recqu->recruiters  ? 'selected' : '' }}>
                                                                                        {{$requiter1->fname}} {{$requiter1->lname}}
                                                                                    </option>

                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="">Position Number</label>
                                                                                <input type="text" class="form-control" name="position_no_recruiter" value="{{$recqu->position_no_recruiter}}" aria-invalid="false">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 mt_27">
                                                                            <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1"><i class="ft-x"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                @endforeach
                                                            </div>

                                                            <button type="button" data-repeater-create id="repeater-button" class="btn btn-info">
                                                                <i class="ft-plus"></i> Add more
                                                            </button>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">CRM</label><br>
                                                            <div class="form-control">
                                                                @php

                                                                $test=json_decode($view[0]->crm);
                                                                @endphp

                                                                @foreach($test as $test1)
                                                                @php

                                                                $crm_name=App\Models\User::where('id',$test1)->get();

                                                                @endphp

                                                                <span class="badge badge-primary">
                                                                    {{$crm_name[0]->fname}} {{$crm_name[0]->lname}}</span>

                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <!-- <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">CRM</label>
                                                            <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="crm_name">
                                                                <option selected>Please Select</option>
                                                                @foreach($crm_position as $crm_position1)
                                                                <option value="{{$crm_position1->id}}" {{ $crm_position1->id == $view[0]->crm  ? 'selected' : '' }}>
                                                                    {{$crm_position1->fname}} {{$crm_position1->lname}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Billable value</label>
                                                            <input type="text" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" id="billable_value" name="bill_value" value="{{$view[0]->billable_value}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Total Billable Value</label>
                                                            <input type="text" class="form-control" id="total_bill" name="total_billvalue" value="{{$view[0]->total_billable}}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Expected Joining Date </label>
                                                        <input type="text" class="form-control" id="joining_date" name="joiningdate" value="{{$view[0]->joining_date  }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Gender</label><br>
                                                            <div class="controls">
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Male" name="basic_radio" id="radio1" {{ ($view[0]->gender=="Male")? "checked" : "" }}>
                                                                        <label for="radio1">Male</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Female" name="basic_radio" id="radio2" {{ ($view[0]->gender=="Female")? "checked" : "" }}>
                                                                        <label for="radio2">Female</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Other" name="basic_radio" id="radio3" {{ ($view[0]->gender=="Other")? "checked" : "" }}>
                                                                        <label for="radio2">Other</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Hide Resume Contacts</label><br>
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="Yes" name="resume1" id="resum1" {{ ($view[0]->resume_contact=="Yes")? "checked" : "" }}>
                                                                <label for="radio1">Yes</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="No" name="resume1" id="resum2" {{ ($view[0]->resume_contact=="No")? "checked" : "" }}>
                                                                <label for="radio2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Resume Type</label><br>
                                                            <div class="controls">
                                                                <div class="skin skin-square">
                                                                    <input type="radio" value="Snapshot" name="resumetype1" id="resumtype1" {{ ($view[0]->resume_type=="Snapshot")? "checked" : "" }}>
                                                                    <label>Snapshot</label>
                                                                </div>
                                                                <div class="skin skin-square">
                                                                    <input type="radio" value="Fully Formatted Resume" name="resumetype1" id="resumtype2" {{ ($view[0]->resume_type=="Fully Formatted Resume")? "checked" : "" }}>
                                                                    <label>Fully Formatted Resume</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Project Type</label><br>
                                                            <div class="controls">
                                                                <div class="skin skin-square">
                                                                    <input type="radio" value="RPO" name="ptype1" id="project_type1" {{ ($view[0]->project_type=="RPO")? "checked" : "" }}>
                                                                    <label>RPO</label>
                                                                </div>
                                                                <div class="skin skin-square">
                                                                    <input type="radio" value="NON_RPO" name="ptype1" id="project_type2" {{ ($view[0]->project_type=="NON_RPO")? "checked" : "" }}>
                                                                    <label>NON_RPO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Publish in Website</label><br>
                                                            <div class="controls">
                                                                <div class="skin skin-square">
                                                                    <input type="radio" value="Yes" name="website1" id="publish_website1" {{ ($view[0]->publish_website=="Yes")? "checked" : "" }}>
                                                                    <label>Yes</label>
                                                                </div>
                                                                <div class="skin skin-square">
                                                                    <input type="radio" value="No" name="website1" id="publish_website2" {{ ($view[0]->publish_website=="No")? "checked" : "" }}>
                                                                    <label>No</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Created By</label>
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" id="joining_date" name="joining_date" value="{{$view[0]->position_create->fname}} {{$view[0]->position_create->lname}}">
                                                            </div>
                                                            <div class="col-md-3 pd_0">
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                                                    Change
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Remarks</label>
                                                        <textarea class="form-control" name="remarks">{{$view[0]->remarks}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">CRM Change
                                                            Approval</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <label for="">Prashant Vertical: (From - To) (Existing
                                                                CRM)</label>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                                    <input type="text" class="form-control" readonly>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                                    <input type="text" class="form-control" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <label for="">New CRM:</label><br>
                                                            <select class="form-control">
                                                                <option selected>Please Select</option>
                                                                @foreach($crm_position as $crm_position1)
                                                                <option value="{{$crm_position1->id}}">
                                                                    {{$crm_position1->fname}} {{$crm_position1->lname}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <label for="">Remarks:</label>
                                                            <input type="text" class="form-control" placeholder="Remarks">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="menu1" class="container tab-pane fade"><br>
                                            <div class="form-group mb-2 ">
                                                <div>
                                                    <div>
                                                        <div class="row mb-1">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Job Description</label>
                                                                    <textarea name="editor1" id="editor1" rows="10" cols="80">{{$view[0]->job_description_ckediter}}</textarea>
                                                                    <script>
                                                                        CKEDITOR.replace('editor1');
                                                                    </script>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Attachment</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="form-control" name="file">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                            <button type="button" name="cancel" class="btn btn-danger">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form wizard with icon tabs section end -->
     
    <script type="text/javascript">
        $('#files').on('change', function() {
            var result = $("#files").text();

            fileChosen(this, document.getElementById('editor1'));
            CKEDITOR.instances['editor1'].setData(result);
        });
    </script>

    <!-- //fetch client contact for responding client// -->

    <script>
        $(document).ready(function() {


            $('#fullname').on('change', function() {
                var spoc_id = this.value;
                $("#client_contanct_name").html('');
                $.ajax({
                    url: "{{url('fetchclientconct')}}",
                    type: "POST",
                    data: {
                        spoc_id: spoc_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',

                    success: function(result) {
                        $('#client_contanct_name').html(
                            '<option value="">Select SPOC</option>');
                        $.each(result.spoc_name, function(key, value) {
                            $("#client_contanct_name").append('<option value="' + value
                                .id +
                                '">' +
                                value.contact_name + '</option>');
                        });
                    },
                });
            });
        });
    </script>
    <!-- totalbillable count script code -->
    <script>
        function calculateAmount(val, x) {
            var x = document.getElementById('opening').value;

            var tot_price = val * x;
            // /display the result/
            var divobj = document.getElementById('count_total_billvalue');
            divobj.value = tot_price;
        }
    </script>


    <!-- min age max Experience dropdown script -->
    <script>
        var minExpe = $('#min_experience'),
            maxExpe = $('#max_experience');

        minExpe.on('change', function() {

            maxExpe.children("option").each(function() {
                var opt = $(this),
                    optVal = parseInt(opt.attr('value'));

                if (optVal <= minExpe.val()) {
                    opt.attr('disabled', 'disabled');
                } else {
                    opt.removeAttr('disabled');
                }

            });

        });

        maxExpe.on('change', function() {

            minExpe.children("option").each(function() {
                var opt = $(this),
                    optVal = parseInt(opt.attr('value'));

                if (optVal != 0 && optVal >= maxExpe.val()) {
                    opt.attr('disabled', 'disabled');
                } else {
                    opt.removeAttr('disabled');
                }

            });

        });
    </script>

    <!-- min age max age dropdown script -->
    <script>
        var minPrice = $('#min_age'),
            maxPrice = $('#max_age');

        minPrice.on('change', function() {

            maxPrice.children("option").each(function() {
                var opt = $(this),
                    optVal = parseInt(opt.attr('value'));

                if (optVal <= minPrice.val()) {
                    opt.attr('disabled', 'disabled');
                } else {
                    opt.removeAttr('disabled');
                }

            });

        });

        maxPrice.on('change', function() {

            minPrice.children("option").each(function() {
                var opt = $(this),
                    optVal = parseInt(opt.attr('value'));

                if (optVal != 0 && optVal >= maxPrice.val()) {
                    opt.attr('disabled', 'disabled');
                } else {
                    opt.removeAttr('disabled');
                }

            });

        });
    </script>
    <!-- FOR TECHNICAL SKILL SCRIPT  -->
    <script>
        (function() {

            "use strict"


            // Plugin Constructor
            var TagsInput = function(opts) {
                this.options = Object.assign(TagsInput.defaults, opts);
                this.init();
            }

            // Initialize the plugin
            TagsInput.prototype.init = function(opts) {
                this.options = opts ? Object.assign(this.options, opts) : this.options;

                if (this.initialized)
                    this.destroy();

                if (!(this.orignal_input = document.getElementById(this.options.selector))) {
                    console.error("tags-input couldn't find an element with the specified ID");
                    return this;
                }

                this.arr = [];
                this.wrapper = document.createElement('div');
                this.input = document.createElement('input');
                init(this);
                initEvents(this);

                this.initialized = true;
                return this;
            }

            // Add Tags
            TagsInput.prototype.addTag = function(string) {

                if (this.anyErrors(string))
                    return;

                this.arr.push(string);
                var tagInput = this;

                var tag = document.createElement('span');
                tag.className = this.options.tagClass;
                tag.innerText = string;

                var closeIcon = document.createElement('a');
                closeIcon.innerHTML = '&times;';

                // delete the tag when icon is clicked
                closeIcon.addEventListener('click', function(e) {
                    e.preventDefault();
                    var tag = this.parentNode;

                    for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                        if (tagInput.wrapper.childNodes[i] == tag)
                            tagInput.deleteTag(tag, i);
                    }
                })


                tag.appendChild(closeIcon);
                this.wrapper.insertBefore(tag, this.input);
                this.orignal_input.value = this.arr.join(',');

                return this;
            }

            // Delete Tags
            TagsInput.prototype.deleteTag = function(tag, i) {
                tag.remove();
                this.arr.splice(i, 1);
                this.orignal_input.value = this.arr.join(',');
                return this;
            }

            // Make sure input string have no error with the plugin
            TagsInput.prototype.anyErrors = function(string) {
                if (this.options.max != null && this.arr.length >= this.options.max) {
                    console.log('max tags limit reached');
                    return true;
                }

                if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
                    console.log('duplicate found " ' + string + ' " ')
                    return true;
                }

                return false;
            }

            // Add tags programmatically
            TagsInput.prototype.addData = function(array) {
                var plugin = this;

                array.forEach(function(string) {
                    plugin.addTag(string);
                })
                return this;
            }

            // Get the Input String
            TagsInput.prototype.getInputString = function() {
                return this.arr.join(',');
            }


            // destroy the plugin
            TagsInput.prototype.destroy = function() {
                this.orignal_input.removeAttribute('hidden');

                delete this.orignal_input;
                var self = this;

                Object.keys(this).forEach(function(key) {
                    if (self[key] instanceof HTMLElement)
                        self[key].remove();

                    if (key != 'options')
                        delete self[key];
                });

                this.initialized = false;
            }

            // Private function to initialize the tag input plugin
            function init(tags) {
                tags.wrapper.append(tags.input);
                tags.wrapper.classList.add(tags.options.wrapperClass);
                tags.orignal_input.setAttribute('hidden', 'true');
                tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
            }

            // initialize the Events
            function initEvents(tags) {
                tags.wrapper.addEventListener('click', function() {
                    tags.input.focus();
                });


                tags.input.addEventListener('keydown', function(e) {
                    var str = tags.input.value.trim();

                    if (!!(~[9, 13, 188].indexOf(e.keyCode))) {
                        e.preventDefault();
                        tags.input.value = "";
                        if (str != "")
                            tags.addTag(str);
                    }

                });
            }


            // Set All the Default Values
            TagsInput.defaults = {
                selector: '',
                wrapperClass: 'tags-input-wrapper',
                tagClass: 'tag',
                max: null,
                duplicate: false
            }

            window.TagsInput = TagsInput;

        })();

        var tagInput1 = new TagsInput({
            selector: 'tag-input1',
            duplicate: false,
            max: 10
        });
    </script>

    <!-- FOR BEHAVIOURAL SKILS -->
    <script>
        (function() {

            "use strict"


            // Plugin Constructor
            var TagsInput = function(opts) {
                this.options = Object.assign(TagsInput.defaults, opts);
                this.init();
            }

            // Initialize the plugin
            TagsInput.prototype.init = function(opts) {
                this.options = opts ? Object.assign(this.options, opts) : this.options;

                if (this.initialized)
                    this.destroy();

                if (!(this.orignal_input = document.getElementById(this.options.selector))) {
                    console.error("tags-input couldn't find an element with the specified ID");
                    return this;
                }

                this.arr = [];
                this.wrapper = document.createElement('div');
                this.input = document.createElement('input');
                init(this);
                initEvents(this);

                this.initialized = true;
                return this;
            }

            // Add Tags
            TagsInput.prototype.addTag = function(string) {

                if (this.anyErrors(string))
                    return;

                this.arr.push(string);
                var tagInput = this;

                var tag = document.createElement('span');
                tag.className = this.options.tagClass;
                tag.innerText = string;

                var closeIcon = document.createElement('a');
                closeIcon.innerHTML = '&times;';

                // delete the tag when icon is clicked
                closeIcon.addEventListener('click', function(e) {
                    e.preventDefault();
                    var tag = this.parentNode;

                    for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                        if (tagInput.wrapper.childNodes[i] == tag)
                            tagInput.deleteTag(tag, i);
                    }
                })


                tag.appendChild(closeIcon);
                this.wrapper.insertBefore(tag, this.input);
                this.orignal_input.value = this.arr.join(',');

                return this;
            }

            // Delete Tags
            TagsInput.prototype.deleteTag = function(tag, i) {
                tag.remove();
                this.arr.splice(i, 1);
                this.orignal_input.value = this.arr.join(',');
                return this;
            }

            // Make sure input string have no error with the plugin
            TagsInput.prototype.anyErrors = function(string) {
                if (this.options.max != null && this.arr.length >= this.options.max) {
                    console.log('max tags limit reached');
                    return true;
                }

                if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
                    console.log('duplicate found " ' + string + ' " ')
                    return true;
                }

                return false;
            }

            // Add tags programmatically
            TagsInput.prototype.addData = function(array) {
                var plugin = this;

                array.forEach(function(string) {
                    plugin.addTag(string);
                })
                return this;
            }

            // Get the Input String
            TagsInput.prototype.getInputString = function() {
                return this.arr.join(',');
            }


            // destroy the plugin
            TagsInput.prototype.destroy = function() {
                this.orignal_input.removeAttribute('hidden');

                delete this.orignal_input;
                var self = this;

                Object.keys(this).forEach(function(key) {
                    if (self[key] instanceof HTMLElement)
                        self[key].remove();

                    if (key != 'options')
                        delete self[key];
                });

                this.initialized = false;
            }

            // Private function to initialize the tag input plugin
            function init(tags) {
                tags.wrapper.append(tags.input);
                tags.wrapper.classList.add(tags.options.wrapperClass);
                tags.orignal_input.setAttribute('hidden', 'true');
                tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
            }

            // initialize the Events
            function initEvents(tags) {
                tags.wrapper.addEventListener('click', function() {
                    tags.input.focus();
                });


                tags.input.addEventListener('keydown', function(e) {
                    var str = tags.input.value.trim();

                    if (!!(~[9, 13, 188].indexOf(e.keyCode))) {
                        e.preventDefault();
                        tags.input.value = "";
                        if (str != "")
                            tags.addTag(str);
                    }

                });
            }


            // Set All the Default Values
            TagsInput.defaults = {
                selector: '',
                wrapperClass: 'tags-input-wrapper',
                tagClass: 'tag',
                max: null,
                duplicate: false
            }

            window.TagsInput = TagsInput;

        })();

        var tagInput1 = new TagsInput({
            selector: 'tag-behavioural2',
            duplicate: false,
            max: 10
        });
    </script>

    <!-- for recruiter field dropdown -->

    <script>
        function select2tags() {
            var tags = [],
                placeholder = 'Select an option';

            $(".select2").each(function(i) {
                $t = $(this).attr("data-select", i);

                $t.select2({
                        id: -1,
                        placeholder: placeholder
                    })
                    .on("select2:select", function(e) {
                        var selected = {
                            value: e.params.data.text,
                            select: $(this).attr("data-select")
                        };
                        tags.push(selected);

                        $(this).next().find('.select2-selection__custom').html(selected.value + ' (' + $(this)
                            .val().length + ')');

                        displayTags();
                    })
                    .on("select2:unselect", function(e) {
                        var selected = {
                            value: e.params.data.text,
                            select: $t.attr("data-select")
                        };

                        foundObj = findObjectByKey(tags, "value", selected.value);
                        indexToDelete = tags.indexOf(foundObj);
                        tags.splice(indexToDelete, 1);

                        val = $(this).val()[0] == undefined ? placeholder : $(this).val()[0] + ' (' + $(this)
                            .val().length + ')'
                        $(this).next().find('.select2-selection__custom').html(val);

                        displayTags();

                        setTimeout(function() {
                            $('.select2-dropdown').parent().remove();
                        }, 1);
                    });

                // Adding Fake Selection Placeholder
                $('<div class="select2-selection__custom">' + placeholder + '</div>').appendTo($t.next().find(
                    '.select2-selection'));
            });


            // DELETE TAGS
            $(".tags-area").on("click", ".tag", function() {
                var selected = {
                    value: $(this).find(".value").text(),
                    select: $(this).attr("data-select")
                };

                foundObj = findObjectByKey(tags, "value", selected.value);
                indexToDelete = tags.indexOf(foundObj);

                tags.splice(indexToDelete, 1);

                values = $('select[data-select="' + selected.select + '"]').val();
                values.splice(values.indexOf(selected.value), 1);

                $('select[data-select="' + selected.select + '"]').val(values).trigger('change');

                val = values[0] == undefined ? placeholder : values[0] + ' (' + values.length + ')'
                $('select[data-select="' + selected.select + '"]').next().find('.select2-selection__custom').html(
                    val);

                $(this).remove();
                return false;
            });

            // DISPLAY TAGS
            function displayTags() {
                $(".tags-area").html("");

                for (i = 0; i < tags.length; i++) {
                    $('<a href="#" class="tag" data-select="' + tags[i].select + '"><span class="value">' + tags[i].value +
                        "</span></a>").appendTo($(".tags-area"));
                }
            }

        }

        function findObjectByKey(array, key, value) {
            for (var i = 0; i < array.length; i++) {
                if (array[i][key] === value) {
                    return array[i];
                }
            }
            return null;
        }

        select2tags();
    </script>

    <script>
        $(document).ready(function() {

            $('.repeater').repeater({

            });
        });
    </script>
    <!-- for technical skil and behaviour skil -->
<script>
        $('.techskill').tagsinput({
            allowDuplicates: true
        });
    </script>
 <!-- end-->
   </x-admin-layout>