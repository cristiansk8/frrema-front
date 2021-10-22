<?php
  /**
   *
    Bloque Donación -> block_donation
        -   Bloque donación título -> block_donation__title
        -   Bloque donación texto  -> block_donation__text
        -   Bloque donación imagen -> block_donation__image
        -   Bloque donación mosaico -> block_donation_mosaic (Repeater)
            -   Bloque donación mosaico imagen -> block_donation_mosaic__image
            -   Bloque donación mosaico texto -> block_donation_mosaic__text
   */

  $block_donation = get_field('block_donation');
  if ($block_donation) : ?>
  <section class="block-donation container-fluid no-gutters">
    <?php
    while(have_rows('block_donation')): the_row();
        $ms_image = get_sub_field('block_donation__image');
        $ms_image_mobile = get_sub_field('block_donation__image_mobile');
        $ms_title = get_sub_field('block_donation__title');
        $ms_text = get_sub_field('block_donation__text');
        $ms_bg = get_sub_field('block_donation__bg');
        $ms_image_side = get_sub_field('block_donation__image_side');
        $ms_text_link = (get_sub_field('block_donation__cta-text')) ? get_sub_field('block_donation__cta-text') : 'Más Información';
     ?>
      <div class="block-banner--<?php echo $ms_bg; ?> row g-0">
        <div class="col-lg-6">
          <?php if ($ms_link) : ?>
            <a href="<?php echo $ms_link; ?>">
          <?php endif; ?>
          <picture class="block-banner__image">
            <?php if ($ms_image_mobile) : ?>
              <source media="(max-width: 799px)" srcset="<?php echo esc_url($ms_image_mobile['url']); ?>">
            <?php endif;?>
            <?php if ($ms_image) : ?>
              <img src="<?php echo esc_url($ms_image['url']); ?>" alt="<?php echo esc_attr($ms_image['alt']); ?>"/>
            <?php endif; ?>
          </picture>
          <?php if ($ms_link) : ?>
            </a>
          <?php endif; ?>
        </div>
        <div class="col-lg-6">
          <div class="block-banner__content">
            <?php if ($ms_text) : ?>
              <span class="block-banner__tag"><?php echo $ms_tag; ?></span>
              <h3 class="block-banner__title">
                <?php echo $ms_title; ?>
              </h3>
              <p class="block-banner__text"><?php echo $ms_text; ?></p>
            <?php endif; ?>
            <?php if ($ms_image_side) : ?>
              <figure class="block-banner__side-img">
                <img src="<?php echo esc_url($ms_image_side['url']); ?>" alt="<?php echo esc_attr($ms_image_side['alt']); ?>"/>
              </figure>
            <?php endif; ?>
            <?php if ($ms_link) : ?>
              <a href="<?php echo $ms_link; ?>" class="c-button">
                <span class="c-button__content"><?php echo $ms_text_link; ?></span>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php
    endwhile; ?>
  </section>
<?php
  endif;
