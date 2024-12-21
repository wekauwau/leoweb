<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white lg:text-md border-b border-gray-200">
                    <h1 class="mb-12 text-4xl font-extrabold text-center leading-none tracking-tight text-gray-900 md:text-5xl lg:text-3xl dark:text-white">
                        Struktur Kepengurusan<br>
                        HIMATIKA UWU<br>
                        Periode 2024/2025
                    </h1>
                    <h4 class="mb-6 px-48 text-2xl font-bold text-gray-900 dark:text-white">Pengurus Harian</h4>
                    <p class="mb-3 text-lg font-normal text-gray-700 sm:px-16 xl:px-48 dark:text-gray-400">
                        <span class="font-bold text-gray-900">Ketua :</span>
                        {{ $executives->where('name','Ketua')->first()->position->member->name }}
                    </p>
                    <p class="mb-3 text-lg font-normal text-gray-700 sm:px-16 xl:px-48 dark:text-gray-400">
                        <span class="font-bold text-gray-900">Wakil Ketua :</span>
                        {{ $executives->where('name','Wakil Ketua')->first()->position->member->name }}
                    </p>
                    <p class="mb-3 text-lg font-normal text-gray-700 sm:px-16 xl:px-48 dark:text-gray-400">
                        <span class="font-bold text-gray-900">Sekretaris I :</span>
                        {{ $executives->where('name','Sekretaris I')->first()->position->member->name }}
                    </p>
                    <p class="mb-3 text-lg font-normal text-gray-700 sm:px-16 xl:px-48 dark:text-gray-400">
                        <span class="font-bold text-gray-900">Sekretaris II :</span>
                        {{ $executives->where('name','Sekretaris II')->first()->position->member->name }}
                    </p>
                    <p class="mb-3 text-lg font-normal text-gray-700 sm:px-16 xl:px-48 dark:text-gray-400">
                        <span class="font-bold text-gray-900">Bendahara I :</span>
                        {{ $executives->where('name','Bendahara I')->first()->position->member->name }}
                    </p>
                    <p class="mb-3 text-lg font-normal text-gray-700 sm:px-16 xl:px-48 dark:text-gray-400">
                        <span class="font-bold text-gray-900">Bendahara II :</span>
                        {{ $executives->where('name','Bendahara II')->first()->position->member->name }}
                    </p>

                    <hr class="h-px my-8 mx-48 bg-gray-900 border-0 dark:bg-gray-700">

                    @foreach ($divisions as $div)
                        <h4 class="mt-9 mb-3 px-48 text-xl font-bold text-gray-900 dark:text-white">Divisi {{ $div->name }}</h4>
                        <p class="text-lg font-normal text-gray-700 sm:px-16 xl:px-48 dark:text-gray-400">
                            {{ $div->leader->name }}
                            <span class="font-bold text-gray-900"> (Ketua)</span>
                        </p>

                        @foreach ($div->position as $pos)
                            @if ($pos->member->id == $div->leader->id)
                                @continue
                            @endif

                            <p class="text-lg font-normal text-gray-700 sm:px-16 xl:px-48 dark:text-gray-400">
                                {{ $pos->member->name }}
                            </p>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
