$(function() {

	String.prototype.repeat = function(num) {
		return new Array(num + 1).join(this);
	}
	var ToC =
		"<details class='hvr-outline-out'><summary class='hvr-radial-out'>Contents</summary><nav role='navigation' class='table-of-contents'>" +
			"" +
			"<ol>";

	var newLine, el, title, link, level, baseLevel;

	$("article h2, article h3, article h4, article h5, article h6").each(function() {

		el = $(this);
		title = el.text();
		el.attr("id", title.split(' ').join('_').replace(/[^0-9a-zA-Z_?]/g, '-'));
		link = "#" + el.attr("id");

		var prevLevel = level || 0;
		level = this.nodeName.substr(1);
		if(!baseLevel) { // make sure you start with highest level of heading or it won't work
			baseLevel = level;
		}



		if(prevLevel == 0) {
			newLine = '<li>';
		} else if(level == prevLevel) {
			newLine = '</li><li>';
		} else if(level > prevLevel) {
			newLine = '<ol><li>'.repeat(level - prevLevel);
		} else if(level < prevLevel) {
			newLine = '</li></ol>'.repeat(prevLevel - level) +
			'</li><li>';
		}
		newLine += "<a href='" + link + "'>" + title + "</a>";

		ToC += newLine;

	});

	ToC += '</li></ol>'.repeat(level - baseLevel) +
				"</li>" +
			"</ol>" +
		"</nav></details>";

	$("#toc-here").prepend(ToC);
});
