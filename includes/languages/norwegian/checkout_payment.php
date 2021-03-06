<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_payment.php 105 2012-03-26 18:40:42Z syntaxerror.no $
 */

define('NAVBAR_TITLE_1', 'Kasse');
define('NAVBAR_TITLE_2', 'Betalingsmåte');

define('HEADING_TITLE', 'Betalingsinformasjon');

define('TABLE_HEADING_BILLING_ADDRESS', 'Fakturaadresse');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Du kan endre betalingsadressen ved å trykke på knappen <em>Endre adresse</em>.');
define('TITLE_BILLING_ADDRESS', 'Fakturaadresse:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Betalingsmåte');
define('TEXT_SELECT_PAYMENT_METHOD', 'Vennligst velg betalingsmåten for denne ordren.');
define('TITLE_PLEASE_SELECT', 'Vennligst velg');
define('TEXT_ENTER_PAYMENT_INFORMATION', 'Dette er på dette tidspunkt den eneste betalingsmåten tilgjengelig i vår butikk.');
define('TABLE_HEADING_COMMENTS', 'Kommentarer til ordren');

define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'Ikke tilgjengelig for øyeblikket');
define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Beklager, men vi har ingen betalingsvalg tilgjengelig for ditt land/område for øyeblikket.</span><br />Ta kontakt for å avtale alternativ løsning.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Fortsett til neste steg</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- for å kontrollere ordren.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Våre betingelser</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Vennligst bekreft at du har lest og akseptert våre betingelser tilknyttet denne ordren ved å krysse av for dette i feltet nedenfor. <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" target="_blank"><span class="pseudolink">Klikk her for å lese våre betingelser</span></a>.');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Jeg har lest og akseptert betingelsene tilknyttet denne ordren.</span>');

define('TEXT_CHECKOUT_AMOUNT_DUE', 'Totalsum: ');
define('TEXT_YOUR_TOTAL','Din ordretotal');
