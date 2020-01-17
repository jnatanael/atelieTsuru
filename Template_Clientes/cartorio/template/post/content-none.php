<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
?>

<section class="noResults notFound">
    <header class="page-header">
        <h4>Nenhum informação encontrada!</h3>
    </header><!-- .page-header -->

    <div class="pageContent">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( __( 'Pronto para publicar o seu primeiro post? <a href="%1$s">Comece aqui!</a>.', ATELIE_THEME_NAME ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<p><?php _e( 'Desculpe, mas nada combina com seus termos de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.', ATELIE_THEME_NAME ); ?></p>
		<?php else : ?>
			<p><?php _e( 'Parece que não conseguimos encontrar o que você está procurando. Talvez a pesquisa possa lhe ajudar.', ATELIE_THEME_NAME ); ?></p>
		<?php endif; ?>
    </div><!-- .page-content -->
</section><!-- .no-results -->
