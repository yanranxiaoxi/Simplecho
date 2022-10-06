<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * 归档
 *
 * @package custom
 */
$this->need('header.php');
?>

<div class="post-container">
	<div class="post-detail gt-bg-theme-color-first">
		<article class="gt-post-content">
			<h2 class="post-title"><?php $this->title(); ?></h2>

			<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
				$year = 0; $mon = 0; $i = 0; $j = 0;
				$output = '<div class="archives-container">';
				while ($archives->next()):
					$year_tmp = date('Y', $archives->created);
					$mon_tmp = date('m', $archives->created);
					$y = $year; $m = $mon;
					if ($mon != $mon_tmp && $mon > 0) $output .= '';
					if ($year != $year_tmp && $year > 0) $output .= '';
					if ($year != $year_tmp) {
						$year = $year_tmp;
						$output .= '<h2 class="year gt-c-cotent-color-first">' . $year . ' 年</h2>'; // 输出年份
					}
					if ($mon != $mon_tmp) {
						$mon = $mon_tmp;
						$output .= '<h4>' . $mon . ' 月</h4>'; // 输出月份
					}
					$output .= '<article class="post"><a href="' . $archives->permalink . '"><div class="post-title gt-c-content-color-first"> <small><b>' . $year . '.' . $mon . date('.d ', $archives->created) . '&nbsp;&nbsp;·&nbsp;&nbsp;</b></small>' . $archives->title . '</div></a></article>'; // 输出文章日期和标题
				endwhile;
				$output .= '';
				echo $output;
			?>

		</article>
	</div>
</div>

<style>
.gt-post-content img {
	margin: 0px auto !important;
}
</style>

<?php $this->need('footer.php'); ?>
