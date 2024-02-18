<!-- /**
 * Classe Membre
 * 
 * Cette classe représente un membre dans le système de cinéma.
 */ -->
<?php

class Membre extends Database {

    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
        $request = $this->db->prepare("SELECT * FROM membre");
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}