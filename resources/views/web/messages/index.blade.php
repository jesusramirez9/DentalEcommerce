<x-app-layout>
    
        <div class="max-w-4xl mx-auto py-12">
            <div class="py-2 px-4 shadow-lg">
    
           
            <form action="{{ route('admin.messages.store') }}" method="post">
                @csrf
    
                <div class="mb-4">
                    <x-jet-label>
                        Asunto
                    </x-jet-label>
                    <x-jet-input type="text" name="subject" value="{{old('subject')}}" placeholder="Ingrese un asunto" class="w-full" />
                    <x-jet-input-error for="subject" />
                </div>
    
                <div class="mb-4">
                    <x-jet-label>
                        Mensaje
                    </x-jet-label>
                    <textarea   class="border-gray-400 border-opacity-20 border-2 w-full rounded-lg shadow-md" name="body"
                        id="" cols="30" rows="6" placeholder="Escriba su mensaje">{{old('body')}}</textarea>
                        <x-jet-input-error for="body" />
                </div>
                <div class="mb-4">
                    <x-jet-label>
                        Destinatario
                    </x-jet-label>
                    <select name="to_user_id" class="border-gray-400 border-opacity-20 border-2 w-full rounded-lg shadow-md" id="">
                        <option value="" {{old('to_user_id') ? '' : 'selected'}} disabled>Seleccione un usuario</option>
                        @foreach ($users as $user)
                            <option {{old('to_user_id') == $user->id ? 'selected' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="to_user_id" />
                </div>
                <x-jet-button>
                    Enviar 
                </x-jet-button>
    
            </form>
        </div>
        </div>
    
    
</x-app-layout>