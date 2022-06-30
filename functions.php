<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	
	// favicon 图标
	$favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon 图标'), _t('输入图片 URL 地址，显示 favicon 图标，留空显示默认'));
	$form->addInput($favicon);

	// 首页 LOGO
	$logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('首页 LOGO'), _t('输入图片 URL 地址，在网站首页显示 LOGO，留空显示默认'));
	$form->addInput($logo);
	
	// 首页网站描述
	$summary = new Typecho_Widget_Helper_Form_Element_Text('summary', NULL, NULL, _t('首页网站描述'), _t('输入一段描述，将会显示在网站 title 后方'));
	$form->addInput($summary);
	
	//主题配色
	$topnavO = new Typecho_Widget_Helper_Form_Element_Radio('topnavO',
		array(
			0 => _t('银光灰'),
			1 => _t('简约白'),
			2 => _t('暗夜黑'),
			3 => _t('墨草绿')),
			0, _t('网站主题配色'), _t('默认显示 银光灰 配色主题')
		);
	$form->addInput($topnavO);

	// 拉姆雷姆返回顶部
	$top = new Typecho_Widget_Helper_Form_Element_Radio('top',
		array('able' => _t('启用'),
			'disable' => _t('禁用'),
		),
		'disable', _t('返回顶部'), _t('默认禁止，样式为 拉姆雷姆'));
	$form->addInput($top);

	// 禁止开启控制台
	$consolePanelBan = new Typecho_Widget_Helper_Form_Element_Radio('consolePanelBan',
		array('able' => _t('启用'),
			'disable' => _t('禁用'),
		),
		'disable', _t('禁止开启控制台'), _t('禁止 F12 / 审查开启控制台（其实大部分情况下没有用）'));
	$form->addInput($consolePanelBan);

	// 百度收录自动推送
	$baiduPush = new Typecho_Widget_Helper_Form_Element_Radio('baiduPush',
		array('able' => _t('启用'),
			'disable' => _t('禁用'),
		),
		'disable', _t('百度收录自动推送'), _t('接口调用地址需前往 <a href="https://ziyuan.baidu.com/linksubmit/index?site=" target="_blank">百度搜索资源平台</a> 申请，请在下方填写地址后再启用，否则将卡死'));
	$form->addInput($baiduPush);

	// 百度收录自动推送接口调用地址
	$baiduPushUrl = new Typecho_Widget_Helper_Form_Element_Text('baiduPushUrl', NULL, NULL, _t('百度收录自动推送接口调用地址'), _t('例如：http://data.zz.baidu.com/urls?site=https://blog.example.com&token=EvBAuXeD8MpQ5dVv'));
	$form->addInput($baiduPushUrl);

	// Gravatar 地址
	$gravatarPrefix = new Typecho_Widget_Helper_Form_Element_Text('gravatarPrefix', NULL, NULL, _t('自定义 Gravatar 地址'), _t('例如：https://secure.gravatar.com/avatar/'));
	$form->addInput($gravatarPrefix);

	// 手动置顶文章
	$sticky = new Typecho_Widget_Helper_Form_Element_Textarea('sticky', NULL, NULL, _t('手动置顶文章'), _t('复制首页文章要置顶的代码到这里，就是这么简单 :)'));
	$form->addInput($sticky);

	// 个人主页
	$socialHomepage = new Typecho_Widget_Helper_Form_Element_Text('socialHomepage', NULL, NULL, _t('页底：个人主页'), _t('个人主页地址'));
	$form->addInput($socialHomepage);

	// Twitter
	$socialTwitter = new Typecho_Widget_Helper_Form_Element_Text('socialTwitter', NULL, NULL, _t('页底：Twitter'), _t('Twitter 用户页地址'));
	$form->addInput($socialTwitter);

	// Facebook
	$socialFacebook = new Typecho_Widget_Helper_Form_Element_Text('socialFacebook', NULL, NULL, _t('页底：Facebook'), _t('Facebook 用户页地址'));
	$form->addInput($socialFacebook);

	// Weibo
	$socialWeibo = new Typecho_Widget_Helper_Form_Element_Text('socialWeibo', NULL, NULL, _t('页底：新浪微博'), _t('新浪微博用户页地址'));
	$form->addInput($socialWeibo);

	// Bilibili
	$socialBilibili = new Typecho_Widget_Helper_Form_Element_Text('socialBilibili', NULL, NULL, _t('页底：哔哩哔哩动画'), _t('哔哩哔哩用户页地址'));
	$form->addInput($socialBilibili);

	// YouTube
	$socialYouTube = new Typecho_Widget_Helper_Form_Element_Text('socialYouTube', NULL, NULL, _t('页底：YouTube'), _t('YouTube 频道页地址'));
	$form->addInput($socialYouTube);

	// GitHub
	$socialGitHub = new Typecho_Widget_Helper_Form_Element_Text('socialGitHub', NULL, NULL, _t('页底：GitHub'), _t('GitHub 用户页地址'));
	$form->addInput($socialGitHub);

	// GitLab
	$socialGitLab = new Typecho_Widget_Helper_Form_Element_Text('socialGitLab', NULL, NULL, _t('页底：GitLab'), _t('GitLab 用户页地址'));
	$form->addInput($socialGitLab);

	// LinkedIn
	$socialLinkedIn = new Typecho_Widget_Helper_Form_Element_Text('socialLinkedIn', NULL, NULL, _t('页底：LinkedIn'), _t('LinkedIn 用户页地址'));
	$form->addInput($socialLinkedIn);

	// By Me A Coffee
	$socialCoffee = new Typecho_Widget_Helper_Form_Element_Text('socialCoffee', NULL, NULL, _t('页底：By Me A Coffee'), _t('By Me A Coffee 地址'));
	$form->addInput($socialCoffee);

	// 电子邮件
	$socialEMailTo = new Typecho_Widget_Helper_Form_Element_Text('socialEMailTo', NULL, NULL, _t('页底：E-Mail To'), _t('电子邮件地址，例如："mailto:admin@example.com"'));
	$form->addInput($socialEMailTo);

	// ICP 备案号
	$ICPbeian = new Typecho_Widget_Helper_Form_Element_Text('ICPbeian', NULL, NULL, _t('页底：ICP 备案号'), _t('输入 ICP 备案号，留空则不显示'));
	$form->addInput($ICPbeian);

	// 底部自定义
	$footerContent = new Typecho_Widget_Helper_Form_Element_Textarea('footerContent', NULL, NULL, _t('页底：自定义内容'), _t('位于底部 footer 内，适合放置一些 JS 内容，如网站统计、备案信息代码等'));
	$form->addInput($footerContent);
}

// 评论新窗口打开
function CommentAuthor($obj, $autoLink = NULL, $noFollow = NULL) { // 后两个参数是原生函数自带的，为了保持原生属性，我并没有删除，原版保留
	$options = Helper::options();
	$autoLink = $autoLink ? $autoLink : $options->commentsShowUrl; // 原生参数，控制输出链接
	$noFollow = $noFollow ? $noFollow : $options->commentsUrlNofollow; // 原生参数，控制输出链接额外属性
	if ($obj->url && $autoLink) {
		echo '<a href="' . $obj->url . '"' . ($noFollow ? ' rel="external nofollow"' : NULL) . (strstr($obj->url, $options->index) == $obj->url ? NULL : ' target="_blank"') . '>' . $obj->author . '</a>';
	} else {
		echo $obj->author;
	}
}

// 自定义标签(tag)样式
function printTag($that) { ?>
		<?php if (count($that->tags) > 0): ?>
			<?php foreach ($that->tags as $tags): ?>
			<a href="<?php print($tags['permalink']) ?>" class="btn btn-primary btn-sm ml-0 mr-1 mb-1 hover-target"><span><?php print($tags['name']) ?></span></a>
			<?php endforeach;?>
		<?php else: ?>
			<a class="btn btn-primary btn-sm ml-0 mr-1 mb-1 hover-target"><span>无标签</span></a>
		<?php endif; ?>
<?php }

// Typecho PHP 正则提取 img 标签 src 和 alt，评论新窗口打开 <a href="$1" data-title="$2" data-lightbox="roadtrip" /><img alt="$2" src="$1"></a>   
function parseContent($obj) {
	$options = Typecho_Widget::widget('Widget_Options');	
		if (!empty($options->src_add) && !empty($options->cdn_add)) {
			$obj->content = str_ireplace($options->src_add,$options->cdn_add,$obj->content);
		}

	$obj->content = preg_replace('/<\s*img[\s\S]+?(?:src=[\'"]([\S\s]*?)[\'"]\s*|alt=[\'"]([\S\s]*?)[\'"]\s*|[a-z]+=[\'"][\S\s]*?[\'"]\s*)+[\s\S]*?>/i','<img src="https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.8/img/lazyload.jpg" alt="$2" data-src="$1" />',$obj->content);
	$obj->content = preg_replace("/<a href=\"([^\"]*)\">/i", "<a href=\"\\1\" target=\"_blank\">", $obj->content);
	echo trim($obj->content);
}

// 判断是否存在图片，再根据结果切换不同的样式
function yotu($thiz) {
	$content = $thiz->content;
	$ret = preg_match("/\<img.*?src\=\"(.*?)\"[^>]*>/i", $content, $thumbUrl);
	if ($ret === 1 && count($thumbUrl) == 2) {
		return 1;
	} else {
		return 0;
	}
}

// 主题初始化
function themeInit($archive) {
	// 判断是否是添加评论的操作
	// 为文章或页面、post 操作，且包含参数 `themeAction=comment` (自定义)
	if ($archive->is('single') && $archive->request->isPost() && $archive->request->is('themeAction=comment')) {
		// 为添加评论的操作时
		ajaxComment($archive);
	}
}


/**
 * ajaxComment
 * 实现 Ajax 评论的方法 (实现 feedback 中的 comment 功能)
 * @param Widget_Archive $archive
 * @return void
 */
function ajaxComment($archive) {
	$options = Helper::options();
	$user = Typecho_Widget::widget('Widget_User');
	$db = Typecho_Db::get();
	// Security 验证不通过时会直接跳转，所以需要自己进行判断

	/** 评论关闭 */
	if (!$archive->allow('comment')) {
		$archive->response->throwJson(array('status'=>0, 'msg'=>_t('评论已关闭')));
	}
	/** 检查ip评论间隔 */
	if (!$user->pass('editor', true) && $archive->authorId != $user->uid &&
	$options->commentsPostIntervalEnable) {
		$latestComment = $db->fetchRow($db->select('created')->from('table.comments')
			->where('cid = ?', $archive->cid)
			->where('ip = ?', $archive->request->getIp())
			->order('created', Typecho_Db::SORT_DESC)
			->limit(1));

		if ($latestComment && ($options->gmtTime - $latestComment['created'] > 0 &&
		$options->gmtTime - $latestComment['created'] < $options->commentsPostInterval)) {
			$archive->response->throwJson(array('status'=>0, 'msg'=>_t('对不起, 您的发言过于频繁, 请稍侯再次发布')));
		}
	}

	$comment = array(
		'cid'		=>	$archive->cid,
		'created'	=>	$options->gmtTime,
		'agent'		=>	$archive->request->getAgent(),
		'ip'		=>	$archive->request->getIp(),
		'ownerId'	=>	$archive->author->uid,
		'type'		=>	'comment',
		'status'	=>	!$archive->allow('edit') && $options->commentsRequireModeration ? 'waiting' : 'approved'
	);

	/** 判断父节点 */
	if ($parentId = $archive->request->filter('int')->get('parent')) {
		if ($options->commentsThreaded && ($parent = $db->fetchRow($db->select('coid', 'cid')->from('table.comments')
		->where('coid = ?', $parentId))) && $archive->cid == $parent['cid']) {
			$comment['parent'] = $parentId;
		} else {
			$archive->response->throwJson(array('status'=>0, 'msg'=>_t('父级评论不存在')));
		}
	}
	$feedback = Typecho_Widget::widget('Widget_Feedback');
	// 检验格式
	$validator = new Typecho_Validate();
	$validator->addRule('author', 'required', _t('必须填写用户名'));
	$validator->addRule('author', 'xssCheck', _t('请不要在用户名中使用特殊字符'));
	$validator->addRule('author', array($feedback, 'requireUserLogin'), _t('您所使用的用户名已经被注册,请登录后再次提交'));
	$validator->addRule('author', 'maxLength', _t('用户名最多包含 200 个字符'), 200);

	if ($options->commentsRequireMail && !$user->hasLogin()) {
		$validator->addRule('mail', 'required', _t('必须填写电子邮箱地址'));
	}

	$validator->addRule('mail', 'email', _t('邮箱地址不合法'));
	$validator->addRule('mail', 'maxLength', _t('电子邮箱最多包含 200 个字符'), 200);

	if ($options->commentsRequireUrl && !$user->hasLogin()) {
		$validator->addRule('url', 'required', _t('必须填写个人主页'));
	}
	$validator->addRule('url', 'url', _t('个人主页地址格式错误'));
	$validator->addRule('url', 'maxLength', _t('个人主页地址最多包含200个字符'), 200);

	$validator->addRule('text', 'required', _t('必须填写评论内容'));

	$comment['text'] = $archive->request->text;

	/** 对一般匿名访问者，将用户数据保存一个月 */
	if (!$user->hasLogin()) {
		/** Anti-XSS */
		$comment['author'] = $archive->request->filter('trim')->author;
		$comment['mail'] = $archive->request->filter('trim')->mail;
		$comment['url'] = $archive->request->filter('trim')->url;

		/** 修正用户提交的 url */
		if (!empty($comment['url'])) {
			$urlParams = parse_url($comment['url']);
			if (!isset($urlParams['scheme'])) {
				$comment['url'] = 'http://' . $comment['url'];
			}
		}

		$expire = $options->gmtTime + $options->timezone + 30 * 24 * 3600;
		Typecho_Cookie::set('__typecho_remember_author', $comment['author'], $expire);
		Typecho_Cookie::set('__typecho_remember_mail', $comment['mail'], $expire);
		Typecho_Cookie::set('__typecho_remember_url', $comment['url'], $expire);
	} else {
		$comment['author'] = $user->screenName;
		$comment['mail'] = $user->mail;
		$comment['url'] = $user->url;

		/** 记录登录用户的 id */
		$comment['authorId'] = $user->uid;
	}

	/** 评论者之前须有评论通过了审核 */
	if (!$options->commentsRequireModeration && $options->commentsWhitelist) {
		if ($feedback->size($feedback->select()->where('author = ? AND mail = ? AND status = ?', $comment['author'], $comment['mail'], 'approved'))) {
			$comment['status'] = 'approved';
		} else {
			$comment['status'] = 'waiting';
		}
	}

	if ($error = $validator->run($comment)) {
		$archive->response->throwJson(array('status'=>0, 'msg'=> implode(';', $error)));
	}
	// 评论过程的插件接口，一般用于过滤垃圾评论的插件
	try {
		 $comment = $feedback->pluginHandle()->comment($comment, $feedback->_content);
	} catch (Typecho_Exception $e) {
		 Typecho_Cookie::set('__typecho_remember_text', $comment['text']);
		 $archive->response->throwJson(array('status'=>0, 'msg'=>_t($e->getMessage())));
		 throw $e;
	}
	/** 添加评论 */
	$commentId = $feedback->insert($comment);
	if (!$commentId) {
		$archive->response->throwJson(array('status'=>0, 'msg'=>_t('评论失败')));
	}
	Typecho_Cookie::delete('__typecho_remember_text');
	$db->fetchRow($feedback->select()->where('coid = ?', $commentId)
	->limit(1), array($feedback, 'push'));
	// 评论完成后的接口，一般用于评论提醒插件
	$feedback->pluginHandle()->finishComment($feedback);

	// 返回评论数据
	$data = array(
		'cid' => $feedback->cid,
		'coid' => $feedback->coid,
		'parent' => $feedback->parent,
		'mail' => $feedback->mail,
		'url' => $feedback->url,
		'ip' => $feedback->ip,
		'agent' => $feedback->agent,
		'author' => $feedback->author,
		'authorId' => $feedback->authorId,
		'permalink' => $feedback->permalink,
		'created' => $feedback->created,
		'datetime' => $feedback->date->format('Y年m月d日 H:i'),
		'status' => $feedback->status,
	);
	// 评论内容
	ob_start();
	$feedback->content();
	$data['content'] = ob_get_clean();

	$data['avatar'] = Typecho_Common::gravatarUrl($data['mail'], 48, Helper::options()->commentsAvatarRating, NULL, $archive->request->isSecure());
	$archive->response->throwJson(array('status'=>1, 'comment'=>$data));
}

// 输出文章缩略图
function showThumbnail($widget) {
$attach = $widget->attachments(1)->attachment;
$pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
	echo $thumbUrl[1][0];
	} else
		if ($attach->isImage) {
		echo $attach->url;
		} else {
		echo $random;
		}
}

// 文章转载
function themeFields($layout) {
	$url = new Typecho_Widget_Helper_Form_Element_Text('url', NULL, NULL, _t('转载文章地址'), _t('url'));
	$author = new Typecho_Widget_Helper_Form_Element_Text('author', NULL, NULL, _t('作者名'), _t('author'));
	$layout->addItem($url);
	$layout->addItem($author);	
}

/**
* 判断时间区间
*
* 使用方法 if (timeZone($this->date->timeStamp)) echo 'ok';
*/
function timeZone($from) {
$now = new Typecho_Date(Typecho_Date::gmtTime());
return $now->timeStamp - $from < 24 * 60 * 60 ? true : false;
}

// 获取评论的锚点链接
function get_comment_at($coid) {
	$db = Typecho_Db::get();
	$prow = $db->fetchRow($db->select('parent,status')->from('table.comments')
		->where('coid = ?', $coid));
	$parent = @$prow['parent'];
	if ($parent != "0") { // 子评论
		$arow = $db->fetchRow($db->select('author,status')->from('table.comments')
			->where('coid = ?', $parent)); // 查询该条评论的父评论的作者的名称
		@$author = @$arow['author']; // 作者名称
		if (@$author && $arow['status'] == "approved") { // 父评论作者存在且父评论已经审核通过
			if (@$prow['status'] == "waiting") {
				echo '<p class="commentReview">' . _mt("（评论审核中）") . '</p>';
			}
			echo '<a href="#comment-' . $parent . '">@' . $author . '</a>';
		} else { // 父评论作者不存在或者父评论没有审核通过
			if (@$prow['status'] == "waiting") {
				echo '<p class="commentReview">' . _mt("（评论审核中）") . '</p>';
			} else {
				echo '';
			}
		}
	} else { // 母评论，无需输出锚点链接
		if (@$prow['status'] == "waiting"){
			echo '<p class="commentReview">' . _mt("（评论审核中）") . '</p>';
		} else {
			echo '';
		}
	}
}

Typecho_Plugin::factory('admin/write-post.php')->bottom = array('editor', 'reset');
Typecho_Plugin::factory('admin/write-page.php')->bottom = array('editor', 'reset');
class editor
{
	public static function reset()
	{
		Typecho_Widget::widget('Widget_Options')->to($options);
?>

		<style>
			.wmd-button.custom {
				width: 20px;
				height: 20px;
				line-height: 20px;
				text-align: center;
			}

			.wmd-button.custom svg {
				width: 15px;
				height: 15px;
				vertical-align: middle;
			}

			body.fullscreen {
				overflow-x: hidden;
			}

			.wmd-button-row {
				height: auto;
			}

			#custom-field .typecho-list-table tbody textarea {
				width: 100%;
				height: 100px;
			}

			#custom-field .typecho-list-table tbody input[type="text"] {
				width: 100%;
			}
		</style>
		<script>
			$(function() {
				$("#wmd-button-bar .wmd-edittab").remove()
				$("#wmd-button-row .wmd-spacer").remove()
				$("#wmd-button-row #wmd-more-button").remove()
				$("#wmd-button-row #wmd-code-button").remove()
				$("#wmd-button-row #wmd-heading-button").remove()
				$("#wmd-fullscreen-button").on("click", function() {
					$(".fullscreen #text").css("top", $('.fullscreen #wmd-button-bar').outerHeight())
				})
				$("#wmd-button-row #wmd-fullscreen-button").before(`
					<li class="wmd-button custom" id="j-wmd-linecode" title="行内代码">
						<svg t="1607495229023" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1161" width="15" height="15"><path d="M810.666667 213.333333a85.333333 85.333333 0 0 1 85.333333 85.333334v426.666666a85.333333 85.333333 0 0 1-85.333333 85.333334H213.333333a85.333333 85.333333 0 0 1-85.333333-85.333334V298.666667a85.333333 85.333333 0 0 1 85.333333-85.333334h597.333334z m0 42.666667H213.333333a42.666667 42.666667 0 0 0-42.666666 42.666667v426.666666a42.666667 42.666667 0 0 0 42.666666 42.666667h597.333334a42.666667 42.666667 0 0 0 42.666666-42.666667V298.666667a42.666667 42.666667 0 0 0-42.666666-42.666667z" p-id="1162" fill="#888888"></path><path d="M593.194667 330.965333L774.229333 512l-181.034666 181.034667-53.546667-53.546667 128.554667-128.554667-127.445334-127.488 52.48-52.48z m-170.666667 0l52.48 52.48-127.445333 127.488 128.554666 128.554667-53.589333 53.546667L241.536 512l180.992-181.034667z" p-id="1163" fill="#888888"></path></svg>
					</li>
					<li class="wmd-button custom" id="j-wmd-code" title="代码块">
						<svg t="1607495398743" class="icon" viewBox="0 0 1170 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1936" width="15" height="15"><path d="M1144.876703 504.481774l-279.739458-253.118501a40.15084 40.15084 0 0 0-59.458348 5.631356 47.976231 47.976231 0 0 0 5.19255 64.065821l250.485658 226.716947-251.436407 227.521426a47.537424 47.537424 0 0 0-5.119415 63.480745 39.712033 39.712033 0 0 0 58.873272 5.485087l291.587247-263.796137a47.537424 47.537424 0 0 0 5.119415-63.480745 42.052337 42.052337 0 0 0-15.431379-12.505999zM108.926526 547.777397l250.485659-226.716947a47.976231 47.976231 0 0 0 5.192549-64.065821 40.15084 40.15084 0 0 0-59.458347-5.631356L25.333794 504.481774a44.685179 44.685179 0 0 0-24.86573 34.812021 46.952348 46.952348 0 0 0 14.6269 41.101588l291.587247 263.942407a39.712033 39.712033 0 0 0 58.873272-5.558222 47.537424 47.537424 0 0 0-5.19255-63.480745L108.853392 547.631128zM667.089022 0.804479a44.904582 44.904582 0 0 1 33.934407 52.218033L548.611133 984.975431a44.53891 44.53891 0 0 1-26.620957 36.128443 39.492629 39.492629 0 0 1-42.125471-8.044795 47.171752 47.171752 0 0 1-13.529883-43.880699L618.893387 37.298594a42.198606 42.198606 0 0 1 48.415038-36.567249z" p-id="1937" fill="#888888"></path></svg>
					</li>
					<li class="wmd-button custom" id="j-wmd-delete" title="删除线">
						<svg t="1607494660243" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1750" width="15" height="15"><path d="M968 542.9V481c0-1.7-0.5-3-2.3-3H571.6l-0.5-0.1c-10.7-2.1-21.6-4.2-32.5-6.2-16.9-3.1-23.2-4.3-31.8-6-53.1-10.4-85.4-20.7-111.6-35.8-37.9-22.1-56.3-52.2-56.3-92 0-39.7 16.4-72.8 47.3-95.7 30.1-22.3 72.8-34 123.3-34 57.8 0 102.6 15.3 133.1 45.5 15.6 15.4 27.1 34.3 34 56.2 1.6 4.9 3.1 11.4 4.6 18.8 0.5 2.5 2.7 4.3 5.3 4.3h75c2.9 0 5.4-2.3 5.4-5.2v-0.8c-1-6.8-1.3-12.1-2-15.9-7.3-43.8-28-82-59.9-110.8-44.7-40.8-110.8-62.4-191-62.4-73.4 0-139.4 18.3-185.9 51.5-25.8 18.6-45.6 41.4-58.8 67.9-13.4 27.2-20.3 58.7-20.3 93.5 0 29.5 5.6 54.5 17.2 76.5 8.2 15.5 19.3 29.2 34 41.9l10.2 8.8H59.2c-1.8 0-4.2 1.4-4.2 3.1V543c0 1.8 2.4 3 4.2 3h446.7l0.5 0.2c1.3 0.3 2.6 0.6 3.8 0.8 0.8 0.2 1.5 0.3 2.3 0.5 33 6.6 51.7 10.9 69 15.8 24.3 6.9 42.8 14.1 58 22.6 38.7 21.8 57.5 53.2 57.5 96 0 37.9-16.6 71.8-46.8 95.4-32.2 25.2-79.7 38.6-137.5 38.6-45.6 0-84.6-8.9-116-26.4-30.9-17.3-52.4-42.3-63.8-74.3-0.9-2.4-1.8-5.8-2.9-9.9-0.6-2.3-2.8-4.3-5.2-4.3h-82.1c-3 0-5.7 3-5.7 6v0.8c0 2.2 0.5 4.1 0.7 5.4 6.5 48.9 30.4 89 70.9 119 47.6 35.2 115 53.8 194.6 53.8 85.6 0 157.4-20.1 207.3-58 25-18.9 44.3-42.2 57.3-69.3 13.1-27.4 19.8-58.4 19.8-92.1 0-32-5.8-58.6-17.8-81.5-5.7-11.1-13-21.4-21.7-30.7l-7.9-8.5h225.3c2 0.1 2.5-1.3 2.5-3z" p-id="1751" fill="#888888"></path></svg>
					</li>
					<li class="wmd-button custom" id="j-wmd-table" title="插入表格">
						<svg t="1607495516074" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2817" width="15" height="15"><path d="M960 591.424V368.96c0-0.288 0.16-0.512 0.16-0.768s-0.16-0.512-0.16-0.768V192a32 32 0 0 0-32-32H96a32 32 0 0 0-32 32v175.424c0 0.288-0.16 0.512-0.16 0.768s0.16 0.48 0.16 0.768v222.464c0 0.288-0.16 0.512-0.16 0.768s0.16 0.48 0.16 0.768V864a32 32 0 0 0 32 32h832a32 32 0 0 0 32-32V592.96c0-0.288 0.16-0.512 0.16-0.768s-0.16-0.512-0.16-0.768z m-560-31.232v-160h208v160H400z m208 64V832H400V624.192h208z m-480-224h208v160H128v-160z m544 0h224v160H672v-160zM896 224v112.192H128V224h768zM128 624.192h208V832H128V624.192zM672 832V624.192h224V832H672z" p-id="2818" fill="#888888"></path></svg>
					</li>
					<li class="wmd-button custom" id="j-wmd-title" title="插入标题">
						<svg t="1607495979397" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4871" width="15" height="15"><path d="M237.909333 567.068444v389.12c0 44.487111-20.764444 66.787556-62.065777 66.787556C134.371556 1022.976 113.777778 1000.675556 113.777778 956.302222V77.767111C113.777778 25.941333 134.371556 0 175.786667 0c41.358222 0 62.122667 25.941333 62.122666 77.767111V461.368889h541.866667V77.767111c0-48.071111 22.641778-74.126222 67.811556-77.767111 41.358222 0 62.065778 25.941333 62.065777 77.767111v878.364445c0 44.430222-20.707556 66.730667-62.008889 66.730666-45.226667 0-67.868444-22.300444-67.868444-66.730666v-389.12H237.909333z" p-id="4872" fill="#888888"></path></svg>
					</li>
					<li class="wmd-button custom" id="j-wmd-footer" title="插入脚注">
						<svg t="1607496225463" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6607" width="15" height="15"><path d="M830.42178027 223.13075733c-25.66834027 0-46.47065387-20.78485013-46.47065387-46.43681706 0-25.63777707 20.80340587-46.4226272 46.47065387-46.4226272 25.65196693 0 46.456464 20.78485013 46.456464 46.4226272C876.87715307 202.3469984 856.0737472 223.13075733 830.42178027 223.13075733zM711.24235627 155.84250773c-24.5451584 0-44.45242133-19.8897984-44.45242134-44.41967573 0-24.52987733 19.90617067-44.42076693 44.45242134-44.42076693 24.542976 0 44.436048 19.8908896 44.436048 44.42076693C755.67840427 135.95161813 735.7853312 155.84250773 711.24235627 155.84250773zM583.97253547 135.64271573c-27.15063253 0-49.15908373-21.98989547-49.15908374-49.12306346 0-27.11897813 22.0084512-49.12415467 49.15908374-49.12415467 27.14954133 0 49.15471787 22.00517653 49.15471786 49.12415467C633.1283456 113.65282027 611.12207787 135.64271573 583.97253547 135.64271573zM453.33098987 149.10342187c-30.86073173 0-55.8785216-25.00032533-55.8785216-55.8468672 0-30.84435947 25.01778987-55.86214933 55.8785216-55.86214934 30.87928747 0 55.89598613 25.01669867 55.89598613 55.86214934C509.22697707 124.10309653 484.2102784 149.10342187 453.33098987 149.10342187zM260.1231392 255.42575467c-55.04896213 0-99.66402027-44.5834048-99.66402027-99.58324694 0-55.01621547 44.6150592-99.59962027 99.66402027-99.59962026 55.0325888 0 99.6498304 44.58231253 99.6498304 99.59962026C359.7718784 210.84234987 315.1546368 255.42575467 260.1231392 255.42575467zM585.30201493 986.09585173c-24.2537216 0-48.08611307-6.22825067-68.92117333-18.01346346-39.6988224-22.45379413-66.20327253-52.48496533-78.77874987-89.2563136-11.796128-34.49660693-11.29075093-75.288048 1.50303254-121.23804374 1.97457173-7.07418347 3.09666133-13.2598656 3.43503466-18.92488853 0.98674027-16.30522453 1.48010987-29.8794496 1.5073984-41.51948907 0.0764064-23.9862976-8.5542944-47.91801813-24.30502293-67.40285973-31.00481387-38.34314667-56.70808213-76.8587552-76.39267307-114.47385387-23.04867627-44.02454293-26.55793387-95.91353493-9.6239904-142.35690026 20.97695893-57.5463744 48.99208-100.01003413 85.64554454-129.81635094 42.12201173-34.2531968 96.7496448-51.7274464 162.36458346-51.93701973l0.38203414 0c7.02834027 0 14.0719616 0.55886187 20.93220586 1.66021227 57.03772267 9.03456533 102.65152853 28.52377387 139.40868694 59.57333973 32.06577707 27.0873248 56.58146453 62.47352533 74.9464 108.18120213 13.57968213 33.8056704 20.9485792 70.70800213 21.90475626 109.68096 3.69700053 150.69616427-12.2785824 265.21367893-48.83817493 350.09624534-17.24393707 40.038288-39.47615147 73.65621547-66.0788384 99.92380373-25.28957973 24.9708544-55.3098368 44.07911893-89.22466027 56.79431253C619.195008 983.05704107 602.4160608 986.09585173 585.30201493 986.09585173zM582.118032 229.359008l-0.26524053 0c-107.4138592 0.341648-172.87052693 48.65043307-212.23315947 156.63516053-13.2598656 36.36857493-10.49830293 77.02794133 7.57846933 111.55511147 18.51993173 35.38947627 42.82822933 71.78315627 72.25360427 108.1713792 21.25748053 26.2970592 32.9051616 58.80162987 32.8003744 91.52887253-0.02947093 12.37136213-0.5457632 26.672544-1.57725547 43.70581654-0.49991893 8.3851072-2.06080213 17.1860864-4.76888 26.88975786-21.89929813 78.6575904-3.06282347 131.7221568 59.28408534 166.98392427 15.10891093 8.54665387 32.43798827 13.06339093 50.1119872 13.06339093 12.51544427 0 24.7787456-2.22016533 36.45153066-6.5982784 60.21079147-22.57386133 103.92097387-67.07758507 133.63232854-136.05988373 33.85588053-78.6041056 49.24204053-190.99423467 45.73169066-334.0464384-0.84265813-34.39618667-7.29030613-66.82107627-19.1628416-96.3763424-33.65940587-83.77466773-92.4195584-129.61769387-184.92207253-144.26925547C592.19828053 229.7661472 587.05500693 229.359008 582.118032 229.359008z" p-id="6608" fill="#888888"></path></svg>
					</li>
					<li class="wmd-button custom" id="j-wmd-html" title="原生代码">
						<svg t="1607496478319" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7487" data-spm-anchor-id="a313x.7781069.0.i37" width="15" height="15"><path d="M868.8 105.6 155.2 105.6c-28.8 0-51.2 25.6-48 54.4l75.2 600c1.6 17.6 12.8 32 28.8 38.4l281.6 118.4c11.2 4.8 25.6 4.8 36.8 0l281.6-118.4c16-6.4 27.2-20.8 28.8-38.4l75.2-600C920 129.6 897.6 105.6 868.8 105.6zM865.6 179.2l-70.4 558.4c-1.6 8-6.4 16-14.4 19.2l-259.2 108.8c-6.4 3.2-12.8 3.2-19.2 0l-259.2-108.8c-8-3.2-12.8-11.2-14.4-19.2L158.4 179.2c-1.6-14.4 9.6-27.2 24-27.2l659.2 0C856 153.6 867.2 166.4 865.6 179.2z" p-id="7488" fill="#888888"></path><path d="M716.8 252.8 331.2 252.8c-28.8 0-51.2 25.6-48 54.4l17.6 136c3.2 24 24 41.6 48 41.6l294.4 0c14.4 0 25.6 12.8 24 27.2l-9.6 80c-1.6 8-6.4 16-14.4 19.2l-120 51.2c-6.4 3.2-12.8 3.2-19.2 0l-120-51.2c-8-3.2-12.8-11.2-14.4-19.2l-3.2-28.8c-1.6-12.8-14.4-22.4-27.2-20.8-12.8 1.6-22.4 14.4-20.8 27.2l4.8 41.6c1.6 17.6 12.8 32 28.8 38.4l142.4 60.8c11.2 4.8 25.6 4.8 36.8 0l142.4-60.8c16-6.4 27.2-20.8 28.8-38.4l14.4-121.6c3.2-28.8-19.2-54.4-48-54.4l-300.8 0c-12.8 0-22.4-9.6-24-20.8l-11.2-88c-1.6-14.4 9.6-27.2 24-27.2l358.4 0c11.2 0 20.8-8 24-19.2l0 0C742.4 267.2 731.2 252.8 716.8 252.8z" p-id="7489" fill="#888888"></path></svg>
					</li>
					<li class="wmd-button custom" id="j-wmd-img" title="图片排列">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 503.689 503.689" style="enable-background:new 0 0 503.689 503.689;" xml:space="preserve"> <path style="fill:#E4E7E7;" d="M16.502,135.838L396.564,34.225c11.815-3.151,24.418,3.938,27.569,15.754l75.225,279.237 c3.151,11.815-3.938,24.025-16.148,27.175L103.149,458.004c-11.815,3.151-24.418-3.938-27.569-15.754L0.749,163.013 C-2.402,151.198,4.687,138.989,16.502,135.838z"/> <path style="fill:#208DB2;" d="M48.404,158.287L380.81,69.672c9.058-2.363,18.511,3.151,21.268,12.209l62.228,231.188 c2.363,9.058-3.151,18.511-12.209,20.874L119.69,422.558c-9.058,2.363-18.511-3.151-21.268-12.209L36.195,179.161 C33.438,170.102,38.952,160.65,48.404,158.287z"/> <path style="fill:#F3F3F3;" d="M85.425,131.899H481.24c12.603,0,22.449,10.24,22.449,22.449v293.415 c0,12.603-10.24,22.449-22.449,22.449H85.425c-12.603,0-22.449-10.24-22.449-22.449V154.349 C62.976,142.139,73.216,131.899,85.425,131.899z"/> <path style="fill:#A3E0F5;" d="M111.813,163.407h343.828c9.452,0,17.329,7.877,17.329,17.329V421.77 c0,9.452-7.877,17.329-17.329,17.329H111.813c-9.452,0-17.329-7.877-17.329-17.329V180.736 C94.484,171.284,101.967,163.407,111.813,163.407z"/> <path style="fill:#EFC75E;" d="M94.484,180.736v84.283c3.938,0.394,7.877,0.788,11.815,0.788c50.018,0,90.585-40.566,90.585-90.585 c0-3.938-0.394-7.877-0.788-11.815h-84.283C101.967,163.407,94.484,171.284,94.484,180.736z"/> <path style="fill:#3DB39E;" d="M123.235,356.392c-9.846,0-19.692,0.788-28.751,1.969v63.409c0,9.452,7.877,17.329,17.329,17.329 h131.151c0.788-3.545,1.182-6.695,1.182-10.24C244.145,388.687,190.189,356.392,123.235,356.392z"/> <path style="fill:#4BC2AD;" d="M397.745,320.945c-107.914,0-195.742,52.775-196.923,118.154h254.425 c9.452,0,17.329-7.877,17.329-17.329v-91.766C449.339,324.49,424.133,320.945,397.745,320.945z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
					</li>
					<li class="wmd-button custom" id="j-wmd-link" title="友情链接">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <path style="fill:#FF991F;" d="M398.155,367.753l4.357-0.009c22.22-0.047,40.196-17.554,40.15-39.102l-0.183-85.465 c-0.087-40.62-28.108-74.845-66.396-85.629c-38.437,10.827-66.498,45.268-66.411,86.023l0.183,85.465 c0.046,21.548,18.096,38.978,40.317,38.931l5.843-0.013l0.286,134.033l42.14-0.09L398.155,367.753z"/> <path style="fill:#FF991F;" d="M205.038,367.855c22.22,0,40.233-17.468,40.233-39.017v-85.465 c0-40.709-28.071-75.057-66.464-85.843c-38.393,10.787-66.464,45.134-66.464,85.843v85.465c0,21.548,18.013,39.017,40.234,39.017 h5.843v134.143h42.261V367.855H205.038z"/> <path style="fill:#FF991F;" d="M365.762,72.361c-14.474,6.923-24.459,21.714-24.423,38.826 c0.036,17.044,10.003,31.746,24.413,38.643c14.474-6.923,24.459-21.714,24.423-38.826C390.139,93.96,380.172,79.258,365.762,72.361 z"/> <path style="fill:#FF991F;" d="M168.831,72.355c-14.442,6.91-24.418,21.656-24.418,38.734s9.977,31.824,24.418,38.734 c14.442-6.91,24.418-21.656,24.418-38.734S183.273,79.265,168.831,72.355z"/> </g> <circle cx="441.64" cy="338.1" r="10"/> <circle cx="60.966" cy="338.1" r="10"/> <path style="fill:#FFFFFF;" d="M242.602,349.869c-25.2,0-45.628-19.811-45.628-44.248v-96.924c0-47.556,33.779-87.456,79.337-98.382 c-8.063-1.934-16.493-2.967-25.172-2.967l0,0c-57.719,0-104.51,45.375-104.51,101.349v96.924c0,24.437,20.428,44.248,45.628,44.248 h6.627v152.129h50.345V349.869H242.602z"/> <g> <path style="fill:#FFD41D;" d="M310.021,349.869c25.2,0,45.628-19.811,45.628-44.248v-96.924c0-47.556-33.779-87.456-79.337-98.382 c-45.558,10.926-79.337,50.826-79.337,98.382v96.924c0,24.437,20.428,44.248,45.628,44.248h6.627v152.129h55.851V349.869H310.021z" /> <path style="fill:#FFD41D;" d="M267.312,14.002c-17.261,7.481-29.34,24.663-29.34,44.673s12.079,37.192,29.34,44.673 c17.26-7.481,29.339-24.663,29.339-44.673S284.573,21.483,267.312,14.002z"/> </g> <path d="M494.298,491.996h-85.876l-0.525-245.772c-0.012-5.517-4.487-9.98-10.001-9.98c-0.007,0-0.015,0-0.022,0 c-5.524,0.012-9.992,4.499-9.98,10.023l0.525,245.729H359.37l-0.257-109.348c-0.013-5.516-4.488-9.978-10.001-9.978 c-0.008,0-0.016,0-0.024,0c-5.524,0.013-9.992,4.501-9.978,10.025l0.257,109.301h-24.285v-132.36 c28.31-2.503,50.569-25.767,50.569-54.016v-96.924c0-15.412-3.27-30.519-9.525-44.471c19.751,1.319,38.136,9.355,52.28,23.013 c15.478,14.946,24.027,34.82,24.071,55.971l0.183,56.916c0.018,5.513,4.492,9.97,10.001,9.97c0.011,0,0.022,0,0.033,0 c5.523-0.018,9.987-4.51,9.97-10.034l-0.183-56.905c-0.057-26.6-10.775-51.569-30.18-70.307 c-11.084-10.703-24.249-18.63-38.597-23.439c10.163-9.673,16.505-23.323,16.473-38.427c-0.063-29.142-23.79-52.807-52.919-52.807 c-0.038,0-0.077,0-0.114,0c-8.486,0.019-16.924,2.097-24.401,6.01c-4.894,2.562-6.785,8.606-4.223,13.5 c2.563,4.894,8.608,6.785,13.5,4.223c4.706-2.463,9.809-3.718,15.168-3.73c18.179-0.009,32.948,14.696,32.987,32.846 s-14.696,32.948-32.846,32.987c-0.431,0.001-0.852,0.038-1.267,0.092c-0.533,0.022-1.065,0.041-1.599,0.071 c-14.45-19.776-34.736-34.122-57.84-41.402c12.266-10.762,20.033-26.535,20.033-44.098C306.653,26.321,280.332,0,247.979,0 c-32.354,0-58.675,26.321-58.675,58.675c0,18.414,8.534,34.866,21.847,45.631c-21.208,7.654-39.794,21.365-53.292,39.812 c-1.584-0.071-3.166-0.113-4.74-0.113c-0.748,0-1.494,0.012-2.239,0.028c-0.183-0.01-0.363-0.028-0.548-0.028 c-18.15,0-32.916-14.766-32.916-32.916s14.766-32.916,32.916-32.916c5.486,0,10.913,1.374,15.693,3.973 c4.853,2.637,10.925,0.843,13.565-4.01c2.638-4.853,0.843-10.926-4.01-13.565c-7.704-4.189-16.435-6.403-25.249-6.403 c-29.18,0-52.92,23.74-52.92,52.92c0,15.89,7.05,30.156,18.174,39.865c-37.813,14.581-64.622,50.512-64.622,92.42v56.72 c0,5.524,4.478,10.002,10.002,10.002s10.002-4.478,10.002-10.002v-56.72c0-41.48,33.116-75.606,75.144-79.055 c-6.227,13.925-9.484,28.998-9.484,44.378v96.924c0,28.808,23.147,52.433,52.255,54.141v132.234h-27.248V382.668 c0-5.524-4.478-10.002-10.002-10.002s-10.002,4.478-10.002,10.002v109.328h-24.586v-245.65c0-5.524-4.478-10.002-10.002-10.002 s-10.002,4.478-10.002,10.002v245.65H17.702c-5.524,0-10.002,4.478-10.002,10.002C7.7,507.522,12.178,512,17.702,512h476.597 c5.524,0,10.002-4.478,10.002-10.002C504.299,496.474,499.822,491.996,494.298,491.996z M247.979,20.004 c21.323,0,38.67,17.348,38.67,38.671s-17.348,38.671-38.67,38.671c-21.323,0-38.671-17.348-38.671-38.671 S226.656,20.004,247.979,20.004z M156.63,305.621v-96.924c0-17.31,5.034-34.159,14.558-48.724 c17.452-26.689,47.34-42.623,79.95-42.623c32.664,0,62.579,15.975,80.021,42.734c9.477,14.54,14.487,31.35,14.487,48.613v96.924 c0,17.232-13.31,31.525-30.565,33.895V212.068c0-5.524-4.478-10.002-10.002-10.002c-5.524,0-10.002,4.478-10.002,10.002v279.928 h-35.622V352.849c0-5.524-4.478-10.002-10.002-10.002s-10.002,4.478-10.002,10.002v139.148h-30.565V212.068 c0-5.524-4.478-10.002-10.002-10.002s-10.002,4.478-10.002,10.002v127.641C170.815,338.069,156.63,323.41,156.63,305.621z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
					</li>
				`)
				$("#j-wmd-linecode").on("click", function() {
					insertAtCursor(' `行内代码` ');
				})

				$("#j-wmd-photo").on("click", function() {
					insertAtCursor('\n[photo]\n Markdown 的图片\n Markdown 的图片\n[/photo]\n');
				})
				$("#j-wmd-delete").on("click", function() {
					insertAtCursor(' ~~ 删除线效果 ~~ ');
				})
				$("#j-wmd-table").on("click", function() {
					insertAtCursor('\n表头|表头|表头\n---|:--:|---:\n居左|居中|居右\n居左|居中|居右\n');
				})
				$("#j-wmd-title").on("click", function() {
					insertAtCursor('\n# 一级标题\n## 二级标题\n### 三级标题\n#### 四级标题\n##### 五级标题\n###### 六级标题\n');
				})
				$("#j-wmd-footer").on("click", function() {
					insertAtCursor('\n使用 Markdown[^1]可以效率的书写文档, 直接转换成 HTML[^2],。\n\n[^1]:Markdown是一种纯文本标记语言\n\n[^2]:HyperText Markup Language 超文本标记语言\n');
				})
				$("#j-wmd-html").on("click", function() {
					insertAtCursor('\n!!!\n这里写原生html代码\n!!!\n');
				})
				$("#j-wmd-img").on("click", function() {
					insertAtCursor('\n<\div class="tp">\n<\div><\img src=""><\/\div>\n<\div><\img src=""></\div>\n<\div><\img src=""></\div>\n</\div>\n');
				})
				$("#j-wmd-link").on("click", function() {
					insertAtCursor('\n<\li>网站标题</\li>\n<\li>网站链接</\li>\n<\li>网站图标</\li>\n<\li>网站描述</\li>\n');
				})
				function insertAtCursor(myValue, myField = $('#text')[0]) {
					if (document.selection) {
						myField.focus();
						sel = document.selection.createRange();
						sel.text = myValue;
						sel.select();
					} else if (myField.selectionStart || myField.selectionStart == '0') {
						var startPos = myField.selectionStart;
						var endPos = myField.selectionEnd;
						var restoreTop = myField.scrollTop;
						myField.value = myField.value.substring(0, startPos) + myValue + myField.value.substring(endPos, myField.value.length);
						if (restoreTop > 0) {
							myField.scrollTop = restoreTop;
						}
						myField.focus();
						myField.selectionStart = startPos + myValue.length;
						myField.selectionEnd = startPos + myValue.length;
					} else {
						myField.value += myValue;
						myField.focus();
					}
				}


				/* 粘贴上传 */
				// 上传 URL
				var uploadUrl = '<?php Helper::security()->index('/action/upload'); ?>';
				// 处理有特定的 CID 的情况
				var cid = $('input[name="cid"]').val();
				if (cid) {
					uploadUrl += '&cid=' + cid;
				}

				// 上传文件函数
				function uploadFile(file) {
					// 生成一段随机的字符串作为 key
					var index = Math.random().toString(10).substr(2, 5) + '-' + Math.random().toString(36).substr(2);
					// 默认文件后缀是 png，在 Chrome 浏览器中剪贴板粘贴的图片都是 png 格式，其他浏览器暂未测试
					var fileName = index + '.png';

					// 上传时候提示的文字
					var uploadingText = '[图片上传中...(' + index + ')]';

					// 先把这段文字插入
					var textarea = $('#text'),
						sel = textarea.getSelection(),
						offset = (sel ? sel.start : 0) + uploadingText.length;
					textarea.replaceSelection(uploadingText);
					// 设置光标位置
					textarea.setSelection(offset, offset);

					// 设置附件栏信息
					// 先切到附件栏
					$('#tab-files-btn').click();

					// 更新附件的上传提示
					var fileInfo = {
						id: index,
						name: fileName
					}
					fileUploadStart(fileInfo);

					// 是时候展示真正的上传了
					var formData = new FormData();
					formData.append('name', fileName);
					formData.append('file', file, fileName);

					$.ajax({
						method: 'post',
						url: uploadUrl,
						data: formData,
						contentType: false,
						processData: false,
						success: function(data) {
							var url = data[0],
								title = data[1].title;
							textarea.val(textarea.val().replace(uploadingText, '![' + title + '](' + url + ')'));
							// 触发输入框更新事件，把状态压入栈中，解决预览不更新的问题
							textarea.trigger('paste');
							// 附件上传的 UI 更新
							fileUploadComplete(index, url, data[1]);
						},
						error: function(error) {
							textarea.val(textarea.val().replace(uploadingText, '[图片上传错误...]\n'));
							// 触发输入框更新事件，把状态压入栈中，解决预览不更新的问题
							textarea.trigger('paste');
							// 附件上传的 UI 更新
							fileUploadError(fileInfo);
						}
					});
				}

				// 监听输入框粘贴事件
				document.getElementById('text').addEventListener('paste', function(e) {
					var clipboardData = e.clipboardData;
					var items = clipboardData.items;
					for (var i = 0; i < items.length; i++) {
						if (items[i].kind === 'file' && items[i].type.match(/^image/)) {
							// 取消默认的粘贴操作
							e.preventDefault();
							// 上传文件
							uploadFile(items[i].getAsFile());
							break;
						}
					}
				});

				// 更新附件数量显示
				function updateAttacmentNumber() {
					var btn = $('#tab-files-btn'),
						balloon = $('.balloon', btn),
						count = $('#file-list li .insert').length;

					if (count > 0) {
						if (!balloon.length) {
							btn.html($.trim(btn.html()) + ' ');
							balloon = $('<span class="balloon"></span>').appendTo(btn);
						}

						balloon.html(count);
					} else if (0 == count && balloon.length > 0) {
						balloon.remove();
					}
				}

				// 开始上传文件的提示
				function fileUploadStart(file) {
					$('<li id="' + file.id + '" class="loading">' +
						file.name + '</li>').appendTo('#file-list');
				}

				// 上传完毕的操作
				var completeFile = null;

				function fileUploadComplete(id, url, data) {
					var li = $('#' + id).removeClass('loading').data('cid', data.cid)
						.data('url', data.url)
						.data('image', data.isImage)
						.html('<input type="hidden" name="attachment[]" value="' + data.cid + '" />' +
							'<a class="insert" target="_blank" href="###" title="<?php _e('点击插入文件'); ?>">' + data.title + '</a><div class="info">' + data.bytes +
							' <a class="file" target="_blank" href="<?php $options->adminUrl('media.php'); ?>?cid=' +
							data.cid + '" title="<?php _e('编辑'); ?>"><i class="i-edit"></i></a>' +
							' <a class="delete" href="###" title="<?php _e('删除'); ?>"><i class="i-delete"></i></a></div>')
						.effect('highlight', 1000);

					attachInsertEvent(li);
					attachDeleteEvent(li);
					updateAttacmentNumber();

					if (!completeFile) {
						completeFile = data;
					}
				}

				// 增加插入事件
				function attachInsertEvent(el) {
					$('.insert', el).click(function() {
						var t = $(this),
							p = t.parents('li');
						Typecho.insertFileToEditor(t.text(), p.data('url'), p.data('image'));
						return false;
					});
				}

				// 增加删除事件
				function attachDeleteEvent(el) {
					var file = $('a.insert', el).text();
					$('.delete', el).click(function() {
						if (confirm('<?php _e('确认要删除文件 %s 吗?'); ?>'.replace('%s', file))) {
							var cid = $(this).parents('li').data('cid');
							$.post('<?php Helper::security()->index('/action/contents-attachment-edit'); ?>', {
								'do': 'delete',
								'cid': cid
							},
							function() {
								$(el).fadeOut(function() {
									$(this).remove();
									updateAttacmentNumber();
								});
							});
						}

						return false;
					});
				}

				// 错误处理，相比原来的函数，做了一些微小的改造
				function fileUploadError(file) {
					var word;

					word = '<?php _e('上传出现错误'); ?>';

					var fileError = '<?php _e('%s 上传失败'); ?>'.replace('%s', file.name),
						li, exist = $('#' + file.id);

					if (exist.length > 0) {
						li = exist.removeClass('loading').html(fileError);
					} else {
						li = $('<li>' + fileError + '<br />' + word + '</li>').appendTo('#file-list');
					}

					li.effect('highlight', {
						color: '#FBC2C4'
					}, 2000, function() {
						$(this).remove();
					});
				}
			})
		</script>
<?php }
} ?>
