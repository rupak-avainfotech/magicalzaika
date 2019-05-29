<?php
 if(isset($shippingaddress['name'])){
     $name = $shippingaddress['name'];
 }elseif(isset($user->name)){
     $name = $user->name;          
 }
 
  if(isset($shippingaddress['email'])){
     $email = $shippingaddress['email'];
 }elseif(isset($user->email)){    
     $email = $user->email;         
 }
 
  if(isset($shippingaddress['phone'])){
     $phone = $shippingaddress['phone'];
 }elseif(isset($user->phone)){
     $phone = $user->phone;         
 }

  if(isset($shippingaddress['address'])){
     $address = $shippingaddress['address'];
 }elseif(isset($user->address)){
     $address = $user->address;           
 }
 
   if(isset($shippingaddress['city'])){
     $city = $shippingaddress['city']; 
 }elseif(isset($user->city)){
     $city = $user->city;             
 }
 
    if(isset($shippingaddress['state'])){
     $state = $shippingaddress['state']; 
 }elseif(isset($user->state)){
     $state = $user->state;           
 }
 
    if(isset($shippingaddress['zip'])){
     $zip = $shippingaddress['zip']; 
 }elseif(isset($user->zip)){
     $zip = $user->zip;                
 }
?>
<style>
    .countinue{ display: none; }
</style>


 <!-- Breadcrumb Start -->
            <div class="bread-crumb">
                <div class="container">
                    <div class="matter">
                        <h2>Shopping Cart</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">HOME</a></li>
                            <li class="list-inline-item"><a href="#">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb End -->

  <!-- Cart Start  -->
            <div class="mycart">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 checkout7">
                           <?= $this->Flash->render() ?> 

                             <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
 <h2 style="text-align: center;padding: 0px 3px 35px;">Order Details</h2>
    <div class="panel panel-default checkout">
     <!-- <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion"  href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <span class="rund_1">1</span>Order Details
         <div class="chng_rgn">Change</div>
        </a>
      </h4>
      </div>-->
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
        
        <div class="table_chot" id="added_items"> 
          
        </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <span class="rund_1">1</span>Billing  Address
          <div class="chng_rgn">Change</div>
        </a>
      </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
         <div class="ship_frm tab-pane">
            <form id="checkout-form" method="post"> 
                <div class="form-group nm_lese">
                  <label for="name">Name</label>  
                  <input type="text" class="form-control" id="name" value="<?php if(isset($name)){ echo $name; } ?>" placeholder="Name" name="name">
                </div>
                <div class="form-group nm_lese">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control" id="email" value="<?php if(isset($email)){ echo $email; } ?>" placeholder="Email Address" name="email">
                </div>

                 <div class="form-group nm_lese less_mrgn">
                  <label for="phone">Phone Number</label>
                  <input type="text" maxlength="12" class="form-control" id="phone" value="<?php if(isset($phone)){ echo $phone; } ?>" placeholder="Phone Number" name="phone">
                </div>

                 <div class="form-group">
                  <label for="address">Street or P.O. Box</label>
                  <input type="text" class="form-control" id="address" value="<?php if(isset($address)){ echo $address; } ?>" placeholder="Street" name="address">
                </div>

                 <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" value="<?php if(isset($city)){ echo $city; } ?>" placeholder="City" name="city">
                </div>

                 <div class="form-group stret_lese">
                  <label for="state">State</label> 
                  <input type="text" class="form-control" id="state" value="<?php if(isset($state)){ echo $state; } ?>" placeholder="State" name="state"> 
                </div>

                 <div class="form-group stret_lese less_mrgn">
                  <label for="zip">Zip Code</label>
                  <input type="number" class="form-control" id="zip" value="<?php if(isset($zip)){ echo $zip; } ?>" placeholder="Zip Code" name="zip">
                </div> 
                 <div class="form-group stret_lese less_mrgn">
                     <p class="mymessage"></p>       
                </div>
                <button type="button" id="saveaddress" class="btn btn-theme btn-md btn-wide">Save</button> 
                  
            </form>

          </div>     
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
         <span class="rund_1">2</span>Review Your Order
        </a>
      </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
          <div class="ordr_rvew">
              <div class="lft_itm">
                <h3>Items(<?php if(isset($cart['cartInfo']['order_item_count'])){ echo count($cart['cartInfo']['order_item_count']);} ?>)</h3>
                  </div>
                   <div class="rght_dte">
                    <h3><?php echo date('d-m-Y'); ?></h3>
                    </div>
              </div> 
                <?php if(!empty($cart['products'])){ 
                    foreach($cart['products'] as $item){
                        
                        
                    ?>
                <div class="ordr_rvew">
              <div class="col-md-12 check71 lft_itm">
                 <div class="col-sm-5 col-md-4">
                <div class="cart_chknt">
                   <?php if($item['product']['image']){ ?>  
                    <img src="<?php echo $item['product']['image']; ?>" class="ful_lnght">
                     <?php }else{ ?>
                    <img src="<?php echo $this->request->webroot."images/products/no-image.jpg"; ?>" class="ful_lnght">
                     <?php } ?>  
                
                  </div> 
                   </div>
                  <div class="col-sm-5 col-md-6 frain">
                  <h4 class="spn_hdng7"><?php if(isset($item['product']['name'])){ echo $item['product']['name']; } ?></h4>
                  <p class="para_chktxt7">
                          <?php  
                                        $string = strip_tags($item['product']['description']);
                                        if (strlen($string) > 108) {     
                                            $stringCut = substr($string, 0, 108);
                                            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="'.$this->request->webroot.'products/view/'.$item['product']['slug'].'" class="read_lst">Read More</a>'; 
                                        }
                                        ?>
                  <?php if(isset($string)){ echo $string; } ?>     
                     
                  </p>
                  </div>
                   <div class="col-sm-2 col-md-2 rght_dte">
                    <h3>Rs <?php if(isset($item['product']['price'])){ echo $item['product']['price']; } ?></h3> 
                    </div>
                    </div>
              </div>
			  </div>
                <?php } } ?>

               <div class="ordr_rvew">
              <div class="lft_itm">
                  <h4 class="spn_hdng">Order Subtotal</h4>
                  </div>
                   <div class="rght_dte col-md-2">
                    <h3>Rs<?php if(isset($cart['cartInfo']['subtotal'])){ echo $cart['cartInfo']['subtotal'];} ?></h3>
                    </div>
              </div> 
          
                <div class="ordr_rvew">
              <div class="lft_itm">
                  <h4 class="spn_hdng">Total</h4>
                  </div>
                   <div class="rght_dte">
                       <h3>Rs <?php if(isset($cart['cartInfo']['total'])){ echo $cart['cartInfo']['total'];} ?></h3>
                    </div>
              </div>
                
                
              <div class="shiping_detl">
                <div class="adres_lft">
                  <h4>Shipping Address</h4>
                    
                    <address>
                     <?php if(isset($name)){ echo $name; } ?><br>
                     <?php if(isset($email)){ echo $email; } ?><br>
                     <?php if(isset($phone)){ echo $phone; } ?><br>
                      <?php if(isset($address)){ echo $address; } ?><br>
                     <?php if(isset($city)){ echo $city; } ?><br>
                     <?php if(isset($state)){ echo $state; } ?><br>
                     <?php if(isset($zip)){ echo $zip; } ?>
                       
                      </address>
                  </div>
                </div>  
              
                
        </div>
      </div>
    </div>


    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingfour">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
         <span class="rund_1">3</span>Pay Now With Paypal
        </a>
      </h4>
      </div>
      <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
        <div class="panel-body">
            <form action="<?php echo $this->request->webroot."restaurants/payment" ?>" id="payform" method="post">
                <div class="form-group cash">
                    <label>Cash on delivery</label>
                <input type="radio" class="form-control" name="pay_method" value="cash_on_delivery" required>
        </div>
                            <div class="form-group cash">
                    <label>Paypal</label>
                <input type="radio" class="form-control" name="pay_method" value="paypal" required>
                </div>
                <button type="submit" class="btn btn-theme btn-md btn-wide">Pay Now</button>   
            </form>    
        </div>
      </div>
    </div>


 
  </div>


                            </div>
                    </div>
                </div>
            </div>
            <!-- Cart End  -->


 
<script>
 
$().ready(function() {
	var valid = $("#checkout-form").validate({
		rules: {
			name: "required",
			email: {
				required: true,
				email: true
			},
			phone: {
				required: true,
				
			},
			state: {
				required: true
			},
			address: "required",
			city: {
				required: true
			},
			state: "required", 
			zip: {
				required: true,
				number: true
			}
		},
		messages: {
			name: "Please enter your name",
			email: "Please enter a valid email address",
			phone: "Please enter valid phone number",
			city: "Please enter your city",
			state: "Please enter state",
			zip: "Please enter zipcode" 
		}
	});
        

   jQuery("#saveaddress").click(function(event) {
       
       if(valid.form()){
          jQuery.ajax({
                    url: '<?php echo $this->request->webroot ;?>restaurants/checkout',  
                    data: jQuery('#checkout-form').serialize(),
                    type: 'POST',
                    dataType: "json",
                    success: function (msg) {  
                        if (msg.status === true) 
                        {
                           jQuery(".mymessage").html('<div class="alert alert-success">'+msg.msg+'</div>'); 
                           setTimeout(function(){  window.location.reload(); }, 1000);   
                        }
                        else
                        { 
                            event.preventDefault();
                            jQuery(".mymessage").html('<div class="alert alert-success">'+msg.msg+'</div>');
                        } 
                    }
                });
        }else{
          event.preventDefault();    
        }         
  event.preventDefault();    
});

        
});
</script>
 <script> 
	$(document).ready(function() {
            


  $(".toggle-accordion").on("click", function() {
    var accordionId = $(this).attr("accordion-id"),
      numPanelOpen = $(accordionId + ' .collapse.in').length;
    
    $(this).toggleClass("active");

    if (numPanelOpen == 0) {
      openAllPanels(accordionId);
    } else {
      closeAllPanels(accordionId);
    }
  })

  openAllPanels = function(aId) {
    console.log("setAllPanelOpen");
    $(aId + ' .panel-collapse:not(".in")').collapse('show');
  }
  closeAllPanels = function(aId) {
    console.log("setAllPanelclose");
    $(aId + ' .panel-collapse.in').collapse('hide');
  }
     
});
	</script>