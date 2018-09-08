function showNoty(text){
	noty({
		text	: text,
		layout	: "center",
		type	: "success",
		easing	: 'swing'
	});
}
function modalLoad(isOpen, text){
	if(isOpen == true){
		noty({
			text				: text,
			layout				: "center",
			type				: "alert",
			easing				: 'swing',
			modal				: true,
			timeout				: 0,
			closable			: false,
			closeOnSelfClick	: false
		});
	}
	else
		$.noty.close()
}