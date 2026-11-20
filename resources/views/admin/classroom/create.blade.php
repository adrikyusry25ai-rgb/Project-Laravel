<x-admin.modal id="createClassroomModal" title="Add Classroom">
    <form action="{{ route('admin.classroom.store') }}" method="POST">
        @csrf
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <x-admin.input name="name" label="Class Name" />

            <div>
                <label for="major" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Major</label>
                <select name="major" id="major" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <option value="" selected disabled>Select Major</option>
                    <option value="PPLG">PPLG</option>
                    <option value="DKV">DKV</option>
                    <option value="ANIMASI">ANIMASI</option>
                </select>
            </div>
        </div>
        <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 font-medium rounded-lg text-sm px-5 py-2.5">
            Add new classroom
        </button>
    </form>
</x-admin.modal>
