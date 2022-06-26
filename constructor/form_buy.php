<?php 
    require "connect.php";
    $name = $_POST['name'];
	$count = $_POST['count'];
    $elem = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `items` WHERE `id`=$name"));


	$email = "onetaphack@gmail.com";

     $tema_email = "Заказать обратный звонок"; // tema 
     $text = $_POST['text_polz']; // text polz
     $num_email = $_POST['phone_polz']; // nomer telephone
     $user_email = $_POST['email_buyer']; // pochta usera
     $description_email = $_POST['comment_buyer']; // opisaniye
     $when_call_email = $_POST['time_callback_on']; // kogda zvonit

     if(mail($email, $tema_email, "Текст: ".$text."Номер телефона: ".$num_email."\n\r".
     "Почта покупателя: ".$user_email."\n\r"."Комментарий к форме: ".".
     $description_email.\n\r"."Когда перезвонить: ".$when_call_email)){
        echo "<script>";
        echo "alert('Звонок запрошен. С вами свяжутся в ближайшее время!');";
        echo "window.location.href = '../index.php'";
        echo "</script>";
     }
     else{
        echo "<script>";
        echo "alert('Упс! Что-то пошло не так :/ ');";
        echo "window.location.href = '404.php'";
        echo "</script>";
     }
?>

<div class="mfp-bg mfp-ready"></div>
<div class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-ready" tabindex="-1" style="overflow: hidden auto;"><div class="mfp-container mfp-ajax-holder mfp-s-ready"><div class="mfp-content"><div id="popup-quickorder">
	<div class="popup-heading">Купить в 1 клик</div>
	<div class="popup-center">
	<form id="fastorder_data" enctype="multipart/form-data" method="post">
	<div class="panel-body">
					<div class="col-sm-12">	
			<div class="well well-sm products" style="margin-top:10px;">
				<div class="product">
					<div class="row">
						<div class="col-xs-12 col-sm-5">
							<div class="image">
								<img src="img/tovaru/<?=$elem['img']?>" alt='<?=$elem['name']?>' height="60px" width="60px">							
                            </div>
							<div class="pr-name quick-cell">
								<div class="quick-cell-content"><?=$elem['name']?></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-7">
							<div class="col-xs-6 quantity_quickorder quick-cell">
							<div class="quick-cell-content pquantity">
								<div class="input-group popup-quantity">
									<span class="input-group-btn">
										<input class="btn btn-update-popup" type="button" id="decrease_quickorder" value="-" onclick="btnminus_quickorder()">									
									</span>
									<input type="text" class="form-control input-sm qty_quickorder" oninput="input_quickorder()" maxlength="6" name="quantity" id="htop_quickorder" size="2" value="<?=$count?>">
									<span class="input-group-btn">
										<input class="btn btn-update-popup" type="button" id="increase_quickorder" value="+" onclick="btnplus_quickorder()">
									</span>
								</div>
							</div>
						</div>
							<div class="col-xs-6 text-center quick-cell">
								<div class="quick-cell-content">
										<div class="price_fast"><span id="formated_price_quickorder"><?=$elem['price']?> руб.</span></div>
										<input type="hidden" id="price_tax_plus_options" name="price_tax" value="24.96">
										<input type="hidden" id="price_no_tax_plus_options" name="price_no_tax" value="24.96">	
										<input id="total_form" type="hidden" value="24.96" name="total_fast">											
																	
								</div>
							</div>
                            <script>   

                            var input = $('#htop_quickorder');
                            var price = $('#formated_price_quickorder');
							$(price).html(<?=$elem['price']?>*count + ' руб.');

                            function btnminus_quickorder(){
                                if ($(input).val() > 1) {
                                    $(input).val(parseInt($(input).val()-1));
                                    $(price).html(<?=$elem['price']?>*$(input).val() + ' руб.');
                                }
                            }
                            function btnplus_quickorder(){
                                if ($(input).val() < 999999) {
                                    $(input).val(parseInt(parseInt($(input).val())+1));
                                    $(price).html(<?=$elem['price']?>*$(input).val() + ' руб.');
                                }
                            }
							function input_quickorder(){
								if ($(input).val() <= 999999 && $(input).val() > 0) {
                                    $(input).val(parseInt($(input).val()));
                                    $(price).html(<?=$elem['price']?>*$(input).val() + ' руб.');
                                } else
								{
									$(input).val(1);
                                    $(price).html(<?=$elem['price']?>*$(input).val() + ' руб.');
								}
							}
                        </script>
						</div>						
					</div>
				</div>	
			</div>
		</div>
						<div class="col-sm-6 col-sm-12 form-group sections_block_rquaired">
			<div class="input-group margin-bottom-sm">			
				 <input id="contact-name" class="form-control contact-name" type="text" placeholder="Ваше Имя" value="" name="text_polz">		
				<span class="input-group-addon"><i class="icon-append-1 fa fa-user fa-fw"></i></span>
			</div>
			
		</div>
		 		 
		  		<div class="col-sm-6 col-sm-12 form-group sections_block_rquaired">
			<div class="input-group margin-bottom-sm">			
				 <input id="contact-phone" class="form-control contact-phone" type="text" placeholder="Ваш телефон" value="" name="phone_polz">		
				<span class="input-group-addon"><i class="icon-append-1 fa fa-phone-square fa-fw"></i></span>
			</div>
		</div>
		 		 
		 		<div class="col-sm-6 col-sm-12 form-group sections_block">
		<div class="input-group margin-bottom-sm">                         
            <input id="contact-email" class="form-control contact-email" type="text" placeholder="Ваш Email" value="" name="email_buyer">
			<span class="input-group-addon"><i class="icon-append-1 fa fa-envelope fa-fw"></i></span>
		</div>
      </div>
	  	  
	  		<div class="col-sm-6 col-om-12 form-group sections_block">
		<div class="input-group margin-bottom-sm">                          
            <input id="contact-comment" class="form-control contact-comment-buyer" name="comment_buyer" placeholder="Комментарий">
			<span class="input-group-addon"><i class="icon-append-1 fa fa-comment fa-fw"></i></span>	
		</div>
		</div>
				<input type="hidden" id="callback_url" value="" name="url_site">
		<input type="hidden" id="this_prod_id" value="6366" name="this_prod_id">					
				
					<div class="col-sm-12 form-group text-center"></div>
		</div>
	</form>
	</div>	
	<div class="popup-footer">		
        <div id="quickorder_btn">
        <form action="constructor/form.php" method="post">
            <input type="submit" id="feedback" onclick="quickorder_confirm();" class="btn btn-quickorder-one" value="Оформить Заказ" style="display: block;"><i class=" fa-fw"></i></input>
        </form>
		</div>
			</div>
<button title="Close (Esc)" type="button" onclick="close_modal()" class="mfp-close">×</button>
</div>
</div><div class="mfp-preloader"><span><i style="font-size:50px;" class="fa fa-spinner fa-pulse"></i></span></div></div></div>