var SETTING_SHOW=0;
var CREATE_SHOW=0;
var MENU_SHOW=0;
$(document).ready(function(){
  $("#select_box").chosen();
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
  if ($(window).width() < 800) {
    $(".chosen-container").css("width",70);
  }else {
    $(".chosen-container").css("width",340);
  }
  $("#work_space").css("height",$(window).height()-40);
  $("#page").css("height",$(window).height()-80);
  $(".tab_ul").css("width",$(window).width());
  checkOpenTabs();
},100);
function showAjax(tab){
  $.ajax({
    url: "?tab="+tab,
    cache: false,
    dataType: 'json',
    success: function(json){
      switch(tab){
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
window.alert=function(msg){
  $('#message').html(msg).fadeIn();
  setTimeout(function(){
    $('#message').fadeOut();
  },1000);
}
function checkOpenTabs(){
  if($("#settings").length==0){
    SETTING_SHOW=0;
  }
  if($("#create").length==0){
    CREATE_SHOW=0;
  }
}
