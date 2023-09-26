function loadCSS( href, before, media ){ 
"use strict"; 
var ss = window.document.createElement( "link" ); 
var ref = before || window.document.getElementsByTagName( "script" )[ 0 ]; 
ss.rel = "stylesheet"; 
ss.href = href; 
ss.media = "only x"; 
ref.parentNode.insertBefore( ss, ref ); 
setTimeout( function(){ 
ss.media = media || "all"; 
} ); 
return ss; 
}

// load Google Web Font 
loadCSS( "https://fonts.googleapis.com/css2?family=Cairo&display=swap" );

// load Font Awesome from CDN 
loadCSS( "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css" );
