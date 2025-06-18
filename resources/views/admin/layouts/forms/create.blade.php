@php
    $route_name = /*getRouteName($route_type ?? null)*/null;
    $add_class = '';
    $route_method = 'POST';
    $is_validate = 'yes';
    $route_validate = 'data-parsley-validate';
    $route_validate_type = 'parsley';
    $autocomplete = 'off';
    $route_status = 'store';
    if (isset($form_class)) {
        $add_class = $form_class;
    }
    if (isset($form_method)) {
        $route_method = $form_method;
    }
    if (isset($form_autocomplete)) {
        $autocomplete = $form_autocomplete;
    }
    if (isset($form_validate)) {
        $is_validate = $form_validate;
    }
    if (isset($form_status)) {
        $route_status = $form_status;
    }
    $form_control = ['method' => $route_method,'class' => 'systemira-form ' . $add_class,'autocomplete' => $autocomplete,];
    if ($is_validate == "yes"){
        $form_control[$route_validate] = $route_validate_type;
    }
    if (isset($enctype)){
        $form_control['enctype'] = "multipart/form-data";
    }
    if (isset($model_id) && isset($table_parent)){
        $form_control['route'] = ["$route_name.$table_parent.$table.$route_status", $model_id];
    }elseif (isset($model_id) && !isset($table_parent)){
        $form_control['route'] = ["$route_name.$table.$route_status", $model_id];
    }else{
        $form_control['route'] = "$table.$route_status";
    }
@endphp
    {!! Form::open($form_control) !!}

