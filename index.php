<?php get_header() ?>

    <div class="test">
        <div class="test__container container">
            <h1 class="test__title">Тестовое задание</h1>

            <form id="form" class="test__form">
                <div class="test__form-container">
                    <div class="test__form-left">
                        <input class="test__form-username" type="text" name="username" placeholder="Ваше имя" value="">
                        <input class="test__form-phone" type="text" name="phone" placeholder="Ваш телефон" value="">
                        <button class="test__form-btn" type="submit">Отправить</button>
                    </div>

                    <div class="test__form-right">
                        <textarea class="test__form-message" name="message" cols="60" rows="5" placeholder="Ваше сообщение"></textarea>
                    </div>
                </div>
            </form>

            <div class="result">
                <div class="result__block result__username">
                    <span class="result__block-label">Ваше Имя:</span>
                    <span class="result__block-text">Пусто</span>
                </div>

                <div class="result__block result__phone">
                    <span class="result__block-label">Ваш телефон:</span>
                    <span class="result__block-text">Пусто</span>
                </div>

                <div class="result__block result__message">
                    <span class="result__block-label">Ваше сообщение:</span>
                    <span class="result__block-text">Пусто</span>
                </div>
            </div>
        </div>
    </div>

<?php get_footer() ?>