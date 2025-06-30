<div class="form-group">
    <label>{{ __('site.confirm_password') }}</label>
    @if($new > 0)
    {!! Form::password('password_confirmation', array('class' => 'form-control','id'=>'password-confirm','data-parsley-minlength'=>'8','required'=>'','data-parsley-equalto'=>'#password')) !!}
    @else
    {!! Form::password('password_confirmation', array('class' => 'form-control','id'=>'password-confirm','data-parsley-minlength'=>'8','data-parsley-equalto'=>'#password')) !!}
    @endif

    <!-- <span toggle="#password-confirm" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->

</div>
