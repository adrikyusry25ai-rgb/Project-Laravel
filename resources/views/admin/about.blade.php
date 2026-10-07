<x-admin.layout>
    <div class="flex flex-col items-center justify-center h-full">
        <h1 class="text-4xl text-white mb-4">
            {($student)}
        </h1>
        <p class="text-lg text-gray-300">Nama:      {($nama)}</p>
        <p class="text-lg text-gray-300">Kelas:     {($kelas)}</p>
        <p class="text-lg text-gray-300">
            <a
            href="//github.com/adrikyusry25ai-rgb"
            target="_blank"
            class="text-blue-500 hover:text-blue-700"
            >
            Repository:       https://github.com/adrikyusry25ai-rgb
            </a>
        </p>
    </div>
</x-admin.layout>
