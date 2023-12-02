<x-modal :show="$show">
    <x-slot:formTitle>
        Edit Petugas
    </x-slot:formTitle>
    <x-partial.form formRoute="reference.insert_officer">
        <x-partial.input labelName="Nama" inputType="text" inputName="name" :inputValue="$officer?->name"/>
        <x-partial.input labelName="Nama Pendek" inputType="text" inputName="nick_name" :inputValue="$officer?->nick_name"/>
        <x-partial.input labelName="NIP" inputType="text" inputName="nip" :inputValue="$officer?->nip"/>
        <x-partial.input labelName="Jabatan" inputType="text" inputName="department" :inputValue="$officer?->department"/>
        <x-partial.select-input selectName="unit_id" selectLabel="Jabatan" :selectValue="$units" optValue="id" optText="unit_name" :optUpdateValue="$officer?->unit_id"/>
            <x-partial.input labelName="Foto" inputType="file" inputName="foto" />
        <x-partial.plain-input inputType="hidden" inputName="id" :inputValue="$officer?->id"/>
        <x-partial.plain-input inputType="hidden" inputName="foto_lama" :inputValue="$officer?->foto"/>
        <x-partial.button buttonType="submit" buttonText="Simpan" class="btn btn-primary"/>
        <x-partial.button-close-modal/>
    </x-partial.form>

</x-modal>