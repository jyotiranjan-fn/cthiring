                                    <!-- scheduleinterview form start -->
                                    <div class="modal fade bd-example-modal-lg" id="scheduleinterview{{$res_show ->id}}"
                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header cnt223">
                                                    <h1 class="modal-title" id="exampleModalLongTitle">Schedule
                                                        Interview </h1>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <!-- interview schedule form start  -->
                                             <form action="{{url('/schedule_interview',$res_show ->id)}}"
                                                    method='post'>
                                                    @csrf
                                                    <div class="modal-body">


                                                        <input type="text" value="{{$res_show ->id}}" name="candidate_id"
                                                            hidden>
                                                        <input type="text" value="{{$res_show ->position_id}}" name="pos_id"
                                                            hidden>
                                                        <input type="text" value="{{$res_show ->client_id}}"
                                                            name="client_id" hidden>


                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab"
                                                                    href="#ID">Interview Details</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab"
                                                                    href="#ICclient">Interview
                                                                    Confirmation to Clients</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab"
                                                                    href="#ICcandidate">Interview
                                                                    Confirmation to Candidate</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div id="ID" class="tab-pane active pd_0">
                                                                <br>
                                                                <table class="table table-bordered wd_21 t_left">
                                                                    <tr>
                                                                        <th class="pd_410">Client</th>
                                                                            <td class="pd_410">
                                                                              <input type="text"
                                                                                class="form-control"
                                                                                value="{{optional ($view->client_na)->client_name}}<{{optional ($view->pos_client_cont)->contact_name}}> <{{optional ($view->pos_client_cont)->email}}>"
                                                                                name="client_data_interview"
                                                                                readonly>
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Cc</th>
                                                                        <td class="pd_410"><input type="text"
                                                                                class="form-control" name="gmail_name_cc"
                                                                                placeholder="Add multiple emails separated by comma">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th class="pd_410">Candidate(s)
                                                                        </th>
                                                                        <td class="pd_410"><input type="text"
                                                                                class="form-control" name="cand_name_interview"
                                                                                value="{{$res_show->name}}" readonly>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Interview
                                                                            Level*</th>
                                                                        <td class="pd_410">
                                                                            <ul>
                                                                                @if($res_show->cv_status==2)
                                                                                <li class="d_inblk li_rdo">
                                                                                    <label class="form-check-label"
                                                                                        for="radio1">
                                                                                        <input type="radio"
                                                                                            class="form-check-input"
                                                                                            id="first"
                                                                                            name="interview_level"
                                                                                            value="1">First
                                                                                        Interview
                                                                                    </label>
                                                                                </li>
                                                                                @endif
                                                                                @if($res_show->cv_status<=4 ) <li
                                                                                    class="d_inblk li_rdo">
                                                                                    <label class="form-check-label"
                                                                                        for="radio2">
                                                                                        <input type="radio"
                                                                                            class="form-check-input"
                                                                                            id="first"
                                                                                            name="interview_level"
                                                                                            value="2">Second
                                                                                        Interview
                                                                                    </label>
                                                                                    </li>
                                                                                    @endif
                                                                                    @if($res_show->cv_status<=5) <li
                                                                                        class="d_inblk li_rdo">
                                                                                        <label class="form-check-label"
                                                                                            for="radio3">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                id="first"
                                                                                                name="interview_level"
                                                                                                value="3">Third
                                                                                            Interview
                                                                                        </label>
                                                                                        </li>
                                                                                        @endif
                                                                                        @if($res_show->cv_status<=6) <li
                                                                                            class="d_inblk li_rdo">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="radio4">
                                                                                                <input type="radio"
                                                                                                    class="form-check-input"
                                                                                                    id="first"
                                                                                                    name="interview_level"
                                                                                                    value="4">Fourth
                                                                                                Interview
                                                                                            </label>
                                                                                            </li>
                                                                                            @endif
                                                                                            @if($res_show->cv_status<=7)
                                                                                                <li
                                                                                                class="d_inblk li_rdo">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="radio5">
                                                                                                    <input type="radio"
                                                                                                        class="form-check-input"
                                                                                                        id="first"
                                                                                                        name="interview_level"
                                                                                                        value="5">Final
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
                                                                                    <label class="form-check-label"
                                                                                        for="radio6">
                                                                                        <a href="#!" class="show-btn">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                id="f2f"
                                                                                                name="interview_mode"
                                                                                                value="Face to Face">
                                                                                        </a>
                                                                                        Face to Face
                                                                                    </label>
                                                                                </li>
                                                                                <li class="d_inblk li_rdo">
                                                                                    <label class="form-check-label"
                                                                                        for="radio7">
                                                                                        <a href="#!" class="hide-btn">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                id="telecon"
                                                                                                name="interview_mode"
                                                                                                value="telecon">
                                                                                        </a>
                                                                                        TeleCon
                                                                                    </label>
                                                                                </li>
                                                                                <li class="d_inblk li_rdo">
                                                                                    <label class="form-check-label"
                                                                                        for="radio8">
                                                                                        <a href="#!" class="hide-btn">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                id="vc"
                                                                                                name="interview_mode"
                                                                                                value="vc">
                                                                                        </a>
                                                                                        Video Conference
                                                                                    </label>
                                                                                </li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="box">
                                                                        <th class="pd_410">Interview Venue Address </th>
                                                                         
                                                                        <td class="pd_410">
                                                                            <select class="form-control"
                                                                                id="get_address" name="interview_venue_adrs">
                                                                                <option value="0" selected>Choose Interview Venue 
                                                                                    Address                                                                                                                      
                                                                                    </option>
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
                                                                                <div
                                                                                    class="col-md-8 col-sm-8 col-xs-12">
                                                                                    <input type="datetime-local"
                                                                                        class="form-control" id=""
                                                                                        name="interview_date">
                                                                                </div>
                                                                                <div
                                                                                    class="col-md-4 col-sm-4 col-xs-12">
                                                                                    <select class="form-control" id=""
                                                                                        name="interview_time_period">
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
                                                                        <td class="pd_410" id="interview" name="interview_venue">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Choose Spoc
                                                                        </th>
                                                                        <td class="pd_410">
                                                                            @php
                                                                            $get_client_id=APP\Models\client::where('id',$res_show->client_id)->get();
                                                                            $get_spoc=APP\Models\ClientContact::where('client_id',$get_client_id[0]->id)->get();

                                                                            @endphp

                                                                            <select class="form-control" id="spoc"
                                                                                name="spoc_interview">

                                                                                <option>Choose Spoc
                                                                                </option>
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
                                                                                <div
                                                                                    class="col-md-6 col-sm-6 col-xs-12">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="contact_name" name="client_contact_name"
                                                                                        placeholder="Contact Person Name">
                                                                                </div>
                                                                                <div
                                                                                    class="col-md-6 col-sm-6 col-xs-12">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="contact_phone" name="client_contact_number"
                                                                                        placeholder="Contact Mobile No.">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Additional
                                                                            Info</th>
                                                                        <td class="pd_410"><textarea name="additional_info"
                                                                                class="form-control" id="" cols="63"
                                                                                rows="2"></textarea>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!-- 2nd tab start for Schedule Interview form -->
                                                            <div id="ICclient" class="tab-pane fade">
                                                                <br>
                                                                <table class="table table-bordered wd_16 t_left">
                                                                    <tr>
                                                                        <th class="pd_410">Client</th>
                                                                        <td class="pd_410"><input type="text"
                                                                                class="form-control" name="client_name_interview"
                                                                                value="{{optional ($view->client_na)->client_name}}<{{optional ($view->pos_client_cont)->contact_name}}> <{{optional ($view->pos_client_cont)->email}}>"
                                                                                readonly></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th class="pd_410">Subject*</th>
                                                                        <td class="pd_410"><input type="text"
                                                                                class="form-control" name="client_subject_interview"
                                                                                value="Interview Schedule of Candidates for the Position of {{$view->job_title}}">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        @php
                                                                        $get_crm_name=APP\Models\User::where('id',session('USER_ID'))->get()
                                                                        @endphp

                                                                        <th class="pd_410">Message*</th>
                                                                        @foreach($get_crm_name as $crm_details)
                                                                        <td class="pd_410">
                                                                            <textarea name="second_msg_interview" id="editor2"
                                                                                rows="10" cols="80"
                                                                                value=""><p>Dear {{($view->pos_client_cont)->contact_name}},<br /><br />Greetings from {{$crm_details->fname}} {{$crm_details->lname}}<br /><br />In continuation to our telephonic discussions, I have lined-up the shortlisted candidate(s) for the interview(s) as per the following schedule.<br /><br />POSITION TITLE: {{$view->job_title }}<br /><br />{{$res_show ->name}}<br /><br />Trust this schedule is fine. Please do let me know if there requires any further information about the candidate(s) or the schedule.<br /><br />{{$crm_details->signature}}</p></textarea>
                                                                            <script>
                                                                            CKEDITOR.replace('editor2');
                                                                            </script>
                                                                        </td>
                                                                        @endforeach
                                                                    </tr>

                                                                </table>
                                                            </div>
                                                            <!-- 3rd tab form schudel interview form -->                                 
                                                            <div id="ICcandidate" class="tab-pane">
                                                                <br>

                                                                <!-- <div id="nights">hi</div> -->


                                                                <table class="table table-bordered wd_16 t_left">
                                                                    <tr>
                                                                        <th class="pd_410">Candidate(s)
                                                                        </th>
                                                                        <td class="pd_410"><input type="text"
                                                                                class="form-control" name="third_candidate_interview"
                                                                                value="{{$res_show->name}}" readonly>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th class="pd_410">Subject*</th>
                                                                        <td class="pd_410"><input type="text"
                                                                                class="form-control" name="third_subject_interview"
                                                                                value="Interview Schedule for the Position of {{$view->job_title}}">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="pd_410">Message*</th>
                                                                        <td class="pd_410">
                                                                            <textarea name="editor3" id="editor3"
                                                                                rows="10" cols="80" name="third_msg_interview"
                                                                                value=""><p>Dear&nbsp;{{$res_show->name}}<br /><br /><strong>Greetings from {{($view->pos_client_cont)->contact_name}}&nbsp;</strong><br /><br />In continuation to our telephonic discussions, I am confirming your interview schedule with our client as below:</p>
                                                                                        <p>&nbsp;</p>
                                                                                        <table style="width: 500px; border-collapse: collapse; float: left; border:0px;"  cellspacing="4" cellpadding="4">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">COMPANY NAME</td>
                                                                                        <td style="width: 287.783px;">{{($view->client_na)->client_name}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">POSITION TITLE</td>
                                                                                        <td style="width: 287.783px;">{{$view->job_title }}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Interview Level</td>
                                                                                        <td style="width: 287.783px;">[interview_level]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Interview Date</td>
                                                                                        <td style="width: 287.783px;">[interview_date]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Interview Time</td>
                                                                                        <td style="width: 287.783px;">[interview_time]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Mode of Interview</td>
                                                                                        <td style="width: 287.783px;">[interview_mode]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Venue</td>
                                                                                        <td style="width: 287.783px;" id="nights"><span id="nights"></span>[]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Contact Person</td>
                                                                                        <td style="width: 287.783px;">[interview_contact_person]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Contact No.</td>
                                                                                        <td style="width: 287.783px;">[interview_contact_no]</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td style="width: 193.217px;">Additional Info</td>
                                                                                        <td style="width: 287.783px;">[interview_additional]</td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                        </table>

                                                                                        <p><br />Trust this schedule is fine. Request your confirmation on the receipt of the mail and also your confirmation, through a reply mail, for attending the interview as per the schedule give above in this mail.<br />Please do carry all relevant documents as needed for the interview.<br /><br />Also, do let me know if there requires any further information about the interviewing process or the schedule. &nbsp;For more details about the company do refer to their website [website]<br /><br />Wish you all the best! Thanks.<br />Warm Regards<br /><br />[signature]</p></textarea>
                                                                                            <script>
                                                                                            CKEDITOR.replace('editor3');
                                                                                            </script>
                                                                        </td>
                                                                    </tr>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end scheduleinterview form -->


                                    <!-- Form wizard with icon tabs section end -->
            <script>
            $("#get_address").on('change', function() {
                var ab = $(this).val();
                var resume_id= $('#resume_id_ajax').val();
                if (ab == 1) {
                    $.ajax({
                        url: "{{url('getaddtess')}}",
                        type: "POST",
                        data: {
                            resume_id: resume_id,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',

                        success: function(result) {
                            $('#interview').html('<textarea name="interview_venue"' +
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
                    $('#interview').html('<textarea name="remarks"' +
                        'class="form-control" id="interview" cols="63"' +
                        'rows="2"></textarea>');
                }

            });

            $("#spoc").on('change', function() {
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
                        $('#contact_name').val(spoc_details[0].contact_name);
                        $('#contact_phone').val(spoc_details[0].mobile);

                    },
                });


            });
            </script>
            <script>
                
                $('input[name="interview_level"]:checked').on('click',function(){
                    var interview_level=$(this).val();
                    alert(interview_level);
                });
            </script>