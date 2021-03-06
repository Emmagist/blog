
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
            <h3 class="dashboard-h3">Investment</h3><span><a href="logout.php" class="btn btn-danger logout">Logout</a></span><div class="dashboard-span"></div>
            <div class="main-container">
                <div class="main-bar">
                    <h3>Invest your money while sleeping</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus, labore non, omnis ipsa totam amet impedit sequi quidem perspiciatis expedita, neque ab autem. Aspernatur, possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem animi ullam asperiores quisquam nam? Amet eaque dolorum quos porro, itaque corrupti rem delectus sit, ratione magni id odit maxime natus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus,</p>
                    <h4>How much can I invest</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus, labore non, omnis ipsa totam amet impedit sequi quidem perspiciatis expedita, neque ab autem. Aspernatur, possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem animi ullam asperiores quisquam nam? Amet eaque dolorum quos porro, itaque corrupti rem delectus sit, ratione magni id odit maxime natus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatib,</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus, labore non, omnis ipsa totam amet impedit sequi quidem perspiciatis expedita, neque ab autem. Aspernatur, possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem animi ullam asperiores quisquam nam? Amet eaque dolorum quos porro, itaque corrupti rem delectus sit, ratione magni id odit maxime natus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatib,</p>
                    <h4>How to invest</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus, labore non, omnis ipsa totam amet impedit sequi quidem perspiciatis expedita, neque ab autem. Aspernatur, possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem animi ullam asperiores quisquam nam? Amet eaque dolorum quos porro, itaque corrupti rem delectus sit, ratione magni id odit maxime natus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam incidunt architecto provident. Laudantium mollitia voluptas doloremque reiciendis aperiam ipsa, a illum autem ex distinctio maiores suscipit itaque assumenda fuga quo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo error ducimus cumque voluptatibus,</p>
                    <button type="button" class="btn btn-primary mb-3 mt-3" data-toggle="modal" data-target="#exampleModal">Invest Now</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Invest and Earn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="paymentForm">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input class="form-control" type="email" id="email-address" required />
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input class="form-control" type="tel" id="amount" required />
                    </div>
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input class="form-control" type="text" id="first-name" />
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input class="form-control" type="text" id="last-name" />
                    </div>
                    <div class="form-submit">
                        <button class="btn btn-success btn-lg" type="submit" onclick="payWithPaystack()" style="background:green"> Pay </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php require "inc/footer.php"; ?>
<script src="https://js.paystack.co/v1/inline.js"></script>

<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e) {
        e.preventDefault();
        let handler = PaystackPop.setup({
            key: 'pk_test_bd98b5fff1cad78fba8e39c66927f978c0219717', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: document.getElementById("amount").value * 100,
            ref: 'Inv'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function(){
                alert('Transaction cancelled.');
            },
            callback: function(response){
                let message = 'Payment complete! Reference: ' + response.reference ;
                // alert(message);
                location.href = "verify.php?verify="+response.reference
            }
        });
        handler.openIframe();
    }
</script>