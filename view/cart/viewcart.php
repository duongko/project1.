<div class='momo'></div>
<div class='container1 pay'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Order Summary</h2>
        <div class='line'></div>
        <form action="index.php?act=bill" method="post">

          <table class='order-table'>
            <tbody>
              <tr>
                <td>
                  <?php
                        echo '
                            <img class="full-width" src="upload/'.$img.'"><br>
                           
                        ';
                  ?>
                <td>
                  <br> <span class='thin'><?=$name?></span>
                  <div class="cart-quantity " >
                    <input type="number" id="quantity" class="form-control form-blue quantity" value="1" min="1">
                  </div>
                </td>

              </tr>
              <tr>
                <td>
                  <div class='price'><?=$price?></div>
                </td>
              </tr>
            </tbody>

          </table>
          <div class='line'></div>


          <div class='total'>
            <span style='float:left;'>
              <div class='thin dense'>VAT 19%</div>
              <div class='thin dense'>Delivery</div>
              TOTAL
            </span>
            <span style='float:right; text-align:right;'>
              <div class='thin dense'>$68.75</div>
              <div class='thin dense'>$4.95</div>
              $435.55
            </span>
          </div>
        </form>
      </div>
    </div>
    <div class='credit-info'>
      <div class="close1">
        X

      </div>
      <div class='credit-info-content'>
        <img src="img/logo.png" height='80' class='credit-card-image' id='credit-card-image'></img>
        <form action="index.php?act=bill" method="post">

          Username
          <input class='input-field'name="name"></input>
          Phone
          <input class='input-field'name="phone"></input>
          <table class='half-input-table'>
            <tr>
              <td> Email
                <input type="email" class='input-field'name="mail"></input>
              </td>

            </tr>
            <tr>
              <td> Address
                <input type="text" class='input-field'name="address"></input>
              </td>

            </tr>

          </table>
          <input type="submit" class='input-field checkout' name="dongymuahang"value="checkout"></input>
        </form>
      </div>
    </div>


  </div>

</div>