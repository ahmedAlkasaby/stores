<div class="form-group">
    <label>{{ __('site.type') }}</label>
    {!! Form::select('type',\App\Helpers\UserHelper::userType() ,isset($type) ? $type : null, array('class' => 'select2
    user-type-role','required'=>'')) !!}
</div>