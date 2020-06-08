$(".topmenu>li").mouseover(function(){
   $(this).children(".submenu").css("display","block");
});
$(".topmenu>li").mouseleave(function(){
   $(this).children(".submenu").css("display","none");
});
