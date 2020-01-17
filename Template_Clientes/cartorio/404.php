<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
get_header();
?>


<header class="parallax-container valign-wrapper" id="headerPage">
	<div class="container">
		<h1><strong>Erro 404</strong></h1>
		<div class="description">
			<p>Página não encontrada!</p>
		</div>
	</div>
	<div class="parallax">
	<img src="<?php bloginfo('template_url'); ?>/assets/img/Erro404.jpg" alt="Background Erro 404">
	</div>
</header>

<section id="contentPage" class="blogPage">
	<article id="error404">
		<div class="container center-align">
			<div class="infoError">
				<span><span>4</span></span>
				<span class="material-icons mbri-sad-face icon-large"></span>
				<span><span>4</span></span>
			</div>
			<p class="erroText">Oops! Erro 404!</p>
			<p>Pedimos desculpa, mas a página que acessou não está mais disponível ou foi removida. <br>Já verificou na barra de endereço do seu navegador de internet se o URL está correto?</p>
			<h4>
				<strong>Caso queira, efetua uma pesquisa no campo a baixo!</strong>
			</h4>
			<br>
			<div>
				<?php get_search_form(); ?>
			</div>

		</div>
	</article>
</section>

<?php
require_once ('atelie/components/ctaPage.php');
get_footer();
