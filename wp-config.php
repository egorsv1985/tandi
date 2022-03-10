<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'tandi' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mqYV`~2_]7$p%8hw4z]q6Idw3x]k%ngkfzR.mzMX?e FV%q}psN&H`<j{Xxu`t^.' );
define( 'SECURE_AUTH_KEY',  '~]UV[Zig(1 `Yss,?Rq!:5T7ulM 7 +z+a0Tz?aYBr]/1Yy.S<VBHh~MH/`>3rk%' );
define( 'LOGGED_IN_KEY',    'eZ!-NT:~@GLQH_x1nuCn{D5_*kLE8dje+^-c%. &<$z;.u%U/}g+.LX[4Q=po!iS' );
define( 'NONCE_KEY',        '=ABxu<sYdg%7~`]aA8hBI1p-:)Xubl_$Lye%c2J0]7n0Ux2c{e9c AHqgv)v]]/r' );
define( 'AUTH_SALT',        'H71iYCSZbw(p23lq?RsI[y?C4nM_w?pHY_j@xEWGI4B`I;s*cc+Bjg}y/iZA-c&(' );
define( 'SECURE_AUTH_SALT', 'tsO;g@NBx;Mf1tzK0S@e2diW&9Sw{I*WHBQdPO9&MhbWfB*a:Jwj;vF12%,t|V9%' );
define( 'LOGGED_IN_SALT',   '.q(EjJpVz[G&i2?3~rIUZ)#a#yJA`17<N7Glu,|l%BEj9wn+KW}fulWw75%s9#Lm' );
define( 'NONCE_SALT',       'w7{A1d;r,0%6|/f3,K(wlsl|x_aWA2UJc[O]k20aUhGJ}:xM[Wl `os^w-`Ea1b!' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
