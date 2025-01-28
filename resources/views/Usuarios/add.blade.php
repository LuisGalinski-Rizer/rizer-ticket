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
        <form method="post" action="{{ route('usuarios.store') }}">
            @csrf
            <input type="text" name="name" id="name" placeholder="Nome" required>
            <input type="email" name="email" id="email" placeholder="E-mail" required>
            <input type="password" name="password" id="password" placeholder="Senha" required>
            <input type="text" name="telefone" id="telefone" placeholder="Telefone" required>
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