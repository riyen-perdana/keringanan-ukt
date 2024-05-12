<?php

namespace App\Livewire\Pendaftar;

use Livewire\Component;
use App\Models\Jadwal;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;

class PendaftarModal extends Component
{
    public $id_pengajuan = '';

    public function render()
    {
        return view('livewire.pendaftar.pendaftar-modal');
    }

    public function resetForm()
    {
        $this->updateStatusPengajuan();
        $this->dispatch('close-modal', 'pendaftar-modal');
        $this->reset('id_pengajuan');
        $this->resetErrorBag();
        $this->resetValidation();
    }

    #[On('setVerifikasi')]
    public function setVerifikasi($data)
    {
        $this->id_pengajuan = $data['pengajuan'][0]['id'];
        // $this->id_pengajuan = $data
        $this->dispatch('open-modal', 'pendaftar-modal');
    }

    public function updateStatusPengajuan()
    {
        DB::connection();
        try {
            $pengajuan = Pengajuan::findOrFail($this->id_pengajuan);
            $pengajuan->update([
                'status' => 'ajk'
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            Db::rollBack();
        }
    }
}
