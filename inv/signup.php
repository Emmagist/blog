<?php
    require "inc/head.php";
    require "libs/users.php";
    var_dump($db->referralCode());exit;
    
?>

    <div class="col-md-4 offset-md-4 mt-5 border p-5 mb-5">
        <h4 style="color: #FF6F61;">Signup and Earn 20% of Your Investment</h4>
        <form method="post" action="" id="regForm" enctype="multipart/form-data">
            <!-- <div class="form-group"><input type="text" class="form-control" placeholder="Full Name" name="full_name"></div> -->
            <!-- <input type="text" name="name"> -->
            <div class="form-group"><input type="text" class="form-control" placeholder="Username" name="user_name"></div>
            <?php if(isset($_GET['ref'])) : ?>
                <div class="form-group"><input type="hidden" class="form-control" value="<?=$_GET['ref']?>" name="ref"></div>
            <?php endif ?>
            <div class="form-group"><input type="email" class="form-control" placeholder="Email" name="email"></div>
            <div class="form-group"><input type="tel" class="form-control" placeholder="Phone Number" name="tel"></div>
            <div class="form-group"><input type="password" class="form-control" placeholder="Password" name="password"></div>
            <div class="form-group">
                <input type="file" class="" placeholder="Email" name="file_upload">
                <small class="text-danger">jpg,png&jpeg</small>
            </div>
            <div class="form-group"><button type="submit" class="btn">Register</button></div>
        </form>
    </div>

    <!-- Payment Modal -->
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="paymentButton" style="display: none;">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  id="paymentForm">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email-address" required class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="tel" id="amount" required class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" class="form-control"/>
                    </div>
                    <div class="form-submit form-group">
                        <input type="submit" onclick="payWithPaystack()" class="btn btn-success form-control text-white pb-3 pt-1" value="Pay">  
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
  </div>
</div>

<?php require "inc/footer.php"; ?>
<!-- <script src="https://js.paystack.co/v1/inline.js"></script>  -->

<script>
    $('#regForm').submit(function (e) {
        // alert('Yesr/r')
        e.preventDefault();
        var formData = new FormData(); alert(formData)
        $.ajax({
                url: 'libs/userData.php?reg=404',
                type: 'Post',
                data: formData,
                contentType: false,
                processData: false,
                cache: false,
                dataType: "json",
                success: function (params) {
                    // if (params) {
                    //    $('#paymentButton').click();
                    // }
                }
            });
            return false;
    });

    //
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e) {
        e.preventDefault();
        let handler = PaystackPop.setup({
            key: 'pk_test_xxxxxxxxxx', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: document.getElementById("amount").value * 100,
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function(){
                alert('Window closed.');
            },
            callback: function(response){
            let message = 'Payment complete! Reference: ' + response.reference;
            alert(message);
            }
        });
        handler.openIframe();
    }
</script>