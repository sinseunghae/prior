<body>
	<script type="text/javascript">
    	//CSV CODE
    	function downloadCSVFile(csv, filename) {
		    var csv_file, download_link;

		    csv_file = new Blob([csv], {type: "text/csv"});

		    download_link = document.createElement("a");

		    download_link.download = filename;

		    download_link.href = window.URL.createObjectURL(csv_file);

		    download_link.style.display = "none";

		    document.body.appendChild(download_link);

		    download_link.click();
		}

		document.getElementById("download-button").addEventListener("click", function () {
			    var html = document.querySelector("table").outerHTML;
				htmlToCSV(html, "sales_report.csv");
			});


		function htmlToCSV(html, filename) {
			var data = [];
			var rows = document.querySelectorAll("table tr");
						
			for (var i = 0; i < rows.length; i++) {
				var row = [], cols = rows[i].querySelectorAll("td, th");
							
				for (var j = 0; j < cols.length; j++) {
					row.push(cols[j].innerText);
			    }
					        
				data.push(row.join(","));		
			}

			//to remove table heading
			//data.shift()
			downloadCSVFile(data.join("\n"), filename);
		}
    </script> 
</body>