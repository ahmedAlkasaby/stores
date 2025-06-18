@php
$add_class = $multiple = $select2_class = '';
$field_name = 'active';
if (isset($select_class)) {
$add_class = $select_class;
}
if (isset($select_name)) {
$field_name = $select_name;
}
if (isset($read_only)) {
$add_class .= ' select2-readonly';
}
if (!isset($select2)) {
$select2_class = "select2 select";
}
$array_control = ['class' =>'form-control '.$select2_class .' ' . $add_class, 'data-parsley-trigger' => 'select', 'disabled' => $disable ?? false, 'readonly' => $read_only ?? false, 'style' => 'width: 100%'];
if (!isset($not_req)) {
$array_control['required'] = '';
}
if (isset($is_multiple)) {
$array_control['multiple'] = '';
$field_name = $field_name.'[]';
}
if (isset($select_id)) {
$array_control['id'] = $select_id;
}
@endphp
@include('admin.layouts.forms.fields.form-group-head', ['field_name' => $field_name])
@include('admin.layouts.forms.fields.label',['label_default'=>__("Active")])
{!! Form::select($field_name, $select_function ?? statusType(), $select_value ?? null, $array_control) !!}
@include('admin.layouts.forms.fields.form-group-foot', ['field_name' => $field_name])
