$(document).ready(function(){
	
	$("#save").click(function(){
		ajax("save");
	});

	$("#add_new").click(function(){
		$(".entry-form").fadeIn("fast");	
	});
	
	$("#close").click(function(){
		$(".entry-form").fadeOut("fast");	
	});
	
	$("#cancel").click(function(){
		$(".entry-form").fadeOut("fast");	
	});
	
	$(".del").live("click",function(){
		ajax("delete",$(this).attr("id"));
	});

	function ajax(action,id){
		if(action =="save")
			data = $("#userinfo").serialize()+"&action="+action;
		else if(action == "delete"){
			data = "action="+action+"&item_id="+id;
		}

		$.ajax({
			type: "POST", 
			url: "ajax.php", 
			data : data,
			dataType: "json",
			success: function(response){
				if(response.success == "1"){
					if(action == "save"){
						$(".entry-form").fadeOut("fast",function(){
							$(".table-list").append("<tr><td>"+response.fname+"</td><td>"+response.lname+"</td><td>"+response.email+"</td><td>"+response.phone+"</td><td><a href='#' id='"+response.row_id+"' class='del'>Delete</a></a></td></tr>");	
							if ( ! $.browser.msie ) {
								$(".table-list tr:last").effect("highlight", {
									color: '#4BADF5'
								}, 1000);
							}
						});	
					}else if(action == "delete"){
						var row_id = response.item_id;
						if ( ! $.browser.msie ) {
							$("a[id='"+row_id+"']").closest("tr").effect("highlight", {
								color: '#4BADF5'
							}, 1000);
						}
						$("a[id='"+row_id+"']").closest("tr").fadeOut();
					}
				}
			},
			error: function(res){
				alert("Unexpected error! Try again.");
			}
		});
	}
});
