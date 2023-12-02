<x-modal :show="$show">
    <x-slot:formTitle>
        Tambah User
    </x-slot:formTitle>
    <x-partial.form formRoute="reference.edit_user">
        <x-partial.input labelName="Nama" inputType="text" inputName="name" :inputValue="$user?->name"/>
        <x-partial.input labelName="Username" inputType="text" inputName="username" :inputValue="$user?->username"/>
        <x-partial.input labelName="Password" inputType="password" inputName="password" />
        <x-partial.input labelName="Konf. Password" inputType="password" inputName="password_confirmation" />
        <x-partial.plain-input inputType="hidden" inputName="id" :inputValue="$user?->id" />
        
        <x-partial.button buttonType="submit" buttonText="Simpan" class="btn btn-primary"/>
        <x-partial.button-close-modal/>
    </x-partial.form>

</x-modal>