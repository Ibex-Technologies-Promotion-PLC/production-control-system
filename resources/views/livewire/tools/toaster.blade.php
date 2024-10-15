<div>
    {{-- <div x-data="{show:false}" @stamp-toast.window="show = true; setTimeout(() => show=false, 5000);"
        class="bg-red-500"
        x-show="show"
        x-cloak>
        içerik
    </div> --}}
</div>


<script>
    $(document).ready(function() {
        window.addEventListener('stamp-toast', function(event) {
            // Check if event.detail is an array, and grab the first element
            const detail = Array.isArray(event.detail) ? event.detail[0] : event.detail;

            const title = detail?.title || 'Default Title';
            const message = detail?.message || 'Default Message';
            const classProgress = detail?.classProgress || 'blue';
            const icon = detail?.icon || 'info';
            const closeIcon = detail?.closeIcon || true;
            const showImage = detail?.showImage || false;
            const position = detail?.position || 'top right';
            const showMethod = detail?.showMethod || 'fade';

            console.log('Event triggered with data:', detail); // Log to confirm

            $('body').toast({
                title: title,
                message: message,
                showProgress: 'bottom',
                classProgress: classProgress,
                minDisplayTime: 3000,
                displayTime: 'auto',
                showIcon: icon,
                closeIcon: closeIcon,
                closeOnClick: false,
                class: 'success',
                position: position,
                transition: {
                    showMethod: showMethod,
                    showDuration: 500,
                    hideMethod: 'fade left',
                    hideDuration: 500,
                    closeEasing: 'easeOutCubic'
                },
                showImage: showImage,
                classImage: 'avatar',
            });
        });


    });
</script>