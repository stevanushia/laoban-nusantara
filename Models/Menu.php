<?php
    class Menu{
        public static function getAll()
        {
            $db = DB::getInstance();
            $result = $db->query("SELECT * FROM menu")->fetchAll();
            return $result;
        }

        public static function getMainDish()
        {
            $db = DB::getInstance();
            $result = $db->query("SELECT * FROM menu WHERE tipe_makanan = 1")->fetchAll();
            return $result;
        }

        public static function getSnack()
        {
            $db = DB::getInstance();
            $result = $db->query("SELECT * FROM menu WHERE tipe_makanan = 2")->fetchAll();
            return $result;
        }

        public static function getDimsum()
        {
            $db = DB::getInstance();
            $result = $db->query("SELECT * FROM menu WHERE tipe_makanan = 3")->fetchAll();
            return $result;
        }

        public static function getHotDrink()
        {
            $db = DB::getInstance();
            $result = $db->query("SELECT * FROM menu WHERE tipe_makanan = 4")->fetchAll();
            return $result;
        }

        public static function getColdDrink()
        {
            $db = DB::getInstance();
            $result = $db->query("SELECT * FROM menu WHERE tipe_makanan = 5")->fetchAll();
            return $result;
        }

        public static function getSiBikinSeger()
        {
            $db = DB::getInstance();
            $result = $db->query("SELECT * FROM menu WHERE tipe_makanan = 6")->fetchAll();
            return $result;
        }

        // public static function insert($id_user, $username, $password, $gender, $status, $gambar)
        // {
        //     $db = DB::getInstance();
        //     $result = $db->exec("INSERT INTO USER (id_user, username, password, gender, status, gambar) VALUES ('$id_user', '$username', '$password', '$gender', '$status', '$gambar')");
        //     return $result;
        // }

        // public static function update($id_user, $newUsername, $newStatus, $newGambar)
        // {
        //     $db = DB::getInstance();
        //     $result = $db->exec("UPDATE user SET username = '$newUsername', status = '$newStatus', gambar = '$newGambar' where id_user = '$id_user'");
        //     return $result;
        // }
    }
?>