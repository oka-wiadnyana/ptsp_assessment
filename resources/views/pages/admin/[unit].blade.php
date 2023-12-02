<?php 

use function Laravel\Folio\name;

name('ref.schedule'); 

?>
<x-main>
    <div class="card col p-4" >
        <div class="row mb-3">
            <div class="col">
                <x-partial.button buttonType="button" buttonText="Tambah jadwal piket" onClick="showModalAdd('show-modal-add-shedule'); return false" class="btn btn-primary"/>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Unit</th>
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

      <livewire:modal-add-officer />
      <script src="{{ asset('myjs/func.js') }}"></script>
      <script>
        $(function() {

            var table = $('.table').DataTable({
                processing: true,
                serverSide: true,
                responsive:true,
                ajax: "{{ route('reference.get_schedule',['unit_id'=>$unit]) }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                   
                    {
                        data: 'schedule_date',
                        name: 'schedule_date'
                    },
                    {
                        data: 'officer_name',
                        name: 'officer_name'
                    },
                    {
                        data: 'officer_nip',
                        name: 'officer_nip'
                    },
                    {
                        data: 'unit_name',
                        name: 'unit_name'
                    },
                    {
                        data: 'officer_department',
                        name: 'officer_department'
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