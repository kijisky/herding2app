<div class="profile">
<!--sidebar-->
    <aside class="sidebar">
        <h3 class="bold">Основное меню</h3>
            <?php   wp_nav_menu( array ( 
            'theme_location'  => 'sidebar',
            'menu'            => 'sidebar', 
            'container'       => null, 
            'container_class' => '', 
            'menu_class'      => 'primary', 
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
            ) ); ?>
        <h3 class="bold">Моё меню</h3>
            <?php   wp_nav_menu( array ( 
            'theme_location'  => 'sidebar2',
            'menu'            => 'my', 
            'container'       => null, 
            'container_class' => '', 
            'menu_class'      => 'my', 
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',

            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
            ) ); ?>
          
        <h3 class="bold">План мероприятий </h3>
        <?php   wp_nav_menu( array ( 
            'theme_location'  => 'sidebar3',
            'menu'            => 'plan', 
            'container'       => null, 
            'container_class' => '', 
            'menu_class'      => 'plan', 
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
            ) ); ?>
    </aside>
<!--/sidebar-->