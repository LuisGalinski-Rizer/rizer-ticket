<x-app-layout>  

    <style scoped> 

        .div-table{
            background-color:white;
            border-radius: 10px;
            margin-top: 15px;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
           
        }

        .ajuste-tamanho-table {
            width: 90% !important;
            margin: 0 auto;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .visualizar,
        .editar,
        .deletar {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 25px;
            height: 25px;         
            color: white;
            border-radius: 5px;
            font-size: 15px;
            margin-right: 5px;
        }

        .visualizar {
            background-color: #0d6efd;
        }

        .editar {
            background-color: #198754;
        }

        .deletar {
            background-color: red;
        }

        .acoes {
            display: flex;
        }
            
    </style>

    <div class="div-table">
        <div class="ajuste-tamanho-table">
            <table class="table table-stiped table-hover" id="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">É técnico</th>
                        <th scope="col">Ativo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->tecnico ? "Sim" : "Não" }}</td>
                            <td>{{ $usuario->status ? "Ativo" : "Inativo" }}</td>
                            <td class="acoes">
                                <a href=" {{ route('usuarios.show', $usuario->id) }} " class="visualizar">
                                    <i class="fa-solid fa-eye" aria-hidden="true"></i>
                                </a>

                                <a href=" {{ route('usuarios.edit', $usuario->id) }} " class="editar">
                                    <i class="fa-solid fa-pencil" aria-hidden="true"></i>
                                </a>

                                <form action=" {{ route('usuarios.destroy', $usuario->id) }} " method="post" class="form-delecao">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="deletar">
                                        <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <button>
        <a href="{{ route('usuarios.create') }}">Cadastrar</a>
    </button>

    <script> 
        new DataTable('#table'); 
    </script>
    
</x-app-layout>