<footer>
    <div class="footer_wrap profile">
	<?php   wp_nav_menu( array ( 
        'theme_location'  => 'footer_menu', 
        'menu_class'      => 'footer_ul', 
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="footer_ul">%3$s</ul>',
        'depth'           => 0,
        'walker'          => '',
		) ); ?>
		<?php   wp_nav_menu( array ( 
        'theme_location'  => 'footer_menu2', 
        'menu_class'      => 'footer_ul', 
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="footer_ul">%3$s</ul>',
        'depth'           => 0,
        'walker'          => '',
        ) ); ?>
		
	</div>
	<div class="footer_wrap1 profile">
		<img src="<?php echo get_template_directory_uri(); ?>/Image/Picture.png" alt="">
	</div>
	<div class="footer_bottom_line">
		<p class="profile">&copy;&nbsp;Все права защищены. Веб-студия PanTQ, 2021</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
