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