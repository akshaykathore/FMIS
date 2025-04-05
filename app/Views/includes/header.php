<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Links Of CSS File -->
	<link rel="stylesheet" href="public/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="public/assets/css/owl.theme.default.min.css" />
	<link rel="stylesheet" href="public/assets/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="public/assets/css/flaticon.css" />
	<link rel="stylesheet" href="public/assets/css/remixicon.css" />
	<link rel="stylesheet" href="public/assets/css/meanmenu.min.css" />
	<link rel="stylesheet" href="public/assets/css/aos.min.css" />
	<link rel="stylesheet" href="public/assets/css/odometer.min.css" />
	<link rel="stylesheet" href="public/assets/css/magnific-popup.min.css" />
	<link rel="stylesheet" href="public/assets/css/before-after.min.css" />
	<link rel="stylesheet" href="public/assets/css/style.css" />
	<link rel="stylesheet" href="public/assets/css/dark.css" />
	<link rel="stylesheet" href="public/assets/css/responsive.css" />
	 <!-- Links Of CSS Files Dynamically -->


	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon.png" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            // https://dashboard.emailjs.com/admin/account
            emailjs.init({
              publicKey: "EAEek_w0ZuATeQrcW",
            });
        })();
    </script>
	<!-- Title -->
	<title>FUTUREMIND INFOTECH SOLUTIONS</title>
	<style>
		.floating-icons {
			position: absolute;
			top: 0;
			left: 50%;
			transform: translateX(-50%);
			width: 100%;
			height: 100%;
			pointer-events: none;
		}

		.bubble {
			position: absolute;
			width: 50px;
			/* Adjust icon size */
			animation: floatUp 5s infinite ease-in-out;
		}

		.python {
			top: 20%;
			left: 10%;
			animation-delay: 0s;
		}

		.java {
			top: 10%;
			left: 60%;
			animation-delay: 1s;
		}

		.javascript {
			top: 50%;
			left: 30%;
			animation-delay: 2s;
		}

		.langchain {
			top: 70%;
			left: 70%;
			animation-delay: 3s;
		}

		.robotics {
			top: 30%;
			left: 90%;
			animation-delay: 4s;
		}

		@keyframes floatUp {
			0% {
				transform: translateY(0) scale(1);
				opacity: 1;
			}

			50% {
				transform: translateY(-20px) scale(1.1);
				opacity: 0.8;
			}

			100% {
				transform: translateY(0) scale(1);
				opacity: 1;
			}
		}
	</style>

</head>

<body>
	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="content">
			<div class="box"></div>
		</div>
	</div>
	<!-- End Preloader Area -->

	<!-- Start Navbar Area -->
	<div class="navbar-area">
		<div class="mobile-responsive-nav">
			<div class="container">
				<div class="mobile-responsive-menu">
					<div class="logo">
						<a href="<?= base_url(); ?>">
							<img src="public/assets/images/logo.png" class="main-logo" alt="logo" />
							<img src="public/assets/images/white-logo.png" class="white-logo" alt="logo" />
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="desktop-nav">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="<?= base_url(); ?>">
						<img src="public/assets/images/logo.png" class="main-logo" alt="logo" />
						<img src="public/assets/images/white-logo.png" class="white-logo" alt="logo" />
					</a>

					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav m-auto">
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
									Courses
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="data-science.html" class="nav-link">Data Science</a>
									</li>
									<li class="nav-item">
										<a href="data-analytics.html" class="nav-link">Data Analytics</a>
									</li>
									<li class="nav-item">
										<a href="cyber-security.html" class="nav-link">Cyber Security</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fullstack
											Development</a>
										<ul class="dropdown-menu">
											<li>
												<a href="fullstack-python.html" class="nav-link">Fullstack in Python</a>
											</li>
											<li>
												<a href="fullstack-java.html" class="nav-link">Fullstack in Java</a>
											</li>
											<li>
												<a href="fullstack-php.html" class="nav-link">Fullstack in PHP</a>
											</li>
											<li>
												<a href="mearn-stack.html" class="nav-link">MEARN Stack</a>
											</li>
											<li>
												<a href="mean-stack.html" class="nav-link">MEAN Stack</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="cloud-computing.html" class="nav-link">Cloud Computing</a>
									</li>
									<li class="nav-item">
										<a href="digital-marketing.html" class="nav-link">Digital Marketing</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Software
											Courses</a>
										<ul class="dropdown-menu">
											<li>
												<a href="software-development.html" class="nav-link">Software
													Development</a>
											</li>
											<li>
												<a href="software-testing.html" class="nav-link">Software Testing</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="networking.html" class="nav-link">Networking</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle"
											data-bs-toggle="dropdown">CAD/CAM/CAE</a>
										<ul class="dropdown-menu">
											<li>
												<a href="cad-pro.html" class="nav-link">STAAD Pro</a>
											</li>
											<li>
												<a href="tekla-software.html" class="nav-link">Tekla Software</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="accounts-finance.html" class="nav-link">Accounts & Finance</a>
									</li>
									<li class="nav-item">
										<a href="sap-certification.html" class="nav-link">SAP Certification</a>
									</li>
									<li class="nav-item">
										<a href="animation-course.html" class="nav-link">Animation Course</a>
									</li>
									<li class="nav-item">
										<a href="fashion-courses.html" class="nav-link">Fashion Courses</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a href="about" class="nav-link">About Us</a>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle"> Placement </a>

								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="product.html" class="nav-link">Placements Process</a>
									</li>

									<li class="nav-item">
										<a href="product-details.html" class="nav-link">Internship Program</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a href="blog.html" class="nav-link"> Blog </a>
							</li>

							<li class="nav-item">
								<a href="contact" class="nav-link">Contact Us</a>
							</li>
						</ul>

						<div class="others-options">
							<ul class="d-flex justify-content-between align-items-center">
								<li>
									<a href="#" data-bs-toggle="modal" data-bs-target="#careerModal"
										class="default-btn">
										Get Career Guidance
										<i class="ri-group-2-fill"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<div class="others-option-for-responsive">
			<div class="container">
				<div class="dot-menu">
					<div class="inner">
						<div class="circle circle-one"></div>
						<div class="circle circle-two"></div>
						<div class="circle circle-three"></div>
					</div>
				</div>

				<div class="container">
					<div class="option-inner">
						<div class="others-options justify-content-center d-flex align-items-center">
							<ul>
								<li>
									<a href="our-courses.html" class="default-btn">
										Free Demo
										<i class="ri-login-box-line"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Navbar Area -->