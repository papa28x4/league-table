<footer class="bg-gradient-2 section footer-classic">
    <div class="footer-classic-body section-lg context-dark">
      <div class="container">
        <div class="row row-40 row-md-50 justify-content-xl-between">
          <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInRight">
            <div class="footer-classic-brand">
              <a class="brand" href="index.html">
                <img class="brand-logo-dark" src="{{asset('frontend/images/logo-332x102.png')}}" alt="" width="332" height="102" srcset="{{asset('frontend/images/logo-332x102.png 2x')}}"/>
                {{-- <img class="brand-logo-light" src="{{asset('frontend/images/logo-inverse-332x102.png')}}" alt="" width="332" height="102" srcset="{{asset('frontend/images/logo-inverse-332x102.png 2x')}}"/> --}}
                <img class="brand-logo-light" src="{{asset('frontend/images/logo-inverse.png')}}" alt="" width="332" height="102" srcset="{{asset('frontend/images/logo-inverse.png')}} 2x"/>
              </a>
            </div>
            <ul class="list-schedule">
              <li><span>Weekdays:</span><span>08:00am - 05:00pm</span></li>
              <li><span>Saturdays:</span><span>09:00am - 03:00pm</span></li>
            </ul>
            <div class="footer-classic-social">
              <div class="group-lg group-middle">
                <p>Get Social</p>
                <div>
                  <ul class="list-inline list-social list-inline-sm">
                    <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/fortinfinite"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="https://twitter.com/fortinfinite"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="https://www.instagram.com/FortInfinitejvs/"></a></li>
                    <li><a class="icon mdi mdi-whatsapp" href="https://api.whatsapp.com/send?phone=+2348136791122"></a></li>
                   
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
            <h4 class="footer-classic-title text-transform-uppercase">Contacts</h4>
            <ul class="contacts-creative">
              <li>
                <div class="unit unit-spacing-sm flex-column flex-md-row">
                  <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                  <div class="unit-body"><a href="#">190, Ikorodu Road, beside First Bank of Nigeria, Palmgroove, Lagos</a></div>
                </div>
              </li>
              <li>
                <div class="unit unit-spacing-sm flex-column flex-md-row">
                  <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                  <div class="unit-body"><a href="tel:#">08136791122</a></div>
                </div>
              </li>
              <li>
                <div class="unit unit-spacing-sm flex-column flex-md-row">
                  <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                  <div class="unit-body"><a href="mailto:#">info@fortinfinite.com</a></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
            <h4 class="footer-classic-title text-transform-uppercase">Newsletter</h4>
            <p>Subscribe to our newsletter to receive weekly news, updates, special offers, and exclusive discounts.</p>
            <!-- RD Mailform-->
            <form class="rd-form rd-mailform rd-form-inline rd-form-inline-2" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
              <div class="form-wrap">
                <input class="form-input" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required"/>
                <label class="form-label" for="subscribe-form-2-email">Enter your e-mail</label>
              </div>
              <div class="form-button">
                <button class="button button-icon-2 button-zakaria button-secondary" type="submit"><span class="linearicons-paper-plane"></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-classic-panel">
      <div class="container">
        <div class="row row-10 align-items-center justify-content-sm-between">
          <div class="col-md-auto">
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>FortInfinite</span><span>.&nbsp; All rights reserved</span></p>
          </div>
          <div class="col-md-auto order-md-1"><a href="privacy-policy.html">Privacy Policy</a></div>
          <div class="col-md-auto">
            <div class="group-sm group-middle">
              <img src="{{asset('frontend/images/payment-1-45x15.png')}}" alt="" width="45" height="15"/>
              <img src="{{asset('frontend/images/payment-2-46x28.png')}}" alt="" width="46" height="28"/>
              {{-- <img src="{{asset('frontend/images/payment-3-62x17.png')}}" alt="" width="62" height="17"/> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>