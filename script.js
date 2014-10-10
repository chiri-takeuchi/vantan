
function changeColor(){
//	document.getElementById('body_text').style.color = "Blue";
//	var tags = documet.getElementsByTagName('p');
//	for (var i = 0 ; 0 < tags.length ; i++){
//		tags[i].style.color = "Red";
//	}


$('#body_text').css('color','Red');

}

$(document).ready(function(){
	$('#body_text').click(changeColor);
});

