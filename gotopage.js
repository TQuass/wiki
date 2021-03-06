var gpTarget;

function gpInit(id) {
	gpTarget = id;
	document.getElementById('titleinput').focus();
}

function gpGo(title) {
	if (title.length == 0) {
		title = document.getElementById('titleinput').value;
	}
	gpRequest(title, 0);
}

function gpPrev() {
	var title = document.getElementById('results').rows[1].cells[0].getElementsByTagName('a')[0].innerHTML;
	gpRequest(title, -1);
}

function gpNext() {
	var title = document.getElementById('results').rows[10].cells[0].getElementsByTagName('a')[0].innerHTML;
	gpRequest(title, 1);
}

function gpEntityEncode(s) {
    return s.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
}

function gpRequest(title, dir) {
	var nsElm = document.getElementById('namespace');
	var ns = nsElm.options[nsElm.selectedIndex].value;
	var scopeElms = document.forms['goto'].elements['scope']
	var scope = '';
	var i;
 	for (i = 0; i < scopeElms.length; i++) {
 		if (scopeElms[i].checked) {
 			scope = scopeElms[i].value;
 		}
 	}
	$('#pleasewait').css('display','inline');
	// !!! do I need to escape(title)?
	$.get('/w/index.php', {action: 'ajax', rs: 'wfBrowse', rsargs: 'scope=' + scope + '|ns=' + ns + '|dir=' + dir + '|title=' + title}, function(data) {
	   var tbl = document.getElementById('results');
	   var results = data.getElementsByTagName('browse');
	   var status = results[0].getAttribute('status');
	   var ns = results[0].getAttribute('ns');
	   var nsText = results[0].getAttribute('nsText');
	   var title = results[0].getAttribute('title');
	   var dir = results[0].getAttribute('dir');
	   var prev = results[0].getAttribute('prev');
	   var next = results[0].getAttribute('next');
	   var elms = data.getElementsByTagName('result');
		for (i = 0; i < 10; i++) {
			var cell=tbl.rows[i+1].cells[0];
			if (i < elms.length) {
				var t = elms[i].childNodes[0].nodeValue;
				var link;
				if (gpTarget) {
					link = 'javascript:gpReturn('+i+')';
				}
				else {
					link = '/wiki/' + nsText + ':' + escape(t);
				}
				cell.innerHTML = '<a href="' + link + '">' + gpEntityEncode(t) + '</a>';
			}
			else {
				cell.innerHTML = '';
			}
		}
	   if (gpTarget && dir == 0 && elms.length > 0 && title == elms[0].childNodes[0].nodeValue) {
	   	gpReturn(0);
	   }
	   if (dir == 0) {
			var nsElm = document.getElementById('namespace');
		   var len = nsElm.options.length;
		   for (i = 0; i < len; i++) {
		   	if (nsElm.options[i].value == ns) {
		   		nsElm.selectedIndex = i;
		   		break;
		   	}
		   }
		   var t = document.getElementById('titleinput');
		   if (t.value.length > 0) {
				t.value = title;
		   }
	   }
	   var msg = document.getElementById('message');
	   if (status == 0) {
	   	msg.innerHTML = 'Choose a page from the list';
	   }
	   else if (status == -2) {
	   	msg.innerHTML = 'You must sign in to browse your watchlist';
	   }
	   else {
	   	msg.innerHTML = 'Internal error (please try again)';
	   }
		$('#prevlink').css('display',prev ? 'inline' : 'none');
		$('#prevlink2').css('display',prev ? 'inline' : 'none');
		$('#nextlink').css('display',next ? 'inline' : 'none');
		$('#nextlink2').css('display',next ? 'inline' : 'none');
		$('#pleasewait').css('display','none');
	});
}

function gpReturn(i) {
	var title = document.getElementById('results').rows[i+1].cells[0].getElementsByTagName('a')[0].innerHTML;
   window.opener.document.getElementById(gpTarget).value=title;
	window.close();
}
