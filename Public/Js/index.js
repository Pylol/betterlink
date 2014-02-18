// headerTop_nav菜单
function headerTopNav(){
	$("#headerTop_nav ul").css({display:"none"});
	$("#headerTop_nav li").hover(function(){
		$(this).find("ul:first").css({visibility: "visible", display: "none"}).show(400);
	}, function(){
		$(this).find("ul:first").css({visibility: "hidden"});
	});
}

// 首页图片轮播
function contentGallery(){
	$("#imageContainer").slidesjs({
		width:975,
		height:308,
		navigation: {
      	active: true,
        // [boolean] Generates next and previous buttons.
        // You can set to false and use your own buttons.
        // User defined buttons must have the following:
        // previous button: class="slidesjs-previous slidesjs-navigation"
        // next button: class="slidesjs-next slidesjs-navigation"
     	 effect: "fade"
        // [string] Can be either "slide" or "fade".
   		},
   		play:{
   			interval: 5000,
   			effect: "fade",
   			auto: true,
   			pauseOnHover: true,
   			restartDelay: 2500
   		}
	});
}
// 搜索
function searchText(){
	$(".searchText").bind("click", function(){
		this.select();
	})
}


$(document).ready(function(){
	headerTopNav();
	contentGallery();
	searchText();
});