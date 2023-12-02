<?php 

use function Laravel\Folio\name;

name('ref.officers'); 

?>
<x-main>
    <div class="card col p-4" >
        <div class="row mb-3"><h1>Daftar Pegawai</h1></div>
        <div class="row mb-3">
            <div class="col">
                
                <x-partial.button buttonType="button" buttonText="Tambah petugas" onClick="showModalAdd('show-modal-add-officer'); return false" class="btn btn-primary"/>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nama Pendek</th>
                            <th>NIP</th>
                            <th>Unit</th>
                            <th>Jabatan</th>
                            <th>Active</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
        
                    </tbody>
                 </table>
            </div>
        
        </div>
      </div>

      <livewire:modal-add-officer />
      <livewire:modal-edit-officer />

      <script src="{{ asset('myjs/func.js') }}"></script>
      <script>
        $(function() {

            var table = $('.table').DataTable({
                processing: true,
                serverSide: true,
                responsive:true,
                ajax: "{{ route('reference.get_officer') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                   
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'nick_name',
                        name: 'nick_name'
                    },
                    {
                        data: 'nip',
                        name: 'nip'
                    },
                    {
                        data: 'unit_name',
                        name: 'unit_name'
                    },
                    {
                        data: 'department',
                        name: 'department'
                    },
                    {
                        data: 'active',
                        name: 'active'
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