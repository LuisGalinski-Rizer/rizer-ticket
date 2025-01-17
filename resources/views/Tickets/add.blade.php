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
        <form method="post" action="{{ route('tickets.store') }}">
            @csrf
            <input type="text" name="assunto" id="assunto" placeholder="Assunto">
            <input type="text" name="descricao" id="descricao" placeholder="Descrição">
            <select name="status_id" id="status_id">
                @foreach($status as $statu)
                <option value="{{ $statu->id }}">{{$statu->status}}</option>
                @endforeach
            </select>
            <select name="tecnico_id" id="tecnico_id">
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{$user->name}}</option>
                @endforeach
            </select>
            <button type="submit">Salvar</button>
        </form>
    </div>

    
</x-app-layout>