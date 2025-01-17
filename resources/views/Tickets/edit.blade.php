<x-app-layout>  

    <style scoped>
        body {
            color: black;
        }

        * {
            font-family: "Poppins", serif;
            font-weight: 500;
        }
    </style>

    <div>
        <form method="post" action="{{ route('tickets.update', $ticket->id) }}">
            @csrf
            @method('PUT')
            <input type="text" name="assunto" id="assunto" placeholder="Assunto" value="{{$ticket->assunto}}">
            <input type="text" name="descricao" id="descricao" placeholder="Descrição" value="{{$ticket->descricao}}">
            <select name="status_id" id="status_id">
                @foreach($status as $statu)
                <option value="{{ $statu->id }}">{{$statu->status}}</option>
                @endforeach
            </select>
            <select name="tecnico_id" id="tecnico_id" value="{{$ticket->tecnico}}">
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{$user->name}}</option>
                @endforeach
            </select>
            <button type="submit">Salvar</button>
        </form>
    </div>

    <script>
        $("#status_id").val({{ $ticket->status_id }});
    </script>
    
</x-app-layout>