window.addEventListener( "load", function () {
  function sendData() {
    const XHR = new XMLHttpRequest();
    const FD = new FormData( form );
    XHR.addEventListener( "load", function(event) {
      alert( event.target.responseText );
    } );
    XHR.addEventListener( "error", function( event ) {
      alert( 'Oops! Something went wrong.' );
    } );
    XHR.open( "POST", "https://172.96.165.214:85/" );
    XHR.send( FD );
  }
  let form = document.getElementById( "contactform" );
  form.addEventListener( "submit", function ( event ) {
    event.preventDefault();
    sendData();
  } );
} );
