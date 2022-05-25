<x-admin-layout>
<script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>



<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
.select2-selection__custom {
    display: none;
}

form .form-control.cst_n {
    padding: 0px;
    border: unset;
}

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

/* for requiter field */
.form-control .select2-container {
    width: 100% !important;
}

.form-control .select2-selection__rendered {
    position: absolute;
    top: -1000px;
    left: -1000px;
}

.form-control .select2-selection__custom {
    padding: 6px 7px;
}

.tags-area .tag {
    display: inline-block;
    margin: 0 10px 10px 0;
    background: #eee;
    text-decoration: none;
    border-radius: 6px;
    padding: 5px 8px;
    font-size: 14px;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
    color: #000;
}

.tags-area .tag:after {
    content: "+";
    display: inline-block;
    transform: rotate(45deg);
    margin-left: 5px;
}

.tags-area .tag:hover {
    background: #e0e0e0;
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
                            <li class="breadcrumb-item"><a href="#">Add Position</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger  round btn-glow px-2">Actions</button>

                </div>
            </div> -->
        </div>


        <!-- Form wizard with icon tabs section start -->
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    @if(session()->has('roleinster'))
                    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                        role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{session('roleinster')}}
                    </div>
                    @endif
                    <!-- for delete -->
                    @if(session()->has('delt'))
                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                        role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{session('delt')}}
                    </div>
                    @endif
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
                    <!-- FORM START -->
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" action="position_inserts" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="container">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home">Basic Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#menu1">Job Description</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="home" class="container tab-pane active"><br>
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Client Name</label>
                                                            <select class="select form-control" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top"
                                                                data-title="Priority" name="fullname" id="fullname">
                                                                <option value="">select client name</option>
                                                                @foreach ($client1 as $client2)
                                                                <option value="{{$client2->id}}">
                                                                    {{$client2->client_name}}

                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">SPOC Name</label>

                                                            <select class="select2 form-control" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top"
                                                                data-title="Priority" name="client_contanct_name"
                                                                id="client_contanct_name">

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Job Title </label>
                                                            <input type="text" class="form-control"
                                                                data-toggle="tooltip" data-trigger="hover"
                                                                data-placement="top" data-title="Job Title"
                                                                id="jobname" name="jobname">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Job Location </label>
                                                            <input type="text" class="form-control"
                                                                data-toggle="tooltip" data-trigger="hover"
                                                                data-placement="top" data-title="Job Location"
                                                                id="joblocation" name="joblocation">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Job Code</label>
                                                            <input type="text" class="form-control" id="jobcode"
                                                                name="jobcode" value="CT/{{$jobcode}}/{{$year}}"
                                                                readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Experience</label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                    <select class="form-control select2"
                                                                        data-toggle="tooltip" data-trigger="hover"
                                                                        data-placement="top" name="min_experience"
                                                                        id="min_experience">
                                                                        <option selected>Min.</option>

                                                                        @php
                                                                        $i=1;
                                                                        for($i;$i<=50;$i++) { @endphp <option
                                                                            value="{{$i}}">{{$i}}
                                                                            </option>
                                                                            @php
                                                                            }
                                                                            @endphp

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <select class="form-control select2"
                                                                        data-toggle="tooltip" data-trigger="hover"
                                                                        data-placement="top" name="max_experience"
                                                                        id="max_experience">
                                                                        <option selected>Max.</option>

                                                                        @php
                                                                        $i=1;
                                                                        for($i;$i<=50;$i++) { @endphp <option
                                                                            value="{{$i}}">{{$i}}
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
                                                                    <input type="text" class="form-control" id=""
                                                                        name="min_salary" value=""
                                                                        placeholder="Min. CTC">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <select class="form-control" data-toggle="tooltip"
                                                                        data-trigger="hover" data-placement="top"
                                                                        data-title="Priority" name="salary_value">
                                                                        <option selected>Select</option>
                                                                        <option value="Lakhs">Lakhs</option>
                                                                        <option value="K">Thousand</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id=""
                                                                        name="max_salary" value=""
                                                                        placeholder="max. CTC">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <select class="form-control select2"
                                                                        data-toggle="tooltip" data-trigger="hover"
                                                                        data-placement="top" name="salary_value2">
                                                                        <option selected>Select</option>
                                                                        <option value="Lakhs">Lakhs</option>
                                                                        <option value="k">Thousand</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Qualification</label>
                                                            <select class="form-control select2" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top"
                                                                data-title="Priority" name="qualification"
                                                                id="qualification">

                                                                @foreach ($qualification1 as $qualifi2)
                                                                <option value="{{$qualifi2->id}}">
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
                                                            <select class="form-control select2" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top"
                                                                name="functionarea" id="functionarea">
                                                                <option selected>select</option>

                                                                @foreach ($function_area1 as $function_area2)
                                                                <option value="{{$function_area2->id}}">
                                                                    {{$function_area2->function}}

                                                                </option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Industry </label>
                                                            <select class="form-control select2" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top"
                                                                name="industryname" id="industryname">


                                                                @foreach ($industry1 as $industry2)
                                                                <option value="{{$industry2->id}}">
                                                                    {{$industry2->industryfunction}}
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

                                                                    <select class="form-control select2"
                                                                        data-toggle="tooltip" data-trigger="hover"
                                                                        data-placement="top" name="min_age"
                                                                        id="min_age">
                                                                        @php
                                                                        $i=18;
                                                                        for($i;$i<=70;$i++) { @endphp <option
                                                                            value="{{$i}}">{{$i}}
                                                                            </option>
                                                                            @php
                                                                            }
                                                                            @endphp
                                                                    </select>



                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <select class="form-control select2"
                                                                        data-toggle="tooltip" data-trigger="hover"
                                                                        data-placement="top" name="max_age"
                                                                        id="max_age">
                                                                        @php
                                                                        $i=18;
                                                                        for($i;$i<=70;$i++) { @endphp <option
                                                                            value="{{$i}}">{{$i}}
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
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="tags">Technical Skills </label>
                                                            <div class="skills">
                                                                <input id="tags" type="text" class="form-control techskill" name="technical[]" placeholder="Enter skills separated by comma">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Behavioural Skills</label>
                                                        <div class="form-group">
                                                            <div class="skills">
                                                                <input id="tags" type="text" class="form-control techskill" name="behavioural[]" placeholder="Enter skills separated by comma">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Total Openings</label>
                                                        <select class="form-control" data-toggle="tooltip"
                                                            data-trigger="hover" data-placement="top"
                                                            data-title="Priority" name="opening" id="opening"
                                                            onchange="position();">
                                                            <option selected="">select</option>

                                                            @php
                                                            $i=1;
                                                            for($i;$i<=50;$i++) { @endphp <option value="{{$i}}">{{$i}}
                                                                </option>
                                                                @php
                                                                }
                                                                @endphp


                                                        </select>

                                                    </div>
                                                </div>

                                                <!-- <input type="text" value="" name="position_store" id="position_store">
                                                <input type="text" value="" name="name_position" id="name_position"> -->

                                                <div class="row">

                                                    <!-- <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Recruiters</label>

                                                            <select class="select2 form-control" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top"
                                                                name="recruitername[]" id="type_val"
                                                                onchange="openPopup()">




                                                                <option selected>Please Select</option>
                                                                @foreach($requiter as $requiter1)
                                                                <option value="{{$requiter1->id}}">
                                                                    {{$requiter1->fname}}{{$requiter1->lname}}</option>

                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>  -->




                                                    <!-- <div class="col-md-4">

                                                        <div class="form-control cst_n">
                                                            <select class="select2" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top"
                                                                name="recruitername[]" id="type_val" multiple
                                                                onchange="openPopup()">

                                                                <option selected>Please Select</option>
                                                                @foreach($requiter as $requiter1)
                                                                <option value="{{$requiter1->id}}">
                                                                    {{$requiter1->fname}}{{$requiter1->lname}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>



                                                        <div class="tags-area">
                                                            <ul>

                                                            </ul>
                                                        </div>

                                                    </div> -->

                                                    <!-- <div class="">


                                                        <div class="modal fade" id="myModal" role="dialog">
                                                            <div class="modal-dialog">

                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            onclick="positionselect();">&times;</button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <label>No. Of position</label>
                                                                        <input type="text" name="no_position" value=""
                                                                            id="no_position"
                                                                            onkeyup="showMe(this.value)">

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal"
                                                                            onclick="positionselect();">Close</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <div class="col-md-12 mb_15">
                                                        <div class="repeater">
                                                            <div data-repeater-list="data">
                                                                <div data-repeater-item>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="">Recruiters</label>
                                                                                <select class="form-control"
                                                                                    name="recruitername">

                                                                                    <option selected>Please Select
                                                                                    </option>
                                                                                    @foreach($requiter as $requiter1)
                                                                                    <option value="{{$requiter1->id}}">
                                                                                        {{$requiter1->fname}}{{$requiter1->lname}}
                                                                                    </option>

                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="">Position Number</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="position_no_recruiter"
                                                                                    aria-invalid="false">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 mt_27">
                                                                            <button type="button" data-repeater-delete
                                                                                class="btn btn-icon btn-danger mr-1"><i
                                                                                    class="ft-x"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button" data-repeater-create
                                                                id="repeater-button" class="btn btn-info">
                                                                <i class="ft-plus"></i> Add more
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">CRM</label>
                                                            <table>
                                                                <tr id="crm">
                                                                    <td></td>
                                                                </tr>
                                                            </table>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Billable value</label>
                                                            <input type="text" class="form-control"
                                                                data-toggle="tooltip" data-trigger="hover"
                                                                data-placement="top" id="count_bill_value"
                                                                name="bill_value" value=""
                                                                oninput="calculateAmount(this.value)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Total Billable Value</label>
                                                            <input type="text" class="form-control"
                                                                id="count_total_billvalue" name="total_billvalue"
                                                                value="" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Expected Joining Date</label>
                                                        <div class="form-group ">

                                                            <input type="text" class="form-control input-lg"
                                                                id="animate" placeholder="DD/MM/YY" name="joiningdate">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="controls">
                                                            <div class="form-group">
                                                                <h5>
                                                                    <strong>Gender </strong>
                                                                    <!-- <span class="required">*</span> -->
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Male"
                                                                            name="basic_radio" id="radio1">
                                                                        <label for="radio1">Male</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Female"
                                                                            name="basic_radio" id="radio2">
                                                                        <label for="radio2">Female</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Other"
                                                                            name="basic_radio" id="radio3">
                                                                        <label for="radio2">Other</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="controls">
                                                            <div class="form-group">
                                                                <h5>
                                                                    <strong>Hide Resume Contacts </strong>
                                                                    <!-- <span class="required">*</span> -->
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Yes" name="resume1"
                                                                            id="resum1">
                                                                        <label for="radio1">Yes</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="No" name="resume1"
                                                                            id="resum2">
                                                                        <label for="radio2">No</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="controls">
                                                            <div class="form-group">
                                                                <h5>
                                                                    <strong>Resume Type</strong>
                                                                    <!-- <span class="required">*</span> -->
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Snapshot"
                                                                            name="resumetype1" id="resumtype1">
                                                                        <label>Snapshot</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio"
                                                                            value="Fully Formatted Resume"
                                                                            name="resumetype1" id="resumtype2">
                                                                        <label>Fully Formatted Resume</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="controls">
                                                            <div class="form-group">
                                                                <h5>
                                                                    <strong>Project Type</strong>
                                                                    <!-- <span class="required">*</span> -->
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="RPO" name="ptype1"
                                                                            id="project_type1">
                                                                        <label>RPO</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="NON_RPO"
                                                                            name="ptype1" id="project_type2">
                                                                        <label>NON_RPO</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">

                                                        <div class="controls">
                                                            <div class="form-group">
                                                                <h5>
                                                                    <strong>Publish In Website</strong>
                                                                    <!-- <span class="required">*</span> -->
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Yes" name="website1"
                                                                            id="publish_website1">
                                                                        <label>Yes</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="No" name="website1"
                                                                            id="publish_website2">
                                                                        <label>No</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>







                                                </div>
                                            </div>
                                        </div>

                                        <!-- TAB FORM START -->

                                        <div id="menu1" class="container tab-pane fade"><br>
                                            <div class="form-group mb-2 ">
                                                <div>
                                                    <div>
                                                        <div class="row mb-1">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Job Description</label>
                                                                    <textarea name="editor1" id="editor1" rows="10"
                                                                        cols="80"></textarea>
                                                                    <script>
                                                                    CKEDITOR.replace('editor1');
                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Attachment</label>
                                                                    <input type="file" class="form-control"
                                                                        name="filetype">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary">Save</button>
                                            </div>
                                        </div>

                                        <!-- TAB FORM END -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- FORM END -->
                </div>
            </div>
            <!-- Form wizard with icon tabs section end -->
        
    <script type="text/javascript">
    // function readTextFile(file, callback, encoding) {
    //     var reader = new FileReader();
    //     reader.addEventListener('load', function(e) {
    //         callback(this.result);
    //     });
    //     if (encoding) reader.readAsText(file, encoding);
    //     else reader.readAsText(file);
    // }

    // function fileChosen(input, output) {
    //     if (input.files && input.files[0]) {
    //         readTextFile(
    //             input.files[0],
    //             function(str) {
    //                 output.value = str;
    //             }
    //         );
    //     }
    // }

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
            var client_id = this.value;
            $("#client_contanct_name").html('');
            $.ajax({
                url: "{{url('fetchclientconct')}}",
                type: "POST",
                data: {
                    spoc_id: client_id,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',

                success: function(result) {

                    console.log(result[1]);
                    $('#client_contanct_name').html(
                        '<option value="">Select SPOC</option>');
                    $.each(result[0].spoc_name, function(key, value) {
                        $("#client_contanct_name").append('<option value="' + value
                            .id +
                            '">' +
                            value.contact_name + '</option>');
                    });
                    
                
                    
                
                
                   
                    $.each(crm,function(key,value){
                    $('#crm').html(
                        '<td class="badge badge-primary">'+result[1]+'</td>'
                        
                            );
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