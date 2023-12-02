<?php 

use function Laravel\Folio\name;

name('ref.users'); 

?>
<x-main>
    <div class="card col p-4" >
        <div class="row mb-3"><h1>Daftar Pegawai</h1></div>
        <div class="row mb-3">
            <div class="col">
                
                <x-partial.button buttonType="button" buttonText="Tambah user" onClick="showModalAdd('show-modal-add-user'); return false" class="btn btn-primary"/>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
        
                    </tbody>
                 </table>
            </div>
        
        </div>
      </div>

      <livewire:modal-add-user />
      <livewire:modal-edit-user />

      <script src="{{ asset('myjs/func.js') }}"></script>
      <script>
        $(function() {

            var table = $('.table').DataTable({
                processing: true,
                serverSide: true,
                responsive:true,
                ajax: "{{ route('reference.get_user') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                   
                    {
                        data: 'name',
                        name: 'name'
                    },
                   
                    {
                        data: 'username',
                        name: 'username'
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