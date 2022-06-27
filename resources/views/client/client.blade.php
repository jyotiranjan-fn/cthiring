<x-admin-layout>
<style>
body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
    margin-left: 260px;
}
</style>

    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">client</h3><br>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Settings</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Branch</a>
                        </li>
                        <li class="breadcrumb-item active">client
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        
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
                    <div class="card-body">
                        <form action="clientinsert" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home">Client</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu1">Client Contact</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    
                                        <div id="home" class="container tab-pane active pd_0"><br>
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Client Name </label>
                                                            <input type="text" class="form-control" value="" name="clientname">
                                                            @error('clientname')
                                                            <div class="alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Phone Number</label>
                                                            <input type="text" class="form-control" value="" name="phone">
                                                            @error('phone')
                                                            <div class="alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Door Number</label>
                                                            <input type="text" class="form-control" value="" id="doorno" name="doorno">
                                                            @error('doorno')
                                                            <div class="alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="issueinput4">Street Name</label>
                                                            <input type="text" class="form-control" value=""id="streetname" name="streetname">
                                                            @error('streetname')
                                                            <div class="alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Area</label>
                                                            <input type="text" class="form-control" id="area" name="area" value="">
                                                            @error('area')
                                                            <div class="alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">State</label>
                                                            <select class="form-control select2" name="State" id="statename" value="">
                                                                <option>Select</option>
                                                                @foreach ($state_name->sortBy('state_title') as $st_name )
                                                                <option value="{{$st_name->state_id }}">
                                                                    {{$st_name->state_title }}
                                                                </option>
                                                                @endforeach
                                                                @error('State')
                                                                <div class="alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="">District</label>
                                                            <select class="form-control select2" id="distname" name="districtname" value="">

                                                            </select>
                                                            @error('districtname')
                                                            <div class="alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">City</label>
                                                            <select class="form-control select2" name="cityname" id="city" value="">
                                                            </select>
                                                            @error('cityname')
                                                            <div class="alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Pincode</label>
                                                            <input type="text" class="form-control" name="pincode" value="" id="pincode">
                                                            @error('pincode')
                                                            <div class="alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">CRM</label>
                                                            <select class="select2 form-control" name="crm[]" multiple value="">
                                                                @foreach ($crm_user as $crm1 )
                                                                <option value="{{$crm1->id}}">{{$crm1->fname}}{{$crm1->lname}}
                                                                </option>
                                                                @endforeach
                                                                @error('crm[]')
                                                                <div class="alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </select>
                                                        </div>  

                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Status</label>
                                                            <select class="form-control" name="status" value="">
                                                                <option selected>Please Select Status</option>
                                                                <option value="1">Active</option>
                                                                <option value="2">Inactive</option>
                                                            </select>
                                                            @error('status')
                                                            <div class="alert-danger">{{ $message }}</div>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Logo</label>
                                                            <input type="file" class="form-control" name="client_logo">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- client contact  form  start-->

                                        <div id="menu1" class="container tab-pane fade pd_0"><br>
                                            <div class="form-group mb-2 file-repeater">
                                                
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
                                                            <!-- <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Client Primary Spoc</label>
                                                                    <div class="skin skin-square">
                                                                        <input type="checkbox" 
                                                                            id="single_checkbox1" name="client_contact_primary_spoc"
                                                                            value="checked">
                                                                        <label for="single_checkbox1">checked</label>
                                                                    </div>
                                                                </div>
                                                            </div> -->
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
                                                                    <select class="form-control" name="clientbranch">
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
                                                                            name="checkbox" onclick="myFunction()">
                                                                        <label for="">checked
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Door Number</label>
                                                                    <input type="text" class="form-control" name="doorno" id="doornos">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="issueinput4">Street Name</label>
                                                                    <input type="text" class="form-control" name="streetname" id="streetnames">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Area</label>
                                                                    <input type="text" class="form-control" name="area" id="contactarea">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">State</label>
                                                                    <select class="form-control" name="State"
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
                                                                    <select class="form-control" name="districtname"
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
                                                                    <select class="form-control" name="cityname"
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
                                                            <div class="col-md-4">
                                                                
                                                                    <div class="form-group">
                                                                        <label for="">Pincode</label>
                                                                        <input type="text" class="form-control" name="pincode" id="pincode_contact">
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
                                <!-- Tab panes -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form wizard with icon tabs section end -->
    </div>


    <script>
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
    </script>
    <script>
        $(document).ready(function() {

            $('.repeater').repeater({

            });
            $(".select2").select2({
                placeholder: "Select",

            });
            $("#repeater-button").click(function() {

                $(".select2").select2({
                    placeholder: "Select",

                });

                $("#statenamecontact").trigger({
                    type: 'select2:select',
                    ajax: {
                        url: "google"
                    }


                });
            });
        });
    </script> 

    <!-- <script>
        $('#single_checkbox').click(function(){
            var door_no= document.getElementById('doorno').value;
           //alert(door_no);
            var stree_name= document.getElementById('streetname').value;
            var area= document.getElementById('area').value;
            var state= document.getElementById('statename').value;
            var dist= document.getElementById('distname').value;
            var city= document.getElementById('city').value;
            var pin= document.getElementById('pincode').value;



            $('#doorno')=val(door_no); 

            //$('#doorno').val(door_no);
            
            $('#streetname').val(stree_name);
            $('#area').val(area);
            $('#statenamecontact').val(state);
            $('#contactdist').val(dist);
            $('#contactcity').val(city);
            $('#pincode').val(pin);
        });

    </script>  -->

    <script> 
    function myFunction() {
    var checkBox = document.getElementById("single_checkbox");  
    var door_no = document.getElementById("doorno");
    var street_name = document.getElementById("streetname");
    var client_area = document.getElementById("area");
    var client_statename = document.getElementById("statename");
    var client_dist = document.getElementById("distname");
    var client_city = document.getElementById("city");
    var client_pincode = document.getElementById("pincode");


    var dr_number = document.getElementById("doornos");
    var contact_street = document.getElementById("streetnames");
    var contact_area = document.getElementById("contactarea");
    var contact_state = document.getElementById("statenamecontact");
    var contact_dist = document.getElementById("contactdist");
    var contact_city = document.getElementById("contactcity");
    var contact_pincode = document.getElementById("pincode_contact");

    if (checkBox.checked == true){
          dr_number.value=door_no.value; 
          contact_street.value=street_name.value;
          contact_area.value=client_area.value;
          
          contact_state.value=client_statename.value;
          contact_dist.value=client_dist.value;
          contact_city.value=client_city.value;
          contact_pincode.value=client_pincode.value;

    } else {
          dr_number.value="";
          contact_street.value="";
          contact_area.value="";
          contact_state.value="";
          contact_dist.value="";
          contact_city.value="";
          contact_pincode.value="";
    }
  }
  
    </script> 



</x-admin-layout>