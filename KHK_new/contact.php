<html>
  <head>
    <title>Contact - KHK Scaffolding & Formwork LTD. L.L.C</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <!-- JQuery links -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <!-- stylesheet -->
    <link rel="stylesheet" href="css/mystyle.css" />
    <!-- JQuery -->
    <script type="text/javascript" src="jquery/script.js"></script>
    <script type="text/javascript" src="jquery/validation.js"></script>

    <!-- Page refresh after form submited  -->
    <script>
      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
  </head>

  <body>
    <div id="header"></div>

    <!--Section heading-->
    <div class="container">
      <header>
        <h1 class="entry-title">Contact</h1>
      </header>

      <section class="mb-4">
        <div class="row">
          <!--Grid column start-->
          <div class="col-md-9 mb-md-0 mb-5 contact-details">
            <form id="contact_form" name="contact_form" action="" method="POST">
              <!--Grid row start-->
              <div class="row contact-row">
                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="username"
                      name="username"
                      class="c-form"
                      placeholder="Name"
                    />
                  </div>
                </div>
                <!--Grid column end-->

                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="company"
                      name="company"
                      class="c-form"
                      placeholder="Company"
                    />
                  </div>
                </div>
                <!--Grid column end-->
              </div>
              <!--Grid row end-->

              <!--Grid row start-->
              <div class="row contact-row">
                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="phone_no"
                      name="phone_no"
                      class="c-form"
                      placeholder="Contact No."
                    />
                  </div>
                </div>
                <!--Grid column end-->

                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="designation"
                      name="designation"
                      class="c-form"
                      placeholder="Designation"
                    />
                  </div>
                </div>
                <!--Grid column end-->
              </div>
              <!--Grid row end-->

              <!--Grid row start-->
              <div class="row contact-row">
                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="email"
                      id="email"
                      name="email"
                      class="c-form"
                      placeholder="E-Mail"
                    />
                  </div>
                </div>
                <!--Grid column end-->

                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <select
                      type="text"
                      id="country"
                      name="country"
                      class="c-form"
                      placeholder="Country"
                    >
                      <option value="">Country</option>
                      <option value="Afghanistan">India</option>
                    </select>
                  </div>
                </div>
                <!--Grid column end-->
              </div>
              <!--Grid row end-->

              <!--Grid row start-->
              <div class="row contact-row">
                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="product"
                      name="product"
                      class="c-form"
                      placeholder="Product"
                    />
                  </div>
                </div>
                <!--Grid column end-->

                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="quantity"
                      name="quantity"
                      class="c-form"
                      placeholder="Quantity"
                    />
                  </div>
                </div>
                <!--Grid column end-->
              </div>
              <!--Grid row end-->

              <!--Grid row start-->
              <div class="row contact-row">
                <!--Grid column start-->
                <div class="col-md-12">
                  <div class="md-form">
                    <textarea
                      type="text"
                      id="message"
                      name="message"
                      rows="2"
                      class="c-form md-textarea"
                      placeholder="Message"
                    ></textarea>
                  </div>
                </div>
              </div>
              <!--Grid row end-->

              <!--Grid row start-->
              <div class="mt-5">
                <button type="submit" name="submit" class="btn_submit">
                  Send
                </button>
                <span class="ajax-loader"></span>
                <div class="status"></div>
              </div>
              <!--Grid row end-->
            </form>
          </div>
          <!--Grid column end-->
        </div>
      </section>
      <!--Section: Contact v.2-->

      <div class="submit_success_msg mt-4">
        <?php include "contact_form_handler.php"; ?>
      </div>
    </div>

    <div id="footer"></div>
  </body>
</html>
