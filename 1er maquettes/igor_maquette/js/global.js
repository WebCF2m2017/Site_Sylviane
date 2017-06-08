// var socket = io.connect();
		// // var pseudo = prompt("Pseudo ?");
		// socket.emit('nouveau_client', pseudo);
		// socket.on('message', function(data){
		// 	insereMessage(data.pseudo,data.message)
		// })

		// socket.on('nouveau_client',function(pseudo){
		// 	$('#zone_tchat').prepend('<p><em>'+pseudo+'a rejoint le Chat !</em></p>');
		// })

		// $("#tchat").submit(function(){
		// 	var pseudo = $('#pseudo').val();
		// 	var message = $('#message').val();
		// 	socket.emit('message',message); // transmet le message 
		// 	insereMessage(pseudo,message); // Affiche le message
		// 	$('#message').val().focus();

		// 	return false; // permet de bloquer l'envoie classique de formulaire
		// });
		// function insereMessage(pseudo,message){
		// 	$('#zone_tchat').prepend('<p><strong>'+pseudo+'</strong> : '+message+'</p>');
		// }

		$(document).ready(function(){
			$( "#datepicker" ).datepicker({
				inline: true,
				monthNames:["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"],
				dayNamesMin:["Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa" ]
			});
		});
	// Mode classique - cible la barre de scroll générale
    $(document).ready(function() {
	// Mode classique - cible la barre de scroll générale
	// $("html").niceScroll();
	// Modifier la couleur du curseur
	// $("html").niceScroll({cursorcolor:"#91c225"});
	// Modifier la couleur du background du curseur
	// $("html").niceScroll({cursorcolor:"#91c225",background:"#000"});
	// Modifier la largeur, les bordures, l'arrondi
	$("html").niceScroll({
	cursorcolor:"#e7d3bb",background:"white",cursorwidth: 20,cursorborder: "0px solid transparent", cursorborderradius: "0px"});
	// Cibler un élément (par class ou id)
	// $("html").niceScroll();
	 });
	$(document).ready(function(){
		$('.scroll_to').on('click',function(){
			var page = $(this).attr('href');
			var speed = 850;
			$('body').animate({scrollTop: $(page).offset().top},speed);
			return false;
		});
	});
$(document).ready(function(){
	$('#dialog').dialog({
		autoOpen:false,
		modal:true
	});
	$('#open').on('click',function(){
		$('#dialog').dialog('open');
	});
});