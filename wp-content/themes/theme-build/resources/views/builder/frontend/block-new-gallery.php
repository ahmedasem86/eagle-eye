<!--stert gallery-->
<div class="desecerption" id="<?= $block['id']; ?>">
 <div class="title">
         <h6>Gallery</h6>
      </div>

</div>

<div id="aniimated-thumbnials">
  <?php
  $images = get_field('gallery');
    if($images)
    {
      foreach($images as $image) {?>
  <a href="<?= $image; ?>">
    <img src="<?= $image; ?>" />
  </a>
  <?php }
}
?>
</div>

<!--end gallrey-->
