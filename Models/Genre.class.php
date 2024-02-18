<?php

class Genre extends Database {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Récupère tous les genres de films.
     *
     * @return array Les données des genres de films.
     */
    public function getAll() {
        $request = $this->db->prepare("SELECT * FROM genre ORDER BY nom");
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}