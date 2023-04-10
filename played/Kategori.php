<?php

require_once "../inc/Koneksi.php";

class Kategori extends Koneksi
{
    public function tampilSelectTrack()
    {
        $sql = "SELECT * FROM tb_track ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    public function tampilTrack()
    {
        $sql = "SELECT * FROM tb_played,tb_track WHERE tb_track.trc_id = tb_played.ply_id_track";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $plyIdTrack = $_POST['ply_id_track'];

        $sql = "INSERT INTO tb_played (ply_id_track) VALUES (:ply_id_track)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ply_id_track", $plyIdTrack);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_played WHERE ply_id=:ply_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ply_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $plyIdTrack = $_POST['ply_id_track'];

        $sql = "UPDATE tb_played SET ply_id_track=:ply_id_track WHERE ply_id=:ply_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ply_id_track", $plyIdTrack);
        $stmt->bindParam(":ply_id", $_POST['ply_id']);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_played WHERE ply_id=:ply_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ply_id", $id);
        $stmt->execute();
    }
}
