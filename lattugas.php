<?php 

class orang{

	public $nama ;
	public $ttl ;
	public $kelas ;
	public $status ;

public function __construct($nama,$ttl,$kelas,$status){
	 $this->$nama;
	 $this->$ttl;
	 $this->$kelas;
	 $this->$status;
}
   public function get_nama()
   {
   	return $this->nama;
   }
   public function get_ttl ()
   {
   	return $this->ttl=$ttl;
    }
    public function get_kelas ()
   {
   	return $this->kelas=$kelas;
    }

   public function get_status ()
   {
   	return $this->status=$status;
    }
    }

?>