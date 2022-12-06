<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Beneficiarie;
use App\Connection;


class Newbenifiscreen extends Component
{
    public $connid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($connid)
    {
        $this->connid = $connid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.newbenifiscreen')
        ->with("connid",$this->connid)
        ->with("conn",Connection::find($this->connid))
        ->with('beneficiarie',Beneficiarie::all()->where('conn_id',$this->connid));
    }
}
