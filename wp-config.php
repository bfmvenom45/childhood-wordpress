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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '2312' );

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
define( 'AUTH_KEY',         '6l%@j;_7E& m1`Fwr,PFvOo~BeKWv&qW1=wRQB5]7!3CI3F/Z.HGVpd:9yzl(gg4' );
define( 'SECURE_AUTH_KEY',  '|:csar]NwP.%K5dGMX$8VOeq.FnxmbX.nX==4HD7@`<OW4e|c|p)Vt(!0t@s{E9q' );
define( 'LOGGED_IN_KEY',    'f^jK5Dl$DcO.@v3+DU.L<OWi ~5F(k_K&}B{)/IQy*}1h8%Y+!d G+r[`nlV}5@ ' );
define( 'NONCE_KEY',        'rRhY+$g/+UP*k<EaoQ%)+!aCMX6^PkPdo!$BP8~nr8W!GIIIK$d9Q!UhN/3#5-RA' );
define( 'AUTH_SALT',        '>Q&J@RNlh1+@ibFL>@kM?y-9F=)is.eSy=Yp5Vc}9,JTyg[o _e!`-QnV[*Zaw91' );
define( 'SECURE_AUTH_SALT', '(@r_Gz?Hx7CB6YpxpIHz-D8#Zj/$tTnAP2YlH2yLZKTa!#2GyB*E1?)/Y_ZpP<IL' );
define( 'LOGGED_IN_SALT',   's>g|UXY?]qCof9CbCia4t+j:h6l9IyL5#;tUstO;lVP-=2x!(x-i}JPZt8iPcKcq' );
define( 'NONCE_SALT',       '6U|)+K<A*lo39}X(p;GY)*#,6{P?Wg+9lj6NAH6&ow[@WdMR&6qi62>p.g33?_d.' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
