@if (session('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50">
        <ul class="list-disc ml-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
