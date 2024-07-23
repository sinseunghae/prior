<!DOCTYPE html>
<html>
<style> 
  .button2{
    background: none;
    border: none;
  }

  .button i{
    opacity: 0.75;
  }


  .cancelbtn, .deletebtn {
    color: white;
    height: 2%;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    font-size: 14px;
  }

  .deletebtn:hover {
    opacity:1;
  }

  .cancelbtn:hover{
    opacity: 0.8;
  }

  .cancelbtn, .deletebtn {
    float: left;
    width: 50%;
  }

  .cancelbtn {
    background-color: #b3b3b3;
    color: black;
  }

  .deletebtn {
    background-color: #053742;
  }

  .del-container {
    padding: 20px;
    box-shadow: 5px 10px 18px #888888;
    text-align: center;
  }

  .modal {
    display: none; 
    position: fixed;
    z-index: 1; 
    right: 0;
    left: 20%;
    top: 15%;
    width: 45%; 
    overflow: auto;
    padding-top: 40px;
    margin: 5% auto 15% auto;
    border-radius: 5px;
    line-height: 40px;
    
  }

  hr {
    border: 3px solid #f1f1f1;
    margin-bottom: 25px;
  }

  .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #2196F3;
  }

  .close:hover,
  .close:focus {
    color: #f44336;
    cursor: pointer;
  }

  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  @media screen and (max-width: 300px) {
    .cancelbtn, .deletebtn {
     width: 100%;
   }
 }
</style>
<body>

  <button onclick="document.getElementById('id01').style.display='block'" class="button2"><i class='bx bxs-x-circle'></i></button>

  <div id="id01" class="modal">

    <form class="modal-content" action="/action_page.php">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">×</span>
      <div class="del-container">
        <h3>Confirm Delete</h3>
        <p>Are you sure you want to delete this?</p>

        <div class="clearfix">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
