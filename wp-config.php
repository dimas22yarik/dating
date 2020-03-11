<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'dating_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%$&u/~Y*Fc=+3}?JM?C&wqDDq6gM0L]HhHS|B3.Cq$KN)lO!k>CjV/$OU;Z+Lc}k' );
define( 'SECURE_AUTH_KEY',  'tYN3f4qbK~tUOVZV0go`=mPMV/[8I(t BqeqSKM`-}=_+u/-8wDnIt~_Fx_A>Ku}' );
define( 'LOGGED_IN_KEY',    ':N* s&297|2)!]QMZC`HKh1oLpVoOqiB  ~i5{xO`t_V.nk0uwD~8QZ>h:2jV]R&' );
define( 'NONCE_KEY',        ' exYC5a;8V1VSb4`1ucF1pV3}w$+U`qzf#gGie`>B;[K6s9#+ b7v7s{6egaDX90' );
define( 'AUTH_SALT',        'B1V*dH:`(kJ z$<Iv$,w)~XvIDM9;`J+A.enI:*Xz{L3>#_C3@9k/GL(=|1BUGVg' );
define( 'SECURE_AUTH_SALT', 'w-H1M>Z}Tpw-:%=< X`,62>1nZLJ:+H]/qb]9K42yeIfTibi^^Tx;a]=A7!u>Oy[' );
define( 'LOGGED_IN_SALT',   'rx^=!S1e3(k7.4[4@he&W-i5mqOC|APaBgk|+T2kLd84o u&eF1x*}(~oX|Nbg}/' );
define( 'NONCE_SALT',       '(0q$;d@wfduP!!8G9Rk*YD;/kHz%x9p+fu`5A/R KtYYoCAXxGITfOy/~qe?!LcQ' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
