<?php
require_once('../php/connect.php');
$sql999 = "SELECT * FROM tbservice WHERE serstatus != 'Fully Complete'";
$res999 = mysqli_query($conn,$sql999);

$sql998 = "SELECT * FROM tbservice WHERE serstatus != 'Fully Complete'";
$res998 = mysqli_query($conn,$sql998);
$row998 = mysqli_num_rows($res998);
?>
<div class="header-area">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                        <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                        <span><?php echo $row998 ?></span>                                  
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have <?php echo $row998 ?> new notifications <a href="./service.php">view all</a></span>
                                    <div class="nofity-list">
                                        <?php while($row999 = mysqli_fetch_assoc($res999)) : ?>
                                        <a href="./service.php" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-settings btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p><?php echo $row999['remark'] ?></p>
                                                <span><?php echo $row999['dename'] ?> - <?php echo $row999['office'] ?></span>
                                            </div>
                                        </a>
                                        <?php endwhile ?>
                                    </div>
                                </div>
                        </li>
              
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            