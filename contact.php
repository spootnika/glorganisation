<?php
    require_once('includes/header.php');

/* test2*/
?>


    <div class="container-fluid" data-page="contact">

        <div class="containerContact">
            <h1>Contact</h1>
            <p>So that we can get in touch with you,
                <br>we would ask you to please complete the contact form.</p>
            <div class="row">
                <form action="#" method="post">
                    <div class="col-md-6 col-lg-6">
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" id="firstname">
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" id="lastname">
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone">
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <label for="subject">Subject</label>
                        <input name="subject" id="subject">
                    </div>
                    <div class="col-md-12 col-lg-12 divTextarea">
                        <label for="message">Your Text</label>
                        <textarea id="message" name="message"></textarea>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <p class="formRequired">All fields are required</p>

                        <button class="buttonGLO" type="button" value="Submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <?php
    require_once('includes/footer.php');
?>
