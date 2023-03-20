<?php
/**
 * Template Name: Sobre Nós
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PagBrasil
 */

get_header();
?>
	<script>
		const urlApi = "https://jsonplaceholder.typicode.com/users";
		let team;
		$.ajax (urlApi, {
			dataType: "json",
			method: 'GET',
			success: function(response){
				let teamMembers = response.filter(( member ) => member.phone.includes(')'));
				teamMembers.forEach( member => {
					$('#team').append(`
					<div class="col-md-3">
					<div class="team-member">
					<h2>${member.name}
					<span class="badge badge-light">${member.id}</span></h2>
					<img class="member-pic img-fluid mb-2" src="https://picsum.photos/330/375" />
					<p><strong>Informações Básicas</strong></p>
					<p>${member.username}</p>
					<p>${member.email}</p>
					<p>${member.phone}</p>
					<p>${member.website}</p>
					<p><strong>Endereço</strong></p>
					<p>${member.address.street}, ${member.address.suite}, ${member.address.city}, ${member.address.zipcode}</p>
					<p>${member.address.geo.lat}, ${member.address.geo.lng}</p>
					<p><strong>Empresa</strong></p>
					<p>${member.company.name}</p>
					<p>${member.company.catchPhrase}</p>
					<p>${member.company.bs}</p>
					</p>
					</div>
					</div>
				`);
				})
			},
			error: function(request,errorType, errorMsg){
				alert("Ajax Error:" + errorMsg);
			},
			data: {"postId": 1},

		});
	</script>
	<main id="primary" class="site-main">

		<div class="container pt-5">

			<!-- Three columns of text below the carousel -->
			<div class="row">
			<div class="col-lg-12">
				<?php if ( have_posts() ) : the_post() ?>
				<h1><?php the_title();?></h1>

				<?php the_content();
				endif; // End of the loop.
				?>
			</div><!-- /.col-lg-12 -->
			</div><!-- /.row -->

			<div id="team" class="row ">
				<div class="col-sm-12">
					<h1>Equipe</h1>
				</div>
			
			</div><!-- /.row -->
  		</div><!-- /.container -->


<?php
get_footer();
