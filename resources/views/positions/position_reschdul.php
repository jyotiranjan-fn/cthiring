                                <form action="{{url('/reschedule_interview',$res_show ->id)}}" method='post'>
                                    @csrf
                                    <div class="modal fade bd-example-modal-lg" id="rescheduleinterview{{$res_show ->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header cnt223">
                                                    <h1 class="modal-title" id="exampleModalLongTitle">Reschedule
                                                        {{$res_show ->id}}
                                                        Interview
                                                    </h1>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#RID">Interview Details</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#RICclient">Interview
                                                                Confirmation to Clients</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#RICcandidate">Interview
                                                                Confirmation to Candidate</a>
                                                        </li>
                                                    </ul>
                                                        <input type="text" value="{{$res_show ->id}}" name="re_candidate_id" hidden>
                                                        <input type="text" value="{{$res_show ->position_id}}" name="re_pos_id" hidden>
                                                        <input type="text" value="{{$res_show ->client_id}}" name="re_client_id" hidden>
                                                    <div class="tab-content">
                                                        <div id="RID" class="tab-pane active pd_0">
                                                            <br>
                                                            <table class="table table-bordered wd_21 t_left">
                                                                <tr>
                                                                    <th class="pd_410">Client</th>
                                                                    <td class="pd_410"><input type="text" class="form-control" value="Tata Steel <Abraham Linkan> <prasant.edevlop@gmail.com>" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Cc</th>
                                                                    <td class="pd_410"><input type="text" class="form-control" placeholder="Add multiple emails separated by comma">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Candidate(s)
                                                                    </th>
                                                                    <td class="pd_410"><input type="text" class="form-control" name="re_cand_name_interview" value="{{$res_show->name}}" readonly></td>
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
                                                                            @if($res_show->cv_status=='4'||'5')
                                                                            <li class="d_inblk li_rdo">
                                                                                <label class="form-check-label" for="radio1">
                                                                                    <input type="radio" class="form-check-input" id="first" name="reschedule_interview_level" value="1">First
                                                                                    Interview
                                                                                </label>
                                                                            </li>
                                                                            @endif
                                                                            @if($res_show->cv_status<=9) 
                                                                            <li class="d_inblk li_rdo">
                                                                                <label class="form-check-label" for="radio2">
                                                                                    <input type="radio" class="form-check-input" id="second" name="reschedule_interview_level" value="2">Second
                                                                                    Interview
                                                                                </label>
                                                                            </li>
                                                                            @endif
                                                                            @if($res_show->cv_status<=13) 
                                                                            <li class="d_inblk li_rdo">
                                                                                <label class="form-check-label" for="radio3">
                                                                                    <input type="radio" class="form-check-input" id="third" name="reschedule_interview_level" value="3">Third
                                                                                    Interview
                                                                                </label>
                                                                            </li>
                                                                            @endif
                                                                            @if($res_show->cv_status<=17) 
                                                                            <li class="d_inblk li_rdo">
                                                                                <label class="form-check-label" for="radio4">
                                                                                    <input type="radio" class="form-check-input" id="fourth" name="reschedule_interview_level" value="4">Fourth
                                                                                        Interview
                                                                                </label>
                                                                            </li>
                                                                            @endif
                                                                            @if($res_show->cv_status<=21) 
                                                                            <li class="d_inblk li_rdo">
                                                                                <label class="form-check-label" for="radio5">
                                                                                    <input type="radio" class="form-check-input" id="final" name="reschedule_interview_level" value="5">Final
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
                                                                                <label class="form-check-label" for="radio6">
                                                                                    <a href="#!" class="show-btn">
                                                                                        <input type="radio" class="form-check-input" id="radio6" name="re_interview_mode" value="f2f">
                                                                                    </a>
                                                                                    Face to Face
                                                                                </label>
                                                                            </li>
                                                                            <li class="d_inblk li_rdo">
                                                                                <label class="form-check-label" for="radio7">
                                                                                    <a href="#!" class="hide-btn">
                                                                                        <input type="radio" class="form-check-input" id="radio7" name="re_interview_mode" value="telecon">
                                                                                    </a>
                                                                                    TeleCon
                                                                                </label>
                                                                            </li>
                                                                            <li class="d_inblk li_rdo">
                                                                                <label class="form-check-label" for="radio8">
                                                                                    <a href="#!" class="hide-btn">
                                                                                        <input type="radio" class="form-check-input" id="radio8" name="re_interview_mode" value="vc">
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
                                                                        <select  id="get_address1" name="re_interview_venue_adrs" class="form-control">
                                                                            <option selected>Choose
                                                                                Interview Venue
                                                                                Address</option>
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
                                                                                <input type="datetime-local" class="form-control" id="" name="re_interview_date">
                                                                            </div>
                                                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                                                <select class="form-control" id="" name="re_interview_time_period">
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
                                                                    <th class="pd_410">Interview
                                                                        Venue*</th>
                                                                        <td class="pd_410" id="interview1" name="re_interview_venue">
                                                                        </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Choose Spoc
                                                                    </th>
                                                                    <td class="pd_410">
                                                                        <select class="form-control" id="spoc1" name="re_spoc_interview">
                                                                                <option>Choose Spoc</option>
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
                                                                                <input type="text" class="form-control" id="re_contact_name" name="re_client_contact_name" placeholder="Contact Person Name">
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <input type="text" class="form-control" id="re_contact_phone" name="re_client_contact_number" placeholder="Contact Mobile No.">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Additional
                                                                        Info</th>
                                                                    <td class="pd_410"><textarea name="re_additional_info" class="form-control" id="" cols="63" rows="2"></textarea>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div id="RICclient" class="tab-pane">
                                                            <br>
                                                            <table class="table table-bordered wd_16 t_left">
                                                                <tr>
                                                                    <th class="pd_410">Client</th>
                                                                    <td class="pd_410"><input type="text" class="form-control" value="Tata Steel <Abraham Linkan> <prasant.edevlop@gmail.com>" readonly></td>
                                                                </tr>

                                                                <tr>
                                                                    <th class="pd_410">Subject*</th>
                                                                    <td class="pd_410"><input type="text" class="form-control" value="Interview Schedule of Candidates for the Position of Hacking">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="pd_410">Message*</th>
                                                                    <td class="pd_410">
                                                                        <textarea name="editor4" id="editor4" rows="10" cols="80" value=""></textarea>
                                                                        <script>
                                                                            CKEDITOR.replace('editor4');
                                                                        </script>
                                                                    </td>
                                                                </tr>

                                                            </table>
                                                        </div>
                                                        <div id="RICcandidate" class="tab-pane"><br>
                                                            <div class="">
                                                                <table class="table table-bordered wd_16 t_left w_100">
                                                                    <tr>
                                                                        <th class="pd_410">
                                                                            Candidate(s)
                                                                        </th>
                                                                        <td class="pd_410"><input type="text" class="form-control" value="{{$res_show->name}}" readonly>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th class="pd_410">Subject*
                                                                        </th>
                                                                        <td class="pd_410"><input type="text" class="form-control" value="Interview Schedule for the Position of Hacking">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Message*
                                                                        </th>
                                                                        <td class="pd_410">
                                                                            <textarea name="editor5" id="editor5" rows="10" cols="80" value=""></textarea>
                                                                            <script>
                                                                                CKEDITOR.replace(
                                                                                    'editor5');
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
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>




                                    <script>
                $("#get_address1").on('change', function() {
                    var ab = $(this).val();

                    if (ab == 1) {
                        $.ajax({
                            url: "{{url('getaddtess')}}",
                            type: "POST",
                            data: {
                                resume_id: '{{$res_show ->id}}',
                                _token: '{{csrf_token()}}'
                            },
                            dataType: 'json',

                            success: function(result) {
                                $('#interview1').html('<textarea name="remarks"' +
                                    'class="form-control" id="interview" cols="63"' +
                                    'rows="2">' + result[0][0].client_name +
                                    '\nAddress: ' + result[0][0].door_no + ', ' + result[0][0]
                                    .street_name + ', ' + result[0][0].area_name +
                                    '\nCity/Town: ' + result[1][0].name + '\nDistricts: ' + result[
                                        2][0].district_title + '\n' + result[3][0].state_title +
                                    ' ,' + result[0][0].pincode + '</textarea>');

                            },
                        });
                    } else {
                        $('#interview1').html('<textarea name="remarks"' +
                            'class="form-control" id="interview1" cols="63"' +
                            'rows="2"></textarea>');
                    }

                });

                $("#spoc1").on('change', function() {
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
                            $('#re_contact_name').val(spoc_details[0].contact_name);
                            $('#re_contact_phone').val(spoc_details[0].mobile);

                        },
                    });


                });
            </script>



Reschedule
reschedule