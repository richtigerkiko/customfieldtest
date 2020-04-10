/**
 * Add this code to functions.php of used theme
 * Add are you 18 field to checkout
 */

add_action( 'woocommerce_after_order_notes', 'are_you_eighteen_field' );

function are_you_eighteen_field( $checkout ) {

    echo '<div id="are_you_eighteen_field"><h2>' . __('Bist du 18?') . '</h2>';

    woocommerce_form_field( 'my_field_name', array(
        'type'          => 'checkbox',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('Hiermit bestätige ich, dass ich 18 bin'),
        ), $checkout->get_value( 'are_you_eighteen' ));

    echo '</div>';

}
