<form method="get" action="/" class="search-input">
  <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path
        d="M10.8007 20.5C13.0943 20.4995 15.3219 19.7568 17.1287 18.39L22.8093 23.885L24.6365 22.1175L18.9559 16.6225C20.3696 14.8746 21.1379 12.7193 21.1384 10.5C21.1384 4.98625 16.5007 0.5 10.8007 0.5C5.10068 0.5 0.462891 4.98625 0.462891 10.5C0.462891 16.0138 5.10068 20.5 10.8007 20.5ZM10.8007 3C15.0766 3 18.554 6.36375 18.554 10.5C18.554 14.6362 15.0766 18 10.8007 18C6.52471 18 3.04734 14.6362 3.04734 10.5C3.04734 6.36375 6.52471 3 10.8007 3Z"
        fill="#222222" />
  </svg>
  <input type="search" name="s" placeholder="<?php echo esc_attr__( 'Search&hellip;', 'dreamman-wp' ); ?>" value="<?= get_search_query() ?>">
</form>