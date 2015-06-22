(function($){
  jQuery.fn.lightTabs = function(default_page){
    default_page = typeof default_page !== 'undefined' ? default_page : 0;
    var createTabs = function(){
      tabs = this;
      i = 0;
      j = 0;
      showPage = function(i){
        $(tabs).children("div").children("div").hide();
        $(tabs).children("div").children("div").eq(i).show();
        $(tabs).children("ul").children("li").removeClass("active");
        $(tabs).children("ul").children("li").eq(i).addClass("active");
      }
      delPage = function(i){
        $(tabs).children("ul").children("li").each(function(index, element){
          if($(element).attr("data-page")==i){
            $(element).remove();
          }
        });
        $(tabs).children("div").children("div").each(function(index, element){
          if($(element).attr("data-page")==i){
            $(element).remove();
          }
        });
      }
      showPage(default_page);
      $(tabs).children("ul").children("li").each(function(index, element){
        $(element).attr("data-page", i);
        i++;
      });
      $(tabs).children("div").children("div").each(function(index, element){
        $(element).attr("data-page", j);
        j++;
      });
      $(tabs).children("ul").children("li").children(".tab_title").click(function(){
        showPage(parseInt($(this).parent().attr("data-page")));
      });
      $(tabs).children("ul").children("li").children(".tab_close").click(function(){
        delPage(parseInt($(this).parent().attr("data-page")));
        setTimeout(function(){$(".tabs").lightTabs(0);},100);
      });
    };
    return this.each(createTabs);
  };
})(jQuery);
$(document).ready(function(){
    $(".tabs").lightTabs(0);
});
