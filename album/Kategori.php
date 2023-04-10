<?php

require_once "../inc/Koneksi.php";

class Kategori extends Koneksi
{
    public function tampil()
    {
        $sql = "SELECT * FROM tb_artist";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    public function tampilAlbum()
    {
        $sql = "SELECT * FROM tb_album,tb_artist WHERE tb_artist.art_id =tb_album.alb_id_artist";
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
        $albumArtist = $_POST['alb_id_artist'];
        $albumName = $_POST['alb_name'];

        $sql = "INSERT INTO tb_album (alb_id_artist, alb_name) VALUES (:alb_id_artist, :alb_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":alb_id_artist", $albumArtist);
        $stmt->bindParam(":alb_name", $albumName);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_track WHERE trc_id=:trc_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trc_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $albIdArtist = $_POST['alb_id_artist'];
        $albName = $_POST['alb_name'];

        $sql = "UPDATE tb_album SET alb_id_artist=:alb_id_artist, alb_name=:alb_name WHERE alb_id=:alb_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":alb_id_artist", $albIdArtist);
        $stmt->bindParam(":alb_name", $albName);
        $stmt->bindParam(":alb_id", $_POST['alb_id']);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_album WHERE alb_id=:alb_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":alb_id", $id);
        $stmt->execute();
    }
}
