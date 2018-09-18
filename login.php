<!DOCTYPE html>


<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Login Page - 1</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <?php include "style.php" ?>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
				<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
					<div class="m-stack m-stack--hor m-stack--desktop">
						<div class="m-stack__item m-stack__item--fluid">
							<div class="m-login__wrapper">
								<div class="m-login__logo">
									<a href="#">
										<img src="assets/app/media/img/logos/logo-2.png">
									</a>
								</div>
								<div class="m-login__signin">
									<div class="m-login__head">
										<h3 class="m-login__title">Sign In To Admin</h3>
									</div>
									<form class="m-login__form m-form" action="">
										<div class="form-group m-form__group">
											<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
										</div>
										<div class="form-group m-form__group">
											<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
										</div>
										<div class="row m-login__form-sub">
											<div class="col m--align-left">
												<label class="m-checkbox m-checkbox--focus">
													<input type="checkbox" name="remember"> Remember me
													<span></span>
												</label>
											</div>
											<div class="col m--align-right">
												<a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
											</div>
										</div>
										<div class="m-login__form-action">
											<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Sign In</button>
										</div>
									</form>
								</div>
								<div class="m-login__forget-password">
									<div class="m-login__head">
										<h3 class="m-login__title">Forgotten Password ?</h3>
										<div class="m-login__desc">Enter your email to reset your password:</div>
									</div>
									<form class="m-login__form m-form" action="">
										<div class="form-group m-form__group">
											<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
										</div>
										<div class="m-login__form-action">
											<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Request</button>
											<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">Cancel</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content m-grid-item--center" style="background-image: url(assets/app/media/img//bg/bg-4.jpg)">
					<div class="m-grid__item">
						<h3 class="m-login__welcome">Join Our Community</h3>
						<p class="m-login__msg">
							Lorem ipsum dolor sit amet, coectetuer adipiscing<br>elit sed diam nonummy et nibh euismod
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->


        <?php include "javascript.php"?>

		<!--begin::Page Scripts -->
		<script src="assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>