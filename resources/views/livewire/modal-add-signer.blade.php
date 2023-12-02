<x-modal :show="$show">
    <x-slot:formTitle>
        Tambah Penandatangan
    </x-slot:formTitle>
    <x-partial.form formRoute="reference.insert_signer">
        <x-partial.input labelName="Nama" inputType="text" inputName="name" />
      
        <x-partial.input labelName="NIP" inputType="text" inputName="nip" />
        <x-partial.input labelName="Jabatan" inputType="text" inputName="department" />
      
      
        <x-partial.button buttonType="submit" buttonText="Simpan" class="btn btn-primary"/>
        <x-partial.button-close-modal/>
    </x-partial.form>

</x-modal>