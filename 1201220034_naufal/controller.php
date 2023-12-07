<?php
    class AkunUser{ //3. dari sini dilempar ke public function showname()
        private $userid;
        private $username;
        private $nickname;
        private $status;

        function __construct($n, $s){ //2. dari sini dilempar ke private nickname dan status
            $this->nickname=$n;
            $this->status=$s;
        }

        public function showname(){ //4. dari sini dilempar ke $user->showname(); dibawah
            echo $this->nickname;
            echo ' ';
            echo $this->status;
            echo ' ';
        }
    }

    class dates{//3. dari sini dilempar ke public function showdate()
        private $tanggal;
        private $bulan;
        private $tahun;

        function __construct($t, $b, $T){//2. dari sini dilempar ke private tanggal, bulan, dan tahun
            $this->tanggal=$t;
            $this->bulan=$b;
            $this->tahun=$T;
        }

        public function showdate(){//4. dari sini dilempar ke $life->showdate(); dibawah
            echo 'since';
            echo ' ';
            echo $this->tanggal;
            echo '/';
            echo $this->bulan;
            echo '/';
            echo $this->tahun;
        }

    }
    $life = new dates ('04','05','2023'); //1. dari disi dilempar ke function __construct pada class dates
    $user = new AkunUser('Nopal','Join'); //1. dari disi dilempar ke function __construct pada class AkunUser
    $user->showname();
    $life->showdate();


    // SARAN DARI CHATGPT
/*
    class AkunUser {
        // ...
        public function getNickName() {
            return $this->nickName;
        }

        public function getStatus() {
            return $this->status;
        }
    }

    class Dates {
        // ...
        public function getTanggal() {
            return $this->tanggal;
        }

        // ...
    }

    // Menggunakan getter
    echo $user->getNickName();

*/
?>


