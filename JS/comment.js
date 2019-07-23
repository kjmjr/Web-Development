function render(data){
	
	var html = "div class='commentBox'><div class='leftPaneImg'><img src='https://placeholdit.imgix.net/~text?w=100&h=100' /></div><div class='rightPanel'><span>"+data.name+"</span><div class='date'>"+data.date+"</div><p>"+data.body+"</p></div><div class='clear'></div></div>";
	
	$('#container').append(html);
	
}


$(document).ready(function(){
	
	var comment = [

	{"name": "Hair Salon", "date": "9 August 2018", "body": "this is a comment 1"}, 


	];

	for (var i=0; i<comment.length; i++){
		
		
		render(comment[i]);
		
		
	}
	
	$('#addComment').click(function(){
		
		var addobj = {
			
			"name": $('#name').val(),
			"date": $('#date').val(),
			"body": $('#bodyText').val()
			
		};
		
		console.log(addobj);
		comment.push(addobj);
		render(addobj);
		$('#name').val('');
		$('#date').val('dd/mm/yyyy');
	    $('#bodyText').val('');
		
		
	});
	
	
});

