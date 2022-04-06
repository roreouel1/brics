  @extends('home')
  @section('content')
  <!-- ======= Contact Section ======= -->

  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>LETS HEAR FROM YOU!</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15881.748462314008!2d-0.1510056!3d5.6497264!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9c73b5f6cb513b73!2sBrics%20Africa%20Consulting%20LLC!5e0!3m2!1sen!2sgh!4v1640950377454!5m2!1sen!2sgh" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>East Legon, American House
                     Nii Teiko Abbey Lane<br>
                     Behind Shell Filling Station<br>
                     Accra Ghana</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@bricsafricaconsulting.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+233 203 969 993<br>+233 203 971 056
                  <br> +233 206 803 214</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="assets/forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <!-- <div class="error-message"></div> -->
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

        

      </div>
    </section><!-- End Contact Section -->
    @endsection