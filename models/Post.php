<?php
    //M
    require_once 'DAOs/UserDAO.php';
    require_once 'DAOs/FavoriteDAO.php';
    //投稿の設計図を作成
    class Post{
        //プロパティ
        public $id; //id 投稿の番号
        public $user_id; //ユーザ番号
        public $title; //title
        public $content; //内容
        public $image; //画像ファイル名
        public $created_at; //登録日時
        
        //コンストラクタ
        public function __construct($user_id="", $title="", $content="", $image="") {
            $this->user_id = $user_id;
            $this->title = $title;
            $this->content = $content;
            $this->image = $image;
        }
        
        //その投稿をしたユーザのインスタンスを取得メソッド
        public function user(){
            //UserDaoを使用してユーザインスタンスを取得
            $user = UserDAO::get_user($this->user_id);
            return $user;
        }
        
        //その投稿にだれかがいいねしているかチェックするメソッド
        public function is_Favorite($login_user){
            //DAOを使用してチェックする
            $favorite = FavoriteDAO::check($login_user->id, $this->id);
            //Trueならいいねしている
            //Falseならいいねしていない
            if($favorite === false){
                return false;
            }else{
                return true;
            }
        }
    }
    