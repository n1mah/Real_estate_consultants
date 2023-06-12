<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use App\Models\LeaseAgreementPerson;
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

    public $selectedTenant;
    public $selectedLessor;
    public $selectedLawyer;

    public $searchLawyer;
    public $searchTenant;
    public $searchLessor;
    public $searchResultTenant;
    public $searchResultLessor;
    public $searchResultLawyer;
    public $people_selectedTenant=[];
    public $people_selectedLessor=[];
    public $id_selectedLawyer=[];
    public $id_selectedTenant=[];
    public $id_selectedLessor=[];

    protected $listeners = [
        'selectedItemTenant',
        'removeItemTenant',
        'selectedItemLessor',
        'removeItemLessor',
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
        if (count($this->people_selectedTenant)>0)
            $this->level=2;
    }
    public function level3()
    {
        if (count($this->people_selectedLessor)>0)
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
        $lease_id=LeaseAgreement::insertGetId([
            'file_number'=>$fileNumber,
            'level'=>2,
            ...$now
        ]);

        $customers=[];
        foreach ($this->people_selectedTenant as $people){
            $customers[]=[
                'lease_agreement_id' => $lease_id,
                'person_id' =>  $people['id'],
                'is_tenant' =>  true ,
                'lawyer_id' =>  ($people['lawyer'])?$people['lawyer']['id']:$people['lawyer'],
                ...$now
            ];
        }
        foreach ($this->people_selectedLessor as $people){
            $customers[]=[
                'lease_agreement_id' => $lease_id,
                'person_id' =>  $people['id'],
                'is_tenant' =>  false ,
                'lawyer_id' =>  ($people['lawyer'])?$people['lawyer']['id']:$people['lawyer'],
                ...$now
            ];
        }

        LeaseAgreementPerson::insert($customers);
        redirect()->route('rent.level2',['leaseAgreement'=>$lease_id]);
    }

    public function searchFileNumber(){
        return LeaseAgreement::find($this->fileNumber) == null ;
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
    public function updatedSearchTenant():void
    {
        $this->searchResultTenant = $this->searchPeople($this->searchTenant);
    }

    public function updatedSearchLessor():void
    {
        $this->searchResultLessor = $this->searchPeople($this->searchLessor);
    }

    public function searchItemInArray(int $id,array $array):null|int{
        if (in_array($id,$array)) {
            if (($key = array_search($id, $array)) !== false) {
                return $key;
            }
        }
        return null;
    }
    public function showLawyerBox(int $id,string $status='Tenant'){
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
    public function removeItemTenant(int $id){
        if (($key = $this->searchItemInArray($id,$this->id_selectedTenant)) !== null) {
            unset($this->id_selectedTenant[$key]);
            unset($this->people_selectedTenant[$id]);
        }
    }
    public function removeItemLessor(int $id){
        if (($key = $this->searchItemInArray($id,$this->id_selectedLessor)) !== null) {
            unset($this->id_selectedLessor[$key]);
            unset($this->people_selectedLessor[$id]);
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
            if ($this->idCusLawyerStatus == 'Tenant') {
                $this->people_selectedTenant[$this->idCusLawyer]['lawyer'] = $this->createArrayLawyer(
                    $person->id,$person->firstname,$person->lastname,$person->national_code,
                );
            } elseif ($this->idCusLawyerStatus == 'Lessor') {
                $this->people_selectedLessor[$this->idCusLawyer]['lawyer'] =  $this->createArrayLawyer(
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
    public function selectedItemTenant(int $id=null)
    {
        $id_add=(!is_null($id))?$id:$this->selectedTenant;
        if (!empty($id_add)){
            if (!in_array($id_add,$this->id_selectedTenant)){
                $person=Person::find($id_add);
                array_push($this->id_selectedTenant,$person->id);
                $this->people_selectedTenant[$person->id] = $this->createArray(
                    $person->id,
                    $person->firstname,
                    $person->lastname,
                    $person->national_code
                );

            }
        }
    }

    public function selectedItemLessor(int $id=null)
    {
        $id_add=(!is_null($id))?$id:$this->selectedLessor;
        if (!empty($id_add)){
            if (!in_array($id_add,$this->id_selectedLessor)){
                $person=Person::find($id_add);
                array_push($this->id_selectedLessor,$person->id);
                $this->people_selectedLessor[$person->id] =  $this->createArray(
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
        return view('livewire.lease-agreements.add')
            ->layout('components.layouts.app');
    }
}
