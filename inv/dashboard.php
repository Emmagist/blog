
<?php

    require_once "lib/investor.php";
    $db->getLogin('login');
    if (isset($_SESSION['token'])) {
        $token = $_SESSION['token'];
    }else {
       header('Location: login.php');
    }
    require "inc/head.php";
    require "inc/nav.php";

    // var_dump($db->referralCode());exit;
    
?>

<style>
    /* Investor Dashboard */
    .container-divider{
        border: 2px solid #111111;
        height: 100vh;
        padding: 20px;
    }

    .dashboard-h3{
        color: #FF6F61;
        /* padding-bottom: 2px; */
        font-size: 30px;
        font-weight: bold;
        margin-left: 40px;
    }

    .dashboard-span{
        border-bottom: 2px solid #FF6F61;
        margin-bottom: 15px;
    }

    .main-container{
        display: grid;
        grid-template-columns: 28% 2.5% 50% 2.5% 17%;
    }

    .side-bar{
        border-right: 2px solid gray; 
        padding-right:0px; 
        box-shadow:2px 2px 5px gray; 
        position: relative; 
        height:80vh;
        z-index:1; 
        border-radius:7px;
        /* position: fixed; */
    }

    .side-bar > .side-bar-img{
        width: 30%;
        height: 20%;
        margin: 10px 0px 10px 80px;
        border-radius: 50%;
    }

    .sidebar-nav > ul > li{
        list-style: none;
    }

    .sidebar-li{
        font-size: 18px;
    }

    .recent-post-supply{
        background: gray;
        border-radius: 3px;
    }

    .news-image-post{
        border-radius: 4px;
        width: 40%;
        height: 80%;
        background: #fff;
        /* padding: 10px; */
    }

    .h5-recent-post-supply{
        background: #fff;
        padding: 20px;
        /* border-radius: 4px; */
    }

    #copy-button:hover{
        cursor: pointer;
        color: #FF6F61;
    }

    .logout{
        float: right;
        margin-top: -55px;
    }
</style>
    
    <!-- Single News Start-->
    <div class="single-news">
        <div class="container-fluid">
            <div class="container-divider">
                <h3 class="dashboard-h3">Dashboard</h3><span><a href="logout.php" class="btn btn-danger logout">Logout</a></span><div class="dashboard-span"></div>
                <div class="main-container">
                    <div class="side-bar bg-white fixed-left">
                        <img src="img/avatar.png" alt="" class="side-bar-img ">
                        <nav class="sidebar-nav ">
                            
                            <ul>
                                <?php foreach(Investor::getInvestorToken($token) as $userInfo) : ?>
                                    <li class="sidebar-li mb-3"><strong><?=$userInfo['full_name']?></strong></li>
                                    <li class="sidebar-li mb-3">Email: <strong><?=$userInfo['email']?></strong></li>
                                    <li  class="mb-3">Referral Code: <span class="text-primary"><a href="http://localhost/blog/inv/signup.php?<?=$userInfo['ref_code']?>" title="Click to copy"><?=$userInfo['ref_code']?></a> <a class="btn btn-transparent" id="copy-button">Copy</a></span></li>
                                    <li  class="btn btn-success mb-3" id="investButton">Invest</li>
                                    <li  class="btn btn-success mb-3" id="withDrawButton">Withdraw</li><br>
                                    <li  class="btn btn-warning mb-3">History</li>
                                    <li  class="mb-3">News Earned: <span><strong>&#8358;100000</strong></span></li>
                                    <?php foreach(Investor::getReferralUserToken($token) as $bonus) : ?>
                                    <li  class="mb-3">Referral Bonus: <span><strong>&#8358;<?=$bonus['total_amount'] > 0 ? $bonus['total_amount'] : 0; ?></strong></span></li>
                                    <li  class="mb-3">Invested: <span><strong>&#8358;200,000</strong></span></li>
                                    <li  class="mb-3">Investment: <span><strong>&#8358;200,000</strong></span></li>
                                <?php endforeach;endforeach ?>
                            </ul>
                        </nav>
                    </div>
                    <div class=""></div>
                    <div class="main-bar">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus, labore non, omnis ipsa totam amet impedit sequi quidem perspiciatis expedita, neque ab autem. Aspernatur, possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem animi ullam asperiores quisquam nam? Amet eaque dolorum quos porro, itaque corrupti rem delectus sit, ratione magni id odit maxime natus!</p>
                    </div>
                    <div class=""></div>
                    <div class="right-sidebar">
                        <div class="tn-news d-flex" style="background: gray;">
                            <div class="tn-img" style="width: 30%; background: #fff;">
                                <img src="img/news-350x223-4.jpg" / style="width: 80%;">
                            </div>
                            <div class="tn-title bg-white">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <!-- <div class="d-flex recent-post-supply">
                            <img src="img/news-350x223-1.jpg" alt="" class="news-image-post mr-4">
                            <h5 class="h5-recent-post-supply">Title Content</h5>
                        </div> -->
                    </div>
                </div>
                
            </div>
           
        </div>
    </div>
    <!-- Single News End-->  
    
    <!-- Modal -->
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Withdrawal Slip</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <div><input type="text" placeholder="" /></div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
    <?php require "inc/footer.php"; ?>

    <script>
        $('#investButton').click( function () {
            location.href = "invest.php";
        })
    </script>
    <script>
        $('#withDrawButton').click( function () {
            location.href = "withdraw.php";
        })
    </script>