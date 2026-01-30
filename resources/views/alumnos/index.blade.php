<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Gestión de Alumnos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="alert alert-success mb-4 shadow-lg">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
            @endif

            <div class="bg-white p-6 rounded-lg shadow-xl">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold">Listado Actual</h3>
                    <a href="{{ route('alumnos.create') }}" class="btn btn-primary">
                        + Nuevo Alumno
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre Completo</th>
                            <th>Email</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($alumnos as $alumno)
                            <tr>
                                <td>{{ $alumno->id }}</td>
                                <td>{{ $alumno->nombre }} {{ $alumno->apellido }}</td>
                                <td>{{ $alumno->email }}</td>
                                <td class="flex justify-center gap-2">
                                    <a href="{{ route('alumnos.edit', $alumno) }}" class="btn btn-square btn-ghost btn-sm">
                                        📝
                                    </a>
                                    <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-square btn-ghost btn-sm text-error">
                                            ❌
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center italic text-gray-500">No hay alumnos registrados.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
