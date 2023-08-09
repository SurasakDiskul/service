<?php session_start();
require_once('../php/connect.php');
 ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Review & Rating System in PHP & Mysql using Ajax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- css -->
<style type="text/css">
/*modal css*/


/* fade ออกมาตรงกลางหน้าจอ
.fade {
    opacity: 0;
    -webkit-transition: opacity 1s linear;
    transition: opacity 1s linear;
}
*/

/* fade left ออกมาจากทางซ้ายของหน้าจอ */
.modal.fade:not(.in) .modal-dialog {
	-webkit-transform: translate3d(-100%, 0, 0);
	transform: translate3d(-100%, 0, 0);
}
*{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
</style>
</head>
<body>
    <div class="container">
    	<h1 class="mt-5 mb-5"></h1>
    	<div class="card">
    		<div class="card-header">IT SERVICE SYSTEM</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
                            <?php 
                            $sql0 = "SELECT ROUND(AVG(starrating),1) FROM tbreview ";
                            $result0 = mysqli_query($conn,$sql0);
                            $row0 = mysqli_fetch_array($result0);
                            $sum0 = $row0[0];
                            ?>
    						<b><span id="average_rating"><?php echo $sum0 ?></span> / 5</b>
    					</h1>
    					<div class="mb-3">
                        <?php
            if ($sum0 >= '1' && $sum0 < '2') {?>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
            <?php }elseif ($sum0 >= '2' && $sum0 < '3') {?>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
            <?php }elseif ($sum0 >= '3' && $sum0 < '4') {?>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
            <?php }elseif ($sum0 >= '4' && $sum0 < '5') {?>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
            <?php }elseif ($sum0 == '5') {?>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
            <?php }elseif ($sum0 == '0') {?>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
            <?php } ?>
	    				</div>
                        <?php
                        $sql1 = "SELECT * FROM tbreview";
                        $result1 = mysqli_query($conn,$sql1);
                        $row1 = mysqli_num_rows($result1);
                        ?>
    					<h3><span id="total_review"><?php echo $row1 ?></span> Review</h3>
    				</div>
                    <?php
                        $sql2 = "SELECT * FROM tbreview WHERE starrating = '5'";
                        $result2 = mysqli_query($conn,$sql2);
                        $row2 = mysqli_num_rows($result2);
                        $sql3 = "SELECT * FROM tbreview WHERE starrating = '4'";
                        $result3 = mysqli_query($conn,$sql3);
                        $row3 = mysqli_num_rows($result3);
                        $sql4 = "SELECT * FROM tbreview WHERE starrating = '3'";
                        $result4 = mysqli_query($conn,$sql4);
                        $row4 = mysqli_num_rows($result4);
                        $sql5 = "SELECT * FROM tbreview WHERE starrating = '2'";
                        $result5 = mysqli_query($conn,$sql5);
                        $row5 = mysqli_num_rows($result5);
                        $sql6 = "SELECT * FROM tbreview WHERE starrating = '1'";
                        $result6 = mysqli_query($conn,$sql6);
                        $row6 = mysqli_num_rows($result6);

                        //ร้อยละ
                        //5ดาว
                        $star5 = ($row2/$row1)*100;
                        $star5 = number_format( $star5, 2 );
                        //4ดาว
                        $star4 = ($row3/$row1)*100;
                        $star4 = number_format( $star4, 2 );
                        //3ดาว
                        $star3 = ($row4/$row1)*100;
                        $star3 = number_format( $star3, 2 );
                        //2ดาว
                        $star2 = ($row5/$row1)*100;
                        $star2 = number_format( $star2, 2 );
                        //1ดาว
                        $star1 = ($row6/$row1)*100;
                        $star1 = number_format( $star1, 2 );
                    ?>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review"><?php echo $row2 ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress" style="width: <?php echo $star5 ?>%"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review"><?php echo $row3 ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress" style="width: <?php echo $star4 ?>%"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review"><?php echo $row4 ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress" style="width: <?php echo $star3 ?>%"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review"><?php echo $row5 ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress" style="width: <?php echo $star2 ?>%"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review"><?php echo $row6 ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress" style="width: <?php echo $star1 ?>%"></div>
                            </div>               
                        </p>
    				</div>
                    <?php if ($_SESSION['status'] == 'user') {?>
                        <div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>

                    <?php }else{

                    } ?>
    				
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content">
            <h3>รีวิวล่าสุด</h3>
            <br>
        <?php 
        $sql = "SELECT * FROM tbreview order by reviewid DESC limit 3";
        $result = mysqli_query($conn,$sql);
        ?>
         <?php while ($row = mysqli_fetch_assoc($result)) : ?>
<div class="row mb-3">
<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center"><?php echo $row['office'] ?></h3></div></div>
<div class="col-sm-11">
<div class="card">
<div class="card-header"><b><?php echo $row['membername'] ?></b></div>
<div class="card-body">
            <?php
            if ($row['starrating'] == '1') {?>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
            <?php }elseif ($row['starrating'] == '2') {?>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
            <?php }elseif ($row['starrating'] == '3') {?>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
            <?php }elseif ($row['starrating'] == '4') {?>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
            <?php }elseif ($row['starrating'] == '5') {?>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
            <?php } ?>
    <br>
    <a><?php echo $row['remark'] ?></a>

</div>

<div class="card-footer text-right">On <?php echo $row['datereview'] ?></div>
</div>
</div>
</div>
<?php endwhile; ?>

        </div>
    </div>
</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
              <form action="./submit_rating.php" method="POST" enctype="multipart/form-data">   <!--ประกาศให้ Form นี้ทำงานจาก create.php-->
	      	<div class="modal-body">
	      		<h1 class="text-center mt-2 mb-4">
                  <div class="rate">
                    <input type="radio" id="star5" name="star5" value="5" class="form-control ">
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="star4" value="4" class="form-control ">
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="star3" value="3" class="form-control ">
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="star2" value="2" class="form-control ">
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="star1" value="1" class="form-control ">
                    <label for="star1" title="text">1 star</label>
                    </div>
	        	</h1>
	        	<div class="form-group">
	        		<input type="text" name="membername" id="membername" class="form-control" value="<?php echo $_SESSION['membername'] ?>" readonly>
	        	</div>
	        	<div class="form-group">
	        		<textarea name="remark" id="remark" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
	        	</div>
              </form>
	      	</div>
    	</div>
  	</div>
</div>

<style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>

<script>

$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });    
                }
        )
;

</script>