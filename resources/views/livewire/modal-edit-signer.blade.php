<x-modal :show="$show">
    <x-slot:formTitle>
        Edit Penandatangan
    </x-slot:formTitle>
    <x-partial.form formRoute="reference.insert_signer">
        <x-partial.input labelName="Nama" inputType="text" inputName="name" :inputValue="$signer?->name"/>
        
        <x-partial.input labelName="NIP" inputType="text" inputName="nip" :inputValue="$signer?->nip"/>
        <x-partial.input labelName="Jabatan" inputType="text" inputName="department" :inputValue="$signer?->department"/>
       
        <x-partial.plain-input inputType="hidden" inputName="id" :inputValue="$signer?->id"/>
        
        <x-partial.button buttonType="submit" buttonText="Simpan" class="btn btn-primary"/>
        <x-partial.button-close-modal/>
    </x-partial.form>

</x-modal>