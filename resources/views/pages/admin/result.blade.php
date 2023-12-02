<?php 

use function Laravel\Folio\name;


?>
<x-main>
    <div class="card col p-4" >
        <div class="row mb-3"><h1>Daftar Penilaian</h1></div>
        <div class="row mb-3">
            <div class="col">
                <x-partial.button buttonType="button" buttonText="Cetak Laporan" onClick="showModalAdd('show-modal-print-report'); return false" class="btn btn-primary"/>
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
                            <th>Nilai</th>
                           
                        </tr>
                    </thead>
                    <tbody>
        
                    </tbody>
                 </table>
            </div>
        
        </div>
      </div>

      <livewire:modal-print-report />
      <script src="{{ asset('myjs/func.js') }}"></script>
      <script>
        $(function() {

            var table = $('.table').DataTable({
                processing: true,
                serverSide: true,
                responsive:true,
                ajax: "{{ route('result.get_result') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                   
                    {
                        data: 'assessment_date',
                        name: 'assessment_date'
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
                        data: 'result',
                        name: 'result'
                    },
                   
                  
                ]
            });

        });

        
    </script>

</x-main>