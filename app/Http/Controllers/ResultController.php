<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\ResultSatpam;
use App\Models\Schedule;
use App\Models\Signer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpWord\TemplateProcessor;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class ResultController extends Controller
{
    public function getResult(Request $request)
    {

        if ($request->ajax()) {
            $data = Result::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="" class="edit btn btn-success btn-sm" onclick="showModalEdit(\'show-modal-edit-officer\',' . $row->id . '); return false">Edit</a> <a href=""  onclick="deleteData(\'' . route('reference.destroy_officer') . '\',' . $row->id . ');return false" class="delete btn btn-danger btn-sm">Delete</a> ';
                    return $actionBtn;
                })
                ->addColumn('unit_name', function ($row) {

                    return $row->unitName->unit_name;
                })
                ->addColumn('officer_name', function ($row) {

                    return $row->officerName->name;
                })
                ->addColumn('officer_nip', function ($row) {

                    return $row->officerName->nip;
                })
                ->addColumn('officer_department', function ($row) {

                    return $row->officerName->department;
                })

                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function insertSatpam(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'satpam' => 'required',
                'result' => 'required',
                'result_komunikasi' => 'required',
                'result_kompetensi' => 'required',
            ]
        );

        if ($validate->fails()) {
            Alert::error('Validation Error', $validate->errors()->all());
            return back();
        }


        ResultSatpam::create([
            'assessment_date' => now()->format('Y-m-d'),
            'officer_id' => $request->satpam,
            'result' => $request->result,
            'result_komunikasi' => $request->result_komunikasi,
            'result_kompetensi' => $request->result_kompetensi,
            'evaluation' => $request->evaluation,

        ]);

        Alert::success('Success', __('messages.assessment'));
        return redirect('/satpam');
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make(
            $request->all(),
            [
                'officer' => 'required',
                'result' => 'required',
                'result_komunikasi' => 'required',
                'result_kompetensi' => 'required',
            ]
        );

        if ($validate->fails()) {
            Alert::error('Validation Error', $validate->errors()->all());
            return back();
        }


        Result::create([
            'assessment_date' => now()->format('Y-m-d'),
            'officer_id' => $request->officer,
            'result' => $request->result,
            'result_komunikasi' => $request->result_komunikasi,
            'result_kompetensi' => $request->result_kompetensi,
            'evaluation' => $request->evaluation,

        ]);

        Alert::success('Success', __('messages.assessment'));
        return redirect('/');
    }

    public function printReport(Request $request)
    {

        $validate = Validator::make(
            $request->all(),
            [
                'month' => ['required'],
                'year' => ['required'],
                'date' => ['required'],
                'pic_id' => ['required'],
                'higher_id' => ['required'],
            ]
        );

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->all());
            return back();
        }

        $result = Result::groupBy('officer_id')->select('officer_id', DB::raw('sum(result) as sum_res'), DB::raw('count(result) as count_res'), DB::raw('sum(result)/count(result) as avg'),)->whereMonth('assessment_date', $request->month)->whereYear('assessment_date', $request->year)->get();
        $dataPrint = [];
        if (!$result->isEmpty()) {

            $result = $result->sortByDesc('avg');

            $no = 1;

            foreach ($result as $res) {
                $dataPrint[] = [
                    'nomor' => $no++,
                    'nama' => $res->officerName->name,
                    'unit' => $res->unitName->unit_name,
                    'total' => $res->sum_res,
                    'jumlah' => $res->count_res,
                    'avg' => number_format($res->avg, '2', ',', '.'),
                ];
            }
        } else {
            $dataPrint[] = [
                'nomor' => '-',
                'nama' => '-',
                'unit' => '-',
                'total' => '-',
                'jumlah' => '-',
                'avg' => '-',
            ];
        }

        $pic = Signer::where('id', $request->pic_id)->first();
        $mengetahui = Signer::where('id', $request->higher_id)->first();



        // dd($dataPrint);




        $template = new TemplateProcessor(public_path('/template/template_laporan.docx'));
        $tanggalRead = Carbon::parse($request->date)->isoFormat('DD MMMM YYYY');
        $bulanRead = Carbon::create()->startOfMonth()->month($request->month)->isoFormat('MMMM');

        $template->setValue('bulan', Str::upper($bulanRead));
        $template->setValue('tahun', $request->year);
        $template->setValue('tanggal', $tanggalRead);
        $template->setValue('jabatan_mengetahui', $mengetahui->department);
        $template->setValue('nama_mengetahui', $mengetahui->name);
        $template->setValue('nip_mengetahui', $mengetahui->nip);

        $template->setValue('jabatan_pic', $pic->department);
        $template->setValue('nama_pic', $pic->name);
        $template->setValue('nip_pic', $pic->nip);


        $template->cloneRowAndSetValues('nomor', $dataPrint);



        header("Content-Disposition: attachment; filename=Form-Result-" . $request->month . "-" . $request->year . "-" . time() . ".docx");
        $pathToSave = 'php://output';
        $template->saveAs($pathToSave);
        return;
    }
}
