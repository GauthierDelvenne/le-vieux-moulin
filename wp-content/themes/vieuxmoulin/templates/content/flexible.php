<?php if (have_rows('content')):
  while (have_rows('content')): the_row();
    if (get_row_layout() === 'text-media'):
      include('text-media/text-media.php');
    elseif (get_row_layout() === 'text'):
      include('text/text.php');
    elseif (get_row_layout() === 'media'):
      include('text-media/media.php');
    elseif (get_row_layout() === 'double-text-media'):
        include('text-media/double-text-media.php');
    elseif (get_row_layout() === 'landing-page'):
      include('landing-page/landing-page.php');
    elseif (get_row_layout() === 'button'):
        include('button/button.php');
    elseif (get_row_layout() === 'donator'):
        include('donation/donation.php');
    elseif (get_row_layout() === 'list'):
      include('list/list.php');
    elseif (get_row_layout() === 'background-list'):
      include('list/background-list.php');
    elseif (get_row_layout() === 'gallery_container'):
      include('gallery/gallery.php');
    elseif (get_row_layout() === 'image'):
      include('image/image.php');
    endif;
  endwhile;
endif;
