<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/driver_data/css/main.css')}}" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Farerun</title>
  </head>
  <body>
  
    <header class="main-header" style="background: url({{ asset('assets/driver_data/img/banner.jpg')}}) no-repeat center/cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center justify-content-between py-5">
                    <div class="logo-main">
                        <img src="{{ asset('assets/driver_data/img/logo.png')}}" class="img-fluid" alt="">
                    </div>
                    <!-- <div class="login-btn">
                        <a href="#" class="login-now text-capitalize text-white">login</a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="driver-from">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-md-6 col-lg-6 offset-lg-1 p-b-md">
                        <div class="banner-content">
                            <h1 class="banner-title">Drive with Farerun</h1>
                        <div class="banner-des">Earn good money with your vehicle.</div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="login-from">
                            <form id="form">
                                <div class="form-title mb-3">Signup as a driver below</div>
                                <div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" name="name" id="name" placeholder="john.doe">
                                </div>

                                <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="text" class="form-control" name="email" id="email" placeholder="john-doe@site.com">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                  <div class="d-flex phone-input">
                                    <select class="js-example-basic-single form-control" name="phone_code" style="width: 100px" id="phone_code">
                                        <option value="+234">+234 <option>
                                    </select>
                                    <input type="text" class="form-control"  placeholder="51112345" name="phone" id="phone">
                                  </div>
                               </div>
                               <div class="form-group">
                                    <label class="mb-0">Cities</label>
                                    <select class="form-control" name="city_id" id="city_id">
                                    </select>
                               </div>
                               <div class="form-group">
                                    <label class="mb-0">Type of car</label>
                                    <select class="form-control" name="type_of_car" id="type_of_car">
                                    </select>
                               </div>

                               <p class="text-danger error_message"></p>

                               <button class="btn btn-primary w-100 mt-3">Submit</button>
                               <div class="form-term my-2">By signing up, you accept our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>. </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="arrow-down-banner text-center">
            <i class="fas fa-angle-down"></i>
        </div>
    </header>


    <section class="why-farerun">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="why-title">Why Farerun?</h2>
                </div>
                <div class="col-sm-4 text-center">
                   <div class="box-why">
                    <div class="text-center">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3>Earn money</h3>
                    <p>Drive with Bolt and earn extra income.</p>
                   </div>
                  </div>
                  <div class="col-sm-4 text-center">
                   <div class="box-why">
                    <div class="text-center">
                        <i class="far fa-clock"></i>
                    </div>
                    <h3>Drive anytime</h3>
                    <p>Work with your own schedule. No minimum hours and no boss.</p>
                   </div>
                  </div>
                  <div class="col-sm-4 text-center">
                   <div class="box-why">
                    <div class="text-center">
                        <img src="{{ asset('assets/driver_data/img/credit-card.svg')}}" class="img-fluid" alt="">
                      </div>
                      <h3>No monthly fees</h3>
                      <p>No risk, you only pay when you earn.</p>
                   </div>
                  </div>
            </div>
        </div>
    </section>
    <section class="why-farerun" style="margin-bottom: 50px">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="why-title">How  Farerun works?</h2>
                </div>
                <div class="col-sm-4 text-center mb-4 mt-md-0">
                   <div class="box-why">
                    <h3 class="mb-2">1. Accept the request</h3>
                    <img src="{{ asset('assets/driver_data/img/step1.png')}}" class="img-thumbnail" alt="">
                   </div>
                  </div>
                  <div class="col-sm-4 text-center mb-4 mt-md-0">
                   <div class="box-why">
                    <h3 class="mb-2">2. Pickup the client</h3>
                    <img src="{{ asset('assets/driver_data/img/step2.png')}}" class="img-thumbnail" alt="">
                   </div>
                  </div>
                  <div class="col-sm-4 text-center mb-4 mt-md-0">
                   <div class="box-why">
                      <h3 class="mb-2">3. Drive to destination</h3>
                      <img src="{{ asset('assets/driver_data/img/step3.png')}}" class="img-thumbnail" alt="">
                   </div>
                  </div>
            </div>
        </div>
    </section>


    <!-- <footer class="footer-sec py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <button class="sign-up-btn btn btn-lg btn-primary">Sign up to drive with Bolt</button>
                    <div class="copy-right">
                        <p class="pt-4 mb-0">Got questions or concerns? Contact us.</p>
                    <p>Taxify OÜ. Vana-Lõuna tn 39/1, Tallinn, 10134, Estonia</p>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            // $('.js-example-basic-single').select2();

          $("#city_id").select2({
            ajax: {
              url: '{{Helper::getBaseUrl()}}/driver-data/cities',
              dataType: 'json',
              type: "GET",
              quietMillis: 50,
              data: function (params) {
                return {
                    keyword: params.term
                };
              },
              processResults: function (data) {
                return {
                  results: $.map(data.responseData.data, function (item) {
                    return {
                      text: item.name,
                      id: item.id
                    }
                  })
                }
              }
            }
          });

          $.ajax({url: "{{Helper::getBaseUrl()}}/driver-data/type-of-cars", 
            success: function(result){
              $.each(result.responseData, function(){
                $("#type_of_car").append('<option value="'+ this.id +'">'+ this.name +'</option>');
              });
            }
          });
        });


        $('#form').on('submit', function(e){
          e.preventDefault();
          $('#error_message').text('');

          var phone_code = $('#phone_code').val();
          var phone = $('#phone').val();

          if(!phone){
            $('.error_message').text('phone number is required');
          }

          var data = {
            'name': $('#name').val(),
            'email': $('#email').val(),
            'phone': phone_code+phone,
            'city_id': $('#city_id').val(),
            'type_of_car': $('#type_of_car').val(),
          }

          $.ajax({
            url: "{{Helper::getBaseUrl()}}/driver-data", 
            type: 'post',
            data: $('#form').serialize(),
            success: function(result){
              window.location.replace("/");
            },
            error:function(error){
              $('.error_message').text(error.responseJSON.message);
            }
          });
        })
    </script> 
</body>
</html>
