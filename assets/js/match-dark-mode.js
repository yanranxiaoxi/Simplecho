const expiredTime = new Date()
expiredTime.setTime(new Date().getTime() + 365 * 24 * 60 * 60 * 1000)
if (matchMedia('(prefers-color-scheme: dark)').matches) {
	document.cookie = 'latest-prefers-color-scheme=dark; expires=' + expiredTime.toUTCString();
} else if (matchMedia('(prefers-color-scheme: light)').matches) {
	document.cookie = 'latest-prefers-color-scheme=light; expires=' + expiredTime.toUTCString();
}
