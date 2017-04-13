$(function() {

	String.prototype.repeat = function(num) {
		return new Array(num + 1).join(this);
	}
	var ToC =
		"<details class='hvr-outline-out'><summary class='hvr-radial-out'>Contents</summary><nav role='navigation' class='table-of-contents'>" +
			"" +
			"<ol>";

	var newLine, el, title, link, level, baseLevel;

	$("article h2, article h3, article h4" /*article h5, article h6*/).each(function() {

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


/* STYLE SWITCHER */
/*http://www.alistapart.com/articles/alternate/*/


function setActiveStyleSheet(title) {
  var i, a, main;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      a.disabled = true;
      if(a.getAttribute("title") == title) a.disabled = false;
    }
  }
}

function getActiveStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");
  }
  return null;
}

function getPreferredStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1
       && a.getAttribute("rel").indexOf("alt") == -1
       && a.getAttribute("title")
       ) return a.getAttribute("title");
  }
  return null;
}

function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

window.onload = function(e) {
  var cookie = readCookie("style");
  var title = cookie ? cookie : getPreferredStyleSheet();
  setActiveStyleSheet(title);
}

window.onunload = function(e) {
  var title = getActiveStyleSheet();
  createCookie("style", title, 365);
}

var cookie = readCookie("style");
var title = cookie ? cookie : getPreferredStyleSheet();
setActiveStyleSheet(title);

/*Julian's modification for use in drop down menu*/
$(document).ready(function(){
  $('#css-selector').on('change', function(){
    setActiveStyleSheet($(this).val());
  });
});
