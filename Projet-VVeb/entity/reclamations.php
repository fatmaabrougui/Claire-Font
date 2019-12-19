<?PHP

class reclamations
{
    private $id_reclamation;
    private $id_client;
    private $type;
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

    public function fonction0( $id_client, $type,$contenu)
    {

        $this->id_client=$id_client;
        $this->type=$type;
        $this->contenu=$contenu;


    }


    public function fonction1( $id_client, $type,$contenu, $image)
    {
        $this->id_client=$id_client;
        $this->type=$type;
        $this->image=$image;
        $this->contenu=$contenu;
    }



    public function getIdReclamation()
    {
        return $this->id_reclamation;
    }

    public function setIdReclamation($id_reclamation)
    {
        $this->id_reclamation = $id_reclamation;
    }


    public function getIdClient()
    {
        return $this->id_client;
    }

    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;
    }


    public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type = $type;
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