<?php
/*
  Video -> single__video
*/

$video_source = get_field('single__video');

if ($video_source) :
    $video_id = end(explode('/', $video_source));
?>
<section class="">
  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="__source">
        <iframe width="100%" height="500" class="block-video__iframe"
            src="https://www.youtube.com/embed/<?php echo $video_id; ?>"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write;
            encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</section>
<?php
endif;