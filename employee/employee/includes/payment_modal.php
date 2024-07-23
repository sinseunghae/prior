<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<script type="text/javascript">
		// Get the modal
      var modal = document.getElementById('id01');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
	</script>

  <style type="text/css">
    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      padding-bottom: 25px;
      position: relative;
    }

    /* The Modal (background) */
    .modal {
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
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 50%; /* Could be more or less, depending on screen size */
      height: 500px;
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

    .close:hover, .close:focus {
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

    .container { padding: 0px 25px; font-family: 'Poppins', sans-serif; }
    .od-title p { background-color: #A2DBFA; font-weight: bold; }
    .item { padding: 8px; }

    table#modal-tbl thead, table#modal-tbl tbody tr {
      display: table;
      width: 100%;
      table-layout: fixed;
    }

    table#modal-tbl #modal-body {
      display: block;
      height: 100px;
      overflow-y: auto;
    }

    #lbl { font-weight: bold; }
    #txt-box { width: 300px; }

    #btn { 
      background-color: #39A2DB;
      width: 100px; 
      border: none;
      font-weight: bold;
    }

    #btn:hover { 
      border: solid 1px black;
      background-color: #A2DBFA;
    }
  </style>
</head>

<body>
	<div id="id01" class="modal">
      <form class="modal-content animate" action="/action_page.php" method="post">

        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">

          <!--HEADER-->
          <div class="row">
            <div class="col-2"><b>Salesperson: </b></div>
            <div class="col-6"><p>Juan Dela Cruz</p></div>
            <div class="col-1"><b>Date: </b></div>
            <div class="col-3"><p>04/30/2022</p></div>
          </div>

          <div class="row">
            <div class="col-2"><b>Branch: </b></div>
            <div class="col-6"><p>Upper Mabini St.</p></div>
            <div class="col-1"><b>Time: </b></div>
            <div class="col-3"><p>9:00 AM</p></div>
          </div>


          <!--ORDER DETAILS TABLE-->
          <div class="row od-title" align="center">
            <p>Order Details</p>
          </div>

          <table id="modal-tbl" class="table table-striped">
            <thead>
              <tr id="modal-head">
                <th colspan="3">Qty</th>
                <th colspan="3">Price</th>
                <th colspan="3">Total</th>
                <th colspan="3">Description</th>
              </tr>
            </thead>

            <tbody id="modal-body">
              <tr>
                <td colspan="3">2</td>
                <td colspan="3">120</td>
                <td colspan="3">240</td>
                <td colspan="3">CURTAIN ROD</td>
              </tr>

              <tr>
                <td colspan="3">1</td>
                <td colspan="3">200</td>
                <td colspan="3">200</td>
                <td colspan="3">BLANKET</td>
              </tr>
            </tbody>
          </table>

          <!--TOTAL PAYMENT & BUTTONS-->
          <div class="row">
            <div class="col-3 item" id="lbl">
              <label for="total">Total</label>
            </div>

            <div class="col-6 item" id="txt-box" align="center">
              <input type="text" name="total" readonly>
            </div>

            <div class="col-3 item" align="center">
              <button id="btn">Enter</button>
            </div>
          </div>

          <div class="row">
            <div class="col-3 item" id="lbl">
              <label for="amount_paid">Amount Paid</label>
            </div>

            <div class="col-6 item" id="txt-box" align="center">
              <input type="text" name="amount_paid">
            </div>

            <div class="col-3 item" align="center">
              <button id="btn">Receipt</button>
            </div>
          </div>

          <div class="row">
            <div class="col-3 item" id="lbl">
              <label for="change">Change</label>
            </div>

            <div class="col-6 item" id="txt-box" align="center">
              <input type="text" name="change" readonly>
            </div>

            <div class="col-3 item" align="center">
              <button type="submit" id="btn">Complete</button>
            </div>
          </div>

        </div>
      </form>
    </div>
</body>