(function($){
  jQuery.fn.lightTabs = function(default_page){
    default_page = typeof default_page !== 'undefined' ? default_page : 0;
    var createTabs = function(){
      tabs = this;
      i = 0;
      showPage = function(i){
        $(tabs).children("div").children("div").hide();
        $(tabs).children("div").children("div").eq(i).show();
        $(tabs).children("ul").children("li").removeClass("active");
        $(tabs).children("ul").children("li").eq(i).addClass("active");
      }
      showPage(default_page);
      $(tabs).children("ul").children("li").each(function(index, element){
        $(element).attr("data-page", i);
        i++;
      });
      $(tabs).children("ul").children("li").children(".tab_title").click(function(){
        showPage(parseInt($(this).parent().attr("data-page")));
      });
      $(tabs).children("ul").children("li").children(".tab_close").click(function(){
        var i=$(this).parent().attr("data-page");
        $(tabs).children("div").children("div").eq(i).remove();
        $(this).parent().remove();
        $(".tabs").lightTabs(0);
      });
    };
    return this.each(createTabs);
  };
})(jQuery);
$(document).ready(function(){
    $(".tabs").lightTabs(0);
});
