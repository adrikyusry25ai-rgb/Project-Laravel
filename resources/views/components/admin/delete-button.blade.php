@props(['action', 'confirm' => 'Yakin ingin menghapus data ini?'])

<form action="{{ $action }}" method="POST" onsubmit="return confirm('{{ $confirm }}')">
    @csrf
    @method('DELETE')
    <button type="submit"
        class="px-3 py-2 text-xs font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
        Delete
    </button>
</form>
