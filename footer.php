</main>


<?php wp_footer() ?>

<footer>
  <?php
  wp_nav_menu(
    array(
      'theme_location' => 'footer_menu',
      'container_class' => 'my_footer_menu_class'
    )
  );
  ?>
</footer>
  
</body>
</html>