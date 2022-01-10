@extends('common.provider.layout.base')
{{ App::setLocale(   isset($_COOKIE['provider_language']) ? $_COOKIE['provider_language'] : 'en'  ) }}
@section('styles')
@parent
@stop
@section('content')
<!-- Schedule Ride Modal -->
<div id="toaster" class="toaster"></div>
<section style="min-height: 100vh;" class="taxi-banner z-1 content-box" id="booking-form">
      <div id="root"></div>
      

        <div class="modal" tabindex="-1" role="dialog" id="callModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Call User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input id="call-status" class="form-control" type="text" placeholder="Connecting to Twilio..." readonly>
              </div>
              <div class="modal-footer">
                 <button class="btn btn-lg btn-success" id="answer-button">Answer call</button>
                <button type="button" class="btn btn-primary call-button" onclick="callUser()">Call User</button>
                <button type="button" class="btn btn-secondary hangup-button" data-dismiss="modal" onclick="hangUp()">Close</button>
              </div>
            </div>
          </div>
        </div>
</section>
@stop
@section('scripts')
@parent
<script>
window.salt_key = '{{ Helper::getSaltKey() }}';
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{Helper::getSettings()->site->browser_key}}&libraries=places&callback=initMap" async defer></script>

<script crossorigin src="https://unpkg.com/babel-standalone@6.26.0/babel.min.js"></script>
<!-- <script crossorigin src="https://unpkg.com/react@16.8.0/umd/react.production.min.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16.8.0/umd/react-dom.production.min.js"></script> -->

<script crossorigin src="https://unpkg.com/react@16.8.0/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16.8.0/umd/react-dom.development.js"></script>

<script type="text/javascript" src="https://sdk.twilio.com/js/client/v1.13/twilio.min.js"></script>

<script type="text/babel" src="{{ asset('assets/layout/js/transport/incoming.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/twilio/browser-call.js')}}"/></script>
@stop
