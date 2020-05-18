var elements = '';

$(document).ready(function(){
  toolTiper('.tooltiper');
});
var eLtop = '';
var eLleft = '';
var eLtw = '';
var eLth = '';
var eLcontent= '';

function toolTiper(elements) {
  $(elements).each(function(){
      var eLcontent = $(this).attr('data-tooltip');
      var eLtop = $(this).position().top;
      var eLleft = $(this).position().left;
    $(this).append('<span class="tooltip">'+eLcontent+'</span>');
    var eLtw = $(this).find('.tooltip').width(),
        eLth = $(this).find('.tooltip').height();
    console.log(eLtw);
    $(this).find('.tooltip').css({
      "top": (0 - eLth)+'px'
    });
  });
}