<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Alumno: {{ $alumno->nombre }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <form action="{{ route('alumnos.update', $alumno) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT') <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-bold">Nombre</span>
                        </label>
                        <input type="text" name="nombre" value="{{ old('nombre', $alumno->nombre) }}"
                               class="input input-bordered w-full focus:input-primary" required />
                    </div>

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-bold">Apellido</span>
                        </label>
                        <input type="text" name="apellido" value="{{ old('apellido', $alumno->apellido) }}"
                               class="input input-bordered w-full focus:input-primary" required />
                    </div>

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-bold">Email</span>
                        </label>
                        <input type="email" name="email" value="{{ old('email', $alumno->email) }}"
                               class="input input-bordered w-full focus:input-primary" required />
                    </div>

                    <div class="flex justify-end gap-2 mt-6">
                        <a href="{{ route('alumnos.index') }}" class="btn btn-ghost">Cancelar</a>
                        <button type="submit" class="btn btn-success text-white">
                            Actualizar Datos
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
