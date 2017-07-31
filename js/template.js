function setTextForSearch(str){

    document.getElementById('txt_search').value = str;

}
function expandit(id){
	obj = document.getElementById(id);
	if (obj.style.display=="none") obj.style.display="";
	else obj.style.display="none";
}
function ChangeTheme(url) {  
	if (!arguments.length) {  
	url = (url = document.cookie.match(/\styles=([^;]*)/)) && url[1];  
	if (!url) return '';  
}  
		document.getElementById('changetheme').href = url;  
		var d = new Date();  
		d.setFullYear(d.getFullYear() + 1);  
		document.cookie = ['styles=', url, ';expires=', d.toGMTString(), ';path=/;'].join('');  
	return url;  
}

  ChangeTheme();
  
/* JQuery niceScroll */
$(document).ready(function() {
  
	var nicesx = $(".content").niceScroll({touchbehavior:false,autohidemode:false});
    
});
/* JQuery Tipsy */
$(function() {

	$('.northwest').tipsy({gravity: 'nw', fade: true, html: true});
	$('.north').tipsy({gravity: 'n', fade: true, html: true});
	$('.northeast').tipsy({gravity: 'ne', fade: true, html: true});
	$('.south').tipsy({gravity: 's', fade: true, html: true});
	$('.southwest').tipsy({gravity: 'sw', fade: true, html: true});
	$('.southeast').tipsy({gravity: 'se', fade: true, html: true});
	$('.east').tipsy({gravity: 'e', fade: true, html: true});
	$('.west').tipsy({gravity: 'w', fade: true, html: true});
	$('div, ul, ol, li, dl, dt, dd, h1, h2, h3, h4, h5, h6, pre, form, p, blockquote, fieldset,a,img,input, textarea, select').tipsy({live: true, fade: true, html: true});

});