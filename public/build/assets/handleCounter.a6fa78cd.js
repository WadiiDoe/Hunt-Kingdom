(function(){$.fn.handleCounter=function(u){var i,r,m,a,e,c,v,h,p,d=this;r=d.find(".counter-minus"),i=d.find("input"),m=d.find(".counter-plus");var f={writable:!0,minimum:1,maximize:null,onChange:function(){},onMinimum:function(){},onMaximize:function(){}},o=$.extend({},f,u);a=o.minimum,e=o.maximize,c=o.writable,v=o.onChange,h=o.onMinimum,p=o.onMaximize,$.isNumeric(a)||(a=f.minimum),$.isNumeric(e)||(e=f.maximize);var s=i.val();isNaN(parseInt(s))&&(s=i.val(0).val()),c||i.prop("disabled",!0),l(s),i.val(s),r.click(function(){var n=parseInt(i.val());n>a&&(i.val(n-1),l(n-1))}),m.click(function(){var n=parseInt(i.val());(e==null||n<e)&&(i.val(n+1),l(n+1))});var C;i.keyup(function(){clearTimeout(C),C=setTimeout(function(){var n=i.val();n==""&&(n=a,i.val(a));var x=new RegExp("^[\\d]*$");isNaN(parseInt(n))||!x.test(n)?(i.val(i.data("num")),l(i.data("num"))):n<a?(i.val(a),l(a)):e!=null&&n>e?(i.val(e),l(e)):l(n)},300)}),i.focus(function(){var n=i.val();n==0&&i.select()});function l(n){i.data("num",n),r.prop("disabled",!1),m.prop("disabled",!1),n<=a?(r.prop("disabled",!0),h.call(this,n)):e!=null&&n>=e&&(m.prop("disabled",!0),p.call(this,n)),v.call(this,n)}return d};var t={minimum:1,maximize:10,onChange:g,onMinimum:function(u){console.log("reached minimum: "+u)},onMaximize:function(u){console.log("reached maximize"+u)}};$("#handleCounter").handleCounter(t),$("#handleCounter1").handleCounter(t),$("#handleCounter2").handleCounter(t),$("#handleCounter3").handleCounter(t),$("#handleCounter4").handleCounter(t),$("#handleCounter5").handleCounter(t);function g(u){}})(jQuery);