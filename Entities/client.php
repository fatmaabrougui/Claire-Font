<?PHP
class client{
	private $id_client;
	private $nom_client;
	private $prenom_client;
	private $email_client;
	private $pwd_client;
	private $tel_client;
	private $nom_categorie;
	function __construct($id_client,$nom_client,$prenom_client,$email_client,$pwd_client,$tel_client,$nom_categorie){
		$this->id_client=$id_client;
		$this->nom_client=$nom_client;
		$this->prenom_client=$prenom_client;
		$this->email_client=$email_client;
		$this->pwd_client=$pwd_client;
		$this->tel_client=$tel_client;
		$this->nom_categorie=$nom_categorie;
	}
	function getidclient(){
		return $this->id_client;
	}
	function getnomclient(){
		return $this->nom_client;
	}
	function getprenomclient(){
		return $this->prenom_client;
	}
	function getemailclient(){
		return $this->email_client;
	}
	function getpwdclient(){
		return $this->pwd_client;
	}
	function gettelclient(){
		return $this->tel_client;
	}
	function getcategorieclient(){
		return $this->tel_client;
	}
	function setnomclient($nom_client){
		$this->nom_client=$nom_client;
	}
	function setprenomclient($prenom_client){
		$this->prenom_client=$prenom_client;
	}
	function setemailclient($email_client){
		$this->email_client;
	}
	function setpwdclient($pwd_client){
		$this->pwd_client;
	}
	function settelclient($tel_client){
		$this->tel_client;
	}
	function setcategorieclient($nom_categorie){
		$this->nom_categorie;
	}
	
}

?>