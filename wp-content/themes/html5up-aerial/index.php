<?php get_header(); ?>

<div id="wrapper">
	<div id="bg"></div>
	<div id="overlay"></div>
	<div id="main">

		<!-- Header -->
			<header id="header">
				<h1>Trong Hao</h1>
				<p>Trên con đường thành công &nbsp;&bull;&nbsp; Không có &nbsp;&bull;&nbsp; Dấu chân kẻ lười biếng</p>
				
				<nav>
				<?php
					if ( has_nav_menu( 'Primary' ) ) {
						wp_nav_menu([
							'theme_location' 	=> 'Primary',
							'container' 		=> false, //the bao boc menu
							'menu_class' 		=> '',
							'fallback_cp'		=> false, //hien thi menu mac dinh
							'depth'				=> 4,  // bao nhieu cap menu
							'walker' 			=> new JA_Custom_Nav_Menu()
						]);
					}
				?>
				</nav>
				
				<nav>
					<ul>
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</nav>
			</header>
			
		<!-- Sidebar -->		
			<?php get_sidebar() ?>

		<!-- Footer -->
			<footer id="footer">
				<span class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>.</span>
			</footer>

	</div>
</div>

<?php get_footer(); ?>