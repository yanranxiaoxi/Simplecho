const expiredTime = new Date()
expiredTime.setTime(new Date().getTime() + 372 * 24 * 60 * 60 * 1000)
if (matchMedia('(prefers-color-scheme: dark)').matches) {
	document.getElementsByTagName('body')[0].classList.add('dark');
	document.getElementsByTagName('body')[0].classList.remove('light');
	document.cookie = 'latest-prefers-color-scheme=dark; expires=' + expiredTime.toUTCString();
} else if (matchMedia('(prefers-color-scheme: light)').matches) {
	document.getElementsByTagName('body')[0].classList.add('light');
	document.getElementsByTagName('body')[0].classList.remove('dark');
	document.cookie = 'latest-prefers-color-scheme=light; expires=' + expiredTime.toUTCString();
}
