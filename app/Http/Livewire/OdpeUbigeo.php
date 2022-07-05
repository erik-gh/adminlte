<?php

namespace App\Http\Livewire;

//use App\Models\Departamento;
//use App\Models\Ubigeo;
use App\Models\Odpe;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OdpeUbigeo extends Component
{
    public $odpe, $departamento, $provincia, $distrito ;
    public $odpes = null, $departamentos = null, $provincias = null, $distritos = null;

    public function mount(){
        $this->odpes = Odpe::all();
        $this->departamentos = collect();
        $this->provincias = collect();
        $this->distritos = collect();
    }
    public function updatedOdpe($v_odpe){
        sleep(2);
//        $this->ubigeos = Ubigeo::where('id_odpe', $value)->get();
        $this->departamentos = DB::table('odpes')
            ->select('departamentos.id', 'departamentos.descripcion')
            ->distinct()
            ->join('ubigeos','odpes.id','=','ubigeos.id_odpe')
            ->join('departamentos','ubigeos.id_departamento','=','departamentos.id')
            ->where('odpes.id',$v_odpe)
            ->get();
        $this->departamento = NULL;
//        $this->departamento = $this->departamentos->first()->id ?? null;
    }
    public function updatedDepartamento($v_departamento){
        sleep(2);
//        $this->ubigeos = Ubigeo::where('id_odpe', $value)->get();
        if (!is_null($v_departamento)) {
            $this->provincias = DB::table('ubigeos')
                ->select('provincias.id', 'provincias.descripcion')
                ->distinct()
                ->join('provincias','ubigeos.id_provincia','=','provincias.id')
                ->where('ubigeos.id_departamento',$v_departamento)
                ->get();
        }

//        $this->provincia = NULL;
//        $this->provincia = $this->provincias->first()->id ?? null;
    }

/*    public function updatedSelectProvincia($value){
//        $this->ubigeos = Ubigeo::where('id_odpe', $value)->get();
        $this->provincias = DB::table('ubigeos')
            ->distinct()
            ->select('provincias.id', 'provincias.descripcion')
            ->join('provincias','ubigeos.id_provincia','=','provincias.id')
            ->where('ubigeos.id_departamento','=',$value)
            ->get();
        $this->provincia = $this->provincias->first()->id ?? null;
    }*/
    public function render()
    {
        return view('livewire.odpe-ubigeo');
    }
}
