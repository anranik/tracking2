<?php

namespace App\Http\Livewire;
use App\Models\Driver;
use Illuminate\Support\Carbon;
use Mediconesystems\LivewireDatatables\DateColumn;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Livewire\Component;

class LivewireDriverDatatable extends LivewireDatatable
{
    public $driver, $name, $username, $mobile, $password;

    public function render()
    {
        $this->driver = Driver::all();

        return view('livewire.livewire-driver-datatable');
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->mobile = '';
        $this->password = '';
        $this->password = '';
    }

    public function store()
    {
        $validation = $this->validate([
            'name'		=>	'required',
            'mobile'			=>	'required',
            'username'			=>	'required',
            'password'			=>	'required'
        ]);

        Driver::create($validation);

        session()->flash('message', 'Data Created Successfully.');

        $this->resetInputFields();

        $this->emit('userStore');
    }

    public function edit($id)
    {
        $data = Driver::findOrFail($id);
        $this->id = $id;
        $this->name = $data->name;
        $this->username = $data->username;
        $this->mobile = $data->mobile;
    }

    public function update()
    {
        $validate = $this->validate([
            'name'		=>	'required',
            'mobile'			=>	'required',
            'username'			=>	'required'
        ]);

        $data = Driver::find($this->data_id);

        $data->update([
            'username'       =>   $this->username,
            'mobile'         =>  $this->mobile,
            'name'            =>  $this->name
        ]);

        session()->flash('message', 'Data Updated Successfully.');

        $this->resetInputFields();

        $this->emit('userStore');
    }

    public function delete($id)
    {
        Driver::find($id)->delete();
        session()->flash('message', 'Data Deleted Successfully.');
    }


//    public $model = Driver::class;
//
//    function columns()
//    {
//        return [
//            NumberColumn::name('id')->label('ID')->sortBy('id'),
//            Column::name('name')->label('Name'),
//            Column::name('username')->label('Username'),
//            Column::name('mobile')->label('Mobile'),
//            DateColumn::name('created_at')->label('Creation Date'),
//            Column::callback(['id', 'name'], function ($id, $name) {
//                return view('table-actions', ['id' => $id, 'name' => $name]);
//            })->unsortable()
//        ];
//    }

}
