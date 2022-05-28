function getBaseUrl() {
	var ishttps = 'https:' == document.location.protocol ? true : false;
	var url = window.location.host;
	if (ishttps) {
		url = 'https://' + url;
	} else {
		url = 'http://' + url;
	}
	return url;
}

document.querySelectorAll('pre code')
	.forEach((block) => {
		hljs.highlightBlock(block);
	});

$(document)
	.pjax('a[href^=' + '"' + getBaseUrl() + '"' + ']:not(a[target="_blank"], a[no-pjax])', {
		container: '#pjax',
		fragment: '#pjax',
		timeout: 8000
	})
// 支持表单提交事件无刷新
$(document)
	.on('submit', '#gridea-search-form', function(event) {
		// 这是提交表单的 pjax。form 表示所有的提交表单都会执行 pjax，比如搜索和提交评论，可自行修改改成你想要执行 pjax 的 form id 或 class。#container 同上改成你主题的内容主体 id 或 class。
		$.pjax.submit(event, '#pjax', {
			fragment: '#pjax',
			timeout: 6000
		});
	});

$(document)
	.on('pjax:start', function() {
		NProgress.start();
	});
$(document)
	.on('pjax:complete', function() {
		document.querySelectorAll('pre code')
			.forEach((block) => {
				hljs.highlightBlock(block);
			});
		$(".post-content")
			.scrollLoad();
		$(document)
			.ready(function() {
				$(".fancybox")
					.fancybox();
			});

		function randomString(len) {
			len = len || 32;
			var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678'; /* 默认去掉了容易混淆的字符 oOLl, 9gq, Vv, Uu, I1 */
			var maxPos = $chars.length;
			var pwd = '';
			for (i = 0; i < len; i++) {
				pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
			}
			return pwd;
		}
		var imgs = $("img[data-src]");
		imgs.each(function(num, e) {
			var _this = $(this);
			_this.attr("alt", _this.attr("data-src"));
		});
		$(".post-content img")
			.each(function(i) {
				if (!this.parentNode.href) {
					$(this)
						.wrap("<a class=\"a_css\" href='" + this.alt + "' data-fancybox='fancybox' data-caption='" + randomString(8) + "'></a>")
				}
			});
		$(".post-content div img")
			.each(function(i) {
				if (!this.parentNode.href) {
					$(this)
						.wrap("<a href='" + this.alt + "' data-fancybox='fancybox' data-caption='" + randomString(8) + "'></a>")
				}
			});

		$(document)
			.on("click", "#lamu", function() {

				return window.scrollTo({
					top: 0,
					behavior: "smooth"
				}), !1

			});

		$(document)
			.on("click", "#leimu", function() {

				return window.scrollTo({
					top: document.documentElement && document.documentElement.scrollHeight || document.body
						.scrollHeight,
					behavior: "smooth"
				}), !1

			});

		mermaid.init({
			noteMargin: 10
		}, ".lang-mermaid");

	});

$(document)
	.on('pjax:end', function() {
		NProgress.done();
	});
