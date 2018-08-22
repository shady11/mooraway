<script>
    var token = '{{ csrf_token() }}';
</script>

<script src="{{ asset('js/app.js?v=' . time()) }}"></script>