/**
 * 图片懒加载设置
 *
 * @name img-lazy
 */

$(".post-content")
	.scrollLoad()
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
$(function() {
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
});
