$("#exit").click(function(event) {
	document.location.href = "../exit.php";
});

function get_cookie ( cookie_name )
{
  var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
 
  if ( results )
    return ( unescape ( results[2] ) );
  else
    return null;
}


$("#BlockBut").click(function(event) {
	var title = $('#BlockTitle').val();
	var textb = $('#BlockText').val();
	var div = $('<div id="my">'+title+'| '+textb+'</div>');
	$.post('http://localhost/sql.php', {fun: 'add',title: title, text:textb , id_user: get_cookie ("id")}, function(data, textStatus, xhr) {
        	//alert(data);
        });

	div.click(function(event) {
		div.detach();
        $.post('../sql.php', {fun: 'delete',title: title, text:textb , id_user: get_cookie ("id")}, function(data, textStatus, xhr) {
        	/*optional stuff to do after success */
        });
	});
	$("#BlockText").after(div);
	$("#my").val();
	
});


