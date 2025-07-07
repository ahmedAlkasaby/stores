<div class="form-group">
    <label>{{ __('site.roles') }}</label>
    {!! Form::select('roles[]', $roles,$userRoles  ?? null, array('class' => 'select2','multiple','style'=>'width: 100%')) !!}
</div>
