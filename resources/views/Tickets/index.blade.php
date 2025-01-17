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


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tickets') }}
        </h2>
    </x-slot>

    <button>
        <a href="{{ route('tickets.create') }}">Cadastrar</a>
    </button>

    <table class="table table-stiped table-hover" id="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Assunto</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->assunto }}</td>
                    <td>{{ $ticket->descricao }}</td>
                    <td>{{ $ticket->created_at }}</td>
                    <td>{{ $ticket->status->status }}</td>
                    <td>
                        <a href="{{ route('tickets.show', $ticket->id) }}">
                            <button type="button" class="btn btn-success"><i class="fa-solid fa-eye" aria-hidden="true"></i></button>
                        </a>
                        <a href="{{ route('tickets.edit', $ticket->id )}}">
                            <button type="button" class="btn btn-warning"><i class="fa-solid fa-pencil" aria-hidden="true"></i></i></button>
                        </a>
                        <a href="">
                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash" aria-hidden="true"></i></i></button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script> 
        new DataTable('#table'); 
    </script>
    
</x-app-layout>