$(document).ready(function(){
  $("#select_box").chosen();
  $("#menu_button").toggle(function(){
    $("#menu_panel").show();
  },function(){
    $("#menu_panel").hide();
  });
});
$(document).mouseup(function(e){
  if(!$("#menu_panel").is(e.target)
  && $("#menu_panel").has(e.target).length===0){
    $("#menu_panel").hide();
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
},100);
function showAjax(tab){
  $.ajax({
    url: "?tab="+tab,
    cache: false,
    dataType: 'json',
    success: function(json){
      addTab(json.title).html(json.data);
      $(".tabs").lightTabs();
    }
  });
}
function addTab(t){
  var title=$('<div class="tab_title"></div>').html(t);
  var close=$('<div class="tab_close"></div>');
  var li=$('<li class="tab_li"></li>').append(title);
  li.append(close);
  $(".tabs").children("ul").append(li);
  var text=$('<div></div>');
  $(".tabs").children("div").append(text);
  return text;
}
