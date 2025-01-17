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

    <div class = "TicketView">
        <div class = "TicketContent">
            ID: {{$ticket->id}} <br>
            Assunto: {{$ticket->assunto}} <br>
            Descrição: {{$ticket->descricao}} <br>
            Data: {{$ticket->created_at}} <br>
            Status: {{$ticket->status->status}} <br>
        </div>
    </div>

    <script>
        $("#status_id").val({{ $ticket->status_id }});
    </script>
    
</x-app-layout>