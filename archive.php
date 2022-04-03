<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="post-list-container">
		<h2 class="title gt-c-content-color-first" style="margin-top: 20px; "><?php $this->archiveTitle(array(
			'category'	=>	_t('分类 %s 下的文章'),
			'search'	=>	_t('包含关键字 %s 的文章'),
			'tag'		=>	_t('标签 %s 下的文章'),
			'author'	=>	_t('%s 发布的文章')
		), '', ''); ?></h2>
	<div class="post-inner">

		<?php if ($this->have()): ?>
		<?php while ($this->next()): ?>		
		<div class="post gt-bg-theme-color-second">
			<div class="post-left">
				<div>
					<a href="<?php $this->permalink(); ?>">
						<span class="post-title gt-c-content-color-first"><?php $this->title(); ?></span>
					</a>
				</div>
				<a href="<?php $this->permalink(); ?>">
					<div class="gt-post-content post-abstract gt-c-content-color-second">
						<p><?php $this->excerpt('200', '...'); ?></p>
					</div>
				</a>
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

					<!-- printTag($this); PHP 自定义标签样式 -->

				</div>
			</div>

			<?php if (yotu($this) == 1): ?>
			<a href="<?php $this->permalink(); ?>" class="post-feature-image"
				style="background-image: url('<?php showThumbnail($this); ?>')">
			</a>
			<?php else: ?>
				<!-- 不存在 -->
			<?php endif; ?>

		</div>
		<?php endwhile; ?>
		<?php else: ?>
		<div id="gridea-search-result" data-update="1596183679944">
			<div class="no-result" style="font-size: 20px; margin-top: 50px;">
				<i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;未搜索到相关文章，请更换关键词
			</div>
		</div>
		<?php endif; ?>

	</div>
</div>

<div class="pagination-container">

	<?php $this->pageLink('上一页'); ?>
	当前页码：<?php if ($this->_currentPage > 1) echo $this->_currentPage; else echo 1; ?>
	·
	总页码：<?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?>
	<?php $this->pageLink('下一页', 'next'); ?>

</div>

<?php $this->need('footer.php'); ?>
