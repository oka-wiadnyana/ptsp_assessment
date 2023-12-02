<x-modal :show="$show">
    <x-slot:formTitle>
        Cetak Laporan
    </x-slot:formTitle>
    <x-partial.form formRoute="result.print_report">
        <x-partial.select-input selectLabel="Bulan" selectName="month" :selectValue=$month selectPlaceHolder="Bulan" optValue='id' optText='name' :optUpdateValue=$filterMonth class="m-0" wire:model="filterMonth"/>
        <x-partial.select-input selectLabel="Tahun" selectName="year" :selectValue=$year selectPlaceHolder="Tahun" optValue='name' optText='name' :optUpdateValue=$filterYear class="m-0" wire:model="filterMonth"/>
        <x-partial.input labelName="Tgl Lap" inputType="date" inputName="date" />
      
        <x-partial.select-input selectName="pic_id" selectLabel="PIC" :selectValue="$signer" optValue="id" optText="name" />
        <x-partial.select-input selectName="higher_id" selectLabel="Mengetahui" :selectValue="$signer" optValue="id" optText="name" />
        <x-partial.button buttonType="submit" buttonText="Cetak" class="btn btn-primary"/>
        <x-partial.button-close-modal/>
    </x-partial.form>

</x-modal>