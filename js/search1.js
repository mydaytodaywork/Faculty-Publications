function navbar_change(id){
	$(".closeme").css("background-color","#F90");
	$(id).css("background-color","white");
}

function loadDoc(){
	navbar_change("#jour");
	var url_string="includes/response.php?";
	url_string=url_string+"col=journal";
	$.ajax({url: url_string, success: function(result){
		$("#results").html(result);
	}});
}
$("#jour").click(function(){
	navbar_change("#jour");
	var url_string="includes/response.php?";
	url_string=url_string+"col=journal";
	$.ajax({url: url_string, success: function(result){
		$("#results").html(result);
	}});
});
$("#book").click(function(){
	navbar_change("#book");
	var url_string="includes/response.php?";
	url_string=url_string+"col=book";
	$.ajax({url: url_string, success: function(result){
		$("#results").html(result);
	}});
});
$("#bookc").click(function(){
	navbar_change("#bookc");
	var url_string="includes/response.php?";
	url_string=url_string+"col=bookc";
	$.ajax({url: url_string, success: function(result){
		$("#results").html(result);
	}});
});

$("#conf").click(function(){
		navbar_change("#conf");
		var url_string="includes/response.php?";
		url_string=url_string+"col=conference";
        $.ajax({url: url_string, success: function(result){
            $("#results").html(result);
        }});
});

$("#misc").click(function(){
	navbar_change("#misc");
	var url_string="includes/response.php?";
	url_string=url_string+"col=misc";
	$.ajax({url: url_string, success: function(result){
		$("#results").html(result);
	}});
});

//search-modal js


$(document).ready(function(){
	$(".list1").click(function(){
		$("#topic").text("All Authors");
		var url_string='includes/viewall_query.php?filter=author';
		$.ajax({url: url_string, success: function(result){
			$("#pop-info").html(result);
		}});
		showmodal();
	});
});

$(document).ready(function(){
	$(".list2").click(function(){
		$("#topic").text("All Subjects");
		var url_string='includes/viewall_query.php?filter=subject';
		$.ajax({url: url_string, success: function(result){
			$("#pop-info").html(result);
		}});
		showmodal();
	});
});

$(document).ready(function(){
	$(".list3").click(function(){
		$("#topic").text("All Documents");
		var url_string='includes/viewall_query.php?filter=document';
		$.ajax({url: url_string, success: function(result){
			$("#pop-info").html(result);
		}});
		showmodal();
	});
});

$(document).ready(function(){
	$(".list4").click(function(){
		$("#topic").text("All Schools");
		var url_string='includes/viewall_query.php?filter=school';
		$.ajax({url: url_string, success: function(result){
			$("#pop-info").html(result);
		}});
		showmodal();
	});
});

$(document).ready(function(){
	$(".list5").click(function(){
		$("#topic").text("All Years");
		var url_string='includes/viewall_query.php?filter=year';
		$.ajax({url: url_string, success: function(result){
			$("#pop-info").html(result);
		}});
		showmodal();
	});
});

$(document).ready(function(){
	$(".list6").click(function(){
		$("#topic").text("All Publishers");
		var url_string='includes/viewall_query.php?filter=publisher';
		$.ajax({url: url_string, success: function(result){
			$("#pop-info").html(result);
		}});
		showmodal();
	});
});