<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Point of Sales</title>

    <style type="text/css"></style>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="css/pos.css">

    <div class="container-fluid">
      <form>
        
        <div class="row">

          <!--FIRST TABLE-->
          <div class="col-5" id="first-ot">

            <div class="row">
              <div class="col-12" align="center">
                <img src="../images/dcdg.png" class="logo">
                <span style="vertical-align: middle;" class="dcdg">Diamond Colours Dry Goods</span>
              </div>
            </div>

            <!--CASHIER & BRANCH INFO-->
            <div class="row cb-info">
              <div>
                <p style="padding-top: 10px;">Cashier Name: </p>
              </div>
            </div>

            <div class="row cb-info">
              <div>
                <p>Branch: </p>
              </div>
            </div>

            <!--SEARCH BAR-->
            <div class="row">
              <div class="col-10">
                <input type="text" name="search" class="search-input">
              </div>

              <div class="col-2">
                <button type="submit" class="btn-search"><b>Search</b></button>
              </div>
            </div>

            
            <div class="row" id="inner1-margin"><!--FIRST INNER TABLE-->
              <table id="inner1" class="table table-striped">
                <thead>
                  <tr id="inner-tbl-1-head">
                    <th  colspan="4">Barcode</th>
                    <th  colspan="4">Description</th>
                    <th  colspan="4">Price</th>
                  </tr>
                </thead>

                <tbody id="inner-tbl-1-body">
                  <tr>
                    <td  colspan="4">412365987456</td>
                    <td  colspan="4">SATIN CURTAIN</td>
                    <td  colspan="4">150</td>
                  </tr>

                  <tr>
                    <td  colspan="4">326591842365</td>
                    <td  colspan="4">CURTAIN ROD</td>
                    <td  colspan="4">120</td>
                  </tr>

                  <tr>
                    <td  colspan="4">952361458426</td>
                    <td  colspan="4">BLINDS</td>
                    <td  colspan="4">2500</td>
                  </tr>
                </tbody>
              </table>
            </div><!--FIRST INNER TABLE ENDS HERE-->

          </div><!--FIRST TABLE ENDS HERE-->          


          <!--SECOND TABLE-->
          <div class="col-5" id="second-ot">
            
            <div class="row" id="inner2-margin"><!--SECOND INNER TABLE-->
              <table id="inner2" class="table table-striped">
                <thead>
                  <tr>
                    <td>Qty</td>
                    <td>Price</td>
                    <td>Total</td>
                    <td>Description</td>
                  </tr>
                </thead>

                <tbody id="inner-tbl-2-body">
                  <tr>
                    <td>2</td>
                    <td>120</td>
                    <td>240</td>
                    <td>CURTAIN ROD</td>
                  </tr>

                  <tr>
                    <td>1</td>
                    <td>200</td>
                    <td>200</td>
                    <td>BLANKET</td>
                  </tr>
                </tbody>
              </table>
            </div><!--SECOND INNER TABLE ENDS HERE-->             

           
            <div class="row" id="inner3"><!--THIRD INNER TABLE-->
              <div class="col-12">

                <div class="row">
                  <div class="col-1 col-itm"><label>Qty</label></div>

                  <div class="col-5 col-itm" align="right">
                    <input type="text" name="qty" id="qty">
                  </div>

                  <div class="col-1 col-itm"><label>Price</label></div>

                  <div class="col-5 col-itm" align="right">
                    <input type="text" name="price" id="price" readonly>
                  </div>
                </div>

                <div class="row">
                  <div class="col-1 col-itm"><label>Total</label></div>

                  <div class="col-5 col-itm" align="right">
                    <input type="text" name="total" id="total" readonly>
                  </div>

                  <div class="col-1 col-itm"><label>Description</label></div>

                  <div class="col-5 col-itm" align="right">
                    <input type="text" name="desc" id="desc" readonly>
                  </div>
                </div>

              </div>
            </div><!--THIRD INNER TABLE ENDS HERE-->


            <div class="row" id="inner4"><!--FOURTH INNER TABLE-->
              <div class="col-2 col-itm"><label>Total:</label></div>

              <div class="col-10 col-itm">
                <input type="text" name="total-payment" id="total-payment" readonly>
              </div>
            </div><!--FOURTH INNER TABLE ENDS HERE-->           

          </div><!--SECOND TABLE ENDS HERE-->


          <!--THIRD TABLE-->
          <div class="col-2" id="third-ot">
            <div class="row">
              <div>
                <p class="time-date">Time: </p>
              </div>
            </div>

            <div>
              <div>
                <p class="time-date">Date: </p>
              </div>
            </div>

            <div class="row" align="center">
              <div>
                <button onclick="document.getElementById('id01').style.display='block'">
                  <a href="#account" style="text-decoration:none; color: #000;">Save</a>
                </button>
              </div>
            </div>

            <div class="row" align="center">
              <div>
                <button>Add Item</button>
              </div>
            </div>

            <div class="row" align="center">
              <div>
                <button>Edit Qty</button>
              </div>
            </div>

            <div class="row" align="center">
              <div>
                <button>Delete Item</button>
              </div>
            </div>

            <div class="row" align="center">
              <div>
                <button type="reset">Reset</button>
              </div>
            </div>

            <div class="row" align="center">
              <div>
                <button><a href="employee_dashboard.php" style="text-decoration:none; color: #000;">Dashboard</a></button>
              </div>
            </div>
          </div><!--THIRD TABLE ENDS HERE-->

        </div>

      </form>
    </div>



    <!-- The Modal -->
    <?php include 'includes/payment_modal.php'; ?>
    

    <script type="text/javascript"> 
      // edit and delete item(s) for id="inner2"
      var table2 = document.getElementById("inner2"),rIndex;
      for(var i = 1; i < table2.rows.length; i++) {
        table2.rows[i].onclick = function() {
          rIndex = this.rowIndex;
          console.log(rIndex);
                    
          document.getElementById("qty").value = this.cells[0].innerHTML;
          document.getElementById("price").value = this.cells[1].innerHTML;
          document.getElementById("total").value = this.cells[2].innerHTML;
          document.getElementById("desc").value = this.cells[3].innerHTML;
        };
      }

      // add item(s) for id="inner1"
      var table1 = document.getElementById("inner1"),rIndex;
      for(var i = 1; i < table1.rows.length; i++) {
        table1.rows[i].onclick = function() {
          rIndex = this.rowIndex;
          console.log(rIndex);
                    
          //document.getElementById("qty").value = this.cells[0].innerHTML;
          //document.getElementById("total").value = this.cells[2].innerHTML;
          document.getElementById("desc").value = this.cells[1].innerHTML;
          document.getElementById("price").value = this.cells[2].innerHTML;
        };
      }
    </script> 
  </body>
</html>