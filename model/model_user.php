<?php
    class Utilisateur{
        //attributs
        private int $id_util;
        private string $name_util;
        private string $first_name_util;
        private string $mail_util;
        private string $pwd_util;
        private int $id_role;
        //constructeur
        public function __construct(string $name, string $first, string $mail, string $password){
            $this->name_util = $name;
            $this->first_name_util = $first;
            $this->mail_util = $mail;
            $this->pwd_util = $password;
            $this->id_role = 1;
        }
        //Getter and Setter
        public function getIdUtil():int{
            return $this->id_util;
        }
        public function getNameUtil():string{
            return $this->name_util;
        }
        public function getFirstNameUtil():string{
            return $this->first_name_util;
        }
        public function getMailUtil():string{
            return $this->mail_util;
        }
        public function getPwdUtil():string{
            return $this->pwd_util;
        }
        public function setIdUtil(int $id):void{
            $this->id_util = $id;
        }
        public function setNameUtil(string $name):void{
            $this->name_util = $name;
        }
        public function setFirstNameUtil(string $first):void{
            $this->first_name_util = $first;
        }
        public function setMailUtil(string $mail):void{
            $this->mail_util = $id;
        }
        public function setPwdUtil(string $password):void{
            $this->pwd_util = $password;
        }
        public function getIdRole():int{
            return $this->id_role;
        }
        public function setIdRole(int $id):void{
            $this->id_role = $id;
        }
        //Méthodes
        //création d'un utilisateur en BDD (utilisateur)
        public function createUser($bdd):void{
            //récupérer les valeurs de l'objet
            $name = $this->getNameUtil();
            $first = $this->getFirstNameUtil();
            $mail = $this->getMailUtil();
            $password = $this->getPwdUtil();
            $id = $this->getIdRole();
            try{
                $req = $bdd->prepare('INSERT INTO utilisateur(name_util, first_name_util,
                mail_util, pwd_util, id_role) VALUES (:name_util, :first_name_util, :mail_util, 
                :pwd_util, :id_role)');
                $req->execute(array(
                    'name_util' => $name,
                    'first_name_util' => $first,
                    'mail_util' => $mail,
                    'pwd_util' => $password,
                    'id_role' => $id,
                    ));
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
        //récupérer si l'utilisateur (mail_util) existe en BDD (utilisateur)
        public function showUserByMail($bdd):array{
            try{
                $req = $bdd->prepare('SELECT id_util, name_util, first_name_util, 
                mail_util, pwd_util, id_role FROM utilisateur 
                WHERE mail_util = :mail_util');
                $req->execute(array(
                    'mail_util' => $this->getMailUtil(),
                ));
                $data = $req->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    }



?>