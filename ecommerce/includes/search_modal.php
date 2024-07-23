<head>
	<script type="text/javascript">
		// Get the modal
      var modal = document.getElementById('id02');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
	</script>

  <style type="text/css">
    .imgcontainer {
      text-align: center;
      margin: 24px 0 20px 0;
      position: relative;
    }

    .search-container {
      padding: 16px !important;
    }

    .search-container tr td {
      padding-left: 0px !important;
      padding-right: 0px !important;
      border-bottom: none !important;
    }

    input.search-input[type=text] {
      font-size: 15px;
      border: solid 1px;
      display: inline-block;
    }

    button.btn-search {
      display: inline-block !important;
      padding: 6px 10px !important;
      margin-top: 0px !important;
      margin-right: 16px !important;
      background: #ddd !important;
      font-size: 15px !important;
      border: none !important;
      border-radius: 0px !important;
      cursor: pointer !important;
      height: 50px !important;
      width: 100% !important;
    }

    button.btn-search:hover {
      background: #ccc;
    }

    /* The Modal (background) */
    .search-modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .search-modal-content {
      background-color: #fefefe;
      margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      border-radius: 5px;
      width: 50%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
    }
      
    @keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }
  </style>
</head>

<body>
	<div id="id02" class="search-modal">
      <form class="search-modal-content animate" action="/action_page.php" method="post">

        <div class="imgcontainer">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <br>

        <div class="search-container row">
          <table>
            <tr id="search-row">
              <td colspan="11" id="search-col">
                <input type="text" placeholder="Search.." name="search" class="search-input">
              </td>

              <td colspan="1" id="search-col">
                <button type="submit" class="btn-search"><i class="material-icons" style="color: #000;">search</i></button>
              </td>
            </tr>
          </table>
        </div>
      </form>
    </div>
</body>