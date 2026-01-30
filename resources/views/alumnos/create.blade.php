<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrar Nuevo Alumno
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <form action="{{ route('alumnos.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div class="form-control w-full">
                        <label class="label"><span class="label-text font-bold">Nombre</span></label>
                        <input type="text" name="nombre" placeholder="Ej. Juan" class="input input-bordered w-full" required />
                    </div>

                    <div class="form-control w-full">
                        <label class="label"><span class="label-text font-bold">Apellido</span></label>
                        <input type="text" name="apellido" placeholder="Ej. Pérez" class="input input-bordered w-full" required />
                    </div>

                    <div class="form-control w-full">
                        <label class="label"><span class="label-text font-bold">Email</span></label>
                        <input type="email" name="email" placeholder="juan@ejemplo.com" class="input input-bordered w-full" required />
                    </div>

                    <div class="flex justify-end gap-2 mt-6">
                        <a href="{{ route('alumnos.index') }}" class="btn btn-ghost">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar Alumno</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
