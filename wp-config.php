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
 * * Настройки базы данных
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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         'u`)n<$,PnOTWhl]YT5AD)`5M@e1j1^UnPy8%rz`R_VWT~Lx)prFk_CHc1E=-XTX$' );
define( 'SECURE_AUTH_KEY',  'DJPw_-=PpR=rs%@yh]T@f(=r:EDpU-Yt}fqRQ6G&6J}&pyweDIsOVWb aP}Q.;G.' );
define( 'LOGGED_IN_KEY',    '~U,#2tV3i8KqJ-~c;:uc4oGY6^VxiG{L !n3Vu5<U0L_!5}$[%SHXF`.=[VLqc90' );
define( 'NONCE_KEY',        '`$?k/Mv~1 ~kV#SCwbIi+IYloHS)(UfU3<6Z>u-]}PDn^:8U):ZC>Sbhpa-GJ4)6' );
define( 'AUTH_SALT',        'J1un{>5n<aEWGB7/`Gi[*r,,U79>fT-/%hr{;~ 1OCJ,:$9gFDf]B)(oOV3BBK6*' );
define( 'SECURE_AUTH_SALT', 'I-ERI.j3{Gi1]+-pbM^w%][B@>+Fz<)?q;cfkGZyScX@|u0i)c?g;{8mh,Hd|xkB' );
define( 'LOGGED_IN_SALT',   'X3i2KRw(G9YNe8}%a!B^.`~/jb}%ju/Z<hxU@6z-S0q6)xlrKl?0yyh4O2&~uFr<' );
define( 'NONCE_SALT',       '(Y~bY#Wl`}L+KG;gYQ&,9573KEICG*,W1Lv$.Ap?sI0/( M*qUxXmdv,w02a]_d<' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'shop_';

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
