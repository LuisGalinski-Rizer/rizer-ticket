<x-app-layout>  

    <style scoped>
        body {
            color: black;
        }

        * {
            font-family: "Poppins", serif;
            font-weight: 500;
        }

        .form-edit {
            display: flex;
            justify-content: center;
            padding: 5%
        }
    </style>

    @if (session('error'))
        <div class="alert alert-danger d-flex align-items-center alert-error" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.964 0L.165 13.233c-.457.778.091 1.767.982 1.767h13.706c.89 0 1.439-.99.982-1.767L8.982 1.566zm-.854 4.905c.07-.57.728-.57.798 0l.35 2.857c.044.36-.216.678-.572.678h-1.292c-.356 0-.616-.318-.572-.678l.35-2.857zm.854 6.855a1.13 1.13 0 1 1-2.26 0 1.13 1.13 0 0 1 2.26 0z"/>
            </svg>
            <div>
                <strong>Algo deu errado!</strong>
                <ul class="mt-2 mb-0 ps-3">                        
                    <li>{{ session('error') }}</li>
                </ul>
            </div>
        </div>            
    @endif
    
    <div class="form-edit">
        <form method="post" action="{{ route('tickets.update', $ticket->id) }}">
            @csrf
            @method('PUT')
            <h1>Assunto</h1>
            <input type="text" name="assunto" id="assunto" placeholder="Assunto" value="{{$ticket->assunto}}"> <br>
            <h1>Descrição</h1>
            <input type="text" name="descricao" id="descricao" placeholder="Descrição" value="{{$ticket->descricao}}"> <br>
            <h1>Status</h1>
            <select name="status_id" id="status_id">
                @foreach($status as $statu)
                <option value="{{ $statu->id }}">{{$statu->status}}</option>
                @endforeach
            </select> <br>
            <h1>Técnico</h1>
            <select name="tecnico_id" id="tecnico_id" value="{{$ticket->tecnico}}">
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{$user->name}}</option>
                @endforeach
            </select> <br>
            <button class ="btn" type="submit">Salvar</button>
        </form>
    </div>

    <script>
        $("#status_id").val({{ $ticket->status_id }});
    </script>
    
</x-app-layout>