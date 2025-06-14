@push('css')
    <script src=""></script>
@endpush
@if ($errors->any())
    @foreach ($errors->all() as $errorKey => $errorValue)
        <script>
            $('#validation').append(showError(@json($errorValue), @json($errorKey)));
        </script>
    @endforeach
@endif

@if(session('success'))
    <script>
        let $message = @json(session('success'));
        $('#validation').append(showSuccess($message, 'success'));
    </script>
@endif
