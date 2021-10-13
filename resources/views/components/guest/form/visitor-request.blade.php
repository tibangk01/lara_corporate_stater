<div class="col-lg-6">
    <form action="forms/contact.php" method="post" role="form" class="php-email-form">

        <div class="row">

            <div class="col form-group">

                <x-guest.error/>

                <x-guest.success/>

            </div>

        </div>

        <div class="row">

            <div class="col form-group">

                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Your First Name" required>

            </div>

            <div class="col form-group">

                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Your Last Name" required>

            </div>

        </div>

        <div class="form-group">

            <div class="col form-group">

                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>

            </div>

        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                required></textarea>
        </div>
        <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
</div>
