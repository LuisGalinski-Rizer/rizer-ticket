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
        <form method="post" action="{{ route('usuarios.update', $usuarios->id) }}">
            @csrf
            @method('PUT')
            <input type="text" name="name" id="name" placeholder="Nome" value="{{$usuarios->name}}">
            <input type="text" name="email" id="email" placeholder="E-mail" value="{{$usuarios->email}}">
            <input type="password" name="password" id="password" placeholder="Senha" value="{{$usuarios->password}}">
            <input type="text" name="telefone" id="telefone" placeholder="Telefone" value="{{$usuarios->telefone}}">
            <select name="tecnico" id="tecnico" required>
                <option value="">Selecione...</option>
                <option value="1">Técnico</option>
                <option value="0">Usuário</option>
            </select>
            <select name="status" id="status" required>
                <option value="">Selecione...</option>
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
            <button type="submit">Salvar</button>
        </form>
    </div>

    
</x-app-layout>