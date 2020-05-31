function add_news(){
	$( ".all_news" ).removeClass( "show" ).addClass( "hide" ); //через  jquery добавляю и убираю класс так же как и в остальных методах
	$( ".adding" ).removeClass( "hide" ).addClass( "show" );
}

function show_all_news(){
	$( ".adding" ).removeClass( "show" ).addClass( "hide" );
	$( ".all_news" ).removeClass( "hide" ).addClass( "show" );	
}
function full($id){
	$( "#desc-"+$id ).removeClass( "hide" ).addClass( "show" );
	$( "#full_"+$id ).removeClass( "show" ).addClass( "hide" );
}
