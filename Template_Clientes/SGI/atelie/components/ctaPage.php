<?php
/*
 * CTA Páginas
 */
?>

<div class="parallax-container valign-wrapper" id="cta">
    <section class="container center">
        <h2 class="wow slideInDown"><?php echo $options['ctaPagetitulo']; ?></h2>
        <p class="wow slideInDown"><?php echo $options['ctaPagedescricao']; ?></p>
        <a href="<?php echo $options['ctaPageBotaoLink']; ?>" class="btn btn-large waves-effect waves-light pulse wow zoomIn" title="Botão para <?php echo $options['ctaPagebotaoTxt']; ?>">
            <?php echo $options['ctaPagebotaoTxt']; ?>
        </a>
    </section>
    <div class="parallax">
        <img src="<?php echo $options['ctaPageImage']['url'] ?>" alt="Background Call to action">
    </div>
</div>
