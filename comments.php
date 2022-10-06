<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php if ($this->options->gravatarPrefix): ?>
<?php define('__TYPECHO_GRAVATAR_PREFIX__', $this->options->gravatarPrefix); ?>
<?php endif; ?>

<div class="loading"><div id="loader"></div></div>

<style>
/* Pjax 动画 */
.loading{display:none;}
.loading{height:100%;width:100%;position:fixed;top:0;left:0;z-index:999999;background-color:rgba(250,250,250,.9);}
.loading img{width: 280px;height:210px;position: relative;top: 45%;left: 50%;margin-left:-140px;margin-top: -105px;}
#loader{display: block; position: relative; left: 50%; top: 50%; width: 150px; height: 150px; margin: -75px 0 0 -75px; border-radius: 50%; border: 3px solid transparent; border-top-color: #ff5a5a; -webkit-animation: spin 1s linear infinite; animation: spin 1s linear infinite;}
#loader:before{content: ""; position: absolute; top: 5px; left: 5px; right: 5px; bottom: 5px; border-radius: 50%; border: 3px solid transparent; border-top-color: #5af33f; -webkit-animation: spin 3s linear infinite; animation: spin 3s linear infinite;}
#loader:after{content: ""; position: absolute; top: 15px; left: 15px; right: 15px; bottom: 15px; border-radius: 50%; border: 3px solid transparent; border-top-color: #6dc9ff; -webkit-animation: spin 2s linear infinite; animation: spin 2s linear infinite;}
@-webkit-keyframes spin{0%{-webkit-transform: rotate(0deg); -ms-transform: rotate(0deg); transform: rotate(0deg);} 100%{-webkit-transform: rotate(360deg); -ms-transform: rotate(360deg); transform: rotate(360deg);}}
@keyframes spin{0%{-webkit-transform: rotate(0deg); -ms-transform: rotate(0deg); transform: rotate(0deg);} 100%{-webkit-transform: rotate(360deg); -ms-transform: rotate(360deg); transform: rotate(360deg);}}
</style>

<?php function threadedComments($comments, $singleCommentOptions) {
	$commentClass = '';
	$Identity = '';
	if ($comments->authorId) {
		if ($comments->authorId == $comments->ownerId) {
		$commentClass .= ' comment-by-author';
		$Identity = '<svg viewBox="0 0 24 24" class="css-svsrxm-Octangle" width="18" height="18"><svg viewBox="0 0 24 24" x="-3" y="-3" fill="#FFFFFF" width="30" height="30"><path d="M3.56231227,13.8535307 C2.40051305,12.768677 2.41398885,11.0669203 3.59484487,9.99979213 L3.59222085,9.99654885 C4.26730143,9.45036719 4.79446755,8.21005186 4.7184197,7.34453784 L4.72305873,7.34412719 C4.66942824,5.75539997 5.8824188,4.56066914 7.47188965,4.64242381 L7.47229112,4.6386236 C8.33515314,4.72977993 9.58467253,4.22534048 10.1426329,3.55925173 L10.1462611,3.56228565 C11.2316055,2.40008701 12.9353108,2.41394456 14.0015072,3.59634088 L14.0047263,3.59374004 C14.5498229,4.26841874 15.7896857,4.79521622 16.6545744,4.71844347 L16.6549836,4.72304294 C18.245027,4.66894057 19.4396947,5.88213996 19.3575031,7.47241135 L19.3623099,7.47292747 C19.2704388,8.3358681 19.7742711,9.58421483 20.4407199,10.1424506 L20.437686,10.1460789 C21.5997217,11.2312209 21.5860695,12.9345218 20.4042441,14.0007396 L20.4072865,14.0045125 C19.7325967,14.5495925 19.2055209,15.7896954 19.2815865,16.6561959 L19.2770449,16.6565978 C19.3315454,18.2453037 18.1173775,19.4393568 16.5274188,19.3571512 L16.5269029,19.3619539 C15.6647098,19.270083 14.415408,19.7741709 13.8573671,20.4403558 L13.8537409,20.4373235 C12.76842,21.5995708 11.0650432,21.5864553 9.99899434,20.4039226 L9.99527367,20.406923 C9.45025436,19.7323399 8.21017638,19.2051872 7.34461983,19.2812352 L7.344304,19.2776405 C5.75448683,19.3312904 4.55977145,18.1170085 4.64254978,16.527117 L4.63769921,16.5265942 C4.72957031,15.6644394 4.22547659,14.4151814 3.55928015,13.8571569 L3.56231227,13.8535307 Z"></path></svg><path d="M2.63951518,13.3895441 C3.70763333,14.2842292 4.44777637,16.1226061 4.30075305,17.5023312 L4.32211542,17.3063047 C4.17509209,18.6910561 5.17786655,19.7063729 6.5613937,19.5844846 L6.364106,19.6008202 C7.75140298,19.4789319 9.57474349,20.2554985 10.4468305,21.3349009 L10.3224262,21.1803415 C11.1982831,22.2647703 12.6257916,22.2723098 13.5167278,21.2079863 L13.3898102,21.3600325 C14.2845162,20.2919393 16.1229361,19.5518136 17.5026934,19.6988334 L17.3054057,19.6774716 C18.6914461,19.8244915 19.7067866,18.8217404 19.5836389,17.4395022 L19.6012314,17.6367853 C19.4793403,16.2482641 20.255925,14.4249662 21.3353526,13.5528995 L21.1807897,13.677301 C22.2639871,12.8014646 22.2727834,11.3739894 21.2084351,10.483074 L21.3604848,10.6099886 C20.2923667,9.71530351 19.5522236,7.87818322 19.6992469,6.49720154 L19.6778846,6.69448464 C19.8249079,5.30847665 18.8221335,4.2944164 17.4386063,4.41630468 L17.635894,4.39871256 C16.248597,4.52185742 14.4252565,3.74529084 13.5531695,2.66588842 L13.6775738,2.81919121 C12.8017169,1.73601905 11.3742084,1.72722299 10.4832722,2.79154644 L10.6101898,2.63950024 C9.71548377,3.70759343 7.87706394,4.44771919 6.49730661,4.30195588 L6.69459432,4.32206116 C5.30855394,4.17504128 4.29447,5.17904888 4.41636114,6.56128713 L4.3987686,6.36400404 C4.52065973,7.75126861 3.74407501,9.57456653 2.66464737,10.4478898 L2.81921035,10.3222318 C1.73601288,11.1993248 1.72721662,12.6255433 2.79156494,13.5164587 L2.63951518,13.3895441 Z" fill="#0066FF"></path><svg class="Zi Zi--Check" fill="#fff" x="6" y="6" viewBox="0 0 24 24" width="12" height="12"><path d="M10.229 17.516c-.318.327-.75.484-1.199.484-.453 0-.884-.16-1.202-.488l-4.335-4.47a1.77 1.77 0 0 1 .007-2.459 1.663 1.663 0 0 1 2.397.01l3.137 3.246 9.072-9.329a1.662 1.662 0 0 1 2.397 0c.663.681.663 1.786 0 2.466L10.23 17.516z" fill-rule="evenodd"></path></svg></svg>';
		} else {
			$commentClass .= ' comment-by-user';
		}
	}
	$commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';
	$depth = $comments->levels + 1; // 添加的一句
?>

<li id="<?php $comments->theId(); ?>" class="comment-body<?php
	if ($depth > 1 && $depth < 3) {
		echo ' comment-child ';
		$comments->levelsAlt('comment-level-odd', ' comment-level-even');
	} else if ($depth > 2) {
		echo ' comment-child2';
		$comments->levelsAlt(' comment-level-odd', ' comment-level-even');
	} else {
		echo ' comment-parent';
	}
	$comments->alt(' comment-odd', ' comment-even');
	echo $commentClass;
	?> comment-parent">

	<div class="comment-author">
		<?php $comments->gravatar($singleCommentOptions->avatarSize, $singleCommentOptions->defaultAvatar); // 头像 只输出 img 没有其它标签 ?>

		<div class="comment-info">
			<cite class="fn">
				<?php $singleCommentOptions->beforeAuthor();
				CommentAuthor($comments); $singleCommentOptions->afterAuthor(); //输出评论者 ?><?php echo $Identity; ?>
			</cite>
			<em class="comment-meta">
				<a href="<?php $comments->permalink(); ?>">
					<?php $singleCommentOptions->beforeDate();
					$comments->date($singleCommentOptions->dateFormat);
					$singleCommentOptions->afterDate(); // 输出评论日期 ?>
				</a>
			</em>
		</div>
		<div class="comment-reply">
			<?php $comments->reply($singleCommentOptions->replyWord); // 输出 回复 链接 ?>
		</div>
	</div>
	<div class="comment-content">
		<b><?php get_comment_at($comments->coid); ?></b>
		<?php echo preg_replace('#\@\((.*?)\)#', '<img src="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.8/img/alu/$1.png">', $comments->content); // 替换关键词为表情 ?>
	</div>
	<?php if ($comments->children) { ?>
	<div class="comment-children" id="pllc">
		<?php $comments->threadedComments($singleCommentOptions); // 评论嵌套 ?>
	</div>
	<?php } ?>
</li>
<?php } ?>

<section id="comments">
	<?php $this->comments()->to($comments); ?>
	<?php if ($this->allow('comment')): ?>
	<div id="<?php $this->respondId(); ?>" class="respond">

		<h3>
			<span class="cancel-comment-reply" id="response">
				<?php _e('添加新评论'); ?><?php $comments->cancelReply('  <i class="fa fa-share" aria-hidden="true"></i>取消回复'); ?>
			</span>
		</h3>
		<form method="post" action="<?php $this->commentUrl(); ?>" id="comment-form" role="form" class="comment-form">
			<div class="center">
				<?php if ($this->user->hasLogin()): ?>
				<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
				<?php else: ?>
				<p>
					<input type="text" name="author" placeholder="汝名(*)" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
					<input type="email" name="mail" placeholder="邮箱(*)" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
					<input type="url" name="url" placeholder="网址(https://)" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
				</p>
				<?php endif; ?>
				<p>
					<textarea placeholder="相遇即是缘 ~ 留下足迹？" rows="8" cols="50" class="OwO-textarea" name="text" id="textarea" class="textarea" required><?php $this->remember('text'); ?></textarea>
				</p>
				<p style="margin-top: 20px;">
					<!-- <span style="position:absolute; bottom:21px; cursor:pointer;" id="smiliesbutton" title="选择表情"><img src="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.8/img/alu/icon_smile.gif" alt="选择表情" style="width:1.3em; height:1.3em; vertical-align:middle;"><span style="font-size:13px;">选择表情</span></span> -->
					<div class="OwO"></div>
					<button type="submit" id="submit" class="submit">发表评论</button>
				</p>
			</div>
		</form>
	</div>
	<?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
	<div data-no-instant id="pllb">
	<?php $comments->listComments(); ?>
	</div>
	<?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>		
	<?php endif; ?>
	<?php else: ?>
	<h3><?php _e('评论已关闭'); ?></h3>
	<?php endif; ?>
	<div style="margin-top: 20px;">
		<svg viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
			<path d="M656.26112 347.20768a188.65152 188.65152 0 1 0 0 324.04992V347.20768z" fill="#F4CA1C"></path>
			<path d="M668.34944 118.88128a73.34912 73.34912 0 0 0-71.168-4.06016L287.17056 263.5008a4.608 4.608 0 0 1-2.01216 0.4608H130.048A73.728 73.728 0 0 0 56.32 337.59744v349.63968a73.728 73.728 0 0 0 73.728 73.63584h156.55424a4.67968 4.67968 0 0 1 1.94048 0.43008l309.59104 143.19616a73.7024 73.7024 0 0 0 104.66816-66.82112V181.20704a73.216 73.216 0 0 0-34.45248-62.32576zM125.40416 687.23712V337.59744a4.608 4.608 0 0 1 4.608-4.608h122.0352v358.88128H130.048a4.608 4.608 0 0 1-4.64384-4.6336z m508.31872 150.44096a4.608 4.608 0 0 1-6.56384 4.19328l-306.02752-141.55264V323.77344l305.9712-146.72384a4.608 4.608 0 0 1 6.62016 4.15744v656.47104z m304.5376-358.95808h-150.25152a34.5088 34.5088 0 1 0 0 69.0176h150.25152a34.5088 34.5088 0 1 0 0-69.0176z m-128.25088-117.76a34.44736 34.44736 0 0 0 24.41728-10.10176L940.672 244.736a34.52416 34.52416 0 0 0-48.83968-48.80896L785.5872 302.08a34.5088 34.5088 0 0 0 24.4224 58.88z m24.41728 314.60864a34.52416 34.52416 0 1 0-48.83968 48.81408l106.24512 106.1376a34.52416 34.52416 0 0 0 48.83968-48.80896z" fill="#595BB3"></path>
		</svg>
		<?php if ($this->options->baiduPush == 'able' && !empty($this->options->baiduPushUrl)): ?>
		<?php
		$cxurl = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		function okBaidu($url) {
			$url = 'https://www.baidu.com/s?wd=' . $url;
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$rs = curl_exec($curl);
			curl_close($curl);
			if (!strpos($rs, '提交网址')) {
				echo "文章状态：已收录~";
			} else {
				$pageURL = (@$_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
				$pageURL .= $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
				$urls = array(
					$pageURL
				);
				$api = $this->options->baiduPushUrl;
				$ch = curl_init();
				$options = array(
					CURLOPT_URL => $api,
					CURLOPT_POST => true,
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_POSTFIELDS => implode("\n", $urls),
					CURLOPT_HTTPHEADER => array('Content-Type: text/plain')
				);
				curl_setopt_array($ch, $options);
				// 返回结果是 json 形式
				$res = json_decode(curl_exec($ch), true);

				$ed = ($res['remain']); // 当天剩余的可推送 url 条数
				$cg = ($res['success']); // 成功推送的 url 条数

				echo "文章状态：未收录，已推送~ 【今日剩余额度：$ed 条】";
			}
		}
		echo okBaidu($cxurl);
		?>
		<?php else: ?>
		<?php endif; ?>
	</div>
</section>

<script>
	var OwO_demo = new OwO({
		logo: 'OωO表情',
		container: document.getElementsByClassName('OwO')[0],
		target: document.getElementsByClassName('OwO-textarea')[0],
		api: 'https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.8/js/OwO.json',
		position: 'down',
		width: '100%',
		maxHeight: '250px'
	});
</script>

<script type="text/javascript">
var TypechoComment={dom:function(id){return document.getElementById(id);},create:function(tag,attr){var el=document.createElement(tag);for(var key in attr){el.setAttribute(key,attr[key]);}
return el;},reply:function(cid,coid){var comment=this.dom(cid),parent=comment.parentNode,response=this.dom('respond-post-286'),input=this.dom('comment-parent'),form='form'==response.tagName?response:response.getElementsByTagName('form')[0],textarea=response.getElementsByTagName('textarea')[0];if(null==input){input=this.create('input',{'type':'hidden','name':'parent','id':'comment-parent'});form.appendChild(input);}
input.setAttribute('value',coid);if(null==this.dom('comment-form-place-holder')){var holder=this.create('div',{'id':'comment-form-place-holder'});response.parentNode.insertBefore(holder,response);}
comment.appendChild(response);this.dom('cancel-comment-reply-link').style.display='';if(null!=textarea&&'text'==textarea.name){textarea.focus();}
return false;},cancelReply:function(){var response=this.dom('respond-post-286'),holder=this.dom('comment-form-place-holder'),input=this.dom('comment-parent');if(null!=input){input.parentNode.removeChild(input);}
if(null==holder){return true;}
this.dom('cancel-comment-reply-link').style.display='none';holder.parentNode.insertBefore(response,holder);return false;}}
</script>

<script type="text/javascript">
(function(){const reply=function(cid,coid){var comment=this.dom(cid),parent=comment.parentNode,<?php if($this->is('post')):?>response=this.dom('respond-post-<?php $this->cid() ?>'),input=this.dom('comment-parent'),<?php elseif($this->is('page')):?>response=this.dom('respond-page-<?php $this->cid() ?>'),input=this.dom('comment-parent'),<?php endif;?>form='form'==response.tagName?response:response.getElementsByTagName('form')[0],textarea=response.getElementsByTagName('textarea')[0];if(null==input){input=this.create('input',{'type':'hidden','name':'parent','id':'comment-parent'});form.appendChild(input);}
input.setAttribute('value',coid);if(null==this.dom('comment-form-place-holder')){var holder=this.create('div',{'id':'comment-form-place-holder'});response.parentNode.insertBefore(holder,response);}
comment.appendChild(response);this.dom('cancel-comment-reply-link').style.display='';if(null!=textarea&&'text'==textarea.name){textarea.focus();}
return false;}
const cancelReply=function(){<?php if($this->is('post')):?>var response=this.dom('respond-post-<?php $this->cid() ?>'),<?php elseif($this->is('page')):?>var
response=this.dom('respond-page-<?php $this->cid() ?>'),<?php endif?>holder=this.dom('comment-form-place-holder'),input=this.dom('comment-parent');if(null!=input){input.parentNode.removeChild(input);}
if(null==holder){return true;}
this.dom('cancel-comment-reply-link').style.display='none';holder.parentNode.insertBefore(response,holder);return false;}
if(window.TypechoComment){window.TypechoComment.reply=reply
window.TypechoComment.cancelReply=cancelReply}else{(()=>{window.TypechoComment={dom:function(id){return document.getElementById(id);},create:function(tag,attr){var el=document.createElement(tag);for(var key in attr){el.setAttribute(key,attr[key]);}
return el;},reply:function(cid,coid){var comment=this.dom(cid),parent=comment.parentNode,response=this.dom('respond-post-<?php $this->cid() ?>'),input=this.dom('comment-parent'),form='form'==response.tagName?response:response.getElementsByTagName('form')[0],textarea=response.getElementsByTagName('textarea')[0];if(null==input){input=this.create('input',{'type':'hidden','name':'parent','id':'comment-parent'});form.appendChild(input);}
input.setAttribute('value',coid);if(null==this.dom('comment-form-place-holder')){var holder=this.create('div',{'id':'comment-form-place-holder'});response.parentNode.insertBefore(holder,response);}
comment.appendChild(response);this.dom('cancel-comment-reply-link').style.display='';if(null!=textarea&&'text'==textarea.name){textarea.focus();}
return false;},cancelReply:function(){var response=this.dom('respond-post-<?php $this->cid() ?>'),holder=this.dom('comment-form-place-holder'),input=this.dom('comment-parent');if(null!=input){input.parentNode.removeChild(input);}
if(null==holder){return true;}
this.dom('cancel-comment-reply-link').style.display='none';holder.parentNode.insertBefore(response,holder);return false;}};})();}})();
</script>

<script type="text/javascript">
$(function()
{$('#comment-form').submit(function()
{var form=$(this),params=form.serialize();params+='&themeAction=comment';var appendComment=function(comment)
{var el=$('#comments > #pllb');if(0!=comment.parent)
{var el=$('#comment-'+comment.parent);if(el.find('.comment-children').length<1)
{$('<div class="comment-children" id="pllc"><ol class="comment-list"></ol></div>').appendTo(el);}
else if(el.find('.comment-children > .comment-list').length<1){$('<ol class="comment-list"></ol>').prependTo(el.find('.comment-children'));}
el=$('#comment-'+comment.parent).find('.comment-children').find('.comment-list');}
if(0==el.length)
{$('<ol class="comment-list"></ol>').prependTo($('#comments'));el=$('#comments > .comment-list');}
var html='<li id="comment-{coid}" class="comment-body comment-ajax comment-parent comment-odd"> <div class="comment-author"> <img class="avatar" src="{avatar}" alt="{author}" width="32" height="32"> <div class="comment-info"> <cite class="fn"><a href="{url}" rel="external nofollow" target="_blank">{author}</a></cite>  <em class="comment-meta"><a href="{permalink}">{datetime}</a></em> </div> <div class="comment-reply"><a href="{permalink}" rel="nofollow" onclick="return TypechoComment.reply(\'\comment-{coid}\'\, {coid});">回复</a></div> </div> <div class="comment-content">{content}</div> </li>';$.each(comment,function(k,v)
{regExp=new RegExp('{'+k+'}','g');html=html.replace(regExp,v);});var reg1=/@\(([^ ]*)\)/g;html=html.replace(reg1,"<img src=\"https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.8/img/alu/$1.png\"\>");$(html).prependTo(el);}
$.ajax({url:'<?php $this->permalink();?>',type:'POST',data:params,dataType:'json',beforeSend:function()
{$(".loading").css("display","block");},complete:function()
{$(".loading").css("display","none");new NoticeJs({text:'评论成功（//▽//）',position:'middleCenter',animation:{open:'animated bounceInRight',close:'animated bounceOutLeft'}}).show();},success:function(result)
{if(1==result.status){appendComment(result.comment);form.find('textarea').val('');}
else{alert(undefined===result.msg?'<?php _e('评论出错!');?>':result.msg);}},error:function(xhr,ajaxOptions,thrownError)
{alert('评论失败，请重试');}});return false;});});
</script>
