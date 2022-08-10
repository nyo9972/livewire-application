<?php

namespace App\Http\Livewire\Admin\Appointments;

use App\Models\Client;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Facades\Validator;

class CreateAppointmentForm extends Component
{
	public $state = [
		'status' => Appointment::STATUS_SCHEDULED,
        'order_position' => 0,
	];

	public function createAppointment()
	{
		Validator::make(
			$this->state,
			[
				'client_id' => 'required',
                'members' => 'required',
                'color' => 'required',
				'date' => 'required',
				'time' => 'required',
				'note' => 'nullable',
				'status' => 'required|in:AGENDADO,FECHADO',
			],
			[
				'client_id.required' => 'O campo cliente é obrigatório.'
			])->validate();

		Appointment::create($this->state);

		$this->dispatchBrowserEvent('alert', ['message' => 'Agendamento criado com sucesso!']);

        return redirect()->route('admin.appointments');
	}

    public function render()
    {
    	$clients = Client::all();

        return view('livewire.admin.appointments.create-appointment-form', [
        	'clients' => $clients,
        ]);
    }
}
