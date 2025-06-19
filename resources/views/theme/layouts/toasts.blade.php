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
            $('#validation').append(showSuccess(@json(session('success'), 'success')));
        })
    </script>
@endif
