var SETTING_SHOW=0;
var CREATE_SHOW=0;
var FILELIST_SHOW=0;
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
  $(".tab_ul").css("width",$(window).width());
  checkOpenTabs();
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
      t=explode('&',tab);
      switch(t[0]){
        case 'settings':
          if(!SETTING_SHOW){
            addTab(json.title,'settings').html(json.data);
            SETTING_SHOW=1;
          }else $("#settings").html(json.data);
        break;
        case 'create':
          if(!CREATE_SHOW){
            addTab(json.title,'create').html(json.data);
            CREATE_SHOW=1;
          }else $("#create").html(json.data);
        break;
        case 'filelist':
          if(!FILELIST_SHOW){
            addTab(json.title,'filelist').html(json.data);
            FILELIST_SHOW=1;
          }else $("#filelist").html(json.data);
        break;
        default:
        addTab(json.title,'').html(json.data);
      }
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
function checkOpenTabs(){
  if($("#settings").length==0){
    SETTING_SHOW=0;
  }
  if($("#create").length==0){
    CREATE_SHOW=0;
  }
  if($("#filelist").length==0){
    FILELIST_SHOW=0;
  }
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
