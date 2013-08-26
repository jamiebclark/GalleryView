<?php
$this->Html->script('GalleryView.script', array('inline' => false));
$this->Html->css('GalleryView.style', null, array('inline' => false));
?>
<div class="gallery-view">
	<div class="gallery-view-image"><?php 
		echo $this->fetch('galleryViewImage'); 
		if (!empty($prevUrl)) {
			echo $this->Html->link('&laquo;', $prevUrl, array('escape' => false, 'class' => 'photo-view-control prev'));
		}
		if (!empty($nextUrl)) {
			echo $this->Html->link('&raquo;', $nextUrl, array('escape' => false, 'class' => 'photo-view-control next'));
		}
	?></div>
	<div class="gallery-view-thumbnails">
		<?php echo $this->fetch('galleryViewThumbnails'); ?>
	</div>
	<?php if ($info = $this->fetch('galleryViewInfo')): ?>
		<div class="gallery-view-info">
			<?php echo $info; ?>
		</div>
	<?php endif; ?>
	<?php if ($secondary = $this->fetch('galleryViewSecondary')): ?>
		<div class="gallery-view-secondary">
			<?php echo $secondary; ?>
		</div>
	<?php endif; ?>
</div>