<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'esprits_ardents_v2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'aubrynobel' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'nobelaubry5' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd^&O^fxLHf>mB@M1X%b,}uehgL3Kv%C$V}2;gI?tE.t2}}&,:-I?|;k<]pgGr(@,' );
define( 'SECURE_AUTH_KEY',  'wRzXN(tENtw[B$ hO^pOme)p3b#_u2&nvCe,p4tG_>>CFyL$^GX{xd8v)R-)?XtL' );
define( 'LOGGED_IN_KEY',    'lD $t[jT3!zoy#n3)Y/9/k]2L_h^B$8TrN8PL-26S:VOdRX![KlPZH5Dia&:Rts_' );
define( 'NONCE_KEY',        'cZ0Z.Q0k7v:F@(2|Q8Uuj*/NZNKEel<h~ <]?q<NTEH^T  H^>B7!Z.#2w;;0f_y' );
define( 'AUTH_SALT',        'ttc[0$D]}JH}66<Gsd=/op$-{I]]M18.W<22wE)q_9%P6`$9GA7F[lrt5wQ)Xna9' );
define( 'SECURE_AUTH_SALT', '?/LGBN)?+Y0jyp6b{~{b(n>>&36MM?}O/8MZv<[/4D-h k<h)8Sez<rI_Fv/,iTD' );
define( 'LOGGED_IN_SALT',   '$+::4FQiP{`!lR=0J.BqF/ %-lg+w6f[;kIOKL-$CI#`Rwz,iUoi?N}J&?5]oI8b' );
define( 'NONCE_SALT',       '{b~crX{7N0Jc=?q{^m=(dEaNt5R/ZW(IX.N5ZC@ rTj/.=2V-F=tS5igm~,TWkn>' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ea_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
