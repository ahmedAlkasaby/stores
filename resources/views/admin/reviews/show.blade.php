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
    @include('admin.layouts.forms.edit', [
        'table' => 'reviews',
        'route_type' => 'dashboard',
        'form_method' => 'PATCH',
        'form_class' => 'custom-form-class',
        'form_status' => 'update',
        'model' => $review,
        'model_id' => $review->id,
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

    {{-- <script>
    $(document).ready(function () {
        function toggleFields() {
            const type = $('#type').val();
            $('#order_id').closest('.form-group').show();
            $('#product_id').closest('.form-group').show();

            if (type === 'order') {
                $('#product_id').closest('.form-group').hide();
                populateOrders();
            } else if (type === 'product') {
                $('#order_id').closest('.form-group').hide();
            }
        }

        function populateOrders() {
            const userId = $('#user_id').val();
            const user = usersWithOrders.find(u => u.id == userId);
            console.log(user);
            if (!user || !user.orders.length) {
                $('#order_id').html('<option value="">لا توجد طلبات</option>');
                return;
            }

            let options = '<option value="">اختر طلب</option>';
            user.orders.forEach(order => {
                options += `<option value="${order.id}">#${order.id} - ${order.name ?? ''}</option>`;
            });
            console.log(options);
            $('#order_id').html(options);
        }

        $('#type, #user_id').on('change', function () {
            toggleFields();
        });

        toggleFields();
    });
</script> --}}



@endsection
@section('mainFiles')

    <script src="{{ asset('admin/assets/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('admin/assets/js/form-wizard-validation.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
@endsection
