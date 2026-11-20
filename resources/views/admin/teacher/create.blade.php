<x-admin.modal id="createTeacherModal" title="Add Teacher">
    <form action="{{ route('admin.teacher.store') }}" method="POST">
        @csrf
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <x-admin.input name="name" label="Name" />
            <x-admin.input name="niy" label="NIY" />
            <x-admin.input name="start_date" label="Start Date" type="date" />

            <div>
                <label for="subject_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                <select name="subject_id" id="subject_id" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <option value="" selected disabled>Select Subject</option>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}" @selected(old('subject_id') == $subject->id)>
                            {{ $subject->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 font-medium rounded-lg text-sm px-5 py-2.5">
            Add new teacher
        </button>
    </form>
</x-admin.modal>
