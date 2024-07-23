<body>
	<script type="text/javascript">
		function createPDF() {
	        var sTable = document.getElementById('content').innerHTML;

	        var style = "<style>";
	        style = style + "table { width: 100%; }";
	        style = style + "table#salesinfo thead tr#left { text-align: left; }";
	        style = style + "table#salesinfo thead tr th { padding: 5px 10px; font-size: 18px; }";
	        style = style + "table#salesinfo thead tr th#right_align { text-align: right; }";
	        style = style + "#row-foot { font-size: 20px; font-weight: bold; text-align: right;  }";
	        style = style + "table#salesreport { border: solid 1px black; border-collapse: collapse; }";
	        style = style + "table#salesreport tbody { text-align: center; font-size: 16px; }";
	        style = style + "table#salesreport > thead > tr > th { border-bottom: 1px solid black; border-right: 1px solid black; padding: 10px; }";
	        style = style + "table#salesreport > tbody > tr > td { border-top: 1px solid black; border-right: 1px solid black; padding: 7px 10px; }";
	        style = style + "#left_align { text-align: left; }";
	        style = style + "#right_align { text-align: right; }";
	        style = style + "</style>";

	        // CREATE A WINDOW OBJECT.
	        var win = window.open('', '', 'height=1000,width=1000');

	        win.document.write('<html><head>');
	        win.document.write(style);
	        win.document.write('</head>');
	        win.document.write('<body>');
	        win.document.write(sTable);
	        win.document.write('</body></html>');

	        win.document.close();

	        win.print();
	    }
	</script>
</body>