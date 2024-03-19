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
define( 'DB_NAME', '099-22_18655' );

/** Имя пользователя базы данных */
define( 'DB_USER', '099-22_18655' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '8dd83a4e5be4f1bd163a' );

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
define( 'AUTH_KEY',         '?aNn3pbiJ+b 1D^r[e*7S/$^ac<9{xstC<Q=aJ`6n,u<7-&Ax3}hH@#qR|}nB-ZC' );
define( 'SECURE_AUTH_KEY',  ']P5f[@L0nAK[.327kIYX&vV[FlwI:)13dbvk:JRY~2i]mOH`&hH(|a9F3DrWpw~&' );
define( 'LOGGED_IN_KEY',    'tqO(b{6`Z(BSdd.e>0BTGYA?u6q.@STx06aBQ@0#>UE/7{(5jblmjH9pcSBt<+MI' );
define( 'NONCE_KEY',        'BI]/Yn|0&`F><3K]j]h#eek&bSX4cYbD<@qLhxSO0;zoP/2Yi]`B1,L}CCFc %le' );
define( 'AUTH_SALT',        'tm#;>eqbjV{F;7P+^,@:};e+soNQxTqDU}hOuwfVjL%VUqTapjr@OPe&R}/E6xdW' );
define( 'SECURE_AUTH_SALT', '6>BKIP.@iqTe2-_m/iwc)iCkT*CXW<15JMB5d6<BNTIw*E??|9ty)E(zr)5@q?Ys' );
define( 'LOGGED_IN_SALT',   'b$oDn */[m8*1f0h2YbjMb=S)u31ePg%mm2lGEDy# 2Q+RfGX[4LiiKB^8S[al@u' );
define( 'NONCE_SALT',       '1_zUUGXt~L1C!) N+drDeN>oa-A:hDxh[ 18RPV-$00aD9+}G}b(~WN86[JqHa=f' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ejV7G_';


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