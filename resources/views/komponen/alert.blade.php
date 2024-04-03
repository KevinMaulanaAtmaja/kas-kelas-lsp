@if ($errors->any())
    <div class="alert alert-danger" id="removeAlert">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::get('success'))
    <div class="alert alert-success" id="removeAlert">{{ Session::get('success') }}</div>
@endif
@if (Session::get('error'))
    <div class="alert alert-danger" id="removeAlert">{{ Session::get('error') }}</div>
@endif

<script>
    setTimeout(function () {
        document.getElementById('removeAlert').remove();
    }, 2000);
</script>
