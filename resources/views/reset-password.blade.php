<!DOCTYPE html>
<html lang="en">

<head>
    <title>IZIGO</title>
	@include('includes.meta-css')
</head>
<body>

	<div class="main-wrapper">
		<div class="account-wrapper">
			<div class="account-page">
				<div class="account-center">
					<div class="container">
						<h3 class="account-title">Change Password</h3>
						<div class="account-box">
							<div class="account-logo">
								<a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
							</div>
							<form>
								<div class="form-group form-focus">
									<label class="focus-label">Current Password</label>
									<input class="form-control floating" type="password">
								</div>
								<div class="form-group form-focus">
									<label class="focus-label">New Password</label>
									<input class="form-control floating" type="password">
								</div>
								<div class="form-group form-focus">
									<label class="focus-label">New Repeat Password</label>
									<input class="form-control floating" type="password">
								</div>
								<div class="form-group mb-0 text-center">
									<button class="btn btn-primary btn-block account-btn" type="submit">Change Password</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('includes.scripts')
</body>

</html>
