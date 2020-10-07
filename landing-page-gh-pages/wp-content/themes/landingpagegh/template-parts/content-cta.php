<!-- Call to Action -->
<section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">
            <?php echo esc_html( get_theme_mod( 'set_cta_title', __( 'Ready to get started? Sign up now!', 'landing-page-gh-pages' ) ) ); ?>
          </h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">
                  <?php echo esc_html( get_theme_mod( 'set_cta_title', __( 'Sign up!', 'landing-page-gh-pages' ) ) ); ?>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>