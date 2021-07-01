'use strict';
$(function () {
	$('.js-basic-example').DataTable({
		responsive: true
	});

	$('.save-stage').DataTable({
		"scrollX": true,
		stateSave: true
	});

	var t = $('#example3').DataTable({
		"scrollX": true
	});
	var counter = 1;

	$('#addRow').on('click', function () {
		t.row.add([
			counter + '.1',
			counter + '.2',
			counter + '.3',
			counter + '.4',
			counter + '.5'
		]).draw(false);

		counter++;
	});

	$('#tableExport').DataTable({
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	});


	//Exportable table
	$('.js-exportable').DataTable({
		dom: 'Bfrtip',
		responsive: true,
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	});

	// #start# Group table
	var table = $('#tableGroup').DataTable({
		"columnDefs": [
			{ "visible": false, "targets": 2 }
		],
		"order": [[2, 'asc']],
		"scrollX": true,
		"displayLength": 25,
		"drawCallback": function (settings) {
			var api = this.api();
			var rows = api.rows({ page: 'current' }).nodes();
			var last = null;

			api.column(2, { page: 'current' }).data().each(function (group, i) {
				if (last !== group) {
					$(rows).eq(i).before(
						'<tr class="group"><td colspan="5">' + group + '</td></tr>'
					);

					last = group;
				}
			});
		}
	});

	// Order by the grouping
	$('#tableGroup tbody').on('click', 'tr.group', function () {
		var currentOrder = table.order()[0];
		if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
			table.order([2, 'desc']).draw();
		}
		else {
			table.order([2, 'asc']).draw();
		}
	});

	childRowTable();
});

function childRowTable() {
	var childData =[

	]
	



	/* Formatting function for row details - modify as you need */
	function format(d) {
		// `d` is the original data object for the row
		return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;background:#f5f5f5;">' +
			'<tr>' +
			'<td>Full name:</td>' +
			'<td>' + d.name + '</td>' +
			'</tr>' +
			'<tr>' +
			'<td>Extension number:</td>' +
			'<td>' + d.extn + '</td>' +
			'</tr>' +
			'<tr>' +
			'<td>Extra info:</td>' +
			'<td>And any further details here (images etc)...</td>' +
			'</tr>' +
			'</table>';
	}



	var table = $('#chieldRow').DataTable({
		data: childData,
		"columns": [
			{
				"className": 'details-control',
				"orderable": false,
				"data": null,
				"defaultContent": ''
			},
			{ "data": "name" },
			{ "data": "position" },
			{ "data": "office" },
			{ "data": "salary" }
		],
		"order": [[1, 'asc']]
	});

	// Add event listener for opening and closing details
	$('#chieldRow tbody').on('click', 'td.details-control', function () {
		var tr = $(this).closest('tr');
		var row = table.row(tr);

		if (row.child.isShown()) {
			// This row is already open - close it
			row.child.hide();
			tr.removeClass('shown');
		}
		else {
			// Open this row
			row.child(format(row.data())).show();
			tr.addClass('shown');
		}
	});

}


//#end# Group table

