
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
    height: auto;;
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
    grid-template-columns: 73% 3% 23.9%;
    
    /* justify-content: space-between; */
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
            <h3 class="dashboard-h3">Withdrawer Page</h3><span><a href="#" class="logout border-rounded"  data-toggle="drop-down" data-target="#drop-down"><i class="fa fa-user"></i></a></span><div class="dashboard-span"></div>
            <div class="main-container">
                <div class="main-bar">
                    <h3>Invest your money while sleeping</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus, labore non, omnis ipsa totam amet impedit sequi quidem perspiciatis expedita, neque ab autem. Aspernatur, possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem animi ullam asperiores quisquam nam? Amet eaque dolorum quos porro, itaque corrupti rem delectus sit, ratione magni id odit maxime natus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus,</p>
                    <h4>How much can I invest</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus, labore non, omnis ipsa totam amet impedit sequi quidem perspiciatis expedita, neque ab autem. Aspernatur, possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem animi ullam asperiores quisquam nam? Amet eaque dolorum quos porro, itaque corrupti rem delectus sit, ratione magni id odit maxime natus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatib,</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus, labore non, omnis ipsa totam amet impedit sequi quidem perspiciatis expedita, neque ab autem. Aspernatur, possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem animi ullam asperiores quisquam nam? Amet eaque dolorum quos porro, itaque corrupti rem delectus sit, ratione magni id odit maxime natus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatib,</p>
                    <h4>How to invest</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus, labore non, omnis ipsa totam amet impedit sequi quidem perspiciatis expedita, neque ab autem. Aspernatur, possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem animi ullam asperiores quisquam nam? Amet eaque dolorum quos porro, itaque corrupti rem delectus sit, ratione magni id odit maxime natus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus,</p>
                    <button type="button" class="btn btn-primary mb-3 mt-3" data-toggle="modal" data-target="#exampleModal">Withdraw</button>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus, labore non, omnis ipsa totam amet impedit sequi quidem perspiciatis expedita, neque ab autem. Aspernatur, possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem animi ullam asperiores quisquam nam? Amet eaque dolorum quos porro, itaque corrupti rem delectus sit, ratione magni id odit maxime natus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatib.</p>
                </div>
                <div></div>
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
                    <div><input type="text" placeholder="Account Number" name="account_number" class="form-control" /></div>
                    <div><input type="text" placeholder="Account Name" name="account_name" class="form-control" /></div>
                    <div><input type="hidden" placeholder="Card Name" name="token" value="<?=$token?>" class="form-control" /></div>
                    <div class="d-flex">
                        <select name="bank" id="" class="form-control">
                            <option value="">Select Bank</option>
                            <option value="gtb">GTB</option>
                            <option value="zenith">Zenith Bank</option>
                            <option value="wema">Wema Bank</option>
                            <option value="uba">United Bank of Africa</option>
                            <option value="polaris">Polaris Bank</option>
                            <option value="access">Access Bank</option>
                            <option value="access">Access Diamond Bank</option>
                            <option value="fcmb">First City Monument Bank</option>
                            <option value="heritage">Heritage Bank</option>
                            <option value="union">Union Bank</option>
                            <option value="first_bank">First Bank</option>
                            <option value="stambic">Stambic Bank</option>
                            <option value="stanling">Stanlin Bank</option>
                            <option value="optus_bank">Optus Bank</option>
                            <option value="opay">Opay  Micro-finance Bank</option>
                            <option value="kuda">Kuda Micro-finance Bank</option>
                            <option value="piggyvest">Piggyvest Micro-finance Bank</option>
                        </select>
                        <input type="text" placeholder="Amount" name="amount" class="form-control ml-3" />
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="invest">Invest</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require "inc/footer.php"; ?>