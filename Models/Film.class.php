<?php

class Film extends Database {

    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
        $request = $this->db->prepare("SELECT * FROM film LIMIT 10");
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getByGenre($genre_id) {
        $request = $this->db->prepare("SELECT * FROM film WHERE genre_id = :genre_id LIMIT 10");
        $request->execute([
            'genre_id' => $genre_id
        ]);
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    public function getById($id) {
        $request = $this->db->prepare("SELECT * FROM film WHERE id = :id");
        $request->execute([
            'id' => $id
        ]);
        $data = $request->fetch(PDO::FETCH_ASSOC);
    
        return $data;
    }
}