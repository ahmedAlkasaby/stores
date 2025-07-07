<div class="form-group">
        <label>{{ __('site.phone') }}</label>
        {!! Form::text('phone', isset($phone) ? $phone : null, array('class' => 'form-control','required'=>'','data-parsley-type'=>"number"), array('class' => 'form-control','required'=>'')) !!}
</div>
