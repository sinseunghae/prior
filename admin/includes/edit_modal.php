<!DOCTYPE html>
<html>
<style> 

button {
   height: 5%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #1687A7, #276678);
}

button:hover {
  background: linear-gradient(-135deg, #1687A7, #276678);
}
  .button2{
    background: none;
    border: none;
  }

  button i{
    height: 25px;
    width: 25px;
    opacity: 0.75;

  }

  button i:hover{
    opacity: 2;
  }

  .container2 {
    padding: 15px;
    text-align: center;
    letter-spacing: 1px;
    font-size: 18px;
  }

  .modal {
    display: none; 
    position: fixed;
    z-index: 1; 
    right: 0;
    left: 21%;
    top: 30%;
    width: 25%;
    height: 20%; 
    overflow: hidden;
    background-color: #f1f1f1;
    padding-top: 40px;
    margin: 5% auto 15% auto;
    border-radius: 5px;
    line-height: 40px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
  }

  hr {
    border: 1px solid #f1f1f1;
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

  <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">×</span>
    <form class="modal-content" action="/action_page.php">
      <div class="container2">
        <p>Your changes have been successfully saved!</p>

      </div>
    </form>
  </div>
</body>
</html>
