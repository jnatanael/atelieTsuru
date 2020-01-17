<?php
/*
 * CTA Páginas
 */
?>

<div class="row" id="cta">
    <div class="col s12 m6" id="ctaCredor" style="background-image: url(<?php echo $options['ctaCredorImage']['url'] ?>)">
        <section class="right-align">
            <h2 class="wow slideInDown"><?php echo $options['ctaCredorTitulo']; ?></h2>
            <p class="wow slideInDown"><?php echo $options['ctaCredorDescricao']; ?></p>
            <a href="<?php echo $options['ctaCredorBotaoLink']; ?>" class="btn btn-large waves-effect waves-light wow slideInDown" title="Botão para <?php echo $options['ctaCredorBotaoTxt']; ?>">
                <span class="mbri-paper-plane"></span> <?php echo $options['ctaCredorBotaoTxt']; ?>
            </a>
        </section>
    </div>
    <div class="col s12 m6" id="ctaDevedor" style="background-image: url(<?php echo $options['ctaDevedorImage']['url'] ?>)">
    <section>
        <h2 class="wow slideInDown"><?php echo $options['ctaDevedorTitulo']; ?></h2>
        <p class="wow slideInDown"><?php echo $options['ctaDevedorDescricao']; ?></p>
        <a href="<?php echo $options['ctaDevedorBotaoLink']; ?>" class="btn btn-large waves-effect waves-light wow slideInDown" title="Botão para <?php echo $options['ctaDevedorBotaoTxt']; ?>">
            <span class="mbri-paper-plane"></span> <?php echo $options['ctaDevedorBotaoTxt']; ?>
        </a>
</section>
    </div>
</div>
