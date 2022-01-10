<!--Main Footer-->
   <footer class="main-footer">
      <!--Widgets Section-->
      <div class="widgets-section">
         <div class="auto-container">
            <div class="row clearfix">
               <!--Big Column-->
               <div class="big-column col-md-9 col-sm-12 col-xs-12">
                  <div class="row clearfix">
                     <!--Footer Column-->
                     <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                        <div class="footer-widget work-hours-widget">
                           <h2>Contact Us</h2>
                           <div class="widget-content">
                              <div class="text">@if(isset(Helper::getSettings()->site->footer_contact_us_text)){{ Helper::getSettings()->site->footer_contact_us_text}}@endif</div>
                              <ul class="hours-info">
                                 <li class="clearfix">
                                    <div class="pull-left">Phone</div>
                                    <div class="pull-right">@if(isset(Helper::getSettings()->site->contact_number)){{ Helper::getSettings()->site->contact_number[0]->number}}@endif</div>
                                 </li>
                                 <li class="clearfix">
                                    <div class="pull-left">Email</div>
                                    <div class="pull-right">@if(isset(Helper::getSettings()->site->contact_email)){{ Helper::getSettings()->site->contact_email}}@endif</div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--Footer Column-->
                     <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget">
                           <h2>{{ __('Learn More') }}</h2>
                           <div class="widget-content">
                              <ul class="list">
                                 @if(Lang::locale() == 'ar' )
                          
                                  @else
                                      <li>
                                        <a href="{{url('/faq')}}">{{ __('FAQ') }}</a>
                                      </li>
                                      <li><a href="{{url('/howitworks')}}">{{ __('How It Work') }}</a></li>
                                      <li><a href="@if(isset(Helper::getSettings()->site->page_privacy)){{ Helper::getSettings()->site->page_privacy}}@else#@endif">{{ __('Privacy Policy') }}</a></li>
                                      <li><a href="@if(isset(Helper::getSettings()->site->terms)){{ Helper::getSettings()->site->terms}}@else#@endif">{{ __('Terms & Conditions') }}</a></li>
                                  @endif
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--Big Column-->
               <div class="big-column col-md-3 col-sm-12 col-xs-12">
                  <div class="row clearfix">
                     <!--Footer Column-->
                     <div class="footer-column col-md-12 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget">
                           <h2>{{ __('Get Info') }}</h2>
                           <div class="widget-content">
                              <ul class="list">
                                 @if(Lang::locale() == 'ar' )
                                      
                                  @else
                                      <li><a href="@if(isset(Helper::getSettings()->site->about_us)){{ Helper::getSettings()->site->about_us}}@else#@endif">{{ __('About Us') }}</a></li>
                                      <li><a href="@if(isset(Helper::getSettings()->site->help)){{ Helper::getSettings()->site->help}}@else#@endif">{{ __('Help Center') }}</a></li>
                                      <li><a href="@if(isset(Helper::getSettings()->site->legal)){{ Helper::getSettings()->site->legal}}@else#@endif">{{ __('Legal') }}</a></li>
                                  @endif
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--Footer Column-->
                     <!-- <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget subscribe-widget">
                           <h2>Newsletter</h2>
                           <div class="widget-content">
                              <div class="text">Lorem Ipsum is simply dummy text of the printing </div>
                              <div class="newsletter-form">
                                 <form method="post" action="contact.html">
                                    <div class="form-group">
                                       <input type="email" name="email" value="" placeholder="Email Address..." required>
                                    </div>
                                    <div class="form-group">
                                       <button type="submit" class="theme-btn btn-style-one">SUBSCRIBE NOW</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Footer Bottom-->
      <div class="footer-bottom">
         <div class="auto-container">
            <div class="text">Copyrights &copy; 2020 <a href="#">Farerun</a>. All Rights Reserved</div>
         </div>
      </div>
   </footer>