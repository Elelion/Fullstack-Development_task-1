<!DOCTYPE html>
<HTML>

<HEAD> 
	<!-- SEO -->
	<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
	<meta name="Keywords" content="Fullstack Development, Fullstack, Development">
	<link rel = "shortcut icon" type = "image/x-icon" href = "images/favicon.png"> 
	<title> Quest-1, maket-1 </title>

	<!-- CSS's -->  
	<link rel="stylesheet/less" href="css/styles.css">        	  
	<script src="lib/less.min.js"></script>

	<!-- func -->
	<?php require_once 'src/functions.php'; ?>
</HEAD>

<BODY>
<header>
	<div class="header__logo">
		<svg width="465px" height="465px">
			<circle r="178" cx="180" cy="38.7%" 
					fill="none" stroke="#056cb4" stroke-width="2"></circle>

			<circle r="156" cx="180" cy="38.7%" 
					fill="#056cb4" ></circle>
		</svg>			
	</div>

	<div class="header__titles">
		<div class="header__titles--text1">
			<p class="title_h1">name here</p>
		</div>

		<div class="header__titles--text2">
			<p class="title_h2">surname</p>
		</div>

		<div class="header__titles--text3">
			<p class="title_h3">graphic designer</p>
		</div>
	</div>

	<div class="header__profile">
		<div class="chapter">
			<div class="chapter__logo">
				<svg width="120px" height="120px">
					<circle r="56" cx="58" cy="50.7%" 
							fill="none" stroke="#056cb4" stroke-width="2"></circle>

					<circle r="50" cx="58" cy="50.7%" fill="#056cb4" ></circle>
					<circle r="14" cx="58" cy="42%" fill="white" ></circle>

					<defs>
    					<clipPath id="cut-off-bottom">
      						<rect x="0" y="0" width="200" height="85"></rect>
    					</clipPath>
  					</defs>
  					<circle cx="58" cy="85" r="25" 
  							fill="white" clip-path="url(#cut-off-bottom)"></circle>
				</svg>
			</div>

			<div class="chapter__title">
				<p class="title__chapter">profile</p>
			</div>

			<div class="chapter__profile--line">
				<svg width="auto" height="120px">
					<line x1="5" y1="60" x2="267px" y2="60" 
						  stroke="#056cb4" stroke-width="8"></line>
				</svg>
			</div>			
		</div>

		<div class="chapter__profile--text">
			<blockquote>
				<p class="smallText__chapter"> 
					Lorem ipsum dolors sit amet, consectetuer adipiscing elit. Aenean
				 	commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
				 	et magnis dis parturient montes, nascetur ridiculus mus. Donec quam 
				 	felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla 
				 	consequat massa quis enum, Donec pede justo, fringilla vel, aliquet 
				 	nec, vukoutate eget, arcu. In enim justo, rhoncus ut, imperdiet a, 
				 	venenatis vitate, justo. Nullam dictum felis eu

					<b> 
						pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus 
						elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
						logula, porttitor eu, consequat vitae vitae, eleifend ac enim. 
						Aliquanm lorem ante, dapibus in, viverra quis,  feugiat a, tellus.
						Phasellus viverra nulla ut metus varius loareet. Quisque rutrum. 
					</b> 
				</p>
			</blockquote>
		</div>
	</div>
</header>

<!-- .... -->

<main>
	<div class="main__education">
		<div class="chapter">
			<div class="chapter__logo">
				<svg width="120px" height="120px">
					<circle r="56" cx="58" cy="50.7%" 
							fill="none" stroke="#056cb4" stroke-width="2"></circle>

					<circle r="50" cx="58" cy="50.7%" fill="#056cb4" ></circle>
					
					<g transform="translate(20,98) scale(0.100000,-0.100000)"
						fill="white" stroke="none" x="12" y="-10">

					<path d="M329 573 l-44 -128 -144 -3 -143 -3 108 -75 c60 -42 112 -79 117 -83
							4 -4 -13 -66 -37 -137 -24 -71 -43 -130 -42 -131 1 -1 52 34 114 77 
							62 44 116 80 120 80 4 -1 57 -36 117 -79 61 -43 111 -78 112 -77 2 2 
							-17 61 -41 132 l-43 130 113 80 113 79 -141 5 -141 5 -41 122 c-23 
							67 -44 124 -47 128 -4 3 -26 -52 -50 -122z"/>
					</g>
				</svg>
			</div>

			<div class="chapter__title">
				<p class="title__chapter">education</p>
			</div>

			<div class="chapter__education--line">
				<svg width="500px" height="120px">
					<line x1="12" y1="58" x2="494px" y2="58" 
						  stroke="#056cb4" stroke-width="8"></line>
				</svg>
			</div>			
		</div>

		<div class="chapter__education--text">
			<ul>
				<?php 
					addEducationBlock('master degree', 
										'Feb 2011 - Jun 2014', 
										'university name', 
										'Lorem ipsum dolors sit amet, consectetuer adipiscing 
										elit. Aenean commodo ligula eget dolor. Aenean massa. 
										Cum sociis natoque penatibus et magnis dis parturient 
										montes, nascetur ridiculus mus. Donec quam felis, 
										ultricies nec, pellentesque.');

					addEducationBlock('master degree', 
										'Feb 2011 - Jun 2014', 
										'university name', 
										'Lorem ipsum dolors sit amet, consectetuer adipiscing 
										elit. Aenean commodo ligula eget dolor. Aenean massa. 
										Cum sociis natoque penatibus et magnis dis parturient 
										montes, nascetur ridiculus mus. Donec quam felis, 
										ultricies nec, pellentesque.');

					addEducationBlock('master degree', 
										'Feb 2011 - Jun 2014', 
										'university name', 
										'Lorem ipsum dolors sit amet, consectetuer adipiscing 
										elit. Aenean commodo ligula eget dolor. Aenean massa. 
										Cum sociis natoque penatibus et magnis dis parturient 
										montes, nascetur ridiculus mus. Donec quam felis, 
										ultricies nec, pellentesque.');

					addEducationBlock('master degree', 
										'Feb 2011 - Jun 2014', 
										'university name', 
										'Lorem ipsum dolors sit amet, consectetuer adipiscing 
										elit. Aenean commodo ligula eget dolor. Aenean massa. 
										Cum sociis natoque penatibus et magnis dis parturient 
										montes, nascetur ridiculus mus. Donec quam felis, 
										ultricies nec, pellentesque.');
				?>						
			</ul>
		</div>
	</div>
</main>		

<!-- .... -->

<footer>
	<div class="footer__contact">
		<div class="chapter">
			<div class="chapter__logo">
				<svg width="120px" height="120px">
					<circle r="56" cx="58" cy="50.7%" 
							fill="none" stroke="#056cb4" stroke-width="2"></circle>

					<circle r="50" cx="58" cy="50.7%" fill="#056cb4" ></circle>
					
					<g transform="translate(28,92) scale(0.076000,-0.076000)"
						fill="white" stroke="none" x="12" y="-10">

						<path d="M72 696 c-79 -81 -82 -91 -58 -182 54 -203 298 -446 501 -498 
								92 -25 100 -23 172 46 77 74 89 94 73 113 -16 19 -181 115 -197 
								115 -7 0 -30 -16 -51 -35 l-39 -34 -40 20 c-52 25 -179 156 -199 
								204 -15 37 -15 38 15 69 17 18 31 37 31 44 0 17 -78 173 -98 195 
								-8 9 -20 17 -27 17 -6 0 -44 -33 -83 -74z"/>
					</g>
				</svg>
			</div>

			<div class="chapter__title">
				<p class="title__chapter">contact</p>
			</div>

			<div class="chapter__contact--line">
				<svg width="auto" height="120px">
					<line x1="5" y1="60" x2="244px" y2="60" 
						  stroke="#056cb4" stroke-width="8"></line>
				</svg>
			</div>			
		</div>

		<div class="chapter__contact--text">
			<table class="middleText__chapter">				
			   	<tr><td><b>Address	</b></td> <td><span>Main Street, City.  </span></td></tr>
			   	<tr><td><b>E-Mail	</b></td> <td><span>contact@domain.com. </span></td></tr>
			   	<tr><td><b>Phone	</b></td> <td><span>555-555-555. 		</span></td></tr>
			   	<tr><td><b>Website	</b></td> <td><span>www.yourweb.com. 	</span></td></tr>
			</table>
		</div>
	</div>

	<div class="footer__skills">
		<div class="chapter">
			<div class="chapter__logo">
				<svg width="120px" height="120px">
					<circle r="56" cx="58" cy="50.7%" 
							fill="none" stroke="#056cb4" stroke-width="2"></circle>

					<circle r="50" cx="58" cy="50.7%" fill="#056cb4" ></circle>
					
					<g transform="translate(32,95) scale(0.100000,-0.100000)"
						fill="white" stroke="none" x="12" y="-10">

						<path d="M145 642 c-78 -37 -125 -115 -125 -209 0 -68 27 -129 76 -172
								19 -17 34 -38 34 -46 0 -9 13 -30 29 -46 26 -25 37 -29 88 -29 
								69 0 97 16 113 65 6 19 24 44 40 55 42 30 80 113 80 176 0 69 
								-40 145 -98 188 -39 27 -53 31 -120 34 -59 2 -87 -2 -117 -16z"/>

						<path d="M147 92 c-45 -49 -3 -82 103 -82 82 0 120 16 120 50 0 35 -38 
								50 -126 50 -66 0 -84 -3 -97 -18z"/>
					</g>				
				</svg>
			</div>

			<div class="chapter__title">
				<p class="title__chapter">skills</p>
			</div>

			<div class="chapter__skills--line">
				<svg width="auto" height="120px">
					<line x1="5" y1="60" x2="302px" y2="60" 
						  stroke="#056cb4" stroke-width="8"></line>
				</svg>
			</div>			
		</div>

		<div class="chapter__skills--text">			
			<ul>				
				<?php 
					addSkillsBlock('creative', '9');
					addSkillsBlock('teamwork', '11');
					addSkillsBlock('innovate', '6');
					addSkillsBlock('communication', '11');
				?>
			</ul>			
		</div>
	</div>
</footer>

</BODY>
</HTML>