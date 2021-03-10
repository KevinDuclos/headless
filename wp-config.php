<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'keuvain01_bazar' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'keuvain01' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Astoria1.0' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mysql-keuvain01.alwaysdata.net' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ' 6HoN~)b Z[t?;1z`kF~|l)~{J9>[DRvh F@MC>z1,u`Vbf22~(`XrnO:fy=]Lj%' );
define( 'SECURE_AUTH_KEY',  ' +)#@}Rb.)wr_H1w^8a+/8}.U)Bd&^5$eQ3[XwrtGdL0PWjUj:6tK_pnUR>=1@8;' );
define( 'LOGGED_IN_KEY',    'slb:T%Dd[9dy@Ued(bg3<vlFmvN)hG:yi0[%jZeybq<I/y 7#gLoTP4YN&sUd)JK' );
define( 'NONCE_KEY',        'nvm.GY(25SWyAv@CGyn,V`S11&ZP^IRiaWS[A>#kh}hmXnT|S))v2ST|i2<0*,=C' );
define( 'AUTH_SALT',        's!7&3KrG5JNq-j_R(+{:x6Iwl*)02g;r-t!6O4Sp,P;>]Fg_J#<^ p3jN;l$Rd6g' );
define( 'SECURE_AUTH_SALT', '!Bh*F7NcgOpZsJxt ui}<4~XqJ!PTLsN:Vv_pf:77Pkq,Y-H|@!LySB.j4ylOSHC' );
define( 'LOGGED_IN_SALT',   'Ob2B0.Yn9[%_@IjgD6VPf/GoBgbD$JU(Ce~Y%kvC^8PXU/XoG0I@;$GGPFYCBR-f' );
define( 'NONCE_SALT',       'h*7G/2QY$Q]w[Xf+ixN^UtqZ:rQYB/|DFSV+h,}EZ+aVlgR)<8ANZ,4:17SYK*KD' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_bazar';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
