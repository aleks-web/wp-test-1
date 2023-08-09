// * Модули * //
// ?src - взять
// ?dest - положить
// ?watch - слежка за изменениями в файлах
// ?parallel - позволяет запускать параллельно какие-нибудь таски (обновление браузера и слежка за файлами)

const { src, dest, watch, parallel } = require("gulp"), // Gulp
    scss = require("gulp-sass")(require("sass")), // sass
    concat = require("gulp-concat"), // concat - соеденить скрипты
    autoprefixer = require("gulp-autoprefixer"); // gulp-autoprefixer - префиксы для браузеров

// Переменные путей
const dir = {
    // Дирректории приложения
    scss: "assets/scss/",
    css: "assets/css/",
};

// Обработка стилей
function styles() {
    return src([`${dir.scss}` + "style.scss"])
        .pipe(scss())
        .pipe(concat("style.css"))
        .pipe(
            autoprefixer({
                overrideBrowserslist: ["last 10 version"],
            })
        )
        .pipe(dest(`${dir.css}`));
}

// Слежка за файлами
function watching() {
    watch([`${dir.scss}` + "**/*.scss"], styles);
}

exports.styles = styles;
exports.watching = watching;

exports.default = parallel(styles, watching);
