<?php
include_once 'Header/header.php';
?>

<style>

body {
  font-family: raleway;
}

  .fa-bell,
  .fa-envelope,
  .fab {
    font-size: 40px;
  }

  .row {
    text-align: center;
  }

 .col-lg-4 {
    margin: 10px 0;
 }

  .btn {
    background: rgba(210,180,140,.9);
    color: white;
    font-weight: 500;
    letter-spacing: 1px;
    width: 180px;
    margin: 0 auto;
  }

  .sub ,
  .contact,
  .fb {
    padding: 20px;
    border: 3px solid rgba(210,105,30,.5);
    border-radius: 25px;

  }

  a {
    color: white;
  }
  a:link {
    text-decoration: none;
  }

  a:hover {
    color: white;
  }

  .alert-success {
    margin-top: 10px;
  }


  /*FORM STYLES*/

  .modal-content {
  background-color: white;
}

.btn-primary {
  background-color: #5892ef;
  border: none;
  width: 100px;
}

.btn-danger {
  background-color: #ef6757;
  border: none;
  width: 100px;
}
</style>

<style>
.cta-inner {
  position: relative;
  padding: 3rem;
  margin: 0.5rem;
  background-color: rgba(255, 255, 255, 0.85);
}

.cta-inner:before {
  border-radius: 0.5rem;
  position: absolute;
  top: -0.5rem;
  bottom: -0.5rem;
  left: -0.5rem;
  right: -0.5rem;
  border: 0.25rem solid rgba(255, 255, 255, 0.85);
}
</style>
 <section class="page-section about-heading">
      <div class="container">
        <div class="about-heading-content ">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5 ">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Contact US</span>
                </h2>
                <div class="row">
                  <div class="col-lg-4 d-flex flex-column">
                    <i class="fas fa-bell"></i>
                    <h5>Subscribe to our mailing list!</h5>
                    <p>Get notified about any and all activities from Alliance Larp Utah. You can choose to unsubscribe anytime you wish.</p>
                    <a href="http://eepurl.com/dNkMKk">
                      <button type="button" class="btn sub mt-auto">Subscribe Now!</button></a>
                    <!--Link to Mail Chimp-->
                  </div>
                  <div class="col-lg-4 d-flex flex-column">
                    <i class="fab fa-facebook-f"></i>
                    <h5>Join our Facebook page!</h5>
                    <p>Join our Facebook page for additional info on meet ups, events and just overall awesomenes!</p>
                    <button class="btn fb mt-auto"><a href="https://www.facebook.com/groups/108867386310374/">Join</a></button>
                  </div>
                  <div class="col-lg-4 d-flex flex-column">
                    <i class="fas fa-envelope"></i>
                    <h5>Have a question?</h5>
                    <p>Get in touch with our amazing team for questions, general information and other business related questions.</p>
                    <button type="button" class="btn contact mt-auto" data-toggle="modal" data-target="#myModal">Contact</button>
                  </div>
                </div>
                <hr/>
                <div class="row">
                <div class="col-md-12">
                  <h3><u> Alliance Larp Utah </u></h3>
                  <p>Camp Tracy - 4701 Mill Creek Canyon Rd, Salt Lake City, UT 84109</p>
                  </div>
                  <div class="col-md-12">
                      <h3><u>Events</u></h3>
                        <iframe src="https://calendar.google.com/calendar/embed?src=utahlarp2470%40gmail.com&ctz=America%2FDenver" style="border: 0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
                    </div>
                    </div>
                    <hr/>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Please Fill Out The Form</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form action="mailto:owner.utahalliance@gmail.com" method="post" ><!--HIDDEN FORM-->
                <!--MENU FOR TYPE OF QUESTION-->
                <label for="sel1">What's Your Question?</label>
                      <select class="form-control required" id="sel1">
                        <option value="-">---</option>
                        <option value="1">General</option>
                        <option value="2">Logistics</option>
                        <option value="3">Business</option>
                        <option value="4">Other</option>
                      </select>
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control required" id="name" placeholder="Your name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control required" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                       <label for="comment">Comment:</label>
                        <textarea class="form-control required" rows="5" id="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="return validateForm();" value="send">Submit</button>
              </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    </section>
<?php
include_once 'Footer/footer.php';
?>