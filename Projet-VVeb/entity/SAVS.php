<?PHP

class SAVS{
    private $id;
    private $id_client;
    private $id_commande;
    private $contenu;
    private $image;
    private $etat;


    function __construct()
    {
        $ctp = func_num_args();
        $args = func_get_args();
        switch ($ctp) {
            case '3':
                $this->fonction0($args[0], $args[1], $args[2]);
                break;
            case '4':
                $this->fonction1($args[0], $args[1], $args[2],$args[3]);
                break;

        }
    }

    public function fonction0( $id_client,$id_commande,$contenu)
    {

        $this->id_client=$id_client;
        $this->id_commande=$id_commande;
        $this->contenu=$contenu;


    }


    public function fonction1($id_client, $id_commande,$contenu,$image)
    {
        $this->id_client=$id_client;
        $this->id_commande=$id_commande;
        $this->image=$image;
        $this->contenu=$contenu;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getIdClient()
    {
        return $this->id_client;
    }


    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;
    }

    public function getIdCommande()
    {
        return $this->id_commande;
    }


    public function setIdCommande($id_commande)
    {
        $this->id_commande = $id_commande;
    }

    public function getContenu()
    {
        return $this->contenu;
    }


    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    public function getImage()
    {
        return $this->image;
    }


    public function setImage($image)
    {
        $this->image = $image;
    }


    public function getEtat()
    {
        return $this->etat;
    }


    public function setEtat($etat)
    {
        $this->etat = $etat;
    }




}

?>