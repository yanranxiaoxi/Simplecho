<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * 友情链接
 *
 * @package custom
 */
$this->need('header.php');
?>

<!-- 链接格式

// 友情链接：

<ul id="flinks">

	<li>久治明千树汐</li>
	<li>https://soraharu.com/</li>
	<li>https://soraharu.com/favicon.ico</li>
	<li>soraharu.com</li>

	<li>Baidu</li>
	<li>https://www.baidu.com/</li>
	<li>https://www.baidu.com/favicon.ico</li>
	<li>baidu.com</li>

</ul>

// 其他内容

-->

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
				<?php parseContent($this); ?>
			</div>
		</article>

	</div>

	<div class="post-detail pl" id="plsx">
		<?php $this->need('comments.php'); ?>
	</div>
</div>

<style type="text/javascript">
.friend-box img { width:70px; height:70px; border-radius:50%!important; float:left; margin:0 15px 0 0!important; } .jz a { pointer-events:none; }
</style>

<script type="text/javascript">
(function(){let a=document.getElementById("flinks");if(a){let ns=a.querySelectorAll("li");let nsl=ns.length;let str='';let bgid=0;const bgs=["bg-white","bg-grey","bg-deepgrey","bg-blue","bg-purple","bg-green","bg-yellow","bg-red","bg-orange"];for(let i=0;i<=nsl-4;i+=4){bgid=Math.floor(Math.random()*9);str+=(`<div class="friend-box"><div class="jz"><img src="${ns[i+2].innerText}"></div><div class="flink-info"><a class="gt-c-content-color-first"href="${ns[i+1].innerText}"target="_blank">${ns[i].innerText}</a><br><div class="flink-info-desc gt-c-content-color-first">${ns[i+3].innerText}</div></div></div>`);}
str+='</div></div>';let n1=document.createElement("div");n1.innerHTML=str;a.parentNode.insertBefore(n1,a);a.style="display: none;";}else{console.log('No such id "flinksH"');}}())
</script>

<script type="text/javascript">
(function(){let a=document.getElementById("flinks1");if(a){let ns=a.querySelectorAll("li");let nsl=ns.length;let str='';let bgid=0;const bgs=["bg-white","bg-grey","bg-deepgrey","bg-blue","bg-purple","bg-green","bg-yellow","bg-red","bg-orange"];for(let i=0;i<=nsl-4;i+=4){bgid=Math.floor(Math.random()*9);str+=(`<div class="friend-box"><div class="jz"><img src="${ns[i+2].innerText}"></div><div class="flink-info"><a class="gt-c-content-color-first"href="${ns[i+1].innerText}"target="_blank">${ns[i].innerText}</a><br><div class="flink-info-desc gt-c-content-color-first">${ns[i+3].innerText}</div></div></div>`);}
str+='</div></div>';let n1=document.createElement("div");n1.innerHTML=str;a.parentNode.insertBefore(n1,a);a.style="display: none;";}else{console.log('No such id "flinksH"');}}())
</script>  

<?php $this->need('footer.php'); ?>
