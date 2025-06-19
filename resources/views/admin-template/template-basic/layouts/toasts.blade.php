@if ($errors->any())
    @foreach ($errors->all() as $errorKey => $errorValue)
        <script>
            $(function () {
                $('#validation').append(showError(@json($errorValue), @json($errorKey)));
            })
        </script>
    @endforeach
@endif

@if(session('success'))
    <script>
        $(function () {
            let $message = @json(session('success'));

            $('#validation').append(showSuccess($message, 'success'))
        })
    </script>
@endif

<script>
    $(function () {
        let $message = sessionStorage.getItem('success')

        if ($message) {
            $('#validation').append(showSuccess($message, 'success'));
            sessionStorage.removeItem('success')
        }
    })
</script>
