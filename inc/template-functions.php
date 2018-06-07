<?php

/**
 * Get theme_mod address setting from customizer
 */
function dhali_get_address() {
  $default = '1234 City Drive <br> Big City, CA 90000';
  $address = get_theme_mod( 'address_setting', $default );

  if ( $address ) {
    echo '<address class="address">';
      echo $address;
    echo '</address>';
  }
}

/**
 * Get theme_mod phone setting from customizer
 */
function dhali_get_phone() {
  $default = '555-555-5555';
  $phone = get_theme_mod( 'phone_number_setting', $default );

  if ( $phone ) {
    echo ' <p class="phone-number">';
      echo $phone;
    echo '</p>';
  }
}

/**
 * Get theme_mod phone setting from customizer
 */
function dhali_get_email() {
  $default = 'email@email.com';
  $email = get_theme_mod( 'email_setting', $default );

  if ( $email ) {
    echo '<p class="email-address">';
      echo '<a href="mailto:'. $email .'">'. $email .'</a>';
    echo '</p>';
  }
}
