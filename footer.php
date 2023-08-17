
    <footer class="footer">
        <div class="footer__container container">
            <span class="footer__title">Тестовое задание</span>

            <div class="footer__contacts">

                <span class="footer__contacts-title">Мои контакты</span>

                <div class="footer__contacts-wrap">
                    <a class="footer__contacts-link" href="https://t.me/webalexey" target="_blanck">
                        <svg style="fill: #229ED9;">
                            <use xlink:href="#svg-telegram"></use>
                        </svg>
                        <span>Telegram</span>
                    </a>
                    <a class="footer__contacts-link" href="https://wa.me/79195798871" target="_blanck">
                        <svg style="fill: #25D366;">
                            <use xlink:href="#svg-whatsapp"></use>
                        </svg>
                        <span>WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <?php get_template_part('templates/svg'); ?>

    <div id="order-call" class="order-call" style="display:none;max-width:500px;">
        <div class="order-call__title">
            Заказ обратного звонка
        </div>

        <?php echo do_shortcode('[contact-form-7 id="260e104" title="Обратный звонок"]'); ?>
    </div>
</body>
</html>