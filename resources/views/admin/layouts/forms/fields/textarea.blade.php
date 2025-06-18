@php
$add_class = '';
$field_name = 'note';
if (isset($text_class)) {
$add_class = $text_class;
}
if (isset($text_name)) {
$field_name = $text_name;
}
$array_control = ['class' => 'form-control' . $add_class, 'data-parsley-trigger' => 'textarea', 'rows' => $rows ?? '5', 'cols' => $cols ?? '50', 'disabled' => $disable ?? false, 'readonly' => $read_only ?? false];
if (!isset($not_req)) {
$array_control['required'] = '';
}
if (isset($placeholder)) {
$array_control['placeholder'] = $placeholder;
}
if (isset($text_id)) {
$array_control['id'] = $text_id;
}
@endphp
@include('admin.layouts.forms.fields.form-group-head', ['field_name' => $field_name])
@include('admin.layouts.forms.fields.label',['label_default'=>__("Note")])
{!! Form::textarea($field_name, $text_value ?? null, $array_control) !!}
@include('admin.layouts.forms.fields.form-group-foot', ['field_name' => $field_name])
