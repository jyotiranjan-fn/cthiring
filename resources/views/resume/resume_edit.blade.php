<x-admin-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
                            <!-- <li class="breadcrumb-item"><a href="index.html">Settings</a>
                            </li> -->
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



    </div>


    <!-- Form wizard with icon tabs section start -->
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">

                        <form class="form" action="{{url('resume_edit',$view->id)}}" method="post"
                            enctype="multipart/form-data">

                            @csrf
                            <div class="form-body">
                                <div class="container">
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
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#menu4"><img
                                                    src="../assets/resume/addfile.png" class="hi8">Re-Upload Resume</a>
                                        </li>

                                    </ul>

                                    <!--1st Tab form panes -->
                                    <div class="tab-content">
                                        <div id="home" class="container tab-pane active pd_0"><br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Position For</label>

                                                        <input type="text" class="form-control" name="position"
                                                            value="{{($view->jobname)->job_title}}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Candidate Name</label>
                                                        <input type="text" class="form-control" name="candidatename"
                                                            value="{{$view->name}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="text" class="form-control" name="email"
                                                            value="{{$view->email}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Mobile</label>
                                                        <input type="text" class="form-control" name="mobile"
                                                            value="{{$view->mobile}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">DOB</label>
                                                        <input type="date" class="form-control" name="dob"
                                                            value="{{$view->dob}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Current Designation</label>
                                                        <input type="text" class="form-control" name="designation"
                                                            value="{{$view->current_designation}}">
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
                                                                        @php
                                                                        $i=1;
                                                                        for($i;$i<=50;$i++) { @endphp <option
                                                                            value="{{$i}}"
                                                                            {{$i == $view->year_experience ? 'selected':''}}>
                                                                            {{$i}} Years
                                                                            </option>
                                                                            @php
                                                                            }
                                                                            @endphp
                                                                    </select>


                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <select class="select2 form-control" name="month">
                                                                        @php
                                                                        $i=1;
                                                                        for($i;$i<=50;$i++) { @endphp <option
                                                                            value="{{$i}}"
                                                                            {{$i == $view->month_experience ? 'selected':''}}>
                                                                            {{$i}} Months
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
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Notice Period</label>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <select class="select2 form-control" name="notice">
                                                                    <option selected>{{$view->notice_period}}
                                                                    </option>
                                                                    <option>15days</option>
                                                                    <option>1month</option>
                                                                    <option>2month</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="1"
                                                                        id="single_checkbox" name="checkbox">
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
                                                                @php
                                                                $salary_num=explode(" ",($view->ctc_min));
                                                                @endphp

                                                                <input type="text" class="form-control" id=""
                                                                    name="min_salary" value="{{$salary_num[0]}}"
                                                                    placeholder="Present CTC">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <select class="form-control" data-toggle="tooltip"
                                                                    data-trigger="hover" data-placement="top"
                                                                    data-title="Priority" name="salary_value">
                                                                    @php
                                                                    $salary_value=explode(" ",($view->ctc_min));

                                                                    @endphp
                                                                    <option selected>{{($salary_value[1])}}</option>
                                                                    <option value="Lakhs">Lakhs</option>
                                                                    <option value="K">Thousand</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                @php
                                                                $salary_num_max=explode(" ",($view->ctc_max));
                                                                @endphp
                                                                <input type="text" class="form-control" id=""
                                                                    name="max_salary" value="{{$salary_num_max[0]}}"
                                                                    placeholder="Expected CTC">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <select class="form-control select2"
                                                                    data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" name="salary_value2">
                                                                    @php
                                                                    $salary_value_max=explode(" ",($view->ctc_max));

                                                                    @endphp
                                                                    <option selected>{{($salary_value_max[1])}}</option>
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
                                                                <input type="radio" value="Male" name="gender1"
                                                                    id="male"
                                                                    {{ ($view->gender=="Male")? "checked" : "" }}>
                                                                <label>Male</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="Female" name="gender1"
                                                                    id="female"
                                                                    {{ ($view->gender=="Female")? "checked" : "" }}>
                                                                <label>FeMale</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="Others" name="gender1"
                                                                    id="others"
                                                                    {{ ($view->gender=="Others")? "checked" : "" }}>
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
                                                                <input type="radio" value="Single" name="website2"
                                                                    id="Single"
                                                                    {{ ($view->marital_status=="Single")? "checked" : "" }}>
                                                                <label>Single</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="Married" name="website2"
                                                                    id="Married"
                                                                    {{ ($view->marital_status=="Married")? "checked" : "" }}>
                                                                <label>Married</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="Separated" name="website2"
                                                                    id="Separated"
                                                                    {{ ($view->marital_status=="Separated")? "checked" : "" }}>
                                                                <label>Separated</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Family (Dependents)</label><br>
                                                        <textarea name="dependents"
                                                            class="form-control">{{$view->family_dependent}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Present Location</label><br>
                                                        <input type="text" name="present" class="form-control"
                                                            value="{{$view->present_location}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Native Location</label><br>
                                                        <input type="text" name="native" class="form-control"
                                                            value="{{$view->native_location}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 2nd tab  -->

                                        <div id="menu1" class="container tab-pane fade pd_0"><br>

                                            <div class="form-group mb-2 file-repeater">
                                                <div data-repeater-list="data">
                                                    @foreach ($edit_result as $results )
                                                    <div data-repeater-item>
                                                        <div class="row mb-1">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Qualification</label>


                                                                    <select class="form-control" name="qualification">
                                                                        @foreach($qualification as $qul)
                                                                        <option value="{{$qul->id}}"
                                                                            {{$qul->id == $results[0] ? 'selected':''}}>
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
                                                                        @foreach ($degree as $degre)
                                                                        <option value="{{$degre->id}}"
                                                                            {{$degre->id == $results[1] ? 'selected':''}}>
                                                                            {{$degre->degree}}
                                                                            @endforeach
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Specialization</label>
                                                                    <select class="form-control" name="specialization">

                                                                        @foreach ($specialization as $specializ)
                                                                        <option value="{{$specializ->id}}"
                                                                            {{$specializ->id == $results[2] ? 'selected':''}}>
                                                                            {{$specializ->specialization_name}}
                                                                            @endforeach
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">College</label>
                                                                    <input type="text" class="form-control"
                                                                        name="college" value=" {{$results[3]}}">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label for="">% of Marks / Grades</label>
                                                                            <input type="text" class="form-control"
                                                                                name="marks" value=" {{$results[4]}}">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="">Course Type</label>
                                                                            <select class="form-control"
                                                                                name="coursetype">
                                                                                <option selected> {{$results[5]}}
                                                                                </option>
                                                                                <option value="regular">Regular</option>
                                                                                <option value="Correspondence">
                                                                                    Correspondence</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Year of Passing</label>
                                                                    <select class="form-control branchid" name="year">
                                                                        <option>{{$results[6]}}</option>

                                                                        @php
                                                                        $currentyear=date("Y")+1;
                                                                        $count=20;

                                                                        for($i=0;$i<$count;$i++) {
                                                                            $currentyear=$currentyear-1; @endphp<option
                                                                            value="{{$currentyear}}">{{$currentyear}}
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
                                                                    <input type="text" class="form-control"
                                                                        name="university" value="{{$results[7]}}">

                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="button" data-repeater-delete
                                                                    class="btn btn-icon btn-danger mr-1"><i
                                                                        class="ft-x"></i></button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @endforeach

                                                </div>
                                                <button type="button" data-repeater-create class="btn btn-primary">
                                                    <i class="ft-plus"></i> Add Another
                                                </button>
                                            </div>
                                        </div>


                                        <!-- 3rd tab form -->

                                        <div id="menu2" class="container tab-pane fade pd_0"><br>
                                            <div class="form-group mb-2 file-repeater">
                                                <div data-repeater-list="data1">
                                                    @foreach ($edit_res as $edit_result )
                                                    <div data-repeater-item>

                                                        <div class="row mb-1">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Company Name</label>
                                                                    <input type="text" class="form-control"
                                                                        name="c_name" value="{{$edit_result[0]}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Designation</label>
                                                                    <input type="text" class="form-control"
                                                                        name="designation" value="{{$edit_result[1]}}">
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
                                                                            <input type='date' class="form-control"
                                                                                name="employmentperiod_from"
                                                                                value="{{$edit_result[2]}}">
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12 pd_0">
                                                                            <input type='date' class="form-control"
                                                                                name="employmentperiod_to"
                                                                                value="{{$edit_result[3]}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Specialization/Expertise</label>
                                                                    <input type="text" class="form-control"
                                                                        name="specialization"
                                                                        value="{{$edit_result[4]}}">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Project/ Certification Details
                                                                    </label>
                                                                    <textarea class="form-control"
                                                                        name="certification">{{$edit_result[5]}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Location</label>
                                                                    <input type="text" class="form-control"
                                                                        name="location" value="{{$edit_result[6]}}">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Other Vital Information(Position
                                                                        Specific)</label>
                                                                    <textarea class="form-control"
                                                                        name="vital_information">  {{$edit_result[7]}} </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Reporting To</label>
                                                                    <input type="text" class="form-control"
                                                                        name="reporting" value="{{$edit_result[8]}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="button" data-repeater-delete
                                                                    class="btn btn-icon btn-danger mr-1"><i
                                                                        class="ft-x"></i></button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @endforeach
                                                </div>
                                                <button type="button" data-repeater-create class="btn btn-primary">
                                                    <i class="ft-plus"></i> Add Another
                                                </button>

                                            </div>
                                        </div>

                                        <!-- 4th tab form -->
                                        <div id="menu3" class="container tab-pane fade pd_0"><br>
                                            <div class="form-group mb-2">
                                                <div class="row mb-1">
                                                    <div class="col-md-5">
                                                        <div class="form-group">

                                                            <label for="">Rate Technical Skills</label>

                                                            <div class="row">

                                                                @php
                                                                $tech_skills='';
                                                                $tech_skills=json_decode($view->technical_rating);

                                                                $count=count($tech_skills);
                                                                @endphp

                                                                @php
                                                                for($i=0;$i<$count;$i++){ @endphp<div
                                                                    class="col-md-8 mb_10">
                                                                    <input type="text" class="form-control mb-2"
                                                                        name="technical[]" value="{{$tech_skills[$i]}}"
                                                                        aria-invalid="false" readonly>
                                                            </div>
                                                            <div class="col-md-4 mb_10">
                                                                <div class="stars">
                                                                    <!-- <form action=""> -->
                                                                    <input class="star star-5" id="star-5{{$i}}"
                                                                        type="radio" value="5" name="star_{{$i}}[]"
                                                                        @if(json_decode($view->technical_star_rating)[$i]==5)
                                                                    checked @endif
                                                                    />
                                                                    <label class="star star-5"
                                                                        for="star-5{{$i}}"></label>
                                                                    <input class="star star-4" id="star-4{{$i}}"
                                                                        type="radio" value="4" name="star_{{$i}}[]"
                                                                        @if(json_decode($view->technical_star_rating)[$i]==4)
                                                                    checked @endif />
                                                                    <label class="star star-4"
                                                                        for="star-4{{$i}}"></label>
                                                                    <input class="star star-3" id="star-3{{$i}}"
                                                                        type="radio" value="3" name="star_{{$i}}[]"
                                                                        @if(json_decode($view->technical_star_rating)[$i]==3)
                                                                    checked @endif />
                                                                    <label class="star star-3"
                                                                        for="star-3{{$i}}"></label>
                                                                    <input class="star star-2" id="star-2{{$i}}"
                                                                        type="radio" value="2" name="star_{{$i}}[]"
                                                                        @if(json_decode($view->technical_star_rating)[$i]==2)
                                                                    checked @endif/>
                                                                    <label class="star star-2"
                                                                        for="star-2{{$i}}"></label>
                                                                    <input class="star star-1" id="star-1{{$i}}"
                                                                        type="radio" value="1" name="star_{{$i}}[]"
                                                                        @if(json_decode($view->technical_star_rating)[$i]==1)
                                                                    checked @endif/>
                                                                    <label class="star star-1"
                                                                        for="star-1{{$i}}"></label>
                                                                    <!-- </form> -->
                                                                </div>
                                                            </div>

                                                            @php
                                                            }
                                                            @endphp


                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                    <div class="form-group">

                                                        <label for="">Rate Behavioural Skills</label>

                                                        <div class="row">

                                                            @php
                                                            $beh_skills='';
                                                            $beh_skills=json_decode($view->behavioural_rating);
                                                            $count1=count($beh_skills);
                                                            @endphp

                                                            @php
                                                            for($j=0;$j<$count1;$j++){ @endphp <div
                                                                class="col-md-8 mb_10">
                                                                <input type="text" class="form-control mb-2"
                                                                    name="behavioural[]" value="{{$beh_skills[$j]}}"
                                                                    readonly>
                                                        </div>
                                                        <div class="col-md-4 mb_10">
                                                            <div class="stars">
                                                                <!-- <form action=""> -->
                                                                <input class="star star-5" id="bstar-10{{$j}}"
                                                                    type="radio" value="5" name="bstar_{{$j+50}}[]"
                                                                    @if(json_decode($view->behavioural_star_rating)[$j]==5)
                                                                checked @endif />
                                                                <label class="star star-5" for="bstar-10{{$j}}">
                                                                </label>
                                                                <input class="star star-4" id="bstar-9{{$j}}"
                                                                    type="radio" value="4" name="bstar_{{$j+50}}[]"
                                                                    @if(json_decode($view->behavioural_star_rating)[$j]==4)
                                                                checked @endif />
                                                                <label class="star star-4" for="bstar-9{{$j}}"></label>
                                                                <input class="star star-3" id="bstar-8{{$j}}"
                                                                    type="radio" value="3" name="bstar_{{$j+50}}[]"
                                                                    @if(json_decode($view->behavioural_star_rating)[$j]==3)
                                                                checked @endif />
                                                                <label class="star star-3" for="bstar-8{{$j}}"></label>
                                                                <input class="star star-2" id="bstar-7{{$j}}"
                                                                    type="radio" value="2" name="bstar_{{$j+50}}[]"
                                                                    @if(json_decode($view->behavioural_star_rating)[$j]==2)
                                                                checked @endif />
                                                                <label class="star star-2" for="bstar-7{{$j}}"></label>
                                                                <input class="star star-1" id="bstar-6{{$j}}"
                                                                    type="radio" value="1" name="bstar_{{$j+50}}[]"
                                                                    @if(json_decode($view->behavioural_star_rating)[$j]==1)
                                                                checked @endif />
                                                                <label class="star star-1" for="bstar-6{{$j}}"></label>
                                                                <!-- </form> -->
                                                            </div>
                                                        </div>




                                                        @php
                                                        }
                                                        @endphp


                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Consultant Assessment</label>
                                                    <textarea class="form-control"
                                                        name="consul_assessment"> {{$view->assessment}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Any Other Inputs</label>
                                                    <textarea class="form-control"
                                                        name="other_input">{{$view->other_inputs}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Interview Availability</label>
                                                    <textarea class="form-control"
                                                        name="interview_availability">{{$view->interview_availability}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- 5th tab form -->
                                <div id="menu4" class="container tab-pane fade pd_0"><br>
                                    <table class="table table-bordered wd_16 t_left">
                                        <tr>
                                            <th class="pd_410">
                                                Attachment*
                                            </th>
                                            <td class="pd_410"><input type="file" class="form-control" name="resume">
                                            </td>
                                        </tr>
                                        <tr>

                                            <th class="pd_410">Upload Resume
                                            </th>
                                            <td class="pd_410">
                                                <span><input type="button" class="btn btn-success"
                                                        value="Upload">{{$view->resume_file}}</span>

                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="form-actions">
                                <span><input type="button" class="btn btn-success" value="Draft"></span>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <button type="button" name="cancel" class="btn btn-danger">Cancel</button>
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

<!-- Form wizard with icon tabs section end -->
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