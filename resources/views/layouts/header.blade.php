<nav class="navbar navbar-light" style=background-color:white;>
        
    <style scoped>
        
        * {
            font-family: "Poppins", serif;
            font-weight: 500;
        }

        .navbar{
            color: #5a5a5a;
            font-size: 18px;
            letter-spacing: 1px;
            font-weight: 500;
        }

        .nav-item{
            margin-right: 20px;
        }

    </style>



<div class="container-md">
    <a class="navbar-brand" href="{{ route('dashboard') }}">
        <img src="https://rizer.com.br/img/rizer-sistemas.svg" alt="Logo" width="160" height="48" class="img-fluid logoRizer" style="height: 48px; margin-top: 7px;">
    </a>

    <ul>
        <a class="nav-item" href="{{ route('tickets.index') }}">Tickets</a>
        <a class="nav-item" href="{{ route('usuarios.index') }}">Usuários</a>
    </ul>

</div>

</nav>