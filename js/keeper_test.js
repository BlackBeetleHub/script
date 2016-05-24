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

$.post('../sql.php', {fun: 'select', id_user: get_cookie ("id")}, function(data, textStatus, xhr) {
	var a = JSON.parse(data);

	for(var i=0;i<a.length;i++){

	var b = JSON.parse(a[i]);
	var div = $('<div id="NoteNode"><div id="NodeTitle">'+b.title+'</div><img id="DeleteBut" src="/images/delete.png" alt="Удалить"></img><img id="ChangeBut" src="/images/change.gif" alt="Изменить"></img><div id="NodeText">'+b.text+'</div></div>');
	var div_v2 = $('<div name="pages" id="my">'+'<div id="title">'+b.title+'</div>|<div id="text">'+b.text+'</div></div>');
	
	div.children('#DeleteBut').click(function(event) {
		var tmp = $(this).parent();
		var tmptitle = tmp.children('#NodeTitle').text();
		var tmptext = tmp.children('#NodeText').text();
        $.post('../sql.php', {fun: 'delete',title: tmptitle, text:tmptext , id_user: get_cookie ("id")}, function(data, textStatus, xhr) {
        	/*optional stuff to do after success */
        });
        $(this).parent().detach();
	});
	
	div.children('#ChangeBut').click(function(event) {
		var TmpParent = $(this).parent();
		TmpParent.children('#ChangeBut').attr('display', 'none');
		var NodeTitle = TmpParent.children('#NodeTitle');
		var NodeText = TmpParent.children('#NodeText');
		var oldtitle = NodeTitle.text();
		var oldtext = NodeText.text();
		var NewTitle = $('<textarea id="EditeTitle">'+oldtitle+'</textarea>');
		var NewText = $('<textarea id="EditeText">'+oldtext+'</textarea>');
		var EditeBut = $('<input type="button" id="EditeBut" value="Изменить">')
		NodeTitle.html(NewTitle);
		NodeText.html(NewText);
		EditeBut.click(function(event) {
			NodeTitle.html(NewTitle.val());
			NodeText.html(NewText.val());
			$.post('../sql.php', {fun: 'update', oldtitle: oldtitle, oldtext:oldtext , id_user: get_cookie ("id"), newtitle: NewTitle.val(), newtext: NewText.val()}, function(data, textStatus, xhr) {
        	});
			EditeBut.detach();
			TmpParent.children('#ChangeBut').attr('display', 'block');
		});
		$(NodeText).after(EditeBut);
	});
	$("#AddForm").after(div);
	}
});


$("#BlockBut").click(function(event) {
	var title = $('#BlockTitle').val();
	var textb = $('#BlockText').val();
	var div = $('<div id="NoteNode"><div id="NodeTitle">'+title+'</div><img id="DeleteBut" src="/images/delete.png" alt="Удалить"></img><img id="ChangeBut" src="/images/change.gif" alt="Изменить"></img><div id="NodeText">'+textb+'</div></div>');
	//var div = $('<div id="my">'+'<div id="title">'+title+'</div>|<div id="text">'+textb+'</div></div>');
	$.post('http://localhost/sql.php', {fun: 'add',title: title, text:textb , id_user: get_cookie ("id")}, function(data, textStatus, xhr) {
        	//alert(data);
        });

	div.children('#DeleteBut').click(function(event) {
		div.detach();
		var tmp = $(this).parent();
		var tmptitle = tmp.children('#NodeTitle').text();
		var tmptext = tmp.children('#NodeText').text();
        $.post('../sql.php', {fun: 'delete',title: tmptitle, text:tmptext , id_user: get_cookie ("id")}, function(data, textStatus, xhr) {
        	/*optional stuff to do after success */
        });
	});

	div.children('#ChangeBut').click(function(event) {
		var TmpParent = $(this).parent();
		var NodeTitle = TmpParent.children('#NodeTitle');
		var NodeText = TmpParent.children('#NodeText');
		var oldtitle = NodeTitle.text();
		var oldtext = NodeText.text();
		var NewTitle = $('<textarea id="EditeTitle">'+oldtitle+'</textarea>');
		var NewText = $('<textarea id="EditeText">'+oldtext+'</textarea>');
		var EditeBut = $('<input type="button" id="EditeBut" value="Изменить">')
		NodeTitle.html(NewTitle);
		NodeText.html(NewText);
		EditeBut.click(function(event) {
			NodeTitle.html(NewTitle.val());
			NodeText.html(NewText.val());
			$.post('../sql.php', {fun: 'update', oldtitle: oldtitle, oldtext:oldtext , id_user: get_cookie ("id"), newtitle: NewTitle.val(), newtext: NewText.val()}, function(data, textStatus, xhr) {
        	});
			EditeBut.detach();
		});
		$(NodeText).after(EditeBut);
	});



	$("#AddForm").after(div);
	$("#my").val();
	
});


