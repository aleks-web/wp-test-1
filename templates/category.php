<?php get_header() ?>

<?php get_template_part('templates/services'); ?>

<?php get_template_part('templates/form'); ?>

<div id="order-call" class="order-call" style="display:none;max-width:500px;">
    <div class="order-call__title">
        Заказ обратного звонка
    </div>

    <?php echo do_shortcode('[contact-form-7 id="2b6e640" title="Консультация"]'); ?>
</div>

<?php get_footer() ?>