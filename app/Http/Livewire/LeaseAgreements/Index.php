<?php
namespace App\Http\Livewire\LeaseAgreements;
use App\Models\LeaseAgreement;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function paginationView()
    {
        return 'livewire.components.pagination';
    }

    public $search = "";
    public $perPage = 2;
    public $levels_filter = [];

    public $statuslabel = [
        0 => 'پیش انتظار',
        1 => 'درانتظار ثبت',
        2 => 'ماده 2',
        3 => 'ماده 3',
        4 => 'ماده 4',
        5 => 'ماده 5',
        6 => 'ماده 6',
        7 => 'ماده 7',
        8 => 'ماده 8',
        9 => 'ماده 9',
        10 => 'ماده 10',
        11 => 'تکمیل شده',
    ];

    public function loadLevels()
    {
        $this->levels_filter = [...LeaseAgreement::pluck('level')->unique()];
    }

    public function refreshPage()
    {
        $this->search = "";
        $this->levels_filter = [...LeaseAgreement::pluck('level')->unique()];
        self::setPage(1);
    }

    public function getContract()
    {
        return LeaseAgreement::orderBy("created_at", "desc")
            ->where("file_number", "like", "%$this->search%")
            ->whereIn('level', [...$this->levels_filter]);
    }

    public function getExistLevel()
    {
        return LeaseAgreement::pluck('level')->unique();
    }

    public function gotoFirstPage($contracts)
    {
        if (ceil($contracts->count() / $this->perPage) < $this->page)
            self::setPage(1);
    }

    public function render()
    {
        $lease_agreements = $this->getContract()->paginate($this->perPage);
        $this->gotoFirstPage($lease_agreements);
        $levels = $this->getExistLevel()->sort();

//        $buyers=$contracts
        return view('livewire.lease-agreements.index',
            [
                ...compact('levels'),
                ...compact('lease_agreements')
            ])
            ->layout('components.layouts.app');
    }
}
