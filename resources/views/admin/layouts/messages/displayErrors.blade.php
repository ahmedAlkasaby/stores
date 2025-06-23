@if (session('error'))
<div class="alert alert-danger" id="success-message">
    {{ session('error') }}
</div>
<script>
    setTimeout(function () {
            let message = document.getElementById('success-message');
            if (message) {
                message.style.display = 'none';
            }
        }, 3000);
</script>
@endif