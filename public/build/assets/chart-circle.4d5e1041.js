(function(r){var e=r(".forth.circle");e.circleProgress({startAngle:-Math.PI/2*9,value:.5,lineCap:"round",emptyFill:"rgba(204, 204, 204,0.2)",fill:{color:"#4d65d9"},lineCap:"round"}),setTimeout(function(){e.circleProgress("value",.7)},1e3),setTimeout(function(){e.circleProgress("value",1)},1100),setTimeout(function(){e.circleProgress("value",.5)},2100)})(jQuery);