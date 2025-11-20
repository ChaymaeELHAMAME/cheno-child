<?php
/**
 * Footer du thème enfant Chenocom
 */

//  Récupérer la langue courante via Polylang 
if ( function_exists( 'pll_current_language' ) ) {
  $lang = pll_current_language();       // langue active
} else {
  $lang = 'en';                         // fallback si Polylang n’est pas installé
}

/**
 *  Textes du footer gérés en PHP sans interface Polylang
 * On stocke toutes les chaînes FR / EN dans un tableau,
 * puis on utilisera $t['clé'] pour afficher le texte.
 */
$footer_txt = [
  'fr' => [
    'company'       => 'Entreprise',
    'why'           => 'Pourquoi Chenocom ?',
    'blog'          => 'Blog',
    'services'      => 'Nos services',
    'team'          => 'Notre équipe',

    'working_time'  => 'Horaires',
    'mon_fri'       => 'Lun–Ven :',
    'sat'           => 'Samedi :',
    'sun'           => 'Dimanche :',
    'mon_fri_hours' => '09h00–18h00',
    'sat_hours'     => '09h00–13h00',
    'sun_closed'    => 'Fermé',

    'contact_us'    => 'Contactez-nous',
    'addr_line1'    => 'N° 1095 3ème étage Apt n°4,',
    'addr_line2'    => 'Amal 5 Massira CYM Rabat',

    'newsletter'    => 'S’abonner à la newsletter',
    'email_label'   => 'Adresse e-mail',
    'send'          => 'Envoyer',

    'security'      => 'Sécurité',
    'privacy'       => 'Politique de confidentialité & cookies',
    'terms'         => 'Conditions d’utilisation',
    'rights'        => 'Tous droits réservés',
  ],

  'en' => [
    'company'       => 'Company',
    'why'           => 'Why Chenocom?',
    'blog'          => 'Blog',
    'services'      => 'Our services',
    'team'          => 'Our team',

    'working_time'  => 'Working time',
    'mon_fri'       => 'Mon–Fri:',
    'sat'           => 'Saturday:',
    'sun'           => 'Sunday:',
    'mon_fri_hours' => '09:00AM–18:00 PM',
    'sat_hours'     => '09:00AM–13:00 PM',
    'sun_closed'    => 'Closed',

    'contact_us'    => 'Contact us',
    'addr_line1'    => 'N° 1095 3rd floor Apt n°4,',
    'addr_line2'    => 'Amal 5 Massira CYM Rabat',

    'newsletter'    => 'Subscribe newsletter',
    'email_label'   => 'Email address',
    'send'          => 'Send',

    'security'      => 'Security',
    'privacy'       => 'Privacy Cookie Policy',
    'terms'         => 'Terms Of Services',
    'rights'        => 'All Rights Reserved',
  ],
];

//  Sécurité : si jamais $lang ne correspond pas à une clé du tableau → forcer EN
if ( ! isset( $footer_txt[ $lang ] ) ) {
  $lang = 'en';
}
//  Raccourci : $t contiendra toutes les chaînes pour la langue actuelle
$t = $footer_txt[ $lang ];
?>

<footer class="site-footer" role="contentinfo">
  <!--  Barre haut: logo + icônes réseaux sociaux -->
  <div class="footer-top">
    <div class="container footer-top__inner">

      <!-- Logo du footer qui renvoie vers la page d’accueil -->
      <a class="footer-logo" href="<?php echo esc_url( home_url('/') ); ?>">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/Group.png' ); ?>"
          alt="CHENOCOM"
          width="150"
          height="36"
          loading="lazy">
      </a>

      <!-- Liste des réseaux sociaux avec icônes SVG -->
      <ul class="footer-social" aria-label="Réseaux sociaux">
        <li>
          <a href="#" aria-label="Instagram">
            <svg viewBox="0 0 24 24" class="ico">
              <path d="M12 7.3a4.7 4.7 0 1 0 0 9.4 4.7 4.7 0 0 0 0-9.4Zm0 7.7a3 3 0 1 1 0-6 3 3 0 0 1 0 6Zm5.3-7.9a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0ZM12 2c3.3 0 3.7 0 5 .1 1.2.1 1.9.2 2.6.6.7.4 1.3 1 1.7 1.7.4.7.6 1.4.6 2.6.1 1.3.1 1.7.1 5s0 3.7-.1 5c-.1 1.2-.2 1.9-.6 2.6-.4.7-1 1.3-1.7 1.7-.7.4-1.4.6-2.6.6-1.3.1-1.7.1-5 .1s-3.7 0-5-.1c-1.2-.1-1.9-.2-2.6-.6a4.3 4.3 0 0 1-1.7-1.7c-.4-.7-.6-1.4-.6-2.6C2 15.7 2 15.3 2 12s0-3.7.1-5c.1-1.2.2-1.9.6-2.6.4-.7 1-1.3 1.7-1.7.7-.4 1.4-.6 2.6-.6C8.3 2 8.7 2 12 2Z"/>
            </svg>
          </a>
        </li>

        <li>
          <a href="#" aria-label="Facebook">
            <svg viewBox="0 0 24 24" class="ico">
              <path d="M13.5 22v-8h2.6l.4-3h-3v-2c0-.9.3-1.5 1.6-1.5H17V4.1C16.6 4 15.6 4 14.4 4 11.9 4 10 5.6 10 8.6V11H7.5v3H10v8h3.5Z"/>
            </svg>
          </a>
        </li>

        <li>
          <a href="#" aria-label="YouTube">
            <svg viewBox="0 0 24 24" class="ico">
              <path d="M23.5 7.1s-.2-1.6-.8-2.3c-.8-.9-1.7-1-2.1-1.1C17.8 3.4 12 3.4 12 3.4s-5.8 0-8.6.3c-.4.1-1.3.2-2.1 1.1-.6.7-.8 2.3-.8 2.3S.3 9 .3 10.9v2.2C.3 15 .5 17 .5 17s.2 1.6.8 2.3c.8.9 1.8 1 2.3 1.1 1.7.2 7.4.3 8.4.3s5.8 0 8.6-.3c.4-.1 1.3-.2 2.1-1.1.6-.7.8-2.3.8-2.3s.2-1.9.2-3.8V10.9c0-1.9-.2-3.8-.2-3.8ZM9.8 15.2V7.8l6.2 3.7-6.2 3.7Z"/>
            </svg>
          </a>
        </li>

        <li>
          <a href="#" aria-label="WhatsApp">
            <svg viewBox="0 0 24 24" class="ico">
              <path d="M12 2a9 9 0 0 0-7.6 13.7L3 22l6.5-1.7A9 9 0 1 0 12 2Zm0 2a7 7 0 0 1 5.8 10.9l-.3.5a1 1 0 0 1-1.1.5l-2-.5a1 1 0 0 1-.7-.6l-.4-1a1 1 0 0 1 .3-1.2l.4-.3c.3-.2.4-.6.2-.9l-1-1.7a1 1 0 0 0-1.5-.3c-1.1.8-1.8 1.6-1.1 3.2.8 1.8 2.6 3.5 4.5 4.2 1.6.6 2.5-.1 3.3-1.2A7 7 0 0 1 12 4Z"/>
            </svg>
          </a>
        </li>
      </ul>
    </div>

    <!-- Séparateur décoratif -->
    <span class="footer-sep" aria-hidden="true"></span>
  </div>

  <!-- Grille centrale du footer : 4 colonnes -->
  <div class="container footer-grid">

    <!-- Colonne 1 : liens Entreprise -->
    <section>
      <h3 class="ft-title"><?php echo esc_html( $t['company'] ); ?></h3>
      <ul class="ft-list">
        <li>
          <!-- Lien vers la page "About" (slug à adapter si besoin) -->
          <a href="<?php echo esc_url( cheno_page_url('About') ); ?>">
            <?php echo esc_html( $t['why'] ); ?>
          </a>
        </li>
        <li><a href="#"><?php echo esc_html( $t['blog'] ); ?></a></li>
        <li><a href="#"><?php echo esc_html( $t['services'] ); ?></a></li>
        <li><a href="#"><?php echo esc_html( $t['team'] ); ?></a></li>
      </ul>
    </section>

    <!-- Colonne 2 : horaires -->
    <section>
      <h3 class="ft-title"><?php echo esc_html( $t['working_time'] ); ?></h3>
      <ul class="ft-list ft-hours">
        <li>
          <strong><?php echo esc_html( $t['mon_fri'] ); ?></strong>
          <?php echo esc_html( $t['mon_fri_hours'] ); ?>
        </li>
        <li>
          <strong><?php echo esc_html( $t['sat'] ); ?></strong>
          <?php echo esc_html( $t['sat_hours'] ); ?>
        </li>
        <li>
          <strong><?php echo esc_html( $t['sun'] ); ?></strong>
          <?php echo esc_html( $t['sun_closed'] ); ?>
        </li>
      </ul>
    </section>

    <!-- Colonne 3 : contact -->
    <section>
      <h3 class="ft-title"><?php echo esc_html( $t['contact_us'] ); ?></h3>
      <ul class="ft-list ft-contact">
        <!-- Lien mailto pour ouvrir le client mail -->
        <li><a href="mailto:contact@chenocom.com">contact@chenocom.com</a></li>
        <!-- Lien tel: pour appel depuis mobile -->
        <li><a href="tel:0808576507">0808576507</a></li>
        <!-- Adresse sur 2 lignes -->
        <li><?php echo esc_html( $t['addr_line1'] ); ?></li>
        <li><?php echo esc_html( $t['addr_line2'] ); ?></li>
      </ul>
    </section>

    <!-- Colonne 4 : formulaire newsletter -->
    <section>
      <h3 class="ft-title"><?php echo esc_html( $t['newsletter'] ); ?></h3>

      <!-- Formulaire simple  -->
      <form class="ft-newsletter" action="#" method="post">
        <!-- Label caché pour l’accessibilité lecteurs d’écran -->
        <label class="sr-only" for="nl-email">
          <?php echo esc_html( $t['email_label'] ); ?>
        </label>

        <!-- Champ e-mail -->
        <input
          id="nl-email"
          name="email"
          type="email"
          placeholder="<?php echo esc_attr( $t['email_label'] ); ?>"
          required
        >

        <!-- Bouton d’envoi -->
        <button type="submit" class="btn-yellow">
          <?php echo esc_html( $t['send'] ); ?>
        </button>
      </form>
    </section>
  </div>

  <!-- Barre légale tout en bas -->
  <div class="footer-legal">
    <div class="container footer-legal__inner">

      <!-- Liens légaux  -->
      <nav class="legal-links" aria-label="Mentions">
        <a href="#"><?php echo esc_html( $t['security'] ); ?></a>
        <span>/</span>
        <a href="#"><?php echo esc_html( $t['privacy'] ); ?></a>
        <span>/</span>
        <a href="#"><?php echo esc_html( $t['terms'] ); ?></a>
      </nav>

      <!-- Texte copyright avec année dynamique -->
      <div class="copyright">
        © Chenocom <?php echo date('Y'); ?>. <?php echo esc_html( $t['rights'] ); ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer();  ?>
</body>
</html>
