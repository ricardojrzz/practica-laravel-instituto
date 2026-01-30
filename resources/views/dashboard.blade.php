<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Panel de Control') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium">Bienvenido a la gestión del Instituto</h3>
                            <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Gestionar Alumnos</a>
                        </div>

                        <div class="card bg-base-100 dark:bg-gray-700 shadow-xl">
                            <div class="card-body">
                                <h2 class="card-title">Estadísticas rápidas</h2>
                                <div class="card-actions justify-end">
                                    <button class="btn btn-ghost">Ver detalles</button>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-info shadow-lg">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>DaisyUI v4 está correctamente vinculado.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
