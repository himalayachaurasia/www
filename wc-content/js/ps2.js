$(document).ready(function(){function f(){e=setInterval(function(){d<a?($(".psslider").animate({left:"-"+430*d+"px"}),d++,$(".pagination span").removeClass("active"),$(".pagination span:nth-child("+d+")").addClass("active")):(d=1,$(".psslider").animate({left:"0px"}),$(".pagination span").removeClass("active"),$(".pagination span:nth-child("+d+")").addClass("active"))},4e3),$(".psslider").bind("mouseover",function(){clearInterval(e)})}var a=$(".psslider .psslide").length;console.log(a);for(var b=1;b<=a;b++){var c=$(".psslider .psslide:nth-child("+b+")").attr("data-background");console.log(c),$(".psslider .psslide:nth-child("+b+")").css({"background-image":"url("+c+")","background-size":"100%","background-repeat":"no-repeat","background-position":"center"}),jQuery("<span/>",{}).appendTo(".pagination")}var e,d=1;$(".pagination span:nth-child(1)").addClass("active"),f(),$(".psslider").bind("mouseleave",function(){f()}),$(".pagination span").bind("click",function(){d=$(this).index(),$(".pagination span").removeClass("active"),$(".pagination span:nth-child("+(d+1)+")").addClass("active"),$(".psslider").animate({left:"-"+430*d+"px"})})});