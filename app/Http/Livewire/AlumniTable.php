<?php

namespace App\Http\Livewire;

use App\Models\Alumni;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\AlumnisExport;
use Maatwebsite\Excel\Facades\Excel;
use Rap2hpoutre\FastExcel\FastExcel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class AlumniTable extends Component
{
    public $search;
    public $showingUserProfileCard = false;
    public $dataAlumni;
    protected $listeners = ['closeUserProfileCard'];
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function closeUserProfileCard()
    {
        $this->showingUserProfileCard = false;
    }
    public function showUserProfileCard(User $alumni)
    {
        $this->dataAlumni = $alumni;
        $this->showingUserProfileCard = true;
    }

    // public function downloadData()
    // {
    //     return Excel::download(new AlumnisExport, 'Alumni.xlsx');
    // }

    public function downloadPdfFile($namaFile): BinaryFileResponse
    {
        return response()->download(public_path("{$namaFile}"))->deleteFileAfterSend();
    }
    public function downloadData()
    {

        $namaFile = "Alumni.xlsx";

        (new fastexcel(Alumni::exportDataAlumni()))->export("{$namaFile}");

        return AlumniTable::downloadPdfFile("{$namaFile}");
    }

    public function render()
    {
        $dataAlumnis = Alumni::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('nim', 'like', $this->search . '%')
            ->orWhere('program_studi', 'like', '%' . $this->search . '%')
            ->orWhere('fakultas', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', $this->search . '%')
            ->orderBy('name')
            ->paginate(7);
        return view('livewire.alumni-table', [
            'dataAlumnis' => $dataAlumnis,
        ]);
    }
}