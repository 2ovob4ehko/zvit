var MENU_SHOW=0;
$(document).ready(function(){
  selectFirm(function(){
    $("#select_box").chosen();
  });
  $("#menu_button").click(function(){
    if(MENU_SHOW){
      $("#menu_panel").hide();
      MENU_SHOW=0;
    }else{
      $("#menu_panel").show();
      MENU_SHOW=1;
    }
  });
});
$(document).mouseup(function(e){
  if(!$("#menu_panel").is(e.target)
  && $("#menu_panel").has(e.target).length===0){
    $("#menu_panel").hide();
    MENU_SHOW=0;
  }
});

setInterval(function(){
  if($(window).width() < 800) {
    $(".chosen-container").css("width",70);
  }else {
    $(".chosen-container").css("width",340);
  }
  $("#work_space").css("height",$(window).height()-40);
  $("#page").css("height",$(window).height()-80);
  $("#pagew").css("width",$(window).width()-$(window).width()*0.1-50);
  $(".tab_ul").css("width",$(window).width());
  if($("#message").height()>250){
    $("#message").css("height",251);
    $("#message").css("overflow-y","scroll");
  }
},100);
function showAjax(tab){
  $.ajax({
    url: "?tab="+tab,
    cache: false,
    dataType: 'json',
    success: function(json){
      if(!$("div[id='"+json.title+"']").length){
        addTab(json.title,json.title).html(json.data);
      }else $("div[id='"+json.title+"']").html(json.data);
      $("#menu_panel").hide();
      MENU_SHOW=0;
      $(".tabs").lightTabs($("li.active").attr("data-page"));
    }
  });
}
function addTab(t,id){
  var title=$('<div class="tab_title"></div>').html(t);
  var close=$('<div class="tab_close"></div>');
  var li=$('<li class="tab_li"></li>').append(title);
  li.append(close);
  $(".tabs").children("ul").append(li);
  var text=$('<div id="'+id+'"></div>');
  $(".tabs").children("div").append(text);
  return text;
}
window.alert=function(msg,type){
  $('#message').html('');
  $("#message").css("height","auto");
  $("#message").css("overflow","visible");
  if (type === undefined) {
    setTimeout(function(){
      $('#message').fadeOut();
    },1000);
  }else{
    $('#message').append('<button onclick="$(\'#message\').fadeOut();">Закрити</button><br><br>');
  }
  $('#message').append(msg).fadeIn();
}
function selectFirm(callback){
	$.ajax({
		url: "?tab=selectfirm",
		cache: false,
		dataType: 'html',
		success: function(html){
			$('#select_box').html(html);
      callback();
		}
	});
}
function explode(delimiter,string){
  var emptyArray={0:''};
  if (arguments.length != 2 || typeof arguments[0] == 'undefined' || typeof arguments[1] == 'undefined'){
    return null;
  }
  if (delimiter === '' || delimiter === false || delimiter === null){
    return false;
  }
  if (typeof delimiter == 'function' || typeof delimiter == 'object' || typeof string == 'function' || typeof string == 'object'){
    return emptyArray;
  }
  if (delimiter === true) {
    delimiter = '1';
  }
  return string.toString().split (delimiter.toString());
}
