$("body").prepend("<!--[if lt IE 9]><p id='fixed-ie8' style='cursor: pointer; background:#dc3228; color: white; font-size:14px; z-index: 999999; padding: 5px; margin: 0; position:fixed; top: 0; left: 0; width: 100%;'>Você está usando um Internet Explorer muito <strong>ANTIGO</strong>. Por favor <a href='http://browsehappy.com/' style='color:yellow;'>atualize o seu browser</a> para melhorar a sua experiência online.</p><![endif]-->");
$( "#fixed-ie8" ).click(function() {
  $( this ).fadeOut( "slow" );
});