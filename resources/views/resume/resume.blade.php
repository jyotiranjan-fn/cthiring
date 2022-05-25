<x-admin-layout>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style>
        .select2 {
            width: 100% !important;
        }


        div.stars {
            /* width: 270px;
            display: inline-block; */
        }

        input.star {
            display: none;
        }

        label.star {
            float: right;
            padding: 0px 1px;
    font-size: 25px;
    color: #444;
    transition: all .2s;
        }

        input.star:checked~label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }

        input.star-5:checked~label.star:before {
            color: #FE7;
            /* text-shadow: 0 0 20px #952; */
        }

        input.star-1:checked~label.star:before {
            color: #F62;
        }

        label.star:hover {
            transform: rotate(-15deg) scale(1.3);
        }

        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }
    </style>
    <style>
        label {
            margin: 0;
        }

        .star-container {
            display: flex;
            flex-direction: row-reverse;
            align-items: flex-start;
            justify-content: flex-end;
        }

        .star-check {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            -o-appearance: none !important;
            -ms-appearance: none !important;
            appearance: none !important;
            width: 24px;
            height: 24px;
            background-image: url('../assets/star.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: right 0;
            cursor: pointer;
            outline: 0;
        }

        .star-check:checked,
        .star-check:checked~input {
            background-position: left 0;
        }

        .cnt223 a {
            text-decoration: none;
        }

        .popup {
            margin: 0 auto;
            display: none;
            position: relative;
        }

        .cnt223 {
            min-width: 600px;
            width: 600px;
            background: white;
            padding: 15px 35px;
            border-radius: 5px;
            box-shadow: 0 2px 5px #000;
            position: absolute;
            left: 50%;
            z-index: 2;
            transform: translateX(-50%);
        }

        .cnt223 p {
            clear: both;
            color: #555555;
            /* text-align: justify; */
            font-size: 20px;
            font-family: sans-serif;
        }

        .cnt223 p a {
            color: #d91900;
            font-weight: bold;
        }

        .cnt223 .x {
            float: right;
            height: 35px;
            left: 22px;
            position: relative;
            top: -25px;
            width: 34px;
        }

        .cnt223 .x:hover {
            cursor: pointer;
        }
    </style>

    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Resume</h3><br>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Resume</a>
                        </li>
                        <li class="breadcrumb-item active">Create Resume
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
            <div class="dropdown float-md-right">
                <button class="btn btn-danger   round btn-glow px-2">Add Resume</button>
                <button class="btn btn-danger   round btn-glow px-2" id="reset">Reset</button>
                <button class="btn btn-danger   round btn-glow px-2" id="add">Add</button>
            </div>
        </div>
    </div>

    <div class='popup'>
        <div class='cnt223'>
            <h1>Add Resume<a href='' class='close'><i class="lar la-times-circle f_s"></i></a></h1>

            <p>
            <div class="row match-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="">
                            <!-- <h4 class="card-title" id="basic-layout-tooltip">Add Resume</h4> -->
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                        </div>

                        <div class="card-content collapse show">
                            <div class="card-body ">
                                <form class="form" action="{{url('resume_submit')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12 col-sm-12 col-xs-12 pd_0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Client</label>
                                                    <select class="form-control" name="client" id="clientname">
                                                        <option selected>Select</option>


                                                        @foreach($result as $client_names)
                                                        <option value="{{$client_names->client_name}}">
                                                            {{($client_names->client_na)->client_name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('client')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Position For</label>
                                                    <select class="form-control" name="position" id="position_fetch">


                                                    </select>
                                                    @error('position').
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Resume</label>
                                                    <input type="file" name="resume" class="form-control">
                                                    <span>Upload Only DOCX, DOC Format</span>
                                                </div>
                                                @error('resume')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <button type="submit" name="save" class="btn btn-primary">Save</button>

                                        <button type="button" name="cancel" class="btn btn-danger">Cancel</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Form wizard with icon tabs section end -->
            </div>
        </div>
        <a href='' class='close'>Close</a>
        </p>
    </div>

    </div>


    <!-- Form wizard with icon tabs section start -->
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">

                        <form class="form" action="{{url('insert_resume')}}" method="post" enctype="multipart/form-data">

                            @csrf
                            <div class="form-body">
                                <div class="container">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home">Personal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#menu1">Education</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#menu2">Experience</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#menu3">Consultant
                                                Assessment</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="home" class="container tab-pane active pd_0"><br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Position For</label>
                                                        @if (session()->has('job_name'));
                                                        <input type="text" class="form-control" name="position" value="{{session('job_name')}}" disabled>
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Candidate Name</label>
                                                        <input type="text" class="form-control" name="candidatename">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="text" class="form-control" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Mobile</label>
                                                        <input type="text" class="form-control" name="mobile">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">DOB</label>
                                                        <input type="date" class="form-control" name="dob">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Current Designation</label>
                                                        <input type="text" class="form-control" name="designation">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Total Years of Exp</label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <select class="select2 form-control" name="year">
                                                                        @for($i=0;$i<=50;$i++) <option>{{$i}} Years
                                                                            </option>
                                                                            @endfor
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <select class="select2 form-control" name="month">
                                                                        @for($i=0;$i<=11;$i++) <option>{{$i}} Months
                                                                            </option>
                                                                            @endfor
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Notice Period</label>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <select class="select2 form-control" name="notice">
                                                                    <option>15days</option>
                                                                    <option>1month</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="1" id="single_checkbox" name="checkbox">
                                                                    <label for="single_checkbox">Presently Working?
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">CTC</label>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="" name="min_salary" value="" placeholder="Present CTC">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <select class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" name="salary_value">
                                                                    <option selected>Select</option>
                                                                    <option value="Lakhs">Lakhs</option>
                                                                    <option value="K">Thousand</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="" name="max_salary" value="" placeholder="Expected CTC">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <select class="form-control select2" data-toggle="tooltip" data-trigger="hover" data-placement="top" name="salary_value2">
                                                                    <option selected>Select</option>
                                                                    <option value="Lakhs">Lakhs</option>
                                                                    <option value="k">Thousand</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Gender</label><br>
                                                        <div class="controls">
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="Male" name="gender1" id="male">
                                                                <label>Male</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="Female" name="gender1" id="female">
                                                                <label>Female</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="Others" name="gender1" id="others">
                                                                <label>Others</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Marital Status</label><br>
                                                        <div class="controls">
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="Single" name="website2" id="Single">
                                                                <label>Single</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="Married" name="website2" id="Married">
                                                                <label>Married</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="Separated" name="website2" id="Separated">
                                                                <label>Separated</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Family (Dependents)</label><br>
                                                        <textarea name="dependents" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Present Location</label><br>
                                                        <input type="text" name="present" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Native Location</label><br>
                                                        <input type="text" name="native" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div id="menu1" class="container tab-pane fade pd_0"><br>
                                            <div class="form-group mb-2 file-repeater">
                                                <div data-repeater-list="data">
                                                    <div data-repeater-item>
                                                        <div class="row mb-1">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Qualification</label>
                                                                    <select class="form-control" name="qualification">


                                                                        @foreach($qualification as $qul)

                                                                        <option value="{{$qul->id}}">
                                                                            {{$qul->qualification_name}}

                                                                        </option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Degree</label>
                                                                    <select class="form-control" name="degree">
                                                                        @foreach($degree->sortBy('degree') as $deg)
                                                                        <option value="{{$deg->id}}">{{$deg->degree}}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Specialization</label>
                                                                    <select class="form-control" name="specialization">
                                                                        @foreach($specialization->sortBy('specialization_name')
                                                                        as $spec)
                                                                        <option value="{{$spec->id}}">
                                                                            {{$spec->specialization_name}}
                                                                        </option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">College</label>
                                                                    <input type="text" class="form-control" name="college">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">% of Marks / Grades</label>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control" name="marks">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <select class="form-control" name="coursetype">
                                                                                <option selected>Select</option>
                                                                                <option>Regular</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Year of Passing</label>
                                                                    <select class="form-control branchid" name="year">
                                                                        <option>Select</option>



                                                                        @php
                                                                        $currentyear=date("Y")+1;
                                                                        $count=20;

                                                                        for($i=0;$i<$count;$i++) { $currentyear=$currentyear-1; @endphp<option value="{{$currentyear}}">{{$currentyear}}
                                                                            </option>
                                                                            @php
                                                                            }


                                                                            @endphp


                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">University</label><br>
                                                                    <input type="text" class="form-control" value="" name="university">

                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1"><i class="ft-x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" data-repeater-create class="btn btn-primary">
                                                    <i class="ft-plus"></i> Add Another
                                                </button>
                                            </div>
                                        </div>



                                        <div id="menu2" class="container tab-pane fade pd_0"><br>
                                            <div class="form-group mb-2 file-repeater">
                                                <div data-repeater-list="data1">
                                                    <div data-repeater-item>
                                                        <div class="row mb-1">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Company Name</label>
                                                                    <input type="text" class="form-control" name="c_name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Designation</label>
                                                                    <input type="text" class="form-control" name="designation">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Employment Period</label>
                                                                    <div class='input-group'>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12 pd_0">
                                                                            <label for="">From</label>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12 pd_0">
                                                                            <label for="">To</label>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12 pd_0">
                                                                            <input type='date' class="form-control" name="employmentperiod_from" />
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12 pd_0">
                                                                            <input type='date' class="form-control" name="employmentperiod_to" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Specialization/Expertise</label>
                                                                    <input type="text" class="form-control" name="specialization">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Project/ Certification Details
                                                                        (optional)</label>
                                                                    <textarea class="form-control" name="certification"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Location</label>
                                                                    <input type="text" class="form-control" name="location">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Other Vital Information(Position
                                                                        Specific)</label>
                                                                    <textarea class="form-control" name="vital_information"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Reporting To</label>
                                                                    <input type="text" class="form-control" name="reporting">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1"><i class="ft-x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" data-repeater-create class="btn btn-primary">
                                                    <i class="ft-plus"></i> Add Another
                                                </button>

                                            </div>
                                        </div>


                                        <div id="menu3" class="container tab-pane fade pd_0"><br>
                                            <div class="form-group mb-2">
                                                <div class="row mb-1">
                                                    <div class="col-md-5">
                                                        <div class="form-group">

                                                            <label for="">Rate Technical Skills</label>
                                                            @if (session()->has('position_tech')):
                                                            <div class="row">

                                                                @php
                                                                $tech_skills='';
                                                                $tech_skills=json_decode(session('position_tech'));
                                                                $count=count($tech_skills);
                                                                @endphp

                                                                @php
                                                                for($i=0;$i<$count;$i++){ @endphp <div class="col-md-8 mb_10">
                                                                    <input type="text" class="form-control mb-2" name="technical[]" value="{{$tech_skills[$i]}}" aria-invalid="false">
                                                            </div>
                                                            <div class="col-md-4 mb_10">
                                                                <div class="stars">
                                                                    <!-- <form action=""> -->
                                                                    <input class="star star-5" id="star-5{{$i}}" type="radio" value="5" name="star_{{$i}}[]" />
                                                                    <label class="star star-5" for="star-5{{$i}}"></label>
                                                                    <input class="star star-4" id="star-4{{$i}}" type="radio"value="4" name="star_{{$i}}[]" />
                                                                    <label class="star star-4" for="star-4{{$i}}"></label>
                                                                    <input class="star star-3" id="star-3{{$i}}" type="radio"value="3" name="star_{{$i}}[]" />
                                                                    <label class="star star-3" for="star-3{{$i}}"></label>
                                                                    <input class="star star-2" id="star-2{{$i}}" type="radio" value="2"name="star_{{$i}}[]" />
                                                                    <label class="star star-2" for="star-2{{$i}}"></label>
                                                                    <input class="star star-1" id="star-1{{$i}}" type="radio" value="1"name="star_{{$i}}[]" />
                                                                    <label class="star star-1" for="star-1{{$i}}"></label>
                                                                    <!-- </form> -->
                                                                </div>
                                                            </div>

                                                            @php
                                                            }
                                                            @endphp


                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                               
                                                    <div class="col-md-5">
                                                        <div class="form-group">

                                                        <label for="">Rate Behavioural Skills</label>
                                                            @if (session()->has('position_behaviour')):
                                                            <div class="row">

                                                                @php
                                                                $beh_skills='';
                                                                $beh_skills=json_decode(session('position_behaviour'));
                                                                $count1=count($beh_skills);
                                                                @endphp

                                                                @php
                                                                for($j=0;$j<$count1;$j++){ @endphp <div class="col-md-8 mb_10">
                                                                    <input type="text" class="form-control mb-2" name="behavioural[]" value="{{$beh_skills[$j]}}">
                                                            </div>
                                                            <div class="col-md-4 mb_10">
                                                                <div class="stars">
                                                                    <!-- <form action=""> -->
                                                                    <input class="star star-5" id="bstar-10{{$j}}" type="radio" value="5" name="bstar_{{$j+50}}[]" />
                                                                    <label class="star star-5" for="bstar-10{{$j}}"></label>
                                                                    <input class="star star-4" id="bstar-9{{$j}}" type="radio"value="4" name="bstar_{{$j+50}}[]" />
                                                                    <label class="star star-4" for="bstar-9{{$j}}"></label>
                                                                    <input class="star star-3" id="bstar-8{{$j}}" type="radio"value="3" name="bstar_{{$j+50}}[]" />
                                                                    <label class="star star-3" for="bstar-8{{$j}}"></label>
                                                                    <input class="star star-2" id="bstar-7{{$j}}" type="radio" value="2"name="bstar_{{$j+50}}[]" />
                                                                    <label class="star star-2" for="bstar-7{{$j}}"></label>
                                                                    <input class="star star-1" id="bstar-6{{$j}}" type="radio" value="1"name="bstar_{{$j+50}}[]" />
                                                                    <label class="star star-1" for="bstar-6{{$j}}"></label>
                                                                    <!-- </form> -->
                                                                </div>
                                                            </div>


                                                            

                                                            @php
                                                            }
                                                            @endphp


                                                        </div>
                                                        @endif
                                                    </div>
                                            </div>
                                     
                                                <!-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Rate Behavioural Skills</label>
                                                        @if (session()->has('position_behaviour')):
                                                        <div class="row">
                                                            @php

                                                            $beh_skills='';
                                                            $beh_skills=json_decode(session('position_behaviour'));
                                                            $count=count($beh_skills);
                                                            @endphp

                                                            <div class="col-md-8 mb_10">
                                                                @php
                                                                for($i=0;$i<$count;$i++){ @endphp <input type="text" class="form-control" name="behavioural" value="{{$beh_skills[$i]}}"><br>
                                                                    @php
                                                                    }

                                                                    @endphp

                                                            </div>

                                                        </div>
                                                        @endif
                                                    </div>
                                                </div> -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Consultant Assessment</label>
                                                        <textarea class="form-control" name="consul_assessment"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Any Other Inputs</label>
                                                        <textarea class="form-control" name="other_input"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Interview Availability</label>
                                                        <textarea class="form-control" name="interview_availability"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <span><input type="button" class="btn btn-success" value="Draft"></span>
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-content collapse show">
                <div class="card-body">
                    <h4>Candidate Resume</h4>


                </div>
            </div>
        </div>
    </div>
    </div>


    <form>
        <input type="hidden" value="{{session('showpopup')}}" id="session">
    </form>

    <div id="test" name="test"></div>


    <script>
        $('#reset').on('click', function() {
            $.ajax({
                url: "{{url('reset_resume')}}",
                type: "POST",
                data: {
                    _token: '{{csrf_token()}}'
                },

            })
        })
    </script>


    <script>
        $(document).ready(function() {
            //fetch dist clients

            $('#clientname').on('change', function() {
                var client_id = this.value;
                $("#position_fetch").html('');
                $.ajax({
                    url: "{{url('fetch_position')}}",
                    type: "POST",
                    data: {
                        sta_id: client_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',

                    success: function(result) {
                        $('#position_fetch').html('<option value="">Select Position</option>');
                        $.each(result.position, function(key, value) {
                            $("#position_fetch").append('<option value="' + value
                                .position_id + '">' +
                                value.job_title + '</option>');
                        });
                    },
                });
            });

        });
    </script>
    <script type='text/javascript'>
        $(function() {
            var s_data = $('#session').val();
            if (s_data == 0) {
                var overlay = $('<div id="overlay"></div>');
                overlay.show();
                overlay.appendTo(document.body);
                $('.popup').show();
                $('.close').click(function() {

                    alert(s_data);
                    $('.popup').hide();

                    overlay.appendTo(document.body).remove();
                    return false;
                });




                $('.x').click(function() {
                    $('.popup').hide();
                    overlay.appendTo(document.body).remove();
                    return false;
                });
            }
        });
    </script>
    <script>
        var i = 1;
        $('#add').each(function() {
            $(this).on('click', function() {

                $('#test')
                console.log(i);
                i++;

            });
        })
    </script>

</x-admin-layout>