<?php 
	$page_title = "art beat"; 
	$active_page = "page_artbeat";
	$feature_title = "Art Beat";
	$section_title_01 = "latest news";
?>

<!DOCTYPE html>
<html>
	<?php include ('includes/head.php'); ?>
	<body>
		<?php include ('includes/header.php'); ?>
		<main>
			<section class="section-title">
				<div class="section-title__container">
					<p>latest news</p>
				</div>
			</section>
			<section class="artbeat-article">
				<div class="artbeat-article__img">
					<img src="images/darcy_logan.jpg">
				</div>
				<div class="artbeat-article--container">
						<h2>New Exhibits at Casa and SAAG Explore Alberta and Cosplay</h2>
						<p><img class="icon" src="icons/ic_access_time_black_24dp_1x.png">Wednesday, 06 Dec 2017 16:17</p>
						<p><img class="icon" src="icons/ic_person_black_24dp_1x.png">Richard Amery </p>
						<p>Casa has a number of new art exhibits happening this month. Artists Ed Bader and Peter Greendale explore  Alberta in their  exhibit “Northwest/Southwest” which opened at Casa, Nov. 4.
						<br><br>
						“Both of them are established artists who earned BFAs  at the University of Lethbridge before beginning their art careers,” said Casa curator Darcy Logan.			“It is an exploration of Alberta and two different geographic areas,’” Logan continued.	
						</p>
						<a href="article_01.php"><div class="btn">
							<p>read more</p>
						</div></a>
						<div class="clrfix"></div>
				</div>
			</section>
			<section class="artbeat-article">
				<div class="artbeat-article__img">
					<img src="images/adrian_cooke.jpg">	
				</div>
				<div class="artbeat-article--container">
					<h2>New exhibits opening at Casa explore barbed wire, memory and house music</h2>
					<p><img class="icon" src="icons/ic_access_time_black_24dp_1x.png">Saturday, 13 Jan 2017 12:53</p>
					<p><img class="icon" src="icons/ic_person_black_24dp_1x.png">Richard Amery </p>
					<p>Lethbridge based artist Adrian Cooke explores the design and history of barbed wire in his new exhibit “Chasing the Devil’s Rope,” one of five new exhibits opening at Casa tonight, Jan. 13.
					<br><br>
					“Chasing the Devil’s Rope” features sculpture and computer generated watercolour prints inspired by the shape of barbed wire, reflecting the historical role of the  product and it’s design.</p>
					<a href="article_02.php"><div class="btn">
						<p>read more</p>
					</div></a>
					<div class="clrfix"></div>
				</div>
			</section>
		</main>
		<?php include ('includes/footer.php'); ?>
	</body>
</html>