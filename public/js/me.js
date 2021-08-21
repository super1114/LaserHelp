var categories = [];
function arrayRemove(arr, value) { 
    return arr.filter(function(ele){ 
        return ele != value; 
    });
}
$(document).ready(function(){
	$(".niche").on("click", function(e){
		var target = $(e.target);
		var id = $(e.target).closest('button').data('id');
		if(target.hasClass("active_niche")){
			target.removeClass("active_niche");
			categories = arrayRemove(categories, id);
		}else{
			target.addClass("active_niche");
			categories.push(id);
		}
		$("#categories").val(categories.join(","));
	})
	$("#attach_file").on("click", function(e) {
		$("#file").trigger("click");
	})
	$("#file").on("change", function (e) {
		var filename = e.target.files[0].name;
		$("#selected_files").html(filename+"&nbsp;");
	});
	$("#submit_btn").on("click", function(e){
		e.preventDefault();
		$("#queston_form").submit();	
	})
	$("#queston_form").on("submit", function(e){
		e.preventDefault();
		var form = $('#queston_form')[0];
    	var data = new FormData(form);
    	$.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: $("#queston_form").prop("action"),
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
                if(data.user_id==0){
                	document.location = register_link+"?question="+data.question_id;
                } else {
                	document.location = myquestions_link;
                }
            },
            error: function (e) {
                

            }
        });
	});
	$(".become_expert").on("click", function(e){
		document.location = become_expert;
	})
})