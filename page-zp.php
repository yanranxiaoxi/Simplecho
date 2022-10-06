<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * 作品列表
 *
 * @package custom
 */
$this->need('header.php');
?>

<style>
.zpmain {
	-ms-flex: 70%; /* IE10 */
	flex: 70%;
	background-color: white;
	padding: 20px;
	border-radius: 10px;
}
</style>

<div class="post-container">
	<div class="post-detail gt-bg-theme-color-second">
		<article class="gt-post-content">
			<h2 class="post-title"><?php $this->title(); ?></h2>
			<div class="post-info">
				<time class="post-time gt-c-content-color-first">
					发布于 · <?php $this->date(); ?> ·
				</time>

				<?php _e('# '); ?>
				<?php $this->category(' # ', true, 'none'); ?>
				<?php if (count($this->tags) > 0): ?>
				<?php _e('# '); ?>
				<?php $this->tags(' # ', true, 'none'); ?>
				<?php endif; ?>

			</div>
			<div class="post-content">
				<div class="zpmain">
					<?php parseContent($this); ?>				  
				</div>
			</div>
		</article>

	</div>

	<div class="post-detail pl" id="plsx">
		<?php $this->need('comments.php'); ?>
	</div>
</div>

<?php $this->need('footer.php'); ?>
