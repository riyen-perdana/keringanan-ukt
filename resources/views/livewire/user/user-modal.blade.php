<div>
    <x-modal name='pengguna-modal'>
        <h2 class="px-6 pt-4 font-semibold text-gray-900 text-normal dark:text-gray-100">
            {{ __('Tambah Pengguna') }}
        </h2>
        <form class="px-6 pt-6 pb-4 mb-4 bg-white rounded" wire:submit="save">
            @csrf
            <div class="grid grid-cols-1 gap-4 mb-2 sm:grid-cols-2">
                <div>
                    <x-input-label for="nip" :value="__('NIP PNS/PPPK/NON ASN')" class="mb-2 font-semibold" />
                    <x-text-input wire:model="nip" id="nip"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        type="text" name="nip" required />
                    <x-input-error :messages="$errors->get('nip')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="name" :value="__('Nama Pengguna')" class="mb-2 font-semibold" />
                    <x-text-input wire:model="name" id="name"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        type="text" name="name" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 mb-2 sm:grid-cols-2">
                <div>
                    <x-input-label for="password" :value="__('Kata Kunci')" class="mb-2 font-semibold" />
                    <x-text-input wire:model="password" id="password"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        type="password" name="password" required autofocus />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="password_confirmation" :value="__('Ulangi Kata Kunci')"
                        class="mb-2 font-semibold" />
                    <x-text-input wire:model="password_confirmation" id="password_confirmation"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        type="password" name="password_confirmation" required />
                </div>
            </div>
            <div class="mb-2">
                <x-input-label for="email" :value="__('Email')"
                    class="mb-2 font-semibold" />
                <x-text-input wire:model="email" id="Email"
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    type="text" name="email" required email />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="grid grid-cols-1 gap-4 mb-2 sm:grid-cols-2">
              <div>
                  <x-input-label for="isAktif" :value="__('Status Aktif')" class="mb-2 font-semibold" />
                  <select wire:model="isAktif" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border border-gray-300 rounded shadow appearance-none focus:border-indigo-500 focus:ring-indigo-500 focus:outline-none focus:shadow-outline">
                    <option value="">{{ __('Pilih Status Aktif') }}</option>
                    <option value="Y">{{ __('Aktif') }}</option>
                    <option value="N">{{ __('Tidak Aktif') }}</option>
                  </select>
                  <x-input-error :messages="$errors->get('isAktif')" class="mt-2" />
              </div>
              <div>
                  <x-input-label for="akses" :value="__('Hak Akses')" class="mb-2 font-semibold" />
                  <select wire:model="akses" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border border-gray-300 rounded shadow appearance-none focus:border-indigo-500 focus:ring-indigo-500 focus:outline-none focus:shadow-outline">
                    <option value="">{{ __('Pilih Hak Akses') }}</option>
                    <option value="adm">{{ __('Administrator') }}</option>
                    <option value="keu">{{ __('Keuangan') }}</option>
                    <option value="op">{{ __('Operator') }}</option>
                  </select>
                  <x-input-error :messages="$errors->get('akses')" class="mt-2" />
              </div>
            </div>
            <div class="flex items-center justify-end mt-10 gap-x-2">
                <x-primary-button wire:loading.attr="disabled">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    {{ __('Simpan') }}
                </x-primary-button>
                {{-- <x-secondary-button x-on:click="$dispatch('close-modal','pengguna-modal')"> --}}
                <x-secondary-button wire:click="resetForm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                      {{ __('Batal') }}
                </x-secondary-button>
            </div>
        </form>
    </x-modal>
</div>
