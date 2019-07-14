<?php
/*
	Template Name: Front Page
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Home -->
			<section class="hero is-fullheight">
				<div class="hero-body">
					<div class="container">
						<div id="hero-headshot">
							<img src="https://placekitten.com/960/1080" alt="">
						</div>
						<div class="hero-site-info">
							<h1 id="site-name"><?php echo(get_bloginfo('name')) ?></h1>
							<h3><?php echo(get_bloginfo('description')) ?></h3>
						</div>
						
					</div>
				</div>
			</section><!-- HOME END -->

			<!-- Gallery -->
			<section id="gallery">
				<div class="container">
					<div class="gallery">
						<div class="gallery-item">
						<img src="https://placekitten.com/500/250" alt="">
						</div>
						<div class="gallery-item">
							<img src="https://placekitten.com/500/250" alt="">
						</div>
						<div class="gallery-item">
							<img src="https://placekitten.com/500/250" alt="">
						</div>
						<div class="gallery-item">
							<img src="https://placekitten.com/550/700" alt="">
						</div>
						<div class="gallery-item">
							<img src="https://placekitten.com/500/250" alt="">
						</div>
						<div class="gallery-item">
							<img src="https://placekitten.com/500/250" alt="">
						</div>
						<div class="gallery-item">
							<img src="https://placekitten.com/500/250" alt="">
						</div>
						
					</div>
				</div>
				<div class="gallery-bg"></div>
			</section><!-- GALLERY END -->

			<!-- About -->
			<section id="about">
				<div class="container">
					<div class="about-text-container">
						<h1>About Me</h1>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quam mollitia doloribus, reprehenderit, eveniet voluptatum eaque necessitatibus illum nihil placeat rerum voluptates consequatur qui ratione. Ad voluptates deleniti voluptate pariatur, error hic nihil nesciunt esse doloremque, sequi in alias quod?</p>
						<button>Contact Me</button>
					</div>
					<div class="about-img">
						<img src="https://placekitten.com/600/600" alt="">
					</div>
					
				</div>
				<div class="about-bg-box"></div>
			</section><!-- ABOUT END-->

			<!-- Resume -->
			<section id="resume">
				<div class="container">
					<h1>Resume</h1>
					<!-- Experience -->
					<div class="resume-container">
						<h3>Experience</h3>
					</div>
					<!-- Special Skills -->
					<div class="resume-container">
						<h3>Special Skills</h3>
					</div>
					<!-- Education -->
					<div class="resume-container">
						<h3>Education</h3>
					</div>
				</div>
				
				<!-- Banner -->
				<div class="resume-banner">
					<div>
						<h3>Download Full Resume</h3>
					</div>
					<div class="btn">
						<button>Download</button>
					</div>
					
					
				</div>
			</section><!-- RESUME END -->

			<!-- Videos -->
			<section>
				<div class="container"></div>
			</section><!-- VIDEOS END -->

			<!-- Upcoming -->
			<section>
				<div class="container">
					<h1>Upcoming Appearances</h1>
				</div>
			</section><!--UPCOMING END -->

			<!-- Instagram Feed -->
			<section>
				<div class="container">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
					<img src="https://placekitten.com/600/600" alt="">
				</div>
			</section><!-- INSTAGRAM END -->

			<!-- Contact -->
			<section id="contact">
				<div class="container">
					<h1>Contact</h1>
					<div class="social-container"></div>
					<div>
						<h3>Header</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos mollitia repudiandae, amet nisi non?</p>
					</div>
					<div class="contact-form">
					</div>
				</div>
			</section><!-- CONTACT END -->

			<!-- Social -->
			<aside id="social-menu">
				<div class="container">
					<div class="social-menu">
						<div class="social-menu-item">
							<i class="fab fa-instagram"></i>
						</div>
						<div class="social-menu-item">
							<i class="fab fa-facebook-f"></i>
						</div>
						<div class="social-menu-item">
							<i class="fab fa-youtube"></i>
						</div>
					</div>
				</div>
			</aside>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
