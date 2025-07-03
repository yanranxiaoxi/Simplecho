<!DOCTYPE html>
<html lang="zh-Hans">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-dns-prefetch-control" content="on" />
	<link rel="dns-prefetch" href="https://cdn.jsdelivr.net" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>
		<?php $this->archiveTitle(array(
			'category'	=>	_t('分类 %s 下的文章'),
			'search'	=>	_t('包含关键字 %s 的文章'),
			'tag'		=>	_t('标签 %s 下的文章'),
			'author'	=>	_t('%s 发布的文章')
		), '', ' - '); ?><?php if ($this->_currentPage > 1) echo '第 ' . $this->_currentPage . ' 页 - '; ?><?php $this->options->title(); ?><?php if ($this->is('index') && !empty($this->options->summary)): ?> - <?php $this->options->summary(); ?><?php endif; ?>
	</title>
	<?php $this->header(); ?>
	<?php if ($this->options->favicon): ?>
	<link href="<?php $this->options->favicon(); ?>" rel="shortcut icon" />
	<?php else: ?>
	<link href="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.21/images/icon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/all.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.21/assets/css/main.min.css" />
	<?php
		if ($_COOKIE['latest-prefers-color-scheme']) {
			setcookie('latest-prefers-color-scheme', $_COOKIE['latest-prefers-color-scheme'], time() + 60 * 60 * 24 * 365, '/');
		}
	?>
	<?php if ($this->options->themeAutoDark === 'enable' && $_COOKIE['latest-prefers-color-scheme'] === 'dark'): ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.21/assets/css/black.min.css" id="theme-css" />
	<?php elseif ($this->options->themeColor == '0'): ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.21/assets/css/gray.min.css" id="theme-css" />
	<?php elseif ($this->options->themeColor == '1'): ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.21/assets/css/white.min.css" id="theme-css" />
	<?php elseif ($this->options->themeColor == '2'): ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.21/assets/css/green.min.css" id="theme-css" />
	<?php elseif ($this->options->themeColor == '3'): ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.21/assets/css/black.min.css" id="theme-css" />
	<?php else: ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.21/assets/css/gray.min.css" id="theme-css" />
	<?php endif; ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owo@1.0.2/dist/OwO.min.css" />

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@highlightjs/cdn-assets@11.10.0/highlight.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.21/assets/js/jQuery.scrollLoad.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-pjax@2.0.1/jquery.pjax.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/owo@1.0.2/dist/OwO.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/console-ban@5.0.0/dist/console-ban.min.js"></script>
</head>
<body <?php echo $_COOKIE['latest-prefers-color-scheme'] === 'dark' ? 'class="dark"' : ($_COOKIE['latest-prefers-color-scheme'] === 'light' ? 'class="light"' : ''); ?>>
	<div class="main gt-bg-theme-color-first">
		<div class="main-content" id="pjax">
			<nav class="navbar navbar-expand-lg">
				<a href="<?php $this->options->siteUrl(); ?>">
					<div class="navbar-brand">
						<?php if ($this->options->logo): ?>
						<img class="user-avatar" src="<?php $this->options->logo(); ?>" alt="头像" />
						<?php else: ?>
						<img class="user-avatar" src="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.21/images/avatar.png" alt="头像" />
						<?php endif; ?>
						<div class="site-name gt-c-content-color-first">
							<?php $this->options->title(); ?>
						</div>
					</div>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars gt-c-content-color-first" style="font-size: 18px"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="navbar-nav mr-auto" style="text-align: center">

						<div class="nav-item">
							<a href="<?php $this->options->siteUrl(); ?>" class="menu gt-a-link">🏠首页</a>
						</div>

						<?php $this->widget('Widget_Contents_Page_List')
							->parse('<div class="nav-item"><a href="{permalink}" class="menu gt-a-link">{title}</a></div>'); ?>
					</div>

					<div style="text-align: center">
						<form id="gridea-search-form" style="position: relative" action="<?php $this->options->siteUrl(); ?>" role="search">
							<input type="text" id="s" name="s" class="search-input" autocomplete="off" name="search" placeholder="搜索文章" />
							<i class="fas fa-search gt-c-content-color-first" style="position: absolute; top: 9px; left: 10px;"></i>
						</form>
					</div>

				</div>
			</nav>
