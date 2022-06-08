<!Doctype html>
<html>
	<head>
		<title>Position Create</title>
	</head>
	<body>
		<div style="width:744px;background-color: #f2f2f2;padding-top: 12px;padding-bottom: 15px;">
			<table style="width: 700px;margin-right: auto;margin-left: auto;">
				<tr>
					<td colspan="2" style="background-color: #f2f2f2;text-align: center;border-top-left-radius: 3px;border-top-right-radius: 3px;">
						<img src="https://ct-hiring.mobbsr.in/assets/images/am.jpg" style="max-width:238px;margin-left: 6px;margin-bottom: 13px;">
					</td>
				</tr>
			</table>
			<table style="width: 700px;margin-right: auto;margin-left: auto;position: relative;top: -4px;background-color: #f9f9f9;padding-bottom: 16px;">
				<tr>
					<td colspan="2">
                        @php
                            $l1 = App\Models\User::where('id',$level1)->get();
                        @endphp
						<p style="font-family: verdana;text-align: left;font-size: 14px;margin: 0px;color: #484546;line-height: 140%;word-wrap: break-word;padding-top: 6px;padding-left: 12px;font-weight:600;">
                        Dear {{$l1[0]->fname}} {{$l1[0]->lname}},
                        </p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
                        @php
                            $created = App\Models\User::where('id',$created_by)->get();
                        @endphp
						<p style="font-family: verdana;text-align: left;font-size: 12px;margin: 0px;color: #484546;line-height: 140%;margin-top: 10px;word-wrap: break-word;padding-top: 6px;padding-left: 12px;">
							The following position is created by <span style="font-weight:600;">{{$created[0]->name}}</span>. Please login to CT Hiring and approve the requirement quickly. After your approval only recruiters can create resumes for the requirements.
						</p>
					</td>
				</tr>
			</table>
			<table style="width: 700px;margin-right: auto;margin-left: auto;position: relative;top: -4px;background-color: #f9f9f9;padding-bottom: 16px;">
				<tr>
					<td colspan="2">
						<p style="font-family: verdana;text-align: left;font-size: 12px;margin: 0px;color: #484546;line-height: 140%;margin-top: 10px;word-wrap: break-word;padding-top: 6px;padding-left: 12px;">
							Please check the details below.
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 12px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; margin-left: 12px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;">
                            Employee
                        </p>
					</td>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 12px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;">
                        {{$created[0]->name}}
						</p>
					</td>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 12px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px;padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;">
                        Client Name
                        </p>
					</td>
					<td>
                        @php
                            $clientname = App\Models\client::where('id',$client_name)->get();
                        @endphp
						<p style="font-family: verdana; text-align: left; font-size: 12px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;margin-right: 12px;">
							{{$clientname[0]->client_name}}
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 12px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; margin-left: 12px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;">
                        Job Title
                        </p>
					</td>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 12px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;">
							{{$job_title}}
						</p>
					</td>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 12px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px;padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;">
                        Job Location
                        </p>
					</td>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 12px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;margin-right: 12px;">
							{{$job_location}}
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 12px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; margin-left: 12px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;">
                        Team Member(s)
                        </p>
					</td>
					<td>
                            <p style="font-family: verdana; text-align: left; font-size: 12px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;">
                       
                            @php
                            $count = count($recruiters);
                        @endphp
                        @for ($i = 0; $i < $count; $i++)
                            @php
                                $recruiter = App\Models\User::where('id',$recruiters[$i])->get();
                            @endphp
                           {{$recruiter[0]->fname}} {{$recruiter[0]->lname}},
                            @endfor
						</p>
                       

            
                        
					
					</td>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 12px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px;padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;">
                        Total Openings
                        </p>
					</td>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 12px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;margin-right: 12px;">
							{{$total_opening}}
						</p>
					</td>
				</tr>
			</table>
			<table style="width: 700px;margin-right: auto;margin-left: auto;position: relative;background-color: #f9f9f9;padding-bottom: 16px;margin-top: 5px;padding-top: 10px;">
				<tr>
					<td colspan="2">
						<p style="font-family: verdana;text-align: left;font-size: 13px;margin: 0px;color: #b4aeae;line-height: 140%;margin-bottom: 3px;word-wrap: break-word;padding-top: 0px;padding-left: 12px;">If you have any comments or questions don’t hesitate to reach us at <br/>
						<a href="mailto:hiring@career-tree.in">hiring@career-tree.in</a></p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<p style="font-family: verdana;text-align: left;font-size: 13px;margin: 0px;color: #5d5b5b;line-height: 140%;margin-top:8px;margin-bottom: 3px;word-wrap: break-word;padding-top: 0px;padding-left: 12px;">Thanks,</p>
						<p style="font-family: verdana;text-align: left;font-size: 13px;margin: 0px;color: #5d5b5b;line-height: 140%;margin-bottom: 3px;word-wrap: break-word;padding-top: 0px;padding-left: 12px;">Team CTHiring</p>
					</td>
				</tr>
			</table>
			<table style="width: 700px;margin-right: auto;margin-left: auto;position: relative;top: -4px;">
				<tr>
					<td style="border-bottom-left-radius:2px;border-bottom-right-radius:2px;background-color: #222222;">
						<p style="font-family: verdana;text-align: center;font-size: 12px;margin: 0px;color: #ffffff;line-height: 140%;margin-bottom: 12px;margin-top: 12px;word-wrap: break-word;padding-top: 0px;padding-left: 12px;">
							&copy; CTHiring. All Right Reserved.
						</p>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>