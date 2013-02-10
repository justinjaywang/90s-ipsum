function handleMouseover() {
  if ($('.copy-flag').html()!='Copied to clipboard!') {
    // not clicked yet
    $('p span').addClass('hovered');
    $('.copy-flag').html('Click to copy');
  }
}
function handleMouseout() {
  if ($('.copy-flag').html()=='Click to copy') {
    // not clicked yet
    $('p span').removeClass('hovered');
    $('.copy-flag').html('');
  }
}
function handleComplete() {
  $('p span').addClass('clicked');
  $('.copy-flag').html('Copied to clipboard!');
}

$(document).ready(function(){

  var clip = new ZeroClipboard( document.getElementById("copy-button"), {
    moviePath: "ZeroClipboard.swf"
  } );

  clip.on( 'load', function(client) {
  } );
  clip.on( 'complete', function(client, args) {
    handleComplete();
  } );
  clip.on( 'mouseover', function(client) {
    handleMouseover();
  } );
  clip.on( 'mouseout', function(client) {
    handleMouseout();
  } );
  clip.on( 'mousedown', function(client) {
  } );
  clip.on( 'mouseup', function(client) {
  } );

})