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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'db_wptest' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'wVZsAK)@>Dy,~HS+>Iv/}r3/Beu%Pv+^J~Ic+V%vG|--%_sF^#,!Ppav=#8}=D@@' );
define( 'SECURE_AUTH_KEY',  'EpxH/v5p]/2c@&qJ5I6<_j1hQnsYmj9N7OVKAGzJv>IJx4w:A.h9ze[3x>OeBAup' );
define( 'LOGGED_IN_KEY',    'Nfiv(T|0GXsN_LU(4TTV%l{T1/yWzaIr{*%[eDKAgQ136pL6:Z<62#x3J@sId f%' );
define( 'NONCE_KEY',        'IV~g^73PG2o@^vh8+bqqy,vQcskXm>gM)Ogfk[cT}@Ge7@_uAT-hslnU%(bh!c-5' );
define( 'AUTH_SALT',        'wA40sF|B1Kp?1+;5bg)5T0FE-N^9#q~I=F8gk#3WAg-4VVJ_V^Lvtf,-NjudhF`f' );
define( 'SECURE_AUTH_SALT', 'oj~m3d1<t@Bn]{?Jb[DOo4imDr<xA>wmQ2w@UEg62.I!{!g{ke!|E&B6~>Z.U/GY' );
define( 'LOGGED_IN_SALT',   '3ZODf7zj|V,k1PS&%RSy_8EFlL1Jhy{Y$cO_RS6mNJ#4b9JvgTfn#yU?bgTgcNsM' );
define( 'NONCE_SALT',       ')sb]BO#c/cHYWz^C=EmvPrI!LyygzB|bdJk*$imRk5uRXJdA Tdo-Z~C>-IV6MRZ' );

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
