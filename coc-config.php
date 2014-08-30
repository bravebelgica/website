<?php 

/**
 * The base configurations for the Clash of Clans application.
*
* This file has the following configurations: MySQL settings, Table Prefix,
* Secret Keys, CoC Language, and ABSPATH. 
*
*
* @package CoC
*/

// ** MySQL settings  ** //
define('DB_SCHEMA', 'bravebe1_bravebelgica');
define('DB_USER', 'bravebe1_laurent');
define('DB_PASSWORD', 'bungee.7');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 * @since 0.2.0
*/
define('AUTH_KEY', '!|CCvCDThwJ?$dpW=V=+tIv<<IsW%mYpGh(zRFmlyAGmFA_]m(!weszGj!&@Cpoda*V)j[lK>D+bpjdgUS=CK&OpH+yAv>obL*SI)B<i*fCSeByKZ+ymQ>UrMPg&FWK&');
define('SECURE_AUTH_KEY', 'F$yt/x[_+|;LxKor<soA^>ArV?U<TzXHdFS/ieOKFnJI<ogwqm/u$RZ)Z@Xhffn$kg+;MBQCux=(Yj(DLPBZ|YUSNUtfytAsUjwNag[BVm<;b>$&D/A]buah)zNxnSDn');
define('LOGGED_IN_KEY', 'qHo$LX&&X=Y%gLxp|kS-duP;=ydiZrSwpsGD^AII;duxS^vBwfgn+|^kqxxTc_sLOWHjVdvwq*StbdT=dl|;!p=%oH(d_vo?^r!MAY<a_EeSLOAmqR%U)bUj)nFCbiJS');
define('NONCE_KEY', '&<O!@wmHA&lcF&&qQE&|KM;g!DwNVwz+XUiOYbDfl!l/hu@|_l(pXL]IQZo)fYOsb;Pg^SB[eb<psR+dUB[}RVi^;e@G_O}vrl;AGjvNk)<+LArGgl;SE=WLD*|>me^c');
define('AUTH_SALT', 't/qmE?]iilPA?_)zik=[vJz)$Zew^yiB!^cS@el](%D}}%|d*wwoPQRlTJ>!_+mQI|h%|_<mkqv_Sq;em/I]!NPTA)o{Yh<E}y&IxFv({WI?e=A<kbGV?z*LBn!nlayx');
define('SECURE_AUTH_SALT', 'Qi_GUz[Kk>T^PFru&V@/$oXHZooBNPF^ZZd}-SmfoJehq?b+ECcYv$u$sp=<kgA&W$R+D}-d]vSdc)@iJ-j/+Q@!%[an+U[{Ji(?WR-(n?b;{ufmBY!MPPqX&!olhyd{');
define('LOGGED_IN_SALT', '+h[Mu+t%-UVP-aa%OnRDfaGuxSe+hi=|sdPh^{o>;}P@;HXEfL(y+;QKa{hnxDL_B>c=sohcSn@AnX_@RhXEh)dIlrZSt{|vKHoNitX)oeCGw]Rn|{x[PVtAKUzv@<zI');
define('NONCE_SALT', 'ap+R*pfVlN@VkVRBzTS>CVx&Byy?A*AMKz[A}!;rIb<ESlP%oyGFi!NwTfcmgo)Cp_/Gx-AmeiNdi/l)iR^}atNa!}ZceF%(/|l[J/g^}diiZ%j=RU|NS?Zvx!>F|/}S');

/**#@-*/

/**
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'coc_gobj_';

/**
 * Localized Language, defaults to English.
 *
 * Change this to localize the instalation. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers:  debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
*/
define('COC_DEBUG', false);



/** Absolute path to the COC directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up COC vars and included files. */
#require_once(ABSPATH . 'coc-settings.php');



