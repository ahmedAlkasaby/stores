<audio id="notification-sound" src="{{ asset('sounds/notification.mp3') }}" preload="auto"></audio>

<script>
    Echo.private(`user.{{ auth()->id() }}`)
        .listen('.notification.new', function (e) {
            console.log('notification sound played');
            $("#notificationCount").load(window.location.href + " #notificationCount");
            $("#notifications-dropdown").load(window.location.href + " #notifications-dropdown");
            document.getElementById('notification-sound').play();
        });
</script>

<script>
    $(document).on('click', '.dropdown-notifications-read', function (e) {
        e.preventDefault();

        const $el = $(this);
        const notificationId = $el.data('notification-id');

        $.ajax({
            url: `/dashboard/notifications/mark_as_read/${notificationId}`,
            method: 'GET',
            success: function (response) {
                if (response.success) {
                    $el.find('.badge-dot').remove();
                    console.log('Notification marked as read');
                }
            },
            error: function (xhr) {
                console.error('Something went wrong!', xhr);
            }
        });
    });
</script>
