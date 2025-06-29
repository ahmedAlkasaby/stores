<div class="form-group">
    <label>{{ __('site.email') }}</label>
    @if(!isset($not_req))
    {!! Form::text('email', isset($email) ? $email : null, array('class' => 'form-control','required'=>'','data-parsley-type'=>"email")) !!}
    @else
    {!! Form::text('email', isset($email) ? $email : null, array('class' => 'form-control','data-parsley-type'=>"email")) !!}
    @endif
</div>
