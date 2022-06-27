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
            <!--<div class="content-header-right col-md-6 col-12">-->
            <!--    <div class="dropdown float-md-right">-->
            <!--        <button class="btn btn-danger  round btn-glow px-2">Actions</button>-->
            <!--    </div>-->
            <!--</div>-->
        </div>


        <!-- Form wizard with icon tabs section start -->
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form class="form" action="clientinsert" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div id="box" class="col-md-12">
                                        <div class="card-header pl_0">
                                            <h4 class="card-title" id="basic-layout-tooltip">Client</h4>
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Client Name </label>
                                                    <input type="text" class="form-control" value="{{session()->has('client')?session('client')['CLIENT_FULLNAME']:''}}" name="clientname">
                                                    @error('clientname')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Phone Number</label>
                                                    <input type="text" class="form-control" value="{{session()->has('client')?session('client')['CLIENT_PHONE']:''}}" name="phone">
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
                                                    <input type="text" class="form-control" value="{{session()->has('client')?session('client')['CLIENT_DRNO']:''}}" name="doorno">
                                                    @error('doorno')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="issueinput4">Street Name</label>
                                                    <input type="text" class="form-control" value="{{session()->has('client')?session('client')['CLIENT_STNAME']:''}}" name="streetname">
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
                                                    <input type="text" class="form-control" id="area" name="area" value="{{session()->has('client')?session('client')['CLIENT_AREA']:''}}">
                                                    @error('area')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">State</label>
                                                    <select class="form-control select2" name="State" id="statename" value="{{session()->has('client')?session('client')['CLIENT_STATE']:''}}">
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
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">District</label>
                                                    <select class="form-control select2" id="distname" name="districtname" value="{{session()->has('client')?session('client')['CLIENT_DIST']:''}}">

                                                    </select>
                                                    @error('districtname')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">City</label>
                                                    <select class="form-control select2" name="cityname" id="city" value="{{session()->has('client')?session('client')['CLIENT_CITY']:''}}">
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
                                                    <input type="text" class="form-control" name="pincode" value="{{session()->has('client')?session('client')['CLIENT_PINCODE']:''}}">
                                                    @error('pincode')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">CRM</label>
                                                    
                                                    <select class="select2 form-control" name="crm[]" multiple value="{{session()->has('client')?session('client')['CLIENT_CRM']:''}}">
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
                                                    <select class="form-control" name="status" value="{{session()->has('client')?session('client')['CLIENT_STATUS']:''}}">
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
                                        <span><input type="submit" name="submit" class="btn btn-primary f_right" value="Next"></span>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

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



</x-admin-layout>