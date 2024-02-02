<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">

	<!-- TITLE -->
	<title>Nigerian Institute of Public Relations (NIPR) </title>

	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700%7CRoboto:400,400i,700" rel="stylesheet">

	<!-- ICONS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/pe-icon-7-stroke.css')}}">

	<!-- LIBRARIES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css')}}">
	<!-- STYLES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css')}}"> 
	<link rel="icon" href="{{asset('img/masthead.png')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

	@livewireStyles
</head>
<style>
	/* #contact:hover {
    background: white;
    color: red;
	border-color: white 
}*/
	nav {    
		position: fixed;    
		top: 0px;  
		}
</style>
<body class="home-11">

	{{-- <!-- preloader -->
	<div class="corporex-preloader">
		<div class="spinner-wrapper">
			<div class="spinner"></div>
		</div><!-- .spinner-wrapper -->
	</div> <!-- .corporex-preloader -->
	 --}}
	<header class="site-header fixed-top" >
		{{-- <div class="top-bar clearfix" id="" style="height: 200px;"> --}}
	<img src="{{asset("./img/Banner1.jpg")}}" style="height: 200px; width: 100%" alt="" srcset="">
		{{-- </div> --}}
		<div class="top-bar clearfix" style="background-color: red">
			<div class="container">

				<ul class="list-inline pull-left quick-contact">
					<li><a wire:navigate href="/contact-us" data-toggle="modal" data-target="#myModal2"><i class="fa fa-edit"></i> <span>Contact Us</span></a>
								 
					</li>
					<li>

					<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-book"></i>  <span>Newsletter</span></a> 
                        <div class="modal corporex-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Subscribe Us</h4>
                                        </div> <!-- .modal-header -->
                                        <div class="modal-body">
                                                <form class="subscription-form"  >
                                                    <div class="form-group">
                                                        <label class="sr-only" for="subscriber-name">Name</label>
                                                        <input wire:model='sub' type="text" name="subscriber-name" id="subscriber-name" class="form-control" placeholder="Your name">
                                                    </div> <!-- .form-group -->
                                                    <div class="form-group">
                                                        <label class="sr-only" for="subscriber-email">Email</label>
                                                        <input type="text" name="subscriber-email" id="subscriber-email" class="form-control" placeholder="Your email">
                                                    </div> <!-- .form-group -->
                                                  
                                        </div> <!-- .modal-body -->
                                        <div class="modal-footer">  
                                            <button wire:click.prevent='create' class="btn btn-main">Submit</button>
                                                </form> <!-- .subscription-form -->
                                        </div> <!-- .modal-footer -->
                                    </div> <!-- .modal-content -->
                                </div> <!-- .modal-dialog -->      
                		</div> <!-- col-lg-3 col-md-6 -->
					</li> 
					<li><a target="_blank" href="https://portal.niprng.org.ng/member/login" ><i class="fa fa-user"></i> <span>Become a Member</span></a></li>

					<li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-support"></i> <span>Volunteer</span></a>
						<div class="modal corporex-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Become a Volunteer</h4>
									</div> <!-- .modal-header -->
									<div class="modal-body">
											<form class="">
												<div class="form-group">
													<label class="sr-only" for="subscriber-name">First Name</label>
													<input wire:model='sub' type="text" name="volunteer-name" id="subscriber-name" class="form-control" placeholder="Your name">
												</div> <!-- .form-group -->
												<div class="form-group">
													<label class="sr-only" for="subscriber-last-name">Last Name</label>
													<input wire:model='sub' type="text" name="volunteer-last-name" id="subscriber-name" class="form-control" placeholder="Your name">
												</div> <!-- .form-group -->
												<div class="form-group">
													<label class="sr-only" for="subscriber-email">Email</label>
													<input type="text" name="subscriber-email" id="volunteer-email" class="form-control" placeholder="Your email">
												</div> <!-- .form-group --> 
												<div class="form-group">
														 <p>Are you a Member <input class="pl-3" type="checkbox"></p>
												</div> <!-- .form-group --> 		 
												<div class="form-group">
													<label class="sr-only" for="subscriber-email">Reasons to Volunteer </label>
													<textarea type="checkbox" rows="5" cols="5" name="reason" id="volunteer-email" class="form-control">
													</textarea>
												</div> <!-- .form-group -->
											  
									</div> <!-- .modal-body -->
									<div class="modal-footer">  
										<button wire:click.prevent='' class="btn btn-main">Submit</button>
											</form> <!-- .subscription-form -->
									</div> <!-- .modal-footer -->
								</div> <!-- .modal-content -->
							</div> <!-- .modal-dialog -->      
					</div> <!-- col-lg-3 col-md-6 -->
					</li>
					<li><a wire:navigate href="/career" ><i class="fa fa-arrow-up"></i> <span>Career</span></a></li>
				</ul> <!-- .quick-contact -->

				<ul class="list-inline pull-right top-bar-social">
					<li><a href="https://web.facebook.com/NIPROFFICIALPAGE?mibextid=LQQJ4d&_rdc=1&_rdr"><i class="fab fa-facebook "></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/niprofficial"><i class="fab fa-twitter "></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/in/nigerian-institute-of-public-relations-7600b5a5/"><i class="fab fa-linkedin "></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/niprofficial/"><i class="fab fa-instagram "></i></a></li> 
                        <li><a target="_blank" href="https://www.youtube.com/@niprofficial"><i class="fab fa-youtube "></i></a></li> 
                        <li><a target="_blank" href="https://www.tiktok.com/@niprofficial"><i class="fab fa-tiktok "></i></a></li> 
				</ul> <!-- .top-bar-menu -->

				<ul class="list-inline pull-right top-bar-menu">
					{{-- <li><a target="_blank" href="#">Register</a></li>--}}
					<li><a target="_blank" href="https://portal.niprng.org.ng/member/login">Login</a></li> 
					{{-- <li><a href="#">Sitemap</a></li> --}}
				</ul> <!-- .top-bar-menu -->
			</div> <!-- .container -->
		</div> <!-- .top-bar -->
		<nav class="navbar  corporex-navbar navbar-01"  style="padding-top: 1%; text-transform: unset; padding-bottom: 1%">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>  
						  <span class="icon-bar"></span> 
						 <span class="icon-bar"></span> 
						<i class="fa fa-bars"></i>
					</button>

					<a class="navbar-brand" href="/" style="text-transform: unset; ">
						{{-- <img src="{{asset('img/masthead.png')}}"width=70 alt="NIPR logo"> --}}
						<img style="width: 150px;" src="{{asset('./img/20240121_131747.png')}}" alt="" srcset=""> 
					</a>

				</div> <!-- .navbar-header -->

				<div class="collapse navbar-collapse navbar-items" id="navbar-items">
					<ul class="nav navbar-nav navbar-right">
						<li class="{{(Route::is('home'))?"active":''}} dropdown menu-large">
							<a  href="/" role="button" style="text-transform: unset" aria-haspopup="false" aria-expanded="true">Home</a>
							
						</li> 
						
						<li class="{{(Route::is('about-us.history', 'about-us.vision', 'about-us.ethics', 'about-us.council' ))?"active":''}} dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: unset" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
							<ul class="dropdown-menu" style="text-transform: unset">
								<li>  
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
									aria-haspopup="true" wire:navigate href="/about-us/council"style="text-transform: unset" aria-expanded="false">Management ></a>
									<ul class="dropdown-menu" style="text-transform: unset"> 
										<li>
											<a  class="dropdown-toggle" data-toggle="dropdown" role="button" 
											aria-haspopup="true" style="text-transform: unset"  data-toggle="dropdown">Council ></a> 
											<ul class="dropdown-menu" style="text-transform: unset"> 
												<li>
													<a  wire:navigate  href="/about-us/management/composition" style="text-transform: unset"   class="dropdown-toggle" data-toggle="dropdown">Composition</a> 
												</li>  
												<li>
													<a  wire:navigate  href="/about-us/management/council-resolution" style="text-transform: unset"   class="dropdown-toggle" data-toggle="dropdown">Council Resolution</a> 
												</li>  
											</ul> <!-- .dropdown-menu -->
										</li>
										<li>
											<a  wire:navigate href="/about-us/management/chapters" style="text-transform: unset" wire:navigate href="" class="dropdown-toggle" data-toggle="dropdown">Chapters</a> 
										</li>
										 
									</ul> <!-- .dropdown-menu -->
									    <a wire:navigate href="/about-us" style="text-transform: unset">Our History</a>
									    <a wire:navigate href="/about-us/vision-and-mission" style="text-transform: unset">Vision & Mission</a>
									    <a wire:navigate href="/about-us/ethics"style="text-transform: unset"> Code of Ethics</a>
									    <a wire:navigate href="/about-us/management/faq"style="text-transform: unset"> FAQ</a>
									    
								</li>	   
							</ul> <!-- .dropdown-menu -->
						</li>
						<li class="
						{{(Route::is('student.professional-certificate', 'student.professional-diploma',
						 'student.professional-admission', 'student.result', 'student.requirements', 
						 'student.study-centre', 'student.curriculum' ))?"active":''}} 
						dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: unset" aria-expanded="false">Training</a>
							<ul class="dropdown-menu" style="text-transform: unset"> 
								<li>
									<a style="text-transform: unset" wire:navigate href="/training/masterclass" class="dropdown-toggle" data-toggle="dropdown">Masterclasses</a> 
									
								</li>
								<li>
									<a style="text-transform: unset" wire:navigate href="/training/mcpd" class="dropdown-toggle" data-toggle="dropdown">MCPD</a> 
								</li>
								<li>
									<a style="text-transform: unset" wire:navigate href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Conferences ></a> 
									<ul class="dropdown-menu" style="text-transform: unset"> 
										<li>
											<a style="text-transform: unset" wire:navigate href="/training/conference/directors-conference-and-retreat" class="dropdown-toggle" data-toggle="dropdown">Directors Conference and Retreat</a> 
										</li>
										<li>
											<a wire:navigate href="/training/conference/pr-practitioner-in-tertiary-institution" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Conference for PR Practitioners in Tertiary Institutions</a>
										</li>
										<li>
											<a wire:navigate href="/training/conference/directors-conference" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Director’s Conference</a>
										</li>
										<li>
											<a wire:navigate href="/training/conference/aviation-conference" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Aviation Conference</a>
										</li>
									    
									</ul> <!-- .dropdown-menu -->
								</li>
								<li>
									<a style="text-transform: unset" wire:navigate href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Annual Lectures ></a> 
									<ul class="dropdown-menu" style="text-transform: unset"> 
										<li>
											<a wire:navigate href="/training/annual-lecture/sam-epelle-memorial-gold-lecture" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Sam Epelle Memorial Gold Lecture</a>
										</li>

										<li>
											<a wire:navigate href="/training/annual-lecture/Igwe-nnaemeka-alfred-achebe-peace-and-reconciliation-annual-lecture-series" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Igwe Nnaemeka Alfred Achebe Peace & <br> Reconciliation Annual Lecture Series</a>
										</li>

										<li>
											<a wire:navigate href="/training/annual-lecture/his-highness-aminu-ado-bayero-national-integration-annual-lecture-series" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">His Highness, Aminu Ado Bayero National <br> Integration Annual Lecture Series</a>
										</li>
										
									   
										 
									</ul> <!-- .dropdown-menu -->
								</li>
							</ul> <!-- .dropdown-menu -->
						</li> 
						<li class="
						{{(Route::is('student.professional-certificate', 'student.professional-diploma',
						 'student.professional-admission', 'student.result', 'student.requirements', 
						 'student.study-centre', 'student.curriculum' ))?"active":''}} 
						dropdown">
						
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: unset" aria-expanded="false">Education </a>
							<ul class="dropdown-menu">
								<li>
									<a style="text-transform: unset" wire:navigate href="/student/curriculum" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Education Advisory Board ></a>
									<ul class="dropdown-menu"> 
										<li><a wire:navigate href="/education/advisory-board/mandate"style="text-transform: unset">Mandate </a></li>
										<li><a wire:navigate href="/education/advisory-board/composition"style="text-transform: unset">Composition </a></li> 
										<li><a wire:navigate href="/education/advisory-board/committees"style="text-transform: unset">Committees</a></li>  
									</ul> <!-- .dropdown-menu -->
								</li> 
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: unset"> Examinations ></a>
									<ul class="dropdown-menu">
										{{-- <li><a  wire:navigate href="/student/professional-certificate"style="text-transform: unset">Professional Certificate</a></li>
										<li><a  wire:navigate href="/student/professional-diploma"style="text-transform: unset">Professional Diploma</a></li>
										<li><a wire:navigate href="/student/professional-admission"style="text-transform: unset">Professional Admission</a></li> --}}
										{{-- <li><a wire:navigate href="/student/result"style="text-transform: unset">Results</a></li> --}}
										<li><a wire:navigate href="/education/examination/cpr"style="text-transform: unset">CPR</a></li>
										<li><a wire:navigate href="/education/examination/dpr"style="text-transform: unset">DPR</a></li>
										<li><a wire:navigate href="/education/examination/qualifying-examination"style="text-transform: unset">Qualifying Examination</a></li> 
										{{-- <li><a wire:navigate href="/student/study-centre"style="text-transform: unset">Study Centres</a></li> --}}
									</ul> <!-- .dropdown-menu -->
								</li>
 
								<li>
									<a style="text-transform: unset" wire:navigate href="/education/study-center" class="dropdown-toggle" data-toggle="dropdown">Study Centers</a> 
								</li>
							 
								<li>
									<a style="text-transform: unset" wire:navigate href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Finishing School ></a> 
									<ul class="dropdown-menu"> 
										<li><a wire:navigate href="/education/finishing-school/lms"style="text-transform: unset">LMS</a></li>
										<li><a wire:navigate href="/education/finishing-school/faculty"style="text-transform: unset">Faculty</a></li> 
									</ul> <!-- .dropdown-menu -->
								</li>
							
							</ul> <!-- .dropdown-menu -->
						</li>
						<li class="
						{{(Route::is('member.information', 'member.upgrade', 'member.categery',
						  ))?"active":''}} 
						dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: unset" aria-expanded="false">Membership</a>
							<ul class="dropdown-menu">
								<li>
									<a wire:navigate href="https://portal.niprng.org.ng/member/register" class="dropdown-toggle" style="text-transform: unset" data-toggle="dropdown">New application</a> 
								</li>
								<li>
									<a wire:navigate href="https://portal.niprng.org.ng/member/membership-upgrade" class="dropdown-toggle" style="text-transform: unset" data-toggle="dropdown">Membership Upgrade </a> 
								</li>
								 
								<li>
									<a wire:navigate href="https://portal.niprng.org.ng/member/recertification" class="dropdown-toggle" style="text-transform: unset" data-toggle="dropdown">Recertification</a>
									
								</li>
								<li>
									<a wire:navigate href="/membership/information" class="dropdown-toggle" style="text-transform: unset" data-toggle="dropdown">Membership Information</a>
									
								</li>
								<li>
									<a wire:navigate href="https://portal.niprng.org.ng/member/register" class="dropdown-toggle" style="text-transform: unset" data-toggle="dropdown">Membership Register</a>
									
								</li>
								
								 
							</ul> <!-- .dropdown-menu -->
						</li>
						<li class="dropdown
						{{(Route::is('resources.image','resources.image.view','resources.event.view','resources.downloadable','resources.video'
						  ))?"active":''}} 
						">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: inherit" aria-expanded="false">Downloadable</a>
                                <ul class="dropdown-menu" style="text-transform: unset">
									 <li>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: unset" aria-expanded="false"> Publications ></a>
										<ul class="dropdown-menu" style="text-transform: unset">
                                    
                                    <li>
                                        <a wire:navigate href="#" style="text-transform: unset" aria-expanded="false">Books ></a>  
										<ul class="dropdown-menu"> 
											<li><a wire:navigate href="/downloadable/publications/books"style="text-transform: unset">Rebooting Nigeria 2.0</a></li>
										</ul> 
                                    </li>

									<li>
										<a wire:navigate href="/downloadable/publications/books" style="text-transform: unset">Occasional Publications</a>   
									</li>
									<li>
										<a wire:navigate href="/downloadable/publications/books" style="text-transform: unset">Working Papers</a>   
									</li>
									</ul>
									</li>
                                    
                                    <li>
                                        <a wire:navigate href="#" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Gallery ></a> 
										<ul class="dropdown-menu"> 
											<li><a wire:navigate href="/downloadable/images"style="text-transform: unset">Photo</a></li>
											<li><a wire:navigate href="/downloadable/videos"style="text-transform: unset">Videos</a></li> 
										</ul> <!-- .dropdown-menu -->  
                                    </li>
                                    
                                    
                                    <li>
                                        <a wire:navigate href="/downloadable/downloadable" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Other Resources</a>
                                    </li>
                                </ul> <!-- .dropdown-menu --> 
						</li>
						<li class="dropdown {{(Route::is('resources.event'))?"active":''}}">
							<a wire:navigate href="" style="text-transform: unset" >Events</a>  
							<ul class="dropdown-menu" style="text-transform: unset"> 
							    <li>
									<a wire:navigate href="/resources/up-coming-events" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">National Spokespersons Summit</a>
								</li>
							   <li>
								   <a wire:navigate href="/resources/up-coming-events" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Annual NIPRWeek</a>   
							   </li>
							   
							   <li>
								   <a wire:navigate href="/resources/up-coming-events" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">National Spokespersons Awards</a>
							   </li>
							   <li>
								   <a wire:navigate href="/resources/up-coming-events" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">National Reputation Summit</a>
							   </li>
							   <li>
								   <a wire:navigate href="/resources/up-coming-events" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">REBIRTH Nigeria</a>
							   </li>
							   <li>
								   <a wire:navigate href="/resources/up-coming-events" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">NIPR Diamond Jubilee </a>
							   </li>
							  
						   </ul> <!-- .dropdown-menu -->   
						</li>
						<li class=" dropdown
							{{(Route::is('news.posts','news.posts.view'))?"active":''}} "> 
							 
								 <a  wire:navigate href="/news/posts" style="text-transform: unset">News</a>
						{{-- <li class="
						    {{(Route::is('contactus'))?"active":''}} "><a wire:navigate href="/contact-us" style="text-transform: unset">Contact</a></li> --}}
							 <ul class="dropdown-menu">
								<li><a wire:navigate href="/news/posts"style="text-transform: unset">NIPR News </a></li> 
								<li><a wire:navigate href="/news/posts"style="text-transform: unset">Newslinks </a></li>  
								<li>
									<a wire:navigate href="/news/posts" style="text-transform: unset">Press Releases</a>   
								</li> 
							</ul>
						</li>
						 
							<li 
						class="dropdown
						    {{(Route::is('contactus'))?"active":''}} "
							><a wire:navigate href="" style="text-transform: unset">NIPR Hubs</a>
						
							<ul class="dropdown-menu" style="text-transform: unset">  
								<li>
									<a wire:navigate href="/hub" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Aviation Hub</a>   
								</li>
								<li>
									<a wire:navigate href="/hub" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Energy Hub</a>   
								</li>
								<li>
									<a wire:navigate href="/hub" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Maritime Hub</a>   
								</li>
								<li>
									<a wire:navigate href="/hub" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Enterprise Hub</a>   
								</li>
								<li>
									<a wire:navigate href="/hub" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">PR Young Professionals Hub</a>   
								</li>
								<li>
									<a wire:navigate href="/hub" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">PR Professionals in Tertiary <br>Institutions Hub</a>   
								</li>
								
							</ul> <!-- .dropdown-menu -->   
							
						</li>
					</ul> <!-- .nav navbar-nav -->
				</div> <!-- .collapse navbar-collapse -->

			</div> <!-- .container -->
		</nav> <!-- .navbar -->
	</header> <!-- .site-header -->
	 