<?php

namespace App\Http\Livewire;

use App\Models\PenjaringAlumni;
use Livewire\Component;

class PenjaringanAlumni extends Component
{
    public $name, $jenis_kelamin, $program_studi, $fakultas, $nim, $phone_number, $email, $alamat, $tempat_kerja, $alamat_kerja, $posisi;

    public function render()
    {
        return view('livewire.penjaringan-alumni');
    }

    public function addData()
    {
        PenjaringAlumni::create([
            'name' => $this->name,
            'jenis_kelamin' => $this->jenis_kelamin,
            'program_studi' => $this->program_studi,
            'fakultas' => $this->fakultas,
            'nim' => $this->nim,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'alamat' => $this->alamat,
            'tempat_kerja' => $this->tempat_kerja,
            'alamat_kerja' => $this->alamat_kerja,
            'posisi' => $this->posisi
        ]);

        session()->flash('message', 'Data Berhasil Disimpan.');
    }
}