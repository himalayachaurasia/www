$(document).ready(function(){$("label[data-msg]").css({display:"none","background-color":"#fff","font-size":"14px",padding:"3px"}),$("input[data-accept='number'], input[data-accept='digit']").keypress(function(a){var b=a.which||a.keyCode;b>=48&&b<=57||8==b||9==b?$(this).next("label[data-msg]").fadeOut():(a.preventDefault(),$(this).next("label[data-msg]").text("Please enter number digit"),$(this).next("label[data-msg]").css({color:"#f00"}).fadeIn())}),$("input[data-accept='alphabet'], input[data-accept='name']").keypress(function(a){var b=a.which||a.keyCode;b>=97&&b<=122||b>=65&&b<=90||32==b||8==b||9==b?$(this).next("label[data-msg]").fadeOut():(a.preventDefault(),$(this).next("label[data-msg]").text("Other than alphabets are not allowed."),$(this).next("label[data-msg]").css({color:"#f00"}).fadeIn())}),$("input[data-accept], input[data-accept]").blur(function(a){$(this).next("label[data-msg]").fadeOut()})});