<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
get_header();
?>

<section id="contentPage">
		<div id="homePage">
			<div id="contentHome">
				<div class="container">
					<h4 class="center-align">Escolha o perfil que você mais se enquadra</h4>
					<br>
					<div class="row grid">
					<div class="col s12 m6">
						<figure class="effect-sarah">
							<img src="<?php echo $options['ctaHomeEmpresasImage']['url'] ?>" alt="Imagem representando MEIs, MEs, Pequenas, Médias e Grandes empresas"/>
							<figcaption>
								<h2><?php echo $options['ctaHomeEmpresasTitulo']; ?></h2>
								<p><?php echo $options['ctaHomeEmpresasDescricao']; ?></p>
								<button type="button" class="btn waves-effect waves-light">Conheça <span class="mbri-right"></span></button>
								<a href="<?php echo $options['ctaHomeEmpresasLink']; ?>" title="Acessar página para MEIs, MEs, Pequenas, Médias e Grandes empresas">Acessar</a>
								<div class="name" style="background: #5bc0de">
									<span><?php echo $options['ctaHomeEmpresasTitulo']; ?></span>
								</div>
							</figcaption>
						</figure>
						</div>
						<div class="col s12 m6">
						<figure class="effect-sarah">
							<img src="<?php echo $options['ctaHomeConsumidorImage']['url'] ?>" alt="Imagem representando consumidores."/>
							<figcaption>
								<h2><?php echo $options['ctaHomeConsumidorTitulo']; ?></h2>
								<p><?php echo $options['ctaHomeConsumidorDescricao']; ?></p>
								<button type="button" class="btn waves-effect waves-light">Conheça <span class="mbri-right"></span></button>
								<a href="<?php echo $options['ctaHomeConsumidorLink']; ?>" title="Acessar página para Consumidor.">Acessar</a>
								<div class="name" style="background: #5cb85c">
									<span><?php echo $options['ctaHomeConsumidorTitulo']; ?></span>
								</div>
							</figcaption>
						</figure>
						</div>
					</div>
				</div>
			</div>
			<svg id="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
				<path d="M0 0 C 50 100 50 100 100 0 Z" fill="#ffffff"/>
			</svg>
		</div>
</section>
<?php
get_footer();
