<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Illuminate\Validation\Rule;

use function PHPUnit\Framework\isNull;

class UserModal extends Component
{

    public ?User $user;

    public $headModal = 'Tambah';
    public $tombol = 'Simpan';

    // #[Validate('required', message: 'Kolom NIP PNS/PPPK/NON ASN Wajib Diisi')]
    // #[Validate('numeric', message: 'Kolom NIP PNS/PPPK/NON ASN Harus Angka')]
    // #[Validate('unique:users', message: 'Kolom NIP PNS/PPPK/NON ASN Sudah Ada')]
    public $nip = '';

    // #[Validate('required', message: 'Kolom Nama Pengguna Wajib Diisi')]
    public $name = '';

    // #[Validate('required', message: 'Kolom Kata Kunci Wajib Diisi')]
    // #[Validate('confirmed', message: 'Kolom Kata Kunci dan Ulangi Kata Kunci Tidak Sama')]
    // #[Validate('min:8', message: 'Kata Kunci Minimal 8 Karakter')]
    public $password = '';

    public $password_confirmation = '';

    // #[Validate('required', message: 'Kolom Email Wajib Diisi')]
    // #[Validate('unique:users', message: 'Kolom Email Sudah Ada')]
    // #[Validate('email', message: 'Kata Email Harus Menggunakan Format Email')]
    public $email = '';

    // #[Validate('required', message: 'Kolom Status Aktif Wajib Dipilih')]
    public $isAktif = '';

    // #[Validate('required', message: 'Kolom Hak Akses Wajib Dipilih')]
    public $akses = '';

    public function __construct()
    {
        $this->user = new User();
    }

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.user.user-modal');
    }

    public function save()
    {
        if ($this->user->nip) {

            //Update Data
            $validated = Validator::make(
                //Data to Validate
                [
                    'nip'       => $this->nip,
                    'name'      => $this->name,
                    'email'     => $this->email,
                    'password'  => bcrypt($this->password),
                    'is_aktif'  => $this->isAktif,
                    'akses'     => $this->akses
                ],
                [
                    'nip'       => 'required|numeric|unique:users,nip,'.$this->user.',id',
                    'name'      => 'required',
                    'password'  => 'nullable|confirmed|min:8',
                    'email'     => 'required|email|unique:users,email,'.$this->user.',id',
                    'is_aktif'  => 'required',
                    'akses'     => 'required'
                ],
                [
                    'nip.required'          => 'Kolom NIP PNS/PPPK/NON ASN Wajib Diisi',
                    'nip.numeric'           => 'Kolom NIP PNS/PPPK/NON ASN Harus Angka',
                    'nip.unique'            => 'Kolom NIP PNS/PPPK/NON ASN Sudah Ada',
                    'name.required'         => 'Kolom Nama Pengguna Wajib Diisi',
                    'password.confirmed'    => 'Kolom Kata Kunci dan Ulangi Kata Kunci Tidak Sama',
                    'password.min'          => 'Kata Kunci Minimal 8 Karakter',
                    'email.required'        => 'Kolom Email Wajib Diisi',
                    'email.email'           => ''
                ]
            );
        } else {
            //Tambah Data
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

                $this->dispatch('sweet-alert', icon: 'success', title: 'Data Pengguna Berhasil Ditambah');
                $this->dispatch('renderTable')->to(UserTable::class);
                $this->resetForm();
            } catch (\Throwable $th) {
                DB::rollBack();
                $this->dispatch('sweet-alert', icon: 'danger', title: 'Data Pengguna Gagal Ditambah');
            }
        }
    }

    public function resetForm()
    {
        $this->dispatch('close-modal', 'pengguna-modal');
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    #[On('setUser')]
    public function setUser(User $user)
    {
        $this->user         = $user;
        $this->nip          = $user->nip;
        $this->name         = $user->name;
        $this->email        = $user->email;
        $this->isAktif      = $user->is_aktif;
        $this->akses        = $user->akses;
        $this->headModal    = 'Edit';
        $this->tombol       = 'Ubah';
        $this->dispatch('open-modal', 'pengguna-modal');
    }
}
