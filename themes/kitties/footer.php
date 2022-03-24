<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kitties
 */

?>

	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kitties' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'kitties' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'kitties' ), 'kitties', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer> -->
	<footer class="footer">
        <div class="footer__container">
            <nav class="footer__nav">
					<?php 
						wp_nav_menu([
						'menu' => 'Footer menu',
						'container' => '',
						'items_wrap' => '<ul class="menu menu_footer">%3$s</ul>'
						])
					?>
            </nav>
            <div class="footer__wrap-contacts">
                <div class="footer__wrap">
                    <div class="footer__title">Phone</div>
                    <a class="footer__tel tel" href="<?php get_field('phone_link', 'options'); ?>">
                        <?php echo get_field('phone_number', 'options'); ?>
                    </a>
                </div>
                <div class="footer__wrap">
                    <div class="footer__title">Email</div>
                    <a class="footer__email" href="<?php get_field('email_link', 'options'); ?>">
                       <?php echo get_field('email_name', 'options'); ?>
                    </a>
                </div>
            </div>
            <ul class="footer__socials socials">
                <?php
                    if( have_rows('socials', 'option') ):
                        while( have_rows('socials', 'option') ) : the_row();
                        $link = get_sub_field('soc_link', 'option');
                        $icon = get_sub_field('soc_icon', 'option');
                    ?>
                    <li class="socials__item"> 
                        <a class="socials__link" href="<?php echo $link; ?>">
                            <?php echo file_get_contents( get_attached_file( $icon ) ); ?>
                        </a>
                    </li>
                    <?php
                    endwhile;
                endif;
                ?>
            </ul>
            <div class="footer__wrap-img" class="footer__img" style="background: url('<?php echo get_field('img','options')['url']; ?>') center center / cover no-repeat">
                <!-- <img class="footer__img" src="img/footer/cards.png" alt="cards"> -->
            </div>
        </div>    
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
