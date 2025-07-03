function matchDarkMode() {
	const expiredTime = new Date()
	expiredTime.setTime(new Date().getTime() + 365 * 24 * 60 * 60 * 1000);
	if (matchMedia('(prefers-color-scheme: dark)').matches) {
		document.cookie = 'latest-prefers-color-scheme=dark; expires=' + expiredTime.toUTCString();
		document.getElementsByTagName('body')[0].classList.add('dark');
		document.getElementsByTagName('body')[0].classList.remove('light');
		document.getElementById('theme-css').setAttribute('href', 'https://cdn.jsdelivr.net/gh/yanranxiaoxi/Simplecho@0.1.21/assets/css/black.min.css');
	} else if (matchMedia('(prefers-color-scheme: light)').matches) {
		document.cookie = 'latest-prefers-color-scheme=light; expires=' + expiredTime.toUTCString();
		document.getElementsByTagName('body')[0].classList.add('light');
		document.getElementsByTagName('body')[0].classList.remove('dark');
	}
}

matchDarkMode();
