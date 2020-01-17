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
<header>
	<div class="container">
		<h1>Oops! Página não encontrada!</h1>
	</div>
</header>

<?php require_once ('atelie/components/breadcrumbs.php'); ?>

<section id="error404">
	<main class="container">
		<h2>Erro 404</h2>
		<p>Pedimos desculpa, mas a página que acessou não está mais disponível ou foi removida.</p>
		<p>Já verificou na barra de endereço do seu navegador de internet se o URL está correto?</p>
		<p><strong>Caso prefira, tente uma pesquisa no campo a baixo!</strong></p>

		<div class="row">
			<div class="col s12 m8 l8">
				<?php get_search_form(); ?>
			</div>
		</div>

	</main>
</section>

<?php
get_footer();
