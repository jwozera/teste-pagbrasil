<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PagBrasil
 */

?>

	<footer class="footer-blue">
		<div class="container">
		<div class="row">
			<div class="logo-footer col-md-8">
			<img src="<?php echo get_template_directory_uri().'/assets/img/pagbrasil-footer.svg'?>" />
			</div>
			<ul class="social  col-md-4">
			<li><a href="https://www.facebook.com/pagbrasilpagamentos/" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/img/Facebook.svg'?>" /></a></li>
			<li><a href="https://www.linkedin.com/company/pagbrasil-pagamentos-eletronicos-ltda/" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/img/Linkedin.svg'?>" /></a></li>
			<li><a href="https://www.youtube.com/channel/UCCVK7QsAHaFp8MVC-ox0xSQ"  target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/img/Youtube.svg'?>" /></a></li>
			</ul>
		</div>
		<p class="text-center">Copyright &copy; 2023 PagBrasil Pagamentos Eletrônicos LTDA - CNPJ 14.630.124/0001-65</p>
		</div>
	</footer>
</main><!-- #main -->

<?php wp_footer(); ?>

</body>
</html>
