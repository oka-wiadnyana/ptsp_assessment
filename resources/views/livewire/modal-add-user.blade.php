<x-modal :show="$show">
    <x-slot:formTitle>
        Tambah User
    </x-slot:formTitle>
    <x-partial.form formRoute="reference.insert_user">
        <x-partial.input labelName="Nama" inputType="text" inputName="name" />
        <x-partial.input labelName="Username" inputType="text" inputName="username" />
        <x-partial.input labelName="Password" inputType="password" inputName="password" />
        <x-partial.input labelName="Konf. Password" inputType="password" inputName="password_confirmation" />
      
        <x-partial.button buttonType="submit" buttonText="Simpan" class="btn btn-primary"/>
        <x-partial.button-close-modal/>
    </x-partial.form>

</x-modal>