<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;
use App\Models\Status;
use App\Models\User;

class TicketController extends Controller
{
    public function index() {
        $tickets = Tickets::get();
        return view('tickets.index', ['tickets' => $tickets]);
    }

    public function create(){
        $status = Status::get();
        $users = User::get();
        return view('tickets.add', ['status' => $status, 'users' => $users]);
    }

    public function store(Request $request){
        $dados = $request->all();
        $tickets = New Tickets;
        $tecnico_id = "";

        if($dados["tecnico_id"] == "automatico") {
            $tecnico_id = User::minTicket();
        } else {
            $tecnico_id = $dados["tecnico_id"];
        }
        
        $tickets->assunto    = $dados["assunto"];
        $tickets->descricao  = $dados["descricao"];
        $tickets->status_id  = $dados["status_id"];
        $tickets->tecnico_id = $tecnico_id;
        $tickets->save();

        return redirect('tickets');
    }

    public function show($id){
        $ticket = Tickets::find($id); 
        $status = Status::get();
        return view('tickets.show', ['ticket' => $ticket, 'status' => $status]);
    }

    public function edit($id){
        $ticket = Tickets::find($id);
        $status = Status::get();
        $users = User::get();
        return view('tickets.edit', ['ticket' => $ticket, 'users' => $users, 'status' => $status]);
    }

    public function update(Request $request, $id){
        $dados = $request->all();
        $ticket = Tickets::find($id);

        $ticket->assunto    = $dados["assunto"];
        $ticket->descricao  = $dados["descricao"];
        $ticket->status_id  = $dados["status_id"];
        $ticket->tecnico_id = $dados["tecnico_id"];
        $ticket->save();

        return redirect('tickets');
    }

    public function destroy($id){
        $ticket = Tickets::find($id);
        $ticket->delete();

        return redirect('tickets');
    }

}