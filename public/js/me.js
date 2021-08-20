$(document).ready(function(){
	$(".niche").on("click", function(e){
		var target = $(e.target);
		if(target.hasClass("active_niche")){
			target.removeClass("active_niche");
		}else{
			target.addClass("active_niche");
		}
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
    	$("#submit_btn").prop("disabled", true);
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
                $("#btnSubmit").prop("disabled", false);
            },
            error: function (e) {
                $("#btnSubmit").prop("disabled", false);

            }
        });
	})
})