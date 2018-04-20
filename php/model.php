<?php

class Bd{
	public $link;
	public function __construct(){
    try{
    $this->link=
    new PDO(
    	"mysql:host=localhost;dbname=rg",
        "root","");

	}catch(PDOException $perri){
		echo "Murio la flor no nos conectamos ";
	}	
	} /* del function*/
	
	public function __destruct(){
		$this->link = null;
	}
} /* Fin de la clase BD */





class games extends Bd{
	public function show_games(){

		$do=$this->link->prepare("
			SELECT name,platform,url from games
            where (id>0)
			order by date desc
			");
		
		$do->execute();
		return($do->fetchAll(PDO::FETCH_OBJ));	
	}
    
    public function registrar($name,$platform,$stock,$url){

		$do=$this->link->prepare("
			INSERT INTO games set
            name= :name,
            platform= :platform,
            stock= :stock,
            url= :url
			");

		$do->bindParam(":name",$name);
        $do->bindParam(":platform",$platform);
        $do->bindParam(":stock",$stock);
        $do->bindParam(":url",$url);

		$do->execute();	
	}
	

}/* de la clase */
/*
$variable=new Compras();
print_r($variable->verCompras());
*/
?>	