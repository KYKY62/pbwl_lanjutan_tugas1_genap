<?php

require_once "inc/Koneksi.php";

class Kategori extends Koneksi
{

    public function tampil()
    {
        $sql = "SELECT * FROM tb_track,tb_album WHERE tb_track.trc_id_album = tb_album.alb_id";
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
        $sql = "SELECT * FROM tb_album,tb_artist WHERE tb_album.alb_id = tb_artist.art_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    public function selectArtist()
    {
        $sql = "SELECT * FROM tb_album";
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
        $trcName = $_POST['trc_name'];
        $trcIdAlbum = $_POST['trc_id_album'];
        $time = $_POST['time'];

        $sql = "INSERT INTO tb_track (trc_name, trc_id_album,time) VALUES (:trc_name, :trc_id_album,:time)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trc_name", $trcName);
        $stmt->bindParam(":trc_id_album", $trcIdAlbum);
        $stmt->bindParam(":time", $time);
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
        $trcName = $_POST['trc_name'];
        $trcIdAlbum = $_POST['trc_id_album'];

        $sql = "UPDATE tb_track SET trc_name=:trc_name, trc_id_album=:trc_id_album WHERE trc_id=:trc_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trc_name", $trcName, PDO::PARAM_STR);
        $stmt->bindParam(":trc_id_album", $trcIdAlbum, PDO::PARAM_INT);
        $stmt->bindParam(":trc_id", $_POST['trc_id']);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_track WHERE trc_id=:trc_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trc_id", $id);
        $stmt->execute();
    }
}
