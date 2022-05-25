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
                            <li class="breadcrumb-item active">client
                            </li>
                            <li class="breadcrumb-item active">edit client
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
                            <form action="{{url('/update_client',$view->id)}}" method="post" enctype="multipart/form-data">
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
                                                                <input type="text" class="form-control"
                                                                    data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" id="name" name="fullname"
                                                                    value="{{$view->client_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Phone Number</label>
                                                                <input type="text" class="form-control"
                                                                    data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" id="phone" name="phone"
                                                                    value="{{$view->mobile}}">
                                                            </div>
                                                        </div>
                                                    </div>
    
    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Door Number</label>
                                                                <input type="text" class="form-control"
                                                                    data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" id="doorno" name="doorno"
                                                                    value="{{$view->door_no}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="issueinput4">Street Name</label>
                                                                <input type="text" class="form-control"
                                                                    data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" id="streetname" name="streetname"
                                                                    value="{{$view->street_name}}">
                                                            </div>
                                                        </div>
                                                    </div>
    
    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Area</label>
                                                                <input type="text" class="form-control"
                                                                    data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" id="area" name="area"
                                                                    value="{{$view->area_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">State</label>
                                                                <select class="select2 form-control" data-toggle="tooltip"
                                                                    data-trigger="hover" data-placement="top" name="State">
                                                                    <option>Please Select</option>
                                                                    @foreach($state_name as $loc)
                                                                    <option value="{{$loc->state_id}}"
                                                                        {{$loc->state_id == $view->state_id ? 'selected':''}}>
                                                                        {{$loc->state_title}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">District</label>
                                                                <select class="select2 form-control" data-toggle="tooltip"
                                                                    data-trigger="hover" data-placement="top"
                                                                    name="districtname">
                                                                    <option>Please Select</option>
                                                                    
                                                                    @foreach($district as $loc)
                                                                    <option value="{{$loc->id}}"
                                                                        {{$loc->id == $view->district_id ? 'selected':''}}>
                                                                        {{$loc->district_title}}</option>
                                                                    @endforeach
    
    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">City</label>
                                                                <select class="select2 form-control" data-toggle="tooltip"
                                                                    data-trigger="hover" data-placement="top"
                                                                    name="cityname">
                                                                    <option selected>Please Select</option>
                                                                     @foreach($city as $loc)
                                                                    <option value="{{$loc->id}}"
                                                                        {{$loc->id == $view->city_id ? 'selected':''}}>
                                                                        {{$loc->name}}</option>
                                                                    @endforeach
    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Pincode</label>
                                                                <input type="text" class="form-control"
                                                                    data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" id="pincode" name="pincode"
                                                                    value="{{$view->pincode}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">CRM</label>
                                                                    @php
                                                                    
                                                                    $test='';
                                                                    $test=json_decode($view->crm_id);
                                                                    $count=count($test);
    
                                                                    @endphp
                                                                <select class="select2 form-control" name="crm[]" multiple value="{{session()->has('client')?session('client')['CLIENT_CRM']:''}}">
                                                                    @php
                                                                        for($i=0;$i<$count;$i++){
                                                                    @endphp 
                                                                    
                                                                    @foreach ($crm_user as $crm1 )
                                                                    <option value="{{$crm1->id}}" {{$crm1->id == $test[$i] ? 'selected':''}}>{{$crm1->fname}}{{$crm1->lname}}
                                                                    </option>
                                                                    @endforeach
                                                                    
                                                                    @php
                                                                        }
                                                                    @endphp
                                                                    
                                                                    @error('crm[]')
                                                                    <div class="alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </select>
                                                            </div>
                                                        </div>
    
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Status</label>
                                                                <select class="form-control" data-toggle="tooltip"
                                                                    data-trigger="hover" data-placement="top" name="status">
                                                                    <option>    Please Select Status</option>
                                                                    <option value="1" @if ($view-> status=='1') selected
                                                                        @endif>Active
                                                                    </option>
    
                                                                    <option value="2" @if($view->status=='2')selected
                                                                        @endif>Inactive
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
    
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Logo</label>
                                                                <input type="file" class="form-control" name="client_logo">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img src="../clients/{{$view->logo}}" style="height: 95px;width: 89px;">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="">Remarks</label>
                                                                <textarea class="form-control" name="edit_remarks"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- client contact  form  start-->
    
                                            <div id="menu1" class="container tab-pane fade pd_0"><br>
                                                <div class="form-group mb-2 file-repeater">
                                                    
                                                    <div data-repeater-list="data">
                                                        @foreach($view2 as $contact)
                                                        <div data-repeater-item>

                                                            <div class="row mb-1">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">Contact Person </label>
                                                                        <input type="hidden" name="client_contact_id" value="{{$contact->id}}">
                                                                        <input type="text" class="form-control"
                                                                            name="contactname"
                                                                            value="{{$contact->contact_name}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">Contact Person Phone</label>
                                                                        <input type="text" class="form-control"
                                                                            name="contactphone"
                                                                            value="{{$contact->mobile}}">
                                                                    </div>
                                                                </div>
    
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Mail</label>
                                                                        <input type="text" class="form-control"
                                                                            name="contactmail" value="{{$contact->email}}">
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
                                                                        <input type="text" class="form-control"
                                                                            name="designation"
                                                                            value="{{$contact->designation}}">
                                                                    </div>
                                                                </div>
    
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Status</label>
                                                                        <select class="form-control" name="status">
                                                                            <option selected>Please Select Status</option>
                                                                            <option value="1" @if ($contact-> status=='1') selected
                                                                        @endif>Active
                                                                    </option>
    
                                                                    <option value="2" @if($contact->status=='2')selected
                                                                        @endif>Inactive
                                                                    </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
    
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Client Branch</label><br>
                                                                        <select class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" 
                                                                        name="client_branch">
    
                                                                            <option selected>Please Select</option>
                                                                            @foreach($location as $loc)
                                                                            <option value="{{$loc->id}}" {{$loc->id == $contact->client_branch ? 'selected':''}}>{{$loc->location}}</option>
                                                                            @endforeach
    
                                                                        </select>
                                                                    </div>
                                                                    <div>
    
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Corporate Address</label>
                                                                        <div class="skin skin-square">
                                                                            <input type="checkbox" value=""
                                                                                id="corporate_adres" name="corporate_address">
                                                                            <label for="">checked</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
    
    
    
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Door Number</label>
                                                                        <input type="text" class="form-control"
                                                                            name="doorno" value="{{$contact->door_no}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="issueinput4">Street Name</label>
                                                                        <input type="text" class="form-control"
                                                                            name="streetname" value="{{$contact->street_name}}">
                                                                    </div>
                                                                </div>
    
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Area</label>
                                                                        <input type="text" class="form-control"
                                                                            name="area" value="{{$contact->area_name}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">State</label><br>
                                                                        <select class="form-control" name="State"
                                                                            id="statenamecontact">
                                                                            <option>Select</option>
    
                                                                            @foreach($state_name as $loc)
                                                                            <option value="{{$loc->state_id}}"
                                                                                {{$loc->state_id == $contact->state_id ? 'selected':''}}>
                                                                                {{$loc->state_title}}</option>
                                                                            @endforeach
    
                                                                            </option>
                                                                        </select>
                                                                    </div>
    
                                                                </div>
    
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">District</label><br>
                                                                        <select class="form-control"
                                                                            name="districtname" id="contactdist">
                                                                            <option>Select</option>
    
                                                                            @foreach($district as $loc)
                                                                            <option value="{{$loc->id}}"
                                                                                {{$loc->id == $contact->district_id ? 'selected':''}}>
                                                                                {{$loc->district_title}}</option>
                                                                            @endforeach
    
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
    
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">City</label><br>
                                                                        <select class="form-control"
                                                                            name="cityname" id="contactcity">
                                                                            <option>Select</option>
    
                                                                                @foreach($city as $loc)
                                                                                <option value="{{$loc->id}}"
                                                                                    {{$loc->id == $contact->city_id ? 'selected':''}}>
                                                                                    {{$loc->name}}</option>
                                                                                @endforeach
    
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Pincode</label>
                                                                        <input type="text" class="form-control"
                                                                            name="pincode" value="{{$contact->pincode}}">
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
                                                <div class="form-actions">
                                                    <button type="submit" name="submit"
                                                        class="btn btn-primary">Update</button>
                                                    <button type="button" name="cancel"
                                                        class="btn btn-warning">Cancel</button>
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
        //for edit clientcontact district
        var sta_id = id;
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
        // for edit clientcontact city

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
        //end edit code
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
            placeholder: "Select a state",

        });
        $("#repeater-button").click(function() {

            $(".select2").select2({
                placeholder: "Select a state",

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



</x-admin-layout>