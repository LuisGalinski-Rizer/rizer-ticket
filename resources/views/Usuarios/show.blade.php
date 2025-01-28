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

    <div class = "UsuariosView">
        <div class = "UsuarioContent">
            ID: {{$usuarios->id}} <br>
            Nome: {{$usuarios->name}} <br>
            Telefone: {{$usuarios->telefone}} <br>
            E-mail: {{$usuarios->email}} <br>
            Data Criação: {{ (new DateTime($usuarios->created_at))->format('d/m/Y H:i:s')}} <br>
            Status:  {{$usuarios->status}} <br>
            É técnico: {{$usuarios->tecnico}} <br>

        </div>
    </div>

</x-app-layout>