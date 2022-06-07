<x-admin-layout>
    <style>
        .select2 {
            width: 100% !important;
        }
    </style>
    <style>
        .pd_0 {
            padding: 0px;
        }

        .flx_wrp {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0px;
            padding-right: 0px;
        }

        .hide {
            display: none;
        }
    </style>
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">My Plans</h3><br>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">My Plans</a>
                        </li>
                        <li class="breadcrumb-item active">Edit My Plan
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!--<div class="content-header-right col-md-6 col-12">-->
        <!--	<div class="dropdown float-md-right">-->
        <!--		<button class="btn btn-danger  round btn-glow px-2">Actions</button>-->

        <!--	</div>-->
        <!--</div>-->
    </div>
    @foreach ($plan as $view)
    <div class="card">
        <div class="card-content collapse show">
            <div class="card-body">
                <form action="{{url('/update_plan',$view->id)}}" method="POST">
                    @csrf
                    <!-- Form wizard with icon tabs section start -->
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="">
                                <div class="row" style="margin-left:0px;margin-right:0px;">
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p><strong>Work Plan</strong></p>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="radio" id="input-radio-1" name="day_plan" value="1" {{ ($view->work_plan=="1")? "checked" : "" }} disabled>
                                                        <label for="input-radio-11">Current Day Plan</label>
                                                        <input type="radio" id="input-radio-2" name="day_plan" value="2" {{ ($view->work_plan=="2")? "checked" : "" }} disabled>
                                                        <label for="input-radio-11">Previous Day Plan</label>
                                                        <input type="radio" id="input-radio-3" name="day_plan" value="3" {{ ($view->work_plan=="3")? "checked" : "" }} disabled>
                                                        <label for="input-radio-11">Long Leave</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($view->work_plan == 3 )
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p><strong>Task Date</strong></p>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h4>From</h4>
                                                            <div class="input-group">
                                                                <input type="date" name="from_date" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h4>To</h4>
                                                            <div class="input-group">
                                                                <input type="date" name="to_date" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @elseif ($view->work_plan == 1 || $view->work_plan == 2)
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p><strong>Task Date</strong></p>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <input type="text" name="date" class="form-control" value="{{date('j F-Y',strtotime($view->task_date))}}" disabled>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div><br>
                                                        <p><strong>Session</strong></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group"><br>
                                                        <input type="radio" id="input-radio-4" name="work_time_period" value="Forenoon" {{ ($view->day_work_name=="Forenoon")? "checked" : "" }}>
                                                        <label for="input-radio-11">Forenoon</label>
                                                        <input type="radio" id="input-radio-5" name="work_time_period" value="Afternoon" {{ ($view->day_work_name=="Afternoon")? "checked" : "" }}>
                                                        <label for="input-radio-11">Afternoon</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
												<div class="col-md-3">
													<p><strong>Work Plan Type</strong></p>
												</div>
												<div class="col-md-9">
													<div class="form-group">
														<!--input type="radio" name="input-radio-3" id="input-radio-11">
                                        <label for="input-radio-11">Radio button</label-->
														<input type="radio" id="input-radio-6" onclick="show1();" name="plantype" value="Sourcing">
														<label for="input-radio-11">Sourcing</label>
														<input type="radio" id="input-radio-7" onclick="show2();" name="plantype" value="Others">
														<label for="input-radio-11">Others</label>
													</div>
												</div>
											</div>
                                            @endif
											<div class="col-md-4 mt_27">
												<!--<button type="button" data-repeater-delete-->
												<!--    class="btn btn-icon btn-danger mr-1"><i-->
												<!--        class="ft-x"></i></button>-->
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12 flx_wrp hide" id="div1">
												<div class="col-md-3">
													<p><strong>Client Name</strong></p>
												</div>
												<div class="col-md-9">
													<div class="form-group">
														<select class="form-control" id="client_name" name="clientname">
															<option value="">Select</option>
															@foreach ($client1 as $client2)
															<option value="{{$client2->id}}">{{$client2->client_name}}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="col-md-3">
													<p><strong>Position</strong></p>
												</div>
												<div class="col-md-9">
													<div class="form-group">
														<select class="form-control" id="position_name" name="positionname">
															
														</select>
													</div>
												</div>
											</div>
											<div class="row flx_wrp hide" id="div2">
												<div class="col-md-3">
													<p><strong>Options*</strong></p>
												</div>
												<div class="col-md-9">
													<div class="form-group">
														<select class="form-control" name="option">
															<option value="">Select</option>
															<option value="Client Meeting">Client Meeting</option>
															<option value="Internal Meeting">Internal Meeting</option>
															<option value="Internal Review">Internal Review</option>
															<option value="Internal Training">Internal Training</option>
															<option value="External Training">External Training</option>
															<option value="Events / Celebration">Events / Celebration</option>
															<option value="On Special Assignment">On Special Assignment</option>
															<option value="Unwell at Office">Unwell at Office</option>
															<option value="On Leave">On Leave</option>
															<option value="Holiday">Holiday</option>
															<option value="Weekly Off">Weekly Off</option>
															<option value="Others">Others</option>
														</select>
													</div>
												</div>


												<div class="col-md-3">
													<p><strong>Subject</strong></p>
												</div>
												<div class="col-md-9">
													<div class="form-group">
														<input type="text" class="form-control" name="subject" aria-invalid="false">
													</div>
												</div>
											</div>
										</div>
									</div>
                                    @if ($view->work_plan == 3)
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p><strong>Leave Type</strong></p>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <select class="form-control" name="leavetype">
                                                        <option>Select</option>
                                                        <option value="Need Based Leave">Need Based Leave</option>
                                                        <option value="privileged Leave">privileged Leave</option>
                                                        <option value="On Duty">On Duty</option>
                                                        <option value="Loss of Pay">Loss of Pay</option>
                                                        <option value="Maternity Leave">Maternity Leave</option>
                                                        <option value="Paternity Leave">Paternity Leave</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p><strong>Reason*</strong></p>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="reason"></textarea>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p><strong>Session*</strong></p>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="radio" id="input-radio-1" name="session" value="Full Day">
                                                        <label for="input-radio-11">Full Day</label>
                                                        <input type="radio" id="input-radio-2" name="session" value="Forenoon">
                                                        <label for="input-radio-11">Forenoon</label>
                                                        <input type="radio" id="input-radio-3" name="session" value="Afternoon">
                                                        <label for="input-radio-11">Afternoon</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                            <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="la la-check-square-o"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
		$(document).ready(function() {
			//initialize the show hide functuion
			$('#taskdate').hide();
			$('#taskdate1').hide();
			$('#session').hide();
			$('#session_type').hide();
			$('#sourcing').hide();

			// for long leave        
			$('#input-radio-3').on('click', function() {
				$('#taskdate').show();
				$('#taskdate1').show();
				$('#session').hide();
				$('#session_type').hide();
			})

			//current day plan
			$('#input-radio-1').on('click', function() {
				$('#taskdate').hide();
				$('#taskdate1').hide();
				$('#session').show();
				$('#session_type').show();
			})


			//previous day plan
			$('#input-radio-2').on('click', function() {
				$('#taskdate').hide();
				$('#taskdate1').hide();
				$('#session').show();
				$('#session_type').show();
			})

			function calculContoEco() {
				$i = 0;
				console.log($i);
				$i++;

			}

		});



		function show1() {
			document.getElementById('div1').style.display = 'flex';
			document.getElementById('div2').style.display = 'none';
		}

		function show2() {
			document.getElementById('div2').style.display = 'flex';
			document.getElementById('div1').style.display = 'none';
		}
	</script>
	<script>
		
	$(document).ready(function(){
		$('#client_name').on('change',function(){
			var client_name = this.value;
			$('#position_name').html('');
			$.ajax({
				url: "{{url('position_fetch_plan')}}",
                    type: "POST",
                    data: {
                        client_name: client_name,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
					success :function(result){
						$('#position_name').html('<option value="">Select Position</option>');
                        $.each(result.positionname, function(key, value) {
                            $("#position_name").append('<option value="' + value
                                .position_id + '">' +
                                value.job_title + '</option>');
                        });
					}

			});
			
		});

	});

	</script>
</x-admin-layout>