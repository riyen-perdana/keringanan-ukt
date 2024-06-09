<?php

namespace App\Livewire\Mahasiswa;

use Livewire\Component;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use App\Models\Jadwal;

use function Laravel\Prompts\table;

class MahasiswaIndex extends Component
{
    public function render()
    {
        $data = Jadwal::with('pengajuan')->get();
        return view('livewire.mahasiswa.index',[
            'data' => $data,
            'ajk' => false
        ]);
    }
}
