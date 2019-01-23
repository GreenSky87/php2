<div class="pravo"><!--- Правая часть верхней строки-->
  <!--- Корзина-->
  <div class="btn-group">
     <button type="button" class="btn btn-default cart dropdown-toggle" data-toggle="dropdown"><img src="/img/index/cart.png" alt="cart"><span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu">
      
        <?php 
        if($cartTableData){ ?>          
          <div class="container">
              <?php foreach ($cartTableData as $cartItem): ?>
               <li>    
                        
                <div class="row">
                  <div class="col">
                    <img src="<?= $cartItem['image'] ?>" width="100" alt="<?= $id ?>" class="img-responsive">
                  </div>
                    <div class="col-5">
                      <div class="row-sm">
                        <span class="Rebox_Zane"><?= $cartItem['name'] ?></span>
                      </div>
                                          
                      <div class="row-sm">
                        <span class="cart_price"><?= $cartItem['quantity'] ?> x <?= $cartItem['price'] ?> $</span>
                      </div>
                    </div>
                    <div class="col">
                       <form method="post" action="/cart/delete.php">
                        <input type="hidden" name="product_id" value="<?= $cartItem['id'] ?>">
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                       </form>
                    </div>
                </div>                      
              </li>
     <?php endforeach; ?>
          </div> 
<!-- total -->
                    <li><div class="container">
                        
                            <div class="row">
                              <div class="col">
                                    <span class="TOTAL">Total</span>
                              </div>
                              <div class="col">
                              </div>
                              <div class="col">
                                    <span class="TOTAL"><?= $cartTotalSum ?> $</span>
                              </div>
                            </div>   
                        </div> 
                    </li>
      <?php } ?>                
                                      
                    <li>
                        <button type="button" class="btn4">
                          <a href="/cart/index.php">
                            <span class="go_to_cart">go to cart</span> 
                            (<?php if (isset($_SESSION['cart'])) 
                                        { echo count($_SESSION['cart']); } 
                                  else { echo '0'; } ?>)
                          </a>
                          </button>
                    </li>
                  </ul>
                </div>
            <!--- Аккаунт-->
                <div class="btn-group">
                  <button type="button" class="btn btn-default account dropdown-toggle" data-toggle="dropdown"><span class="myacc">My Account</span></button>
                  <ul class="dropdown-menu" role="menu">
                    <li> 
                      <?php if ($user): ?>
                        <a href="#"><?= $user['email'] ?></a>
                        <a href="logout.php"><span class="logo">Выйти</span></a>
                        <?php else: ?>
                        <a href="login.php"><span class="logo">Войти</span></a>
                        <?php endif; ?>
                    </li>
                  </ul>      
                </div>
            <!--- Аккаунт-->
            </div>