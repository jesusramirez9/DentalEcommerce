<x-admin-layout>
    
    <div class="max-w-4xl mx-auto py-12">
        <div class="card-body py-2 px-4 shadow-md">
            <div class="mb-4">
                <h1 class="font-semibold">Mensaje dirijido para:</h1>
                @foreach ($destinario as $item)
                    <p>{{ $item->name }}</p>
                @endforeach
            </div>
            <div class="mb-4">
                <div>
                    <h1 class="font-semibold">Este mensaje lo envia el administrador con el siguiente correo:</h1>
                    @foreach ($user as $item)
                        <p>{{ $item->email }}</p>
                    @endforeach
                </div>
            </div>
            <div class="mb-4">
                <x-jet-label class="font-bold">
                    Asunto
                </x-jet-label>
                {{ $message->subject }}
            </div>
            <div class="mb-4">
                <x-jet-label class="font-bold">
                    Mensaje
                </x-jet-label>
                {{ $message->body }}
            </div>

            <div class="mb-4 text-xs">
                <p>Nota:</p>
                <p>Cualquier duda o consulta comunicarse al siguiente correo</p>
                @foreach ($user as $item)
                    <p>{{ $item->email }}</p>
                    <p>{{ $item->name }}</p>
                @endforeach

            </div>

        </div>
    </div>

</x-admin-layout>
