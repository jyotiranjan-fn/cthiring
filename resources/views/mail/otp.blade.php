




<!Doctype html>
<html>
	<head>
		<title>OTP</title>
	</head>
	<body>
		<div style="width:744px;background-color: #f2f2f2;padding-top: 12px;padding-bottom: 15px;">
			<table style="width: 553px;margin-right: auto;margin-left: auto;">
				<tr>
					<td colspan="2" style="background-color: #f2f2f2;text-align: center;border-top-left-radius: 3px;border-top-right-radius: 3px;">
						<img src="{{asset('assets/images/careertree.png')}}" style="max-width:238px;margin-left: 6px;margin-bottom: 13px;">
					</td>
				</tr>
			</table>
			<table style="width: 553px;margin-right: auto;margin-left: auto;position: relative;top: -4px;background-color: #f9f9f9;padding-bottom: 16px;">
				<tr>
					<td colspan="2">
						<p style="font-family: verdana;text-align: left;font-size: 14px;margin: 0px;color: #484546;line-height: 140%;word-wrap: break-word;padding-top: 6px;padding-left: 12px;font-weight:600;">Dear {{ $username}},</p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<p style="font-family: verdana;text-align: left;font-size: 13px;margin: 0px;color: #000000;line-height: 140%;margin-top:13px;margin-bottom: 0px;word-wrap: break-word;padding-top: 0px;padding-left: 12px;">
							Welcome to CTHiring
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<p style="font-family: verdana;text-align: left;font-size: 14px;margin: 0px;color: #000000;line-height: 140%;margin-top: 10px;word-wrap: break-word;padding-top: 6px;padding-left: 12px;">
							Your OTP Login Password
						</p>
					</td>
				</tr>
			</table>
			<table style="width: 553px;margin-right: auto;margin-left: auto;position: relative;top: -4px;background-color: #f9f9f9;padding-bottom: 16px;">
				<tr>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 14px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; margin-left: 12px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;">Website</p>
					</td>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 14px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;margin-right: 12px;">
							<a href="https://ct-hiringdemo.in" target="_blank" style="color: #4249fd!important;">https://ct-hiringdemo.in</a>
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 14px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; margin-left: 12px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;">OTP Password</p>
					</td>
					<td>
						<p style="font-family: verdana; text-align: left; font-size: 14px; margin: 0px; color: #484546; line-height: 140%; word-wrap: break-word; padding-top: 6px; padding-left: 12px; padding-bottom: 6px; background-color: #f2f2f2;margin-right: 12px;font-weight: 600;">{{ $otp}}
						</p>
					</td>
				</tr>
			</table>
			<table style="width: 553px;margin-right: auto;margin-left: auto;position: relative;background-color: #f9f9f9;padding-bottom: 16px;margin-top: 5px;padding-top: 10px;">
				<tr>
					<td colspan="2">
						<p style="font-family: verdana;text-align: left;font-size: 13px;margin: 0px;color: #b4aeae;line-height: 140%;margin-bottom: 3px;word-wrap: break-word;padding-top: 0px;padding-left: 12px;">If you have any comments or questions don’t hesitate to reach us at <br/>
						<a href="mailto:kamesh@career-tree.in">kamesh@career-tree.in</a></p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<p style="font-family: verdana;text-align: left;font-size: 13px;margin: 0px;color: #5d5b5b;line-height: 140%;margin-top:8px;margin-bottom: 3px;word-wrap: break-word;padding-top: 0px;padding-left: 12px;">Thanks,</p>
						<p style="font-family: verdana;text-align: left;font-size: 13px;margin: 0px;color: #5d5b5b;line-height: 140%;margin-bottom: 3px;word-wrap: break-word;padding-top: 0px;padding-left: 12px;">Team CTHiring</p>
					</td>
				</tr>
			</table>
			<table style="width: 553px;margin-right: auto;margin-left: auto;position: relative;top: -4px;">
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