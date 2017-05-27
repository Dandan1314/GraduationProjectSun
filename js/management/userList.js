$(function() {

	$('#userList').DataTable({
		/*paging: false,
		lengthChange: false,
		searching: false,
		info: false,*/
		"ordering": false,
		"scrollX": true,
        "language": {
            url:'../../templates/DataTables/Chinese.json'
        },
        "processing": true,
        "serverSide": true,
        "ajax": "../../php/management/userList.php"
	});

});
