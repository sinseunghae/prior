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

    <title>Point of Sales</title>

    <style type="text/css"></style>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="css/pos_style_new.css">

    <div class="pos-center">
      <form>
        <table id="outer-tbl-1">
          <tr>
            <!--LEFT SIDE TABLE-->
            <td colspan="6" width="50%">
              <table id="inner1" class="table table-striped">
                <thead>
                  <!--LOGO AND NAME-->
                  <tr>
                    <td colspan="12" width="100%">
                      <div align="center">
                        <img src="../images/dcdg.png" class="logo">
                        <span style="vertical-align: middle;" class="dcdg">Diamond Colours Dry Goods</span>
                      </div>
                    </td>
                  </tr>

                  <!--DATE AND TIME-->
                  <tr>
                    <td colspan="6" width="50%">
                      <p><b>Date</b></p>
                    </td>

                    <td colspan="6" width="50%">
                      <p><b>Time</b></p>
                    </td>
                  </tr>

                  <!--SEARCH BAR-->
                  <tr>
                    <td colspan="12" width="100%">
                      <button type="submit" class="btn-search"><b>Search</b></button>
                      <input type="text" name="search" class="search-input">
                    </td>
                  </tr>

                  <tr id="inner-tbl-1-head">
                    <th  colspan="4">Barcode</th>
                    <th  colspan="4">Description</th>
                    <th  colspan="4">Price</th>
                  </tr>
                </thead>


                <!--PRODUCT LIST W/ BARCODE AND PRICE-->
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

                  <tr>
                    <td  colspan="4">412598746325</td>
                    <td  colspan="4">CURTAIN HOLDER (PAIR)</td>
                    <td  colspan="4">500</td>
                  </tr>

                  <tr>
                    <td  colspan="4">452316825741</td>
                    <td  colspan="4">BLANKET</td>
                    <td  colspan="4">200</td>
                  </tr>

                  <tr>
                    <td  colspan="4">3625148978523</td>
                    <td  colspan="4">BED SHEET</td>
                    <td  colspan="4">200</td>
                  </tr>

                  <tr>
                    <td  colspan="4">369852156489</td>
                    <td  colspan="4">SHORTS</td>
                    <td  colspan="4">200</td>
                  </tr>

                  <tr>
                    <td  colspan="4">632598742561</td>
                    <td  colspan="4">FACEMASK</td>
                    <td  colspan="4">100</td>
                  </tr>

                  <tr>
                    <td  colspan="4">230165029875</td>
                    <td  colspan="4">ALCOHOL (1 LITER)</td>
                    <td  colspan="4">200</td>
                  </tr>

                  <tr>
                    <td  colspan="4">302651987326</td>
                    <td  colspan="4">MASK HOLDER</td>
                    <td  colspan="4">20</td>
                  </tr>

                  <tr>
                    <td  colspan="4">63298531467</td>
                    <td  colspan="4">SQUARE PANTS</td>
                    <td  colspan="4">150</td>
                  </tr>

                  <tr>
                    <td  colspan="4">963102486532</td>
                    <td  colspan="4">SPRAY BOTTLE</td>
                    <td  colspan="4">20</td>
                  </tr>
                </tbody>
              </table>
            </td>

            <!--RIGHT SIDE TABLE-->
            <td colspan="6" width="50%">
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

              <table id="inner-tbl-3">
                <tr>
                  <td colspan="3" width="25%"><label>Qty</label></td>
                  <td colspan="3" width="25%"><input type="text" name="qty" id="qty"></td>

                  <td colspan="3" width="25%"><label>Price</label></td>
                  <td colspan="3" width="25%"><input type="text" name="price" id="price" readonly></td>
                </tr>

                <tr>
                  <td colspan="3" width="25%"><label>Total</label></td>
                  <td colspan="3" width="25%"><input type="text" name="total" id="total" readonly></td>

                  <td colspan="3" width="25%"><label>Description</label></td>
                  <td colspan="3" width="25%"><input type="text" name="desc" id="desc" readonly></td>
                </tr>
              </table>

              <table id="inner-tbl-4">
                <tr>
                  <td colspan="6"><label>Total:</label></td>

                  <td colspan="6" width="100%"><input type="text" name="total-payment" id="total-payment" readonly></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>

        <table id="outer-tbl-2">
          <tr>
            <td><button onclick="document.getElementById('id01').style.display='block'">Save</button></td>
            <td><button>Add Item</button></td>
            <td><button>Edit Qty</button></td>
            <td><button>Delete Item</button></td>
            <td><button type="reset">Reset</button></td>
            <td><button><a href="employee_dashboard.php" style="text-decoration:none; color: #000;">Dashboard</a></button></td>
          </tr>
        </table>
      </form>
    </div>

    <!-- The Modal -->
    <?php include 'payment_modal.php'; ?>

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