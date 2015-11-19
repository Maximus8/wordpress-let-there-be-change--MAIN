<div class="clearpad"></div>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'greenapples' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
</div>
</footer>
<div id="absnav"><nav id="access" role="navigation"><?php wp_nav_menu(array('menu' => 'mainmenu')); ?></nav></div>
<?php wp_footer(); ?>
</body>
</html>

