$(document).ready(function ()
{
	function h()
	{
		g++, g % 400 == 0 && $("#slideContainer .slide:nth-child(1)").animate(
		{
			width: "0px"
		}, function ()
		{
			var a = $("#slideContainer .slide:nth-child(1)");
			$("#slideContainer").append(a), $(a).css(
			{
				width: "100%"
			})
		}), $(".pagination .left").click(function () {}), requestAnimationFrame(h)
	}
	var c = $("#slideContainer .slide").length;
	if ($("body").width() < 700 && $("body").height() < 1e3)
	{
		var d = $("body").width(),
			e = 800 * d * 1.7 / 2e3 + 60;
		$("#sliderBox").css(
		{
			width: d + "px",
			height: e + "px"
		}), $("#slider").css(
		{
			height: e + "px"
		});
		for (var f = 1; f <= c; f++) $("#slideContainer .slide:nth-child(" + f + ")").css(
		{
			background: "url('" + $("#slideContainer .slide:nth-child(" + f + ")").attr("data-target") + "')",
			"background-repeat": "no-repeat",
			"background-position": "center center",
			"background-size": d + "px " + e + "px"
		})
	}
	else
	{
		var d = $("body").width(),
			e = 800 * d / 2e3;
		$("#sliderBox").css(
		{
			width: d + "px",
			height: e + "px"
		}), $("#slider").css(
		{
			height: e + "px"
		});
		for (var f = 1; f <= c; f++) $("#slideContainer .slide:nth-child(" + f + ")").css(
		{
			background: "url('" + $("#slideContainer .slide:nth-child(" + f + ")").attr("data-bg-target") + "')",
			"background-repeat": "no-repeat",
			"background-position": "center center",
			"background-size": d + "px " + e + "px"
		})
	}
	var g = 0;
	$(".pagination .right").click(function ()
	{
		$("#slideContainer .slide:nth-child(1)").animate(
		{
			width: "0px"
		}, function ()
		{
			var a = $("#slideContainer .slide:nth-child(1)");
			$("#slideContainer").append(a), $(a).css(
			{
				width: "100%"
			})
		}), g = 1
	}), $(".pagination .left").click(function ()
	{
		var a = $("#slideContainer .slide:nth-child(6)");
		$(a).css(
		{
			width: "0px"
		}), $("#slideContainer").prepend(a), $("#slideContainer .slide:nth-child(1)").animate(
		{
			width: "100%"
		}), g = 1
	}), requestAnimationFrame(h), $(window).resize(function (a)
	{
		d = $("body").width(), e = 800 * d / 2e3, $("#sliderBox").css(
		{
			width: d + "px",
			height: e + "px"
		}), $("#slider").css(
		{
			height: e + "px"
		})
	})
});