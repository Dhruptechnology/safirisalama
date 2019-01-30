<?php
 global $session;
session_start();
get_header();
/**
 * Template Name: pricing
 **/

?>

<section class="Plans_head">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Plans and Features</h1>
            </div>
        </div>
    </div>
</section>
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>
<?php
if(($_SESSION['id']!=''))
{
   $id = $_SESSION['id'];                         
?>
<section class="price_main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="price_box blue">
                            <h2><?php echo get_field('basic_plan'); ?></h2>
                            <div class="inner_price">
                                <h3><?php echo get_field('basic_price'); ?>.<span>00</span></h3>
                                <ul class="list-unstyled">
                                    <?php echo get_field('basic_plan_list'); ?>
                                </ul>
                            </div>
                            <div class="bottom_price">
                                <h4><?php echo get_field('basic_annual_maintenance_fee_amount'); ?></h4>
                                <p><?php echo get_field('annual_maintenance_fee_text'); ?></p>
                               <!-- <a class="purchase" data-toggle="modal" data-target="#myModal">Purchase</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="price_box green">
                            <h2><?php echo get_field('premium_plan'); ?></h2>
                            <div class="inner_price">
                                <h3><?php echo get_field('premium_price'); ?>.<span>00</span></h3>
                                <ul class="list-unstyled">
                                   <?php echo get_field('premium_plan_list'); ?>
                                </ul>
                            </div>
                            <div class="bottom_price">
                                <h4><?php echo get_field('premium_annual_maintenance_fee_amount'); ?></h4>
                                <p><?php echo get_field('annual_maintenance_fee_text'); ?></p>
                                <a href="" class="purchase" data-toggle="modal" data-target="#myModal2">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal purchase_modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4>Payment Confirmation</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>You have selcted:</p>
        <h5>premium package</h5>
        <h3><?php echo get_field('premium_price'); ?>.<span>00</span></h3>
        <a href="" class="cancel">cancel</a>
        <form action="<?php echo get_site_url(); ?>/payment/?plan=3" method="post" style="display: inline;">
            <input type="hidden" name="memid" value="<?php echo $id ?>">
            <input type="hidden" name="planname" value="premium">
            <input type="submit" name="upgrade" class="proceed" value="proceed">
       <!-- <a href="<?php echo get_site_url(); ?>/payment/?plan=3" class="proceed">proceed</a>-->
        </form>
      </div>

      <!-- Modal footer -->

    </div>
  </div>
</div>
<style>
input.proceed {
    border: none;
}
    .purchase_modal .modal-body .proceed {
    background: #38aa00;
}
.purchase_modal .modal-body .proceed {
    max-width: 180px;
    display: inline-block;
    font-family: 'SF-Pro-Display-Semibold';
    padding: 6px;
    text-align: center;
    color: #fff;
    width: 100%;
    text-transform: uppercase;
    border-radius: 5px;
}
</style>
<?php
}
else
{
?>
<section class="price_main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="price_box blue">
                            <h2><?php echo get_field('basic_plan'); ?></h2>
                            <div class="inner_price">
                                <h3><?php echo get_field('basic_price'); ?>.<span>00</span></h3>
                                <ul class="list-unstyled">
                                    <?php echo get_field('basic_plan_list'); ?>
                                </ul>
                            </div>
                            <div class="bottom_price">
                                <h4><?php echo get_field('basic_annual_maintenance_fee_amount'); ?></h4>
                                <p><?php echo get_field('annual_maintenance_fee_text'); ?></p>
                                <a href="" class="purchase" data-toggle="modal" data-target="#myModal">Purchase</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="price_box green">
                            <h2><?php echo get_field('premium_plan'); ?></h2>
                            <div class="inner_price">
                                <h3><?php echo get_field('premium_price'); ?>.<span>00</span></h3>
                                <ul class="list-unstyled">
                                   <?php echo get_field('premium_plan_list'); ?>
                                </ul>
                            </div>
                            <div class="bottom_price">
                                <h4><?php echo get_field('premium_annual_maintenance_fee_amount'); ?></h4>
                                <p><?php echo get_field('annual_maintenance_fee_text'); ?></p>
                                <a href="" class="purchase" data-toggle="modal" data-target="#myModal1">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
?>
<div class="modal purchase_modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Payment Confirmation</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>You have selcted:</p>
        <h4>premium package</h4>
        <h3><?php echo get_field('basic_price'); ?>.00</h3>
        <a href="" class="cancel">cancel</a>
        <a href="<?php echo get_site_url(); ?>/create-memory/?plan=2" class="proceed blue_bg">proceed</a>
      </div>

      <!-- Modal footer -->
    </div>
  </div>
</div>
<div class="modal purchase_modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4>Payment Confirmation</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>You have selcted:</p>
        <h5>premium package</h5>
        <h3><?php echo get_field('premium_price'); ?>.<span>00</span></h3>
        <a href="" class="cancel">cancel</a>
        <a href="<?php echo get_site_url(); ?>/create-memory/?plan=3" class="proceed">proceed</a>
      </div>

      <!-- Modal footer -->

    </div>
  </div>
</div>

<?php
endwhile;
endif;
get_footer();
?>