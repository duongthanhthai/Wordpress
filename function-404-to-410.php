/*Functions redirect 404 to 410 Gone
*Ideal from https://wp102.com - Forum WordPress Vietnamese!
*/
function wp102_404_to_410() {
    if ( is_404() ) {
        header( "HTTP/1.1 410 Gone" );
        exit;
    }
}
add_action( 'template_redirect', 'wp102_404_to_410' );
