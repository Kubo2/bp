// main power unit

// toggle text
document.getElementById('toggle-text').onclick = (function(){
	var textblock = document.getElementById('text');
	return function(){
		var cls = textblock.className;
		if(cls.match(/hide/)) {
			textblock.removeAttribute('hidding');
			cls = cls.replace(/hide/, 'show');
		} else {
			textblock.setAttribute('hidding', '');
			cls = cls.replace(/show/, 'hide');
		}
		textblock.className = cls;
		return false;
	};
})();