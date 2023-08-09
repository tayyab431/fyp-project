<?php include('includes/header.php');
$uid=$_SESSION['login_user_id'];
?>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com/dist/email.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
        (function(){
            emailjs.init("19-Vw5AYx_g1Qo_HN");
        })();
    </script>

<script>

function checkfunction(){

    // Get user inputs
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var amount = document.getElementById('wallet_amount').value;
    var message = '';

    // Modify the message to include form data in a table
    message += '<br><br><h2>Form Data:</h2>';
    message += '<table>';
    message += '<tr><td>Name:</td><td>' + name + '</td></tr>';
    message += '<tr><td>Email:</td><td>' + email + '</td></tr>';
    message += '<tr><td>Amount:</td><td>' + subject + '</td></tr>';
    // Add more rows for other form fields if needed
    message += '</table>';

    // Prepare email template parameters
    var templateParams = {
      name: name,
      email: email,
      amount: amount:
      message: message
    };

    // Send email using EmailJS
    emailjs.send('service_8h9otrp', 'template_xd6xrhp', templateParams)
      .then(function(response) {
        alert('Email sent successfully! Our support team will contact you soon.');
        console.log('Email sent successfully!', response.status, response.text);

      }, function(error) {
        console.error('Error sending email:', error);
      });

}
</script>

        <div class="col-12">
            <div class="form" style="">
            <h2>Withdraw Wallet</h2>

            <?php $wallet_balance = getWalletBalance(); ?>

            <?php if(isset($_GET['msg'])){ ?>
                <div class="alert alert-success" role="alert">
                Your withdraw request has been sent. You will recieve your balance in your account soon.
                </div>
           <?php } ?>

            <h5 class="mt-4">Your current wallet balance: <?=$wallet_balance?></h5>

               
            </div>
        </div>

   



<form id="contactForm">
                        <div class="form-wrapper">
                            
                            <input class="input input-element" id="email" type="hidden" value="<?php echo getUserEmail($uid) ?>">
                            <br>
                            <input class="input input-element" id="name" type="hidden" value="<?php echo getUserName($uid) ?>"> 
                            <br>        
                            <input placeholder="Enter amount" type="number" max="<?=$wallet_balance?>" class="form-control input input-element" id="wallet_amount">
                            <br>
                            <input placeholder="Enter account number" type="text" class="form-control input input-element" id="account_num">
                            <br>
                            <input placeholder="Enter account holder name" type="text" class="form-control input input-element" id="holder_name">
                            <br>
                            <input placeholder="Enter bank name" type="text" class="form-control input input-element" id="bank_name">
                            <br>
                            <button type="submit" class="button btn btn-primary">Send</button>
                        </div>
                        <div class="social-media-icon-container">
                            <!-- Social media icons here -->
                        </div>
                    </form>


                    <script type="text/javascript">
    (function() {
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Get user inputs
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var amount = document.getElementById('wallet_amount').value;
            var account_num = document.getElementById('account_num').value;
            var holder_name = document.getElementById('holder_name').value;
            var bank_name = document.getElementById('bank_name').value;

            // Prepare email template parameters
            var templateParams = {
                name: name,
                email: email,
                amount: amount,
                account_num: account_num,
                holder_name: holder_name,
                bank_name: bank_name
            };

            // Send email using EmailJS
            emailjs.send('service_8h9otrp', 'template_xd6xrhp', templateParams)
                .then(function(response) {
                    alert('Email sent successfully! Our support team will contact you soon.');
                    console.log('Email sent successfully!', response.status, response.text);

                    // Ajax call to update wallet
                    $.ajax({
                        type: 'POST',
                        url: 'includes/functions.php', // Replace with the path to your PHP script that handles wallet update
                        data: { wallet_amount: amount, withdraw_wallet: 1 },
                        success: function(data) {
                            console.log('Wallet updated successfully!', data);
                        },
                        error: function(error) {
                            console.error('Error updating wallet:', error);
                        }
                    });

                    document.getElementById('contactForm').reset();
                }, function(error) {
                    console.error('Error sending email:', error);
                });
        });
    })();
</script>



<?php include ('includes/footer.php');?>
