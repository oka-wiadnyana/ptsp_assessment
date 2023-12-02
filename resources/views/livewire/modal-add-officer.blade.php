<x-modal :show="$show">
    <x-slot:formTitle>
        Tambah Petugas
    </x-slot:formTitle>
    <x-partial.form formRoute="reference.insert_officer">
        <x-partial.input labelName="Nama" inputType="text" inputName="name" />
        <x-partial.input labelName="Nama Pendek" inputType="text" inputName="nick_name" />
        <x-partial.input labelName="NIP" inputType="text" inputName="nip" />
        <x-partial.input labelName="Jabatan" inputType="text" inputName="department" />
        <x-partial.select-input selectName="unit_id" selectLabel="Unit" :selectValue="$units" optValue="id" optText="unit_name" />
        <x-partial.input labelName="Foto" inputType="file" inputName="foto" />
        <x-partial.button buttonType="submit" buttonText="Simpan" class="btn btn-primary"/>
        <x-partial.button-close-modal/>
    </x-partial.form>

</x-modal>