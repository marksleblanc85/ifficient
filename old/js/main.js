
$(document).ready(function() {
jQuery('a.block-link').click(function(){
  $.scrollTo( this.hash, 1500, { easing:'swing' });
  return false;
});
});