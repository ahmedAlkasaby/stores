@php
$route_name = getRouteName($route_type ?? NULL);
@endphp
 
<a class="btn btn-primary waves-effect waves-light btn-{{ $btn_class ?? 'success' }} "
@if(isset($create_type) && isset($type_id))
href="{{ route("$route_name.$table.create",[$create_type=>$type_id]) }}"><i class="ti ti-plus me-sm-1"></i><span> {{ $value ?? '' }} </span></a>
@else
href="{{ route("$route_name.$table.create") }}"><i class="ti ti-plus me-sm-1"></i><span> {{ $value ?? '' }} </span></a>
@endif

