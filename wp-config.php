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
define( 'DB_NAME', 'bigben' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'K&(% qLK`Dmp-*ey(!dO.B6_|q<J-:.{a~T0Laxtgzjh>B>Za~2D@}O5nkpf@{Yt' );
define( 'SECURE_AUTH_KEY',  ',<FhnFNLUP#JS-7iP| w4DC%,29Sult|x4Sjwu,nL P=m@]XZMH}1mZ>#&5^n,45' );
define( 'LOGGED_IN_KEY',    '`oFmK0T[s:TAy}haWG-<N(me?!S/Y;J!~Ve>e(@e~/;>+E=1h9_16;{mdZA`Ifp!' );
define( 'NONCE_KEY',        '(mQoEAYMI <JY]3~9kLcDMx&z[?z[ZMOO%Sm7J`ISEH=f_4gI!V<Dn]C+#@(9)Fl' );
define( 'AUTH_SALT',        ' COo&4 RFA@B1}5b[wOK^_)&%_E<i?Hht8p6|`iwyna.G1Z6{]`,iCToLn`sz0+R' );
define( 'SECURE_AUTH_SALT', '0o%n{L|M-|5B7DOQ/7Z84Loc[!N]lDUm,5|;V7+wH;@JqaT^CO&,#=T,znB*,}(s' );
define( 'LOGGED_IN_SALT',   'y-G7hoE})EHBJa].|UiYqI[P]DywC([k|(|Hu@R#pC_?AGc!d*:r74S[sR+K}G,S' );
define( 'NONCE_SALT',       'HZJ.g5)2MKWobe%}I; bU= 6W|-$6_sRLs`%{8^lN>khCwT![8jA;+b?i7JdD3+A' );

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
