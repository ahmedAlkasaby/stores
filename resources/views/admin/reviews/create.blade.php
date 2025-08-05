@extends('admin.layouts.app')
@section('title', __('site.reviews'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
@endsection
@section('content')
    @include('admin.layouts.messages.displayErrors')
    @include('admin.layouts.forms.create', [
        'form_method' => 'POST',
        'form_class' => 'needs-validation',
        'form_status' => 'store',
        'table' => 'dashboard.reviews',
        'model_id' => $review->id ?? null,
        'enctype' => true,
    ])

    @include('admin.reviews.includes.form-fields')
@endsection

@section('jsFiles')
    <script src="{{ asset('admin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script>
        const usersWithOrders = @json($users);
        console.log(usersWithOrders);
    </script>

    <script>
        $(document).ready(function() {
            function toggleFields() {
                const type = $('#type').val();
                $('#order_id').closest('.form-group').show();
                $('#product_id').closest('.form-group').show();

                if (type === 'order') {
                    $('#product_id').closest('.form-group').hide();
                    $('#product_id').val(null);
                    populateOrders();
                } else if (type === 'product') {
                    $('#order_id').closest('.form-group').hide();
                    $('#order_id').val(null);
                }
            }

            function populateOrders() {
                const userId = $('#user_id').val();
                const user = usersWithOrders.find(u => u.id == userId);
                user.orders.forEach(order => {
                    options += `<option value="${order.id}">${order.id}}</option>`;
                });

                $('#order_id').html(options);
            }

            $('#type, #user_id').on('change', function() {
                toggleFields();
            });

            toggleFields();
        });
    </script>



@endsection
@section('mainFiles')

    <script src="{{ asset('admin/assets/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('admin/assets/js/form-wizard-validation.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
@endsection
