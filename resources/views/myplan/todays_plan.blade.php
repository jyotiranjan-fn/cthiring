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
						<li class="breadcrumb-item active">Create My Plan
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
	<div class="card">
		<div class="card-content collapse show">
			<div class="card-body">
				<form action="{{url('/todays_plan_insert')}}" method="POST">
					@csrf
					<!-- Form wizard with icon tabs section start -->
					<div class="row match-height">
						<div class="col-md-12">
							<div class="">
								<div class="row" style="margin-left:0px;margin-right:0px;">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12 flx_wrp">
												<div class="col-md-3">
													<p><strong>Work Plan</strong></p>
												</div>
												<div class="col-md-9">
													<div class="form-group">
														@php
														$myplan = App\Models\myplan::where('user_id',session('USER_ID'))->orderBy('id', 'DESC')->first();
														@endphp

														@php
														$leave = App\Models\Leave::where('user_id',session('USER_ID'))->orderBy('id', 'DESC')->first();
														@endphp

														@if ($myplan != null)

														@php
														$ldate = date('Y-m-d');
														$yesterday = date("Y-m-d", strtotime( '-1 days' ) );
														$create = date('Y-m-d',strtotime($myplan->task_date));
														$leave = $leave->leave_to;
														@endphp

														@if ($create == $yesterday || $leave == $yesterday)
														<input type="radio" id="input-radio-1" name="day_plan" value="1">
														@else
														<input type="radio" id="input-radio-1" name="day_plan" value="1" disabled>
														@endif

														@endif
														
														@if ($myplan == null)
														<input type="radio" id="input-radio-1" name="day_plan" value="1">
														@endif
														<label for="input-radio-11">Current Day Plan</label>

														<input type="radio" id="input-radio-2" name="day_plan" value="2">
														<label for="input-radio-11">Previous Day Plan</label>

														<input type="radio" id="input-radio-3" name="day_plan" value="3">
														<label for="input-radio-11">Long Leave</label>
													</div>
												</div>
											</div>
											<div class="col-md-12 flx_wrp" id="taskdate">
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
											<div class="col-md-12 flx_wrp" id="session">
												<div class="col-md-3">
													<p><strong>Task Date</strong></p>
												</div>
												<div class="col-md-9">
													<div class="input-group">
													@if ($myplan != NULL)														
														@if ($create == $yesterday)
														<input type="date" id="demo" name="date" class="form-control">
														@else
														<input type="date" id="demo1" name="date" class="form-control">
														@endif
													@else
														<input type="date" id="demo" name="date" class="form-control">
													@endif
													</div>
												</div>

												<div class="col-md-3">
													<div><br>
														<p><strong>Session</strong></p>
													</div>
												</div>
												<div class="col-md-9">
													<div class="form-group"><br>
														<input type="radio" id="input-radio-4" name="work_time_period" value="Forenoon">
														<label for="input-radio-11">Forenoon</label>
														<input type="radio" id="input-radio-5" name="work_time_period" value="Afternoon">
														<label for="input-radio-11">Afternoon</label>
													</div>
												</div>
											</div>
											<div class="col-md-12 flx_wrp" id="session_type">
												<div class="col-md-3">
													<p><strong>Work Plan Type</strong></p>
												</div>
												<div class="col-md-9">
													<div class="form-group">
													@if ($myplan != NULL)														
														@if ($create == $yesterday || $leave == $yesterday)
														<input type="radio" id="input-radio-6" onclick="show1();" name="plantype" value="Sourcing">
														@else
														<input type="radio" id="input-radio-6" onclick="show1();" name="plantype" value="Sourcing" disabled>
														@endif
													@else
														<input type="radio" id="input-radio-6" onclick="show1();" name="plantype" value="Sourcing">
													@endif	
														<label for="input-radio-11">Sourcing</label>
														<input type="radio" id="input-radio-7" onclick="show2();" name="plantype" value="Others">
														<label for="input-radio-11">Others</label>
													</div>
												</div>
											</div>
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
											<div class="col-md-12 flx_wrp hide" id="div2">
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
									<div class="col-md-6" id="taskdate1">
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
										<div id="div2">
											<div class="row">
												<div class="col-md-3">
													<p><strong>Reason*</strong></p>
												</div>
												<div class="col-md-9">
													<textarea class="form-control" name="reason"></textarea>
												</div>
												<input type="text" id="input-radio-1" name="session" value="Full Day">
											</div>
										</div><br>
									</div>
								</div>
							</div>
						</div>
					</div>
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

	<div class="col-md-12">
		<div class="card">
			<div class="card-header">

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
				<div class="card-body pd_lr_body">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Date</th>
								<th>Session</th>
								<th>Work Type</th>
								<th>Work Description</th>
								<th>Work Description2</th>
							</tr>
						</thead>
						<tbody>
							@foreach($student as $plan)
							@php
							$dta=date('Y-m-d', strtotime($plan->created_at));
							$date = date('Y-m-d', time());
							@endphp

							@php
							$date = date('Y-m-d', time());
							@endphp
							@if($dta==$date)
							<tr>
								<td><span class="badge badge-default badge-danger">{{date('j F-Y', strtotime($plan->task_date))}}</span></td>
								<td>{{$plan->day_work_name}}</td>
								<td>{{$plan->work_plan_type}}</td>
								@if(!$plan->client_name==null)
								<td>{{$plan->plan2->client_name}}</td>
								@else
								<td>{{$plan->others_option}}</td>
								@endif

								@if(!$plan->position_id==null)
								<td>{{$plan->plan->job_title}}</td>
								@else
								<td>{{$plan->subject}}</td>
								@endif
							</tr>
							@else

							<tr></tr>
							@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
	<!-- current calender date disable -->
	<script>
		var todayDate = new Date();

		var month = todayDate.getMonth() + 1; // current month

		var year = todayDate.getUTCFullYear(); //current year

		var tdate = todayDate.getDate(); //current date 

		if (month < 10) {

			month = "0" + month //'0' + 4 = 04

		}

		if (tdate < 10) {

			tdate = "0" + tdate;

		}

		var minDate = year + "-" + month + "-" + tdate;

		document.getElementById("demo").setAttribute("min", minDate);

		console.log(maxDate);
	</script>
	<!-- current calender date disable -->

	<!-- previous calender date disable -->
	<script>
		var todayDate = new Date();

		var month = todayDate.getMonth() + 1; // current month

		var year = todayDate.getUTCFullYear(); //current year

		var tdate = todayDate.getDate() - 1; //current date 

		if (month < 10) {

			month = "0" + month //'0' + 4 = 04

		}

		if (tdate < 10) {

			tdate = "0" + tdate;

		}

		var maxDate = year + "-" + month + "-" + tdate;

		document.getElementById("demo1").setAttribute("max", maxDate);

		console.log(maxDate);
	</script>
	<!-- previous calender date disable -->
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
		$(document).ready(function() {
			$('#client_name').on('change', function() {
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
					success: function(result) {
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