<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\ContractOfSalePerson;
use App\Models\Person;
use Carbon\Carbon;
use Livewire\Component;
class Add extends Component
{
    public $errorFileNumber;
    public $fileNumber;
    public $level=0;
    public $addLawyer=false;

    public $people;

    public $idCusLawyer;
    public $idCusLawyerStatus;

    public $selectedBuyer;
    public $selectedSeller;
    public $selectedLawyer;

    public $searchLawyer;
    public $searchBuyer;
    public $searchSeller;
    public $searchResultBuyer;
    public $searchResultSeller;
    public $searchResultLawyer;
    public $people_selectedBuyer=[];
    public $people_selectedSeller=[];
    public $id_selectedLawyer=[];
    public $id_selectedBuyer=[];
    public $id_selectedSeller=[];

    protected $listeners = [
        'selectedItemBuyer',
        'removeItemBuyer',
        'selectedItemSeller',
        'removeItemSeller',
        'selectedItemLawyer',
        'level0',
        'level1',
        'level2',
        'level3',
        'level4',
        'showLawyerBox',
        'hideLawyerBox',
        'level1Action'=>'level1',
        'level2Action'=>'level2',
        'level3Action'=>'level3',
        'finalAction'
        ];

    public function level0()
    {

        $this->level=0;
    }

    public function level1()
    {
        if ($this->searchFileNumber()){
            if (!empty(trim($this->fileNumber))){
                $this->errorFileNumber=null;
                $this->level=1;
            }
            else
                $this->errorFileNumber='!!!  لطفا کد یا شماره پرونده را وارد کنید  !!!';
        }
        else
            $this->errorFileNumber='!!!  این شماره پرونده از قبل وجود دارد . لطفا شماره پرونده دیگری را امتحان کنید  !!!';
    }
    public function level2()
    {
        if (count($this->people_selectedBuyer)>0)
            $this->level=2;
    }
    public function level3()
    {
        if (count($this->people_selectedSeller)>0)
        $this->level=3;
    }
    public function finalAction()
    {
        $now=[
            'created_at' => Carbon::createFromTimestamp(time())->format("Y/m/d H:i:s",'Asia/Tehran'),
            'updated_at' => Carbon::createFromTimestamp(time())->format("Y/m/d H:i:s",'Asia/Tehran')
        ];

        $this->level=4;
        $fileNumber= $this->fileNumber;
        $contract_id=ContractOfSale::insertGetId([
            'file_number'=>$fileNumber,
            'level'=>2,
            ...$now
        ]);
        $customers=[];
        foreach ($this->people_selectedBuyer as $people){
            $customers[]=[
                'contract_of_sale_id' => $contract_id,
                'person_id' =>  $people['id'],
                'is_buyer' =>  true ,
                'lawyer_id' =>  ($people['lawyer'])?$people['lawyer']['id']:$people['lawyer'],
                ...$now
            ];
        }
        foreach ($this->people_selectedSeller as $people){
            $customers[]=[
                'contract_of_sale_id' => $contract_id,
                'person_id' =>  $people['id'],
                'is_buyer' =>  false ,
                'lawyer_id' =>  ($people['lawyer'])?$people['lawyer']['id']:$people['lawyer'],
                ...$now
            ];
        }
        ContractOfSalePerson::insert($customers);
        redirect()->route('sales.level2',['contractOfSale'=>$contract_id]);
    }

    public function searchFileNumber(){
        return ContractOfSale::find($this->fileNumber) == null ;
    }
    public function searchPeople($value){
        if (!empty($value)){
            return Person::orderBy("lastname", "asc")
                ->where("firstname", "like", "%$value%")
                ->orWhere("lastname", "like", "%$value%")
                ->orWhere("national_code", "like", "%$value%")->get();
        }else{
            return null;
        }
    }
    public function updatedSearchLawyer():void
    {
        $this->searchResultLawyer = $this->searchPeople($this->searchLawyer);
    }
    public function updatedSearchBuyer():void
    {
        $this->searchResultBuyer = $this->searchPeople($this->searchBuyer);
    }

    public function updatedSearchSeller():void
    {
        $this->searchResultSeller = $this->searchPeople($this->searchSeller);
    }

    public function searchItemInArray(int $id,array $array):null|int{
        if (in_array($id,$array)) {
            if (($key = array_search($id, $array)) !== false) {
                return $key;
            }
        }
        return null;
    }
    public function showLawyerBox(int $id,string $status='Buyer'){
        $this->idCusLawyerStatus=$status;
        $this->idCusLawyer=$id;
        $this->addLawyer=true;
        }
    public function hideLawyerBox(){
        $this->addLawyer=false;
        $this->idCusLawyer=null;
        $this->idCusLawyerStatus=0;
        $this->searchResultLawyer=null;
        $this->id_selectedLawyer=null;
        $this->searchLawyer=null;
        }
    public function removeItemBuyer(int $id){
            if (($key = $this->searchItemInArray($id,$this->id_selectedBuyer)) !== null) {
                unset($this->id_selectedBuyer[$key]);
                unset($this->people_selectedBuyer[$id]);
            }
        }
    public function removeItemSeller(int $id){
        if (($key = $this->searchItemInArray($id,$this->id_selectedSeller)) !== null) {
            unset($this->id_selectedSeller[$key]);
            unset($this->people_selectedSeller[$id]);
        }
    }

    public function createArrayLawyer($id,$firstname,$lastname,$national_code)
    {
        return [
            'id' => $id,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'national_code' => $national_code,
        ];
    }
    public function selectedItemLawyer(int $id=null)
    {
        $id_add=(!is_null($id))?$id:$this->selectedLawyer;
        if (!empty($id_add)) {
            $person = Person::find($id_add);
                if ($this->idCusLawyerStatus == 'Buyer') {
                $this->people_selectedBuyer[$this->idCusLawyer]['lawyer'] = $this->createArrayLawyer(
                    $person->id,$person->firstname,$person->lastname,$person->national_code,
                );
            } elseif ($this->idCusLawyerStatus == 'Seller') {
                $this->people_selectedSeller[$this->idCusLawyer]['lawyer'] =  $this->createArrayLawyer(
                    $person->id,$person->firstname,$person->lastname,$person->national_code,
                );
            }
            $this->hideLawyerBox();
        }
    }

    public function createArray($id,$firstname,$lastname,$national_code,$lawyer=null){
        return [
            'id' => $id,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'national_code' => $national_code,
            'lawyer'=> $lawyer
        ];
    }
    public function selectedItemBuyer(int $id=null)
    {
        $id_add=(!is_null($id))?$id:$this->selectedBuyer;
        if (!empty($id_add)){
            if (!in_array($id_add,$this->id_selectedBuyer)){
                $person=Person::find($id_add);
                array_push($this->id_selectedBuyer,$person->id);
                $this->people_selectedBuyer[$person->id] = $this->createArray(
                    $person->id,
                    $person->firstname,
                    $person->lastname,
                    $person->national_code
                );

            }
        }
    }

    public function selectedItemSeller(int $id=null)
    {
        $id_add=(!is_null($id))?$id:$this->selectedSeller;
        if (!empty($id_add)){
            if (!in_array($id_add,$this->id_selectedSeller)){
                $person=Person::find($id_add);
                 array_push($this->id_selectedSeller,$person->id);
                $this->people_selectedSeller[$person->id] =  $this->createArray(
                    $person->id,
                    $person->firstname,
                    $person->lastname,
                    $person->national_code
                );
            }
        }
    }
    public function mount(){
        $this->people=Person::all();
    }
    public function render()
    {
        return view('livewire.contract-of-sales.add')
            ->layout('components.layouts.app');
    }
}
