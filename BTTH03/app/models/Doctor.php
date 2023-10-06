<?php
class Doctor {
    private $id;
    private $nameDoctor;
    private $department;
    public function __construct($id, $nameDoctor, $department) {
        $this->id = $id;
        $this->nameDoctor = $nameDoctor;
        $this->department = $department;
    }

    // getter and setter
    

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNameDoctor() {
		return $this->nameDoctor;
	}
	
	/**
	 * @param mixed $nameDoctor 
	 * @return self
	 */
	public function setNameDoctor($nameDoctor): self {
		$this->nameDoctor = $nameDoctor;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDepartment() {
		return $this->department;
	}
	
	/**
	 * @param mixed $department 
	 * @return self
	 */
	public function setDepartment($department): self {
		$this->department = $department;
		return $this;
	}
}

?>