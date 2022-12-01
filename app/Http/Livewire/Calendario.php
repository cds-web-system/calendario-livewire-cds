<?php

namespace App\Http\Livewire;

use App\Models\EventosCelendario;
use Livewire\Component;

class Calendario extends Component
{
    public $titulo = 'teste controller';
    public $inicio = '2022-12-01 10:40:00';
    public $fim    = '2022-12-01 10:55:00';

    public  function mount()
    {

        $eventos = EventosCelendario::all();
        dd($eventos);

        $this->titulo;
        $this->inicio;
        $this->fim;
    }
    
    public function render()
    {
        return view('livewire.calendario', ['titulo' => $this->titulo]);
    }
}
