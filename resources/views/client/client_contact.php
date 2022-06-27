<x-admin-layout>
<style>
.select2 {
    width: 100% !important;
}
</style>

        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">client</h3><br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Settings</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Branch</a>
                            </li>
                            <li class="breadcrumb-item active">client
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger  round btn-glow px-2">Actions</button>
                </div>
            </div>
        </div>


        <!-- Form wizard with icon tabs section start -->
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form class="form" action="clientinsert2" method="post">
                                @csrf
                                <div class="form-body">
                                    <div class="card-header pl_0">
                                        <h4 class="card-title" id="basic-layout-tooltip">Client Contact</h4>
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
                                    <div class="form-group mb-2 repeater">
                                        <div data-repeater-list="data">
                                            <div data-repeater-item>
                                                <div class="row mb-1">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Contact Person </label>
                                                            <input type="text" class="form-control" name="contactname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Contact Person Phone</label>
                                                            <input type="text" class="form-control" name="contactphone">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Mail</label>
                                                            <input type="email" class="form-control" name="contactmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Designation</label>
                                                            <input type="text" class="form-control" name="designation">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Status</label>
                                                            <select class="form-control" name="status">
                                                                <option selected>Please Select Status</option>
                                                                <option value="1">Active</option>
                                                                <option value="2">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Client Branch</label>
                                                            <select class="select2 form-control" name="clientbranch">
                                                                <option>Select</option>
                                                                @foreach ($client_branch as $branch)
                                                                <option value="{{$branch->id}}">
                                                                    {{$branch->location}}
                                                                </option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Corporate Address</label>
                                                            <div class="">
                                                                <input type="checkbox" value="1" id="single_checkbox"
                                                                    name="checkbox">
                                                                <label for="">checked
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Door Number</label>
                                                            <input type="text" class="form-control" name="doorno" id="doorno">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="issueinput4">Street Name</label>
                                                            <input type="text" class="form-control" name="streetname" id="streetname">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Area</label>
                                                            <input type="text" class="form-control" name="area" id="area">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">State</label>
                                                            <select class="form-control select2 " name="State"
                                                                id="statenamecontact">
                                                                @foreach ($state_name->sortBy('state_title')
                                                                as
                                                                $st_name )
                                                                <option value="{{$st_name->state_id }}">
                                                                    {{$st_name->state_title }}
                                                                </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">District</label>
                                                            <select class="form-control select2" name="districtname"
                                                                id="contactdist">
                                                                @foreach ($district->sortBy('district_title') as
                                                                $dis_name)
                                                                <option value="{{$dis_name->id}}">
                                                                    {{$dis_name->district_title}}
                                                                </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">City</label>
                                                            <select class="form-control select2" name="cityname"
                                                                id="contactcity">
                                                                @foreach ($city->sortBy('name') as
                                                                $cy_name)
                                                                <option value="{{$cy_name->id}}">
                                                                    {{$cy_name->name}}
                                                                </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row col-12">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Pincode</label>
                                                                <input type="text" class="form-control" name="pincode" id="pincode">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12">
                                                        <button type="button" data-repeater-delete
                                                            class="btn btn-icon btn-danger mr-1"><i
                                                                class="ft-x"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" data-repeater-create id="repeater-button"
                                            class="btn btn-info">
                                            <i class="ft-plus"></i> Add new file
                                        </button>

                                    </div>
                                    <div class="form-actions">
                                        <span id="hide">
                                            <a href="/client"><input type="button" class="btn btn-warning"
                                                    value="Back"></a>
                                        </span>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form wizard with icon tabs section end -->

<style>
#box1 .select2-container:nth-child(5n) {
    background-color: red;
    display: none;
}
</style>

<script>
$(document).ready(function() {

    $('.repeater').repeater({

    });
    $(".select2").select2({
        placeholder: "Select a state",

    });
    $("#repeater-button").click(function() {

        $(".select2").select2({
            placeholder: "Select a state",

        });



    });
});
</script>


<!-- <script>
$(document).ready(function() {
    //fetch dist clients

    $('#statename').on('change', function() {
        var sta_id = this.value;
        $("#distname").html('');
        $.ajax({
            url: "{{url('fetchdist')}}",
            type: "POST",
            data: {
                sta_id: sta_id,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',

            success: function(result) {
                $('#distname').html('<option value="">Select District</option>');
                $.each(result.district, function(key, value) {
                    $("#distname").append('<option value="' + value.id + '">' +
                        value.district_title + '</option>');
                });
            },
        });
    });

    //fetch City
    $('#distname').on('change', function() {
        var dis_id = this.value;
        $("#city").html('');
        $.ajax({
            url: "{{url('fetchcity')}}",
            type: "POST",
            data: {
                dis_id: dis_id,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',

            success: function(result1) {
                $('#city').html('<option value="">Select City</option>');
                $.each(result1.city, function(key, value) {
                    $("#city").append('<option value="' + value.id +
                        '">' + value.name + '</option>');
                });
            },
        });
    });
});
</script> -->

<!-- // fetch dist for clientcontact //-->
<!-- <script>
$(document).ready(function() {

    $('#statenamecontact').on('change', function() {


        // alert('hi');
        // die;
        var sta_id_contact = this.value;
        $("#contactdist").html('');
        $.ajax({
            url: "{{url('fetchdist_contact')}}",
            type: "POST",
            data: {
                sta_id_contact: sta_id_contact,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',

            success: function(result2) {
                $('#contactdist').html('<option value="">Select District</option>');
                $.each(result2.district_contact, function(key, value) {
                    $("#contactdist").append('<option value="' + value.id + '">' +
                        value.district_title + '</option>');
                });
            },
        });
    });

    //fetch city for clientcontct


    $('#contactdist').on('change', function() {
        var dis_id_contact = this.value;
        $("#contactcity").html('');
        $.ajax({
            url: "{{url('fetchcity_contact')}}",
            type: "POST",
            data: {
                dis_id_cont: dis_id_contact,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',

            success: function(result3) {
                $('#contactcity').html('<option value="">Select City</option>');
                $.each(result3.city_contact, function(key, value) {
                    $("#contactcity").append('<option value="' + value.id +
                        '">' + value.name + '</option>');
                });
            },
        });
    });


});
</script> -->

 <script>
 $('#single_checkbox').click(function(){
     var door_no="{{session('client')['CLIENT_DRNO']}}";
     var stree_name="{{session('client')['CLIENT_STNAME']}}";
     var area="{{session('client')['CLIENT_AREA']}}";
     var state="{{session('client')['CLIENT_STATE']}}";
     var dist="{{ session('client')['CLIENT_DIST']}}";
     var city="{{session('client')['CLIENT_CITY']}}";
     var pin="{{session('client')['CLIENT_PINCODE']}}";



  
  $('#doorno').val(door_no);
  $('#streetname').val(stree_name);
  $('#area').val(area);
  $('#statenamecontact').val(state);
  $('#contactdist').val(dist);
  $('#contactcity').val(city);
  $('#pincode').val(pin);
});

</script> 

</x-admin-layout>