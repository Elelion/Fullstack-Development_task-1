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
	<!-- ... -->
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

	
</footer>

</BODY>
</HTML>