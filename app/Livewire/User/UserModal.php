<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;

class UserModal extends Component
{

    public ?User $user;

    #[Validate('required', message: 'Kolom NIP PNS/PPPK/NON ASN Wajib Diisi')]
    #[Validate('numeric', message: 'Kolom NIP PNS/PPPK/NON ASN Harus Angka')]
    #[Validate('unique:users', message: 'Kolom NIP PNS/PPPK/NON ASN Sudah Ada')]
    public $nip = '';

    #[Validate('required', message: 'Kolom Nama Pengguna Wajib Diisi')]
    public $name = '';

    #[Validate('required', message: 'Kolom Kata Kunci Wajib Diisi')]
    #[Validate('confirmed', message: 'Kolom Kata Kunci dan Ulangi Kata Kunci Tidak Sama')]
    #[Validate('min:8', message: 'Kata Kunci Minimal 8 Karakter')]
    public $password = '';

    public $password_confirmation = '';

    #[Validate('required', message: 'Kolom Email Wajib Diisi')]
    #[Validate('unique:users', message: 'Kolom Email Sudah Ada')]
    #[Validate('email', message: 'Kata Email Harus Menggunakan Format Email')]
    public $email = '';

    #[Validate('required', message: 'Kolom Status Aktif Wajib Dipilih')]
    public $isAktif = '';

    #[Validate('required', message: 'Kolom Hak Akses Wajib Dipilih')]
    public $akses = '';

    public function render()
    {
        return view('livewire.user.user-modal');
    }

    public function save()
    {
        $this->validate();
        DB::beginTransaction();
        try {
            User::create([
                'nip'       => $this->nip,
                'name'      => $this->name,
                'email'     => $this->email,
                'password'  => bcrypt($this->password),
                'is_aktif'  => $this->isAktif,
                'akses'     => $this->akses
            ]);

            DB::commit();

            $this->dispatch('sweet-alert', icon:'success', title:'Data Pengguna Berhasil Ditambah');
            $this->resetForm();

        } catch (\Throwable $th) {
            DB::rollBack();
            $this->dispatch('sweet-alert', icon:'danger', title:'Data Pengguna Gagal Ditambah');

        }
    }

    public function resetForm()
    {
        $this->dispatch('close-modal','pengguna-modal');
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
