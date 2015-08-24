<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

define('FS_METHOD', 'direct');


// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'kokura');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Iv/gM3Ku.AQ_/UW6$(E@*:hCfd$&}C^?P!,(`yW0V|%sJIG){fRb]NF8)|`nGEG[');
define('SECURE_AUTH_KEY',  '}[&9 kJ-X, N;=w<#h.<#u{)ew<s&<}Ii4$|%EQ87Y4=&N/I>YA(FsfO->2juf[x');
define('LOGGED_IN_KEY',    'u!+V_%R5eoB?eoA$B-CA>ZB$EQnYOC>Im4w}ab1*^^9QxwfAe Do1FY]yTDHM.Ah');
define('NONCE_KEY',        'TT 3Gq/d)8>w>aR2r,3QfD&?: J@_UHj0z/GJ7s-aDTH[*-A]|{UsU>uy4CJOy&Q');
define('AUTH_SALT',        'k`3~Ik5Xvj:hZ09CPm_?L;&],?=x`NU?[vyE%Isa5WL?~K,E=JTsrYseJ&k;P9<m');
define('SECURE_AUTH_SALT', 'B|uAFcBdb:byX(D4p.;A6f@=0u6Sk0hGEyv^FColwfm.4.<sNfK+|x`IY G~OMe.');
define('LOGGED_IN_SALT',   'qyC4}e_%IU>r0/t^_2`DS$pn?nNWmGJ3XG53/@JgN6H@)U)Q1$6bt+^4|YUD@[f=');
define('NONCE_SALT',       'V@&R^?~~k@Aq?}S FyMvl,58MRxjSEEnt#_vIPo,--NNv*xJX:U>bMCo!dooQgML');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
