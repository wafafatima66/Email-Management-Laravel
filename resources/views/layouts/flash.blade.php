<style>


/* ==========================================================================           
 *
 *    FLASH ALERT MESSAGES
 *
 * ========================================================================== */
 .alert {
  z-index: 100;
  position: absolute;
  right: 2rem;
  margin-top: 2rem;
  font-size: 12px;
  width: 25%;
  line-height: 2.2;
  color: #fff;
  /* font-weight: 600; */
  border: none !important;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}
.alert i {
  font-size: 16px;
  vertical-align: middle;
  margin-right: 10px;
  margin-bottom: 3px;
}

.alert-login {
  right: auto;
  width: 66.7% !important;
  top: 10px !important;
}

.alert-success {
  background: #11c15b !important;
}

.alert-info {
  background: #00bcd4 !important;
}

.alert-warning {
  background: #ffe100 !important;
}

.alert-danger {
  background: #ff5252 !important;
}

.close {
  opacity: 0.8;
  color: #fff;
}
button.close {
    margin-top: 0;
    margin-bottom: 0;
}

#verify-email .alert {
  font-size: 10px;
  line-height: 3;
}

</style>

@if ($message = Session::get('success'))
<div class="alert alert-success"> 
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><i class="fa fa-check-circle"></i> {{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><i class="fa fa-exclamation-triangle"></i> {{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><i class="fa fa-exclamation-circle"></i> {{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><i class="fa fa-info-circle"></i> {{ $message }}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    {{ __('There were some errors, please clear them first') }}
</div>
@endif