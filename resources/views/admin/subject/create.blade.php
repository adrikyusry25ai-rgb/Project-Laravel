<x-admin.modal id="createSubjectModal" title="Add Subject">
    <form action="{{ route('admin.subject.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <x-admin.input name="name" label="Subject Name" />
        </div>
        <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 font-medium rounded-lg text-sm px-5 py-2.5">
            Add new subject
        </button>
    </form>
</x-admin.modal>
