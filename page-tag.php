<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * 标签
 *
 * @package custom
 */
$this->need('header.php');
?>

<div class="post-container">
	<div class="post-detail gt-bg-theme-color-first">
		<article class="gt-post-content">
			<h2 class="post-title"><?php $this->title(); ?></h2>
			<div class="tags-container">

				<?php $this->widget('Widget_Metas_Tag_Cloud')
					->to($taglist); ?><?php while($taglist->next()): ?>
				<a class="tag gt-c-content-color-first gt-a-link" href="<?php $taglist->permalink(); ?>" title="#<?php $taglist->name(); ?>"><?php $taglist->name(); ?></a>
				<?php endwhile; ?>

			</div>
		</article>
	</div>
</div>

<?php $this->need('footer.php'); ?>
