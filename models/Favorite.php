<?php
    //M
    require_once 'DAOs/UserDAO.php';
    //Favoriteの設計図を作成
    class Favorite{
        //プロパティ
        public $id; //id
        public $user_id; //ユーザ番号
        public $post_id; //投稿番号
        public $created_at; //登録日時
        
        //コンストラクタ
        public function __construct($user_id="", $post_id="") {
            $this->user_id = $user_id;
            $this->post_id = $post_id;
        }
        
        //その投稿をしたユーザのインスタンスを取得メソッド
        public function user(){
            //UserDaoを使用してユーザインスタンスを取得
            $user = UserDAO::get_user($this->user_id);
            return $user;
        }
    }
    