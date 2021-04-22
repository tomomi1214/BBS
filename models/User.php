<?php
    
    //ユーザの設計図を作成
    class User{
        //プロパティ
        public $id; //id
        public $name; //名前
        public $email; //Address
        public $password; //Password
        public $created_at; //登録日時
        
        //コンストラクタ
        public function __construct($name="", $email="", $password="") {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }
    }
    