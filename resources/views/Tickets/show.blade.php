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
            Data: {{ (new DateTime($ticket->created_at))->format('d/m/Y H:i:s')}} <br>
            Status: {{$ticket->status->status}} <br>
        </div>
    </div>

    <script>
        $("#status_id").val({{ $ticket->status_id }});
    </script>
    
</x-app-layout>