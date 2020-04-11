<?

/**
 * Add this code to functions.php of used theme (without <? ?>)
 */


 /**
  * Are you 18? checkbox
  */

add_action( 'woocommerce_after_order_notes', 'are_you_eighteen_field' );

function are_you_eighteen_field( $checkout ) {

    echo '<div id="are_you_eighteen_field"><h2>' . __('Bist du 18?') . '</h2>';

    woocommerce_form_field( 'are_you_eighteen', array(
        'type'          => 'checkbox',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('Hiermit bestätige ich, dass ich 18 bin'),
        ), $checkout->get_value( 'are_you_eighteen' ));
 <
    echo '</div>';
}


/**
 * Delivery Time Radiobuttons
 */

add_action ('woocommerce_after_order_notes', 'delivery_time_field');

function delivery_time_field( $checkout ){
    echo '<div id="delivery_time_field"<h2>' . __('Lieferzeit') . '</h2>';

    woocommerce_form_field( 'delivery_time', array(
        'type' => 'radio',
        'class' => array('form-row-wide'),
        'options' => array(
            '18:00' => '18:00 - 19:00',
            '19:00' => '19:00 - 20:00',
            '20:00' => '20:00 - 21:00',
            '21:00' => '21:00 - 22:00'
        ),
        'default' => '20:00'
    ));
    echo '</div>';
}

/**
 * Stop Copying Here!
 */

?>
