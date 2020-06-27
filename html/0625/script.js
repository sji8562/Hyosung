$(".menu>li").mouseover(function(){
  $(this).children(".submenu").stop().slideDown();
});
$(".menu>li").mouseleave(function(){
  $(this).children(".submenu").stop().slideUp();
});
var dispMenu=false;
$(".gnb_menu").click(function(){
  if(dispMenu==false){
    $("nav").css("display","block");
    dispMenu=true;
  }else{
    $("nav").css("display","none");
    dispMenu=false;
  }
});

$(".speak1").css("display","block");

$("#speak").click(function(){
   $(".speak1").css("display","block");
   $(".hugi1").css("display","none");
});
$("#hugi").click(function(){
   $(".speak1").css("display","none");
   $(".hugi1").css("display","block");
});

$(".btn_prev").addClass("off");

$(".btn_next").click(function(){
   if(!$(".slides li").last().is(":visible")){
      $(".slides li:visible").hide().next("li").fadeIn("slow");
      $(".btn_prev").removeClass("off");
   }
   //이동한후에 이리스트가 마지막이라면 btn_next를 off.
   if ($(".slides li").last().is(":visible")) {
      $(".btn_next").addClass("off");
   }
});

$(".btn_prev").click(function(){
   if(!$(".slides li").first().is(":visible")){
      $(".slides li:visible").hide().prev("li").fadeIn("slow");
      $(".btn_next").removeClass("off");
   }   
   //이동한 후에 이리스트가 첫번째라면 btn_prev를 off
   if($(".slides li").first().is(":visible")){
      $(".btn_prev").addClass("off");
   }   

});

// function uploadImgPreview(targetObj, thumbnailImgs) {
//    var preview = document.getElementById(thumbnailImgs); //div id
//    var ua = window.navigator.userAgent;

//   //ie일때(IE8 이하에서만 작동)
//    if (ua.indexOf("MSIE") > -1) {
//       targetObj.select();
//       try {
//          var src = document.selection.createRange().text; // get file full path(IE9, IE10에서 사용 불가)
//          var ie_preview_error = document.getElementById("ie_preview_error_" + thumbnailImgs);


//          if (ie_preview_error) {
//             preview.removeChild(ie_preview_error); //error가 있으면 delete
//          }

//          var img = document.getElementById(thumbnailImgs); //이미지가 뿌려질 곳

//          //이미지 로딩, sizingMethod는 div에 맞춰서 사이즈를 자동조절 하는 역할
//          img.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+src+"', sizingMethod='scale')";
//       } catch (e) {
//          if (!document.getElementById("ie_preview_error_" + thumbnailImgs)) {
//             var info = document.createElement("<p>");
//             info.id = "ie_preview_error_" + thumbnailImgs;
//             info.innerHTML = e.name;
//             preview.insertBefore(info, null);
//          }
//       }
//   //ie가 아닐때(크롬, 사파리, FF)
//    } else {
//       var files = targetObj.files;
//       for ( var i = 0; i < files.length; i++) {
//          var file = files[i];
//          var imageType = /image.*/; //이미지 파일일경우만.. 뿌려준다.
//          if (!file.type.match(imageType))
//             continue;
//          var prevImg = document.getElementById("prev_" + thumbnailImgs); //이전에 미리보기가 있다면 삭제
//          if (prevImg) {
//             preview.removeChild(prevImg);
//          }
//          var img = document.createElement("img");
//          img.id = "prev_" + thumbnailImgs;
//          // img.classList.add("obj");
//          img.file = file;
//          img.style.width = '200px';
//          img.style.height = 'auto';
//          preview.appendChild(img);
//          if (window.FileReader) { // FireFox, Chrome, Opera 확인.
//             var reader = new FileReader();
//             reader.onloadend = (function(aImg) {
//                return function(e) {
//                   aImg.src = e.target.result;
//                };
//             })(img);
//             reader.readAsDataURL(file);
//          } else { // safari is not supported FileReader
//             //alert('not supported FileReader');
//             if (!document.getElementById("sfr_preview_error_"
//                   + thumbnailImgs)) {
//                var info = document.createElement("p");
//                info.id = "sfr_preview_error_" + thumbnailImgs;
//                info.innerHTML = "not supported FileReader";
//                preview.insertBefore(info, null);
//             }
//          }
//       }
//    }
// }