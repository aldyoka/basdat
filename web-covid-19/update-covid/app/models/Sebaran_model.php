<?php

class Sebaran_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllData()
    {
        $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi');
        return $this->db->resultSet();
    }

    public function getJumlahKasus()
    {
        $this->db->query('SELECT SUM(jml_positif) as positif, SUM(jml_sembuh) as sembuh, SUM(jml_meninggal) as meninggal
        FROM kasus');
        return $this->db->single();
    }

    public function getDataDicari($data)
    {
        if ($data['urutkan'] == 1) {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi ORDER BY p.nama_provinsi ASC');
            return $this->db->resultSet();
        } elseif ($data['urutkan'] == 2) {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi ORDER BY p.nama_provinsi DESC');
            return $this->db->resultSet();
        } elseif ($data['urutkan'] == 3) {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi ORDER BY k.jml_positif ASC');
            return $this->db->resultSet();
        } elseif ($data['urutkan'] == 4) {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi ORDER BY k.jml_positif DESC');
            return $this->db->resultSet();
        } elseif ($data['urutkan'] == 5) {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi ORDER BY k.jml_sembuh ASC');
            return $this->db->resultSet();
        } elseif ($data['urutkan'] == 6) {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi ORDER BY k.jml_sembuh DESC');
            return $this->db->resultSet();
        } elseif ($data['urutkan'] == 7) {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi ORDER BY k.jml_meninggal ASC');
            return $this->db->resultSet();
        } else {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi ORDER BY k.jml_meninggal DESC');
            return $this->db->resultSet();
        }
    }

    public function getDataDicari2($data)
    {
        if ($data['cari'] == 1) {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi WHERE k.jml_positif > (SELECT AVG(jml_positif) FROM kasus)');
            return $this->db->resultSet();
        } elseif ($data['cari'] == 2) {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi WHERE k.jml_positif < (SELECT AVG(jml_positif) FROM kasus)');
            return $this->db->resultSet();
        } elseif ($data['cari'] == 3) {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi WHERE k.jml_sembuh > (SELECT AVG(jml_sembuh) FROM kasus)');
            return $this->db->resultSet();
        } elseif ($data['cari'] == 4) {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi WHERE k.jml_sembuh < (SELECT AVG(jml_sembuh) FROM kasus)');
            return $this->db->resultSet();
        } elseif ($data['cari'] == 5) {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi WHERE k.jml_meninggal > (SELECT AVG(jml_meninggal) FROM kasus)');
            return $this->db->resultSet();
        } else {
            $this->db->query('SELECT p.nama_provinsi, k.jml_positif, k.jml_sembuh, k.jml_meninggal FROM provinsi as p INNER JOIN kasus as k ON p.id_provinsi = k.id_provinsi WHERE k.jml_meninggal < (SELECT AVG(jml_meninggal) FROM kasus)');
            return $this->db->resultSet();
        }
    }
}
