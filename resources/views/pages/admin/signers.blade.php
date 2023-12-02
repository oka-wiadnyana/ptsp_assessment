<?php 

use function Laravel\Folio\name;

name('ref.signers'); 

?>
<x-main>
    <div class="card col p-4" >
        <div class="row mb-3"><h1>Daftar Penandatangan</h1></div>
        <div class="row mb-3">
            <div class="col">
                
                <x-partial.button buttonType="button" buttonText="Tambah petugas" onClick="showModalAdd('show-modal-add-signer'); return false" class="btn btn-primary"/>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
        
                    </tbody>
                 </table>
            </div>
        
        </div>
      </div>

      <livewire:modal-add-signer />
      <livewire:modal-edit-signer />

      <script src="{{ asset('myjs/func.js') }}"></script>
      <script>
        $(function() {

            var table = $('.table').DataTable({
                processing: true,
                serverSide: true,
                responsive:true,
                ajax: "{{ route('reference.get_signer') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                   
                    {
                        data: 'name',
                        name: 'name'
                    },
                    
                    {
                        data: 'nip',
                        name: 'nip'
                    },
                    
                    {
                        data: 'department',
                        name: 'department'
                    },
                    
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });


        
    </script>
 
</x-main>