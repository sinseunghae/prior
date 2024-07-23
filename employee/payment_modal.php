<head>
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
    /* Set a style for all buttons */
    button.cancelbtn {
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      border-radius: 5px;
    }

    button.cancelbtn:hover { opacity: 0.8; }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
      border-radius: 5px;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    .container { padding: 16px; }

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
      margin: 2% auto 2% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 60%; /* Could be more or less, depending on screen size */
    }

    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,.close:focus {
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

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      .cancelbtn {
         width: 100%;
      }
    }

    #pay-table { width: 100%; }

    h2 { padding: 0 20px; }
    #pay-table tr td { border: none; padding: 0 20px; }
    #pay-table tr th { text-align: center; background-color: #A2DBFA; }

    .text-int {
        width: 100%;
        padding: 5px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button.complete-btn:hover { opacity: 0.8; }

    .complete-btn {
        width: auto;
        padding: 10px 18px;
        background-color: #053742;
        border-radius: 5px;
        border: none;
        color: white;
    }

    .sales-head-info {
      padding: 0 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
  </style>
</head>

<body>
  <div id="id01" class="modal">
      <form class="modal-content animate" action="/action_page.php" method="post">

        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <h2>Payment</h2>

        <div class="sales-head-info">
        <div>
          <span><b>Salesperson: </b></span>
          <span>Juan Dela Cruz</span>
        </div>

        <div>
          <span><b>Date: </b></span>
          <span>04/30/2022</span>
        </div>
      </div>

      <div class="sales-head-info">
        <div>
          <span><b>Location/Branch: </b></span>
          <span>Upper Mabini St.</span>
        </div>

        <div>
          <span><b>Time: </b></span>
          <span>9:00 AM</span>
        </div>
      </div>

        <div class="container">
          <table id="pay-table">
            <tr>
              <th colspan="12">Order Details</th>
            </tr>

            <tr>
              <td colspan="3" width="25%"><b>Qty</b></td>
              <td colspan="3" width="25%"><b>Price</b></td>
              <td colspan="3" width="25%"><b>Total</b></td>
              <td colspan="3" width="25%"><b>Description</b></td>
            </tr>

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

            <tr><td></td></tr>

            <tr>
              <td colspan="1" width="30%" style="padding-top: 25px;"><label for="totalpay"><b>Total</b></label></td>
              <td colspan="11" width="70%" style="padding-top: 25px;"><input type="text" name="totalpay" value="440" class="text-int" readonly></td>
            </tr>

            <tr>
              <td colspan="1" width="30%"><label for="amount"><b>Amount Paid</b></label></td>
              <td colspan="11" width="70%"><input type="text" placeholder="Enter Amount" name="amount" class="text-int"></td>
            </tr>

            <tr>
              <td colspan="1" width="30%"><label for="change"><b>Change</b></label></td>
              <td colspan="11" width="70%"><input type="text" name="change" value="" class="text-int" readonly></td>
            </tr>

            <tr>
              <td align="right" colspan="12">
                <button class="complete-btn">Enter</button>
                <button class="complete-btn">Receipt</button>
                <button type="submit" class="complete-btn" onclick="document.getElementById('id01').style.display='none'">Complete</button>
              </td>
            </tr>
          </table>
        </div>
      </form>
    </div>
</body>