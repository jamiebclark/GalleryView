
<?php 
echo $this->Html->css('GalleryView.style'); 
$class = 'gallery-view';
if ($this->request->is('ajax')) {
	$class .= ' gallery-view-ajax';
} else {
	$class .= ' gallery-view-html';
}
?>
<div class="modal">
	<div class="modal-header">
		<h3>Photo</h3>
	</div>
	<div class="modal-body">
		<div class="<?php echo $class; ?>">
			<div class="gallery-view-images">
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
			</div>
			<div class="gallery-view-infos">
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
		</div>
	</div>
</div>

<?php echo $this->Html->script('GalleryView.script'); ?>
