<?php 
	$page_title = "home"; 
	$active_page = "index";
	$feature_title = "Welcome";
	$section_title_01 = "feature article";
	$section_title_02 = "live beat guide"
?>

<!DOCTYPE html>
<html>
	<?php include ('includes/head.php'); ?>
	<body>
		<?php include ('includes/header.php'); ?>
		<main>
			<?php include('includes/section-title.php'); ?>
			<section class="feature-article">
				<div class="feature-article--left">
					<img src="images/darcy_logan.jpg">
					<div class="feature-article--container">
						<h2>New Exhibits at Casa and SAAG Explore Alberta and Cosplay</h2>
						<p><img class="icon" src="icons/ic_access_time_black_24dp_1x.png">Wednesday, 06 Dec 2017 16:17</p>
						<p><img class="icon" src="icons/ic_person_black_24dp_1x.png">Richard Amery </p>
						<p>Casa has a number of new art exhibits happening this month. Artists Ed Bader and Peter Greendale explore  Alberta in their  exhibit “Northwest/Southwest” which opened at Casa, Nov. 4.</p>
						<a href="article_01.php"><div class="btn">
							<p>read more</p>
						</div></a>
						<div class="clrfix"></div>
					</div>
				</div>
				<div class="feature-article--right">
					<img src="images/adrian_cooke.jpg">
					<div class="feature-article--container">
						<h2>New exhibits opening at Casa explore barbed wire, memory and house music</h2>
						<p><img class="icon" src="icons/ic_access_time_black_24dp_1x.png">Saturday, 13 Jan 2017 12:53</p>
						<p><img class="icon" src="icons/ic_person_black_24dp_1x.png">Richard Amery </p>
						<p>Lethbridge based artist Adrian Cooke explores the design and history of barbed wire in his new exhibit “Chasing the Devil’s Rope,” one of five new exhibits opening at Casa tonight, Jan. 13.</p>
						<a href="article_02.php"><div class="btn">
							<p>read more</p>
						</div></a>
					</div>
				</div>
			</section>
			<section class="about-listings">
				<div class="about-listings__wrapper">
					<div class="about-section">
						<h1>About L.A Beat</h1>
						<p>L.A. Beat is Lethbridge, Alberta's only online arts and entertainment magazine.

						It is designed to support music, art, drama and other cultural endeavours in and around the city.

						It will start out as an online presence and then evolve into a print edition which will be distributed at numerous locations in the city.
						<br><br>
						If you have an event you want L.A. Beat to promote, contact us by e-mail.editor@labeat.ca

						For updates about what’s new on L.A. Beat check	out:
						<br><br>

						<a href="http://www.flickr.com/photos/labeatlethbridge/" target="blank"><img class="icon" src="icons/png/32-flickr.png"></a>

						<a href="https://twitter.com/labeatartsmag?lang=en" target="blank"><img class="icon" src="icons/png/32-twitter.png"></a>

						<a href="https://www.youtube.com/channel/UCzJYNaSvQis5_NcVB-PTI-w" target="blank"><img class="icon" src="icons/png/32-youtube.png"></a>

						<a href="https://myspace.com/labeatlethbridge" target="blank"><img class="icon" src="icons/png/32-myspace.png"></a>

						<p>Facebook Group: <a href="https://https://www.facebook.com/groups/90386746061/" target="blank"> https://www.facebook.com/groups/90386746061/</a></p>

						<p>Facebook Page:
						<a href="https://www.facebook.com/labeatmag/info" target="blank">https://www.facebook.com/labeatmag/info</a></p>


						<p>Contact Editor/Publisher Richard Amery:<a href="mailto:editor@labeat.ca" target="blank">editor@labeat.ca</a></p>

						<p>To Advertise: <a href="mailto:advertising@labeat.ca" target="blank"> advertising@labeat.ca</a></p>
						
						<p>Logo by <a href="http://www.lintonvaldock.com/" target="blank">Linton Valdock</a></p>
						<br><br>
						<br><br>
						<div class="ad"><img src="images/ad_03.png"><img src="images/ad_04.png"></div>
					</div>
					<div class="listings-section">
						<?php include('includes/section-title-02.php'); ?>
						<div class="listings-section__events">
							<div class="date">
								<h2>31</h2>
								<p>Jan 2018</p>
							</div>
							<div class="event-info">
								<h3>The Best of GIRAF - International Animation Festival</h3>
							</div>
						</div>
						<div class="listings-section__events">
							<div class="date">
								<h2>2</h2>
								<p>Feb 2018</p>
							</div>
							<div class="event-info">
								<h3>Setsubun-Final Night of the Winter Lights</h3>
							</div>
						</div>
						<div class="listings-section__events">
							<div class="date">
								<h2>31</h2>
								<p>May 2018</p>
							</div>
							<div class="event-info">
								<h3>Eggstravaganza</h3>
							</div>
						</div>
						<a href="listings.php"><div class="btn">
							<p>see more</p>
						</div></a>
						<div class="clrfix"></div>
					</div>
					</div>
				</div>
			</section>
		</main>
		<?php include ('includes/footer.php'); ?>
	</body>
</html>
