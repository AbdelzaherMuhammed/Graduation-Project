@if (session('success'))

    <script>
        new Noty({
            type: 'success',
            layout: 'topLeft',
            text: "{{ session('success') }}",
            delay:3000,
            timeout: 5000,
            killer: true
        }).show();
    </script>

@endif