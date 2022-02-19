$(document).ready(function () {
	$("#read-user").hide();
	$("#page-content").load("read.php");
	$("#create-user").click(function () {
		$("#page-content").load("create_form.php");
		$("#read-user").show();
		$("#create-user").hide();
	});
	$("#read-user").click(function () {
		$("#page-content").load("read.php");
		$("#create-user").show();
		$("#read-user").hide();
	});

	$(document).on("submit", "#create-user-form", function () {
		$.post("create.php", $(this).serialize()).done(function(){
			showUsers();
			$('#read-user').hide();
			$('#create-user').show();
			$("#page-content").load("read.php");
		});

	});

	function showUsers() {
		$("#page-content").load("read.php");
	}

	$(document).on('click', '.edit-btn', function () {
		$('#read-user').show();
		$('#create-user').hide();
		var user_id = $(this).closest('tr').find('.user_id').val();
		$('#page-content').load('update_form.php?user_id=' + user_id);
	});

	$(document).on('submit', '#update-user-form', function () {
		$.post("update.php", $(this).serialize()).done(function(){
			showUsers();
		});
	});

	$(document).on('click', '.delete-btn', function () {
		if(confirm('Are you sure?')){

		// get the id
			var user_id = $(this).closest('tr').find('.user_id').val();

			$.post("delete.php", { user_id: user_id })
			.done(function(){
				showUsers();
			});
		}
	});
});