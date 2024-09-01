<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<div class="post-container">
	<div class="post-detail gt-bg-theme-color-second">
		<article class="gt-post-content">
			<?php if (!empty($this->title)): ?>
			<h2 class="post-title"><?php $this->title(); ?></h2>
			<?php else: ?>
			<br />
			<?php endif; ?>
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
				<?php if ($this->options->themeCopyright === 'enable'): ?>
					<blockquote><p>&copy;版权声明： 本博客所有文章除特别声明外，均采用 <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" alt="BY-NC-SA" title="BY-NC-SA" target="_blank">BY-NC-SA</a> 许可协议。转载请注明出处！</p></blockquote>
				<?php endif; ?>
				<?php parseContent($this); ?>
			</div>

			<?php
				if ($this->options->underPostContent) {
					echo '<br />';
					$this->options->underPostContent();
				}
			?>
		</article>
	</div>

	<div class="post-detail pl" id="plsx">
		<?php $this->need('comments.php'); ?>
	</div>
	
	<div class="next-post">
		<div class="gt-c-content-color-first" style="margin-bottom: 24px;">下一篇</div>
		<div id="thePrevTitle" class="post-title gt-a-link">
			<?php $this->thePrev('%s', '没有了'); ?>
		</div>
	</div>
</div>

<!-- 解决 Typecho BUG：无标题文章的“下一篇文章”无法点击（标签长度为“0”） -->
<script type="text/javascript">
document.getElementById('thePrevTitle').innerHTML = document.getElementById('thePrevTitle').innerHTML.replace('></a>', '>无标题文章</a>');
</script>

<?php $this->need('footer.php'); ?>
