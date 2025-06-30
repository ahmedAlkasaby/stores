<div class="form-group mt-1">
    <label>{{ $label }}</label>
    {!! Form::select($name,\App\Helpers\HourHelper::fullDayRange() ,isset($type) ? $type : null, array('class' => 'select2
    user-type-role','required'=>'')) !!}
</div>