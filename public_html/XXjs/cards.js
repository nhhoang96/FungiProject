$(document).ready(function(){
    $('.flip').click(function(){
        $(this).find('.card').toggleClass('flipped');
    });
	
	$("#pop").on("click", function() {
   		$('#imagepreview').attr('src', $('#birdsnest').attr('src'));
   		$('#imagemodal').modal('show');
	});
	
	$("#club").on("click", function() {
   		$('#imagepreview').attr('src', $('#clubimage').attr('src'));
   		$('#imagemodal').modal('show');
	});
});  
