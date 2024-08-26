<?php
	$name = 'Sarah Ogden';
	$jobTitle = 'Cybersecurity Engineer';
	$email = 'ogdens2@nku.edu';
	$phone = '614-592-5929';
	$nku = "Northern Kentucky University"
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<title><?php echo $name + "'s Resume" ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sarah Ogden's resume">
    <meta name="author" content="Sarah Ogden">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				  	<div class="col">
							<div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							  	<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $name ?></h1>
							    <div class="title mb-3"><?php echo $jobTitle ?></div>
							    <ul class="list-unstyled">
								  	<li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $email ?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $phone ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					        	<li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo "linkedin.com/in/ogden100" ?></a></li>
					        	<li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo "github.com/sarahogden2017" ?></a></li>
					          <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo "sarahogden2017.github.io" ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					  <p class="mb-0"><?php echo "I am a student at NKU majoring in Cybersecurity and Data Science with Honors. I am currently working for NKU's IT infastructure team and doing research. In the past, I have done an internship for Kroger Technology and Digital and worked at Norse Tech Bar. I am good as scripting in Python and security engineering/analysis. Also, I enjoy competing in cybersecurity competitions." ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										    	<h3 class="resume-position-title font-weight-bold mb-1"><?php echo "Student IT Support Specialist" ?></h3>
										      <div class="resume-company-name ms-auto"><?php echo $nku ?></div>
												</div><!--//row-->
										    <div class="resume-position-time"><?php echo "Aug 2024 - Present" ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										  	<p><?php echo "As a student worker for NKU's server team, I do a variety of tasks to help maintain and improve IT infastructure." ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <p><?php echo "I have been working here less than 2 weeks, so none yet." ?></p>
										    <ul>
											  	<li><?php echo "Written 2 documentation articles" ?></li>
											    <li><?php echo "Learned about networking fiber optic cables" ?></li>
											    <li><?php echo "Audited and documented DNS sever" ?></li>
											    <li><?php echo "Learned about VM infastructure" ?></li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											  	<li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "VMWare" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "DNS" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Networking" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "DHCP" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Wiki.js" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Fiber Optic" ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										    	<h3 class="resume-position-title font-weight-bold mb-1"><?php echo "Research Assistant" ?></h3>
										    	<div class="resume-company-name ms-auto"><?php echo $nku ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo "May 2024 - Present" ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										  	<p><?php echo "Helping scrape and classify images to study health misinformation and digital trust." ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
										    <p><?php "Developed a web scraper that collect over 20,000 images" ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											  	<li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Python" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Poetry" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Scrapy" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "SVM" ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										    <h3 class="resume-position-title font-weight-bold mb-1"><?php echo "Threat Operations Intern" ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo "Kroger Technology and Digital" ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo "May 2024 - Aug 2024" ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										  	<p><?php echo "Worked with the Threat Ops Team to learn about threat intel, threat hunting, and detection engineering." ?></p>
										    <p><?php echo "Developed several automated integrations to improve threat detection process." ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Python" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Aqua Security" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "QRadar" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Shodan" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Chronicle SOAR" ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										    	<h3 class="resume-position-title font-weight-bold mb-1"><?php echo "Student IT Support Specialist" ?></small></h3>
										      <div class="resume-company-name ms-auto"><?php echo $nku ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo "March 2024 - May 2024" ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										  	<p><?php echo "At the Norse Tech Bar, I helped students and staff resolve and tech issues they were having and managed NKU's retal laptop and tablet inventory." ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Wi-Fi" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Windows Update" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Disk Cloner" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Google Search" ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    
							    </div><!--//resume-timeline-->
							    
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								        	<div class="resume-skill-name"><?php echo "Python" ?></div>
									        		<div class="progress resume-progress">
											    		<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
								        </li>
								        <li class="mb-2">
								          <div class="resume-skill-name"><?php echo "Digital Forensics" ?></div>
									        	<div class="progress resume-progress">
											  		<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
								        </li>
								        <li class="mb-2">
								          <div class="resume-skill-name"><?php echo "Linux" ?></div>
									        	<div class="progress resume-progress">
											    	<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
								        </li>
								        
								        <li class="mb-2">
								          <div class="resume-skill-name"><?php echo "Research" ?></div>
									    	    <div class="progress resume-progress">
											  	  <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
								        </li>
								        <li class="mb-2">
								          <div class="resume-skill-name"><?php echo "Java" ?></div>
									        	<div class="progress resume-progress">
											    	<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "Git" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "Windows" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "Wireshark" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "Log Analysis" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "SIEM" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "SOAR" ?></span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								      <div class="resume-degree font-weight-bold"><?php echo "B.S. in Cybersecurity and Data Science" ?></div>
								      <div class="resume-degree-org"><?php echo $nku ?></div>
								      <div class="resume-degree-time"><?php echo "Aug 2023 - May 2027" ?></div>
								    </li>
								    <li>
								    	<div class="resume-degree font-weight-bold"><?php echo "Cybersecurity Certificate" ?></div>
								      <div class="resume-degree-org"><?php echo "Delaware Area Career Center" ?></div>
								      <div class="resume-degree-time"><?php echo "Aug 2021 - May 2023" ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								      <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								      <div class="resume-award-name"><?php echo "Dean's List" ?></div>
								      <div class="resume-award-desc"><?php echo "4.0 GPA for spring 2024 semester" ?></div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								      <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								      <div class="resume-award-name"><?php echo "Dean's List" ?></div>
								      <div class="resume-award-desc"><?php echo "4.0 GPA for fall 2023 semester" ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								  	<li class="mb-1"><?php echo "Horseback Riding" ?></li>
								    <li class="mb-1"><?php echo "Puzzles" ?></li>
								    <li class="mb-1"><?php echo "Drawing" ?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/USWCT-Sarah-Ogden.webp" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo "US Women's Cyber Team" ?></h5>
									<p class="card-text"><?php echo "Competing on the US Women's Cyber Team" ?></p>
									<a href="btn btn-outline-primary" href="https://www.uscybergames.com/us-women-cyber-team">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/gcld.png" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo "GIAC: Cloud Security Essentials" ?></h5>
									<p class="card-text"><?php echo "Took SANS Cloud Security Essentials course and passed the exam." ?></p>
									<a href="btn btn-outline-primary" href="https://www.credly.com/badges/ec6ecfa6-d501-4a6e-8991-20a93cf5686e/public_url">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/sec+.png" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo "CompTIA Security+" ?></h5>
									<p class="card-text"><?php echo "Studied for and passed Security+ exam" ?></p>
									<a href="btn btn-outline-primary" href="https://www.credly.com/badges/475b6638-cebc-4e58-af7c-7af933fc7cc0/public_url">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
      <small class="copyright"><?php echo "Designed with" ?><span class="sr-only">love</span><i class="fas fa-heart"></i><?php echo " by Sarah Ogden" ?></small>
    </footer>

    

</body>
</html> 

