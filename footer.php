			<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

			<div class="site-footer gt-c-content-color-first">
				<div class="slogan gt-c-content-color-first">STAY VIBRANT</div>
				<div class="social-container">

					<a href="<?php if ($this->options->GitLab): $this->options->GitLab(); ?><?php endif; ?>" target="_blank">
						<i class="fab fa-gitlab gt-c-content-color-first"></i>
					</a>

					<a href="<?php if ($this->options->Coffee): $this->options->Coffee(); ?><?php endif; ?>" target="_blank">
						<i class="fas fa-coffee gt-c-content-color-first"></i>
					</a>

					<a href="<?php if ($this->options->EMailTo): $this->options->EMailTo(); ?><?php endif; ?>" target="_blank">
						<i class="fas fa-envelope gt-c-content-color-first"></i>
					</a>

				</div>
				<div class="footer-info">
						<?php if ($this->options->ICPbeian): ?>
						<p><a href="https://beian.miit.gov.cn/" target="_blank" rel="nofollow"><?php $this->options->ICPbeian(); ?></a></p>
						<?php endif; ?>
						<?php if ($this->options->footerContent): $this->options->footerContent(); ?>
						<?php endif; ?>
				</div>
				<div>
					Theme by <a href="https://soraharu.com/" target="_blank">XiaoXi</a> | Powered by <a href="https://typecho.org/" target="_blank">Typecho</a> | <a href="<?php $this->options->feedUrl(); ?>" target="_blank">RSS</a>
				</div>
			</div>
			<?php if ($this->options->f12 == 'able'): ?>
			<script>
				// default options
				ConsoleBan.init()
				// custom options
				ConsoleBan.init({
					redirect: '<?php $this->options->themeUrl("js/console.html"); ?>'
				})
			</script>
			<?php else: ?>

			<?php endif; ?>

			<script src="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.0/js/img-lazy.min.js" type="text/javascript"></script>
			<script src="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.0/js/moment.min.js" type="text/javascript"></script>
			<script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>
			<script>mermaid.init({noteMargin: 10}, ".lang-mermaid");</script>
			<?php if ($this->options->top == 'able'): ?>
			<script src="https://cdn.jsdelivr.net/gh/fz6m/lamu-leimu-button@1.2/dist/lamu-leimu.min.js"></script>
			<?php else: ?>
			<?php endif; ?>
			<script src='https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.min.js'></script>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.0/css/noticejs1.min.css" />
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.0/css/animate.min.css" />
			<script src="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.0/js/notice.min.js"></script>
			<script type="text/javascript">
				new NoticeJs({
					text: '页面加载完成~',
					position: 'topRight',
					animation: {
						open: 'animated bounceInRight',
						close: 'animated bounceOutLeft'
					}
				}).show();
			</script>
		</div>
	</div>
	<?php $this->footer(); ?>
</body>
</html>
