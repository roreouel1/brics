  @extends('home')
  @section('content')
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>BOOK AN APPOINTMENT</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="book">
            <form action="assets/forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="row">
              <div class="col col-md-6 form-group">
                <input type="date" class="form-control" name="dd" id="subject"  required>
              </div>
              <div class="col col-md-6 form-group">
              <input type="text" class="form-control" name="num" id="subject"placeholder="Your Phone number"  required>
              </div>
              </div>

              <div class="form-group">
              <select class="form-control" name="typ">
                <option value="BRICS AFRICA Financial">BRICS AFRICA Financial</option>
                <option value="BRICS AFRICA Strategy">BRICS AFRICA Strategy</option>
                <option value="BRICS AFRICA Technology">BRICS AFRICA Technology</option>
                <option value="BRICS AFRICA Research">BRICS AFRICA Research</option>
                <option value="BRICS AFRICA Training">BRICS AFRICA Training</option>
              </select>
              </div>

              <div class="my-3">
                <div class="loading">Loading</div>
                <!-- <div class="error-message"></div> -->
                <div class="sent-message">Your appointment has been booked. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Submit</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    @endsection