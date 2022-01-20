<?php 

    require_once("db.php");

    class employeeConfig{
        private $id;
        private $fullName;
        private $email;
        private $position;
        protected $dbcon;

        public function __construct($id=0, $fullName="", $email="",$position=""){
            $this->id= $id;
            $this->fullName= $fullName;
            $this->email= $email;
            $this->position= $position;

            $this->dbcon = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        }

        
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getfullName(){
            return $this->fullName;
        }
        public function setfullName($fullName){
            $this->fullName = $fullName;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getPosition(){
            return $this->position;
        }
        public function setPosition($position){
            $this->position = $position;
        }

        public function insertData(){
            try {
                $statement = $this->dbcon->prepare("INSERT INTO employee(fullName,email,position) values(?,?,?)");
                $statement->execute([$this->fullName,$this->email,$this->position]);
                
                header("Location: index.php");
                exit();
            } catch (Exception $th) {
                return $th->getMessage();
            }
        }
        
        public function getAll(){
            try {
                $statement = $this->dbcon->prepare("SELECT * FROM employee");
                $statement->execute();
                return $statement->fetchAll();
                
            } catch (Exception $th) {
                return $th->getMessage();
            }
        }
        public function getSingle(){
            try {
                $statement = $this->dbcon->prepare("SELECT *
                FROM employee WHERE id=?");
                $statement->execute([$this->id]);
                return $statement->fetchAll();
                
            } catch (Exception $th) {
                return $th->getMessage();
            }
        }

        public function updateData(){
            try {
                $statement = $this->dbcon->prepare("UPDATE employee SET fullName=?,email=?,position=? WHERE id=?");
                $statement->execute([$this->fullName,$this->email,$this->position, $this->id]);
                //echo "<script>alert(Data updated successfully);document.location='index.php'</script>";
                header("Location: index.php");
                exit();
            } catch (Exception $th) {
                return $th->getMessage();
            }
        }

        public function delete(){
            try {
                $statement = $this->dbcon->prepare("DELETE
                FROM employee WHERE id=?");
                $statement->execute([$this->id]);
                return $statement->fetchAll();
                header("Location: index.php");
                exit();
                
            } catch (Exception $th) {
                return $th->getMessage();
            }
        }
        
    }

?>