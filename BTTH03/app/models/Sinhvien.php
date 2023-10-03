<?php

class Sinhvien {
    // Properties
    private $id;
    private $tenSinhVien;
    private $email;
    private $ngaySinh;
    private $idLop;

    // Methods
    public function __construct($id, $tenSinhVien, $email, $ngaySinh, $idLop) {
        $this->id = $id;
        $this->tenSinhVien = $tenSinhVien;
        $this->email = $email;
        $this->ngaySinh = $ngaySinh;
        $this->idLop = $idLop;
    }

    // getters and setters
    
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
	public function getTenSinhVien() {
		return $this->tenSinhVien;
	}
	
	/**
	 * @param mixed $tenSinhVien 
	 * @return self
	 */
	public function setTenSinhVien($tenSinhVien): self {
		$this->tenSinhVien = $tenSinhVien;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNgaySinh() {
		return $this->ngaySinh;
	}
	
	/**
	 * @param mixed $ngaySinh 
	 * @return self
	 */
	public function setNgaySinh($ngaySinh): self {
		$this->ngaySinh = $ngaySinh;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getIdLop() {
		return $this->idLop;
	}
	
	/**
	 * @param mixed $idLop 
	 * @return self
	 */
	public function setIdLop($idLop): self {
		$this->idLop = $idLop;
		return $this;
	}
}

?>