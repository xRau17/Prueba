<?php  
	Class Corredores extends Conexion{

        public function getCorredores() {

                try {

                        $sql = "select 
                                        corredores.id, 
                                        corredores.nombre,
                                        corredores.apellidos,
                                        corredores.ciudad,
                                        corredores.fechaNacimiento,
                                        corredores.sexo,
                                        corredores.email,
                                        corredores.dni,
                                        corredores.edad,
                                        categorias.nombrecorto categoria,
                                        clubs.nombreCorto club

                                        FROM Corredores INNER JOIN Categorias ON Corredores.id_categoria = Categorias.id
                                                        INNER JOIN Clubs ON Corredores.id_club = Clubs.id
                                                        ORDER BY corredores.id";
                                
                        
                        $pdoSt = $this->conexion->prepare($sql);
                        $pdoSt->setFetchMode(PDO::FETCH_OBJ);
                        $pdoSt->execute();
                        return $pdoSt;

                } catch (PDOException $e) {

                        include('views/partials/errordb.php');
                        exit();

                }


        }

        public static function getCabecera() {
                        
                $cabecera = [
                        "Id",
                        "Nombre",
                        "Apellidos",
                        "Ciudad",
                        "Email",
                        "Edad",
                        "Categoría",
                        "Club",
                        "Acciones"
                ];
                
                return $cabecera;
        }

        public function getCategorias() {

                try {
        
                        $sql = "select 
                                        id,
                                        nombreCorto categoria
                                
                                from categorias";
                        
                        $pdoSt = $this->conexion->prepare($sql);
                        $pdoSt->setFetchMode(PDO::FETCH_OBJ);
                        $pdoSt->execute();
                        return $pdoSt->fetchAll();
        
                } catch (PDOException $e) {
        
                        include('views/partials/errordb.php');
                        exit();
        
                }
        
        
        }

        public function getClubs() {

                try {
        
                        $sql = "select 
                                        id,
                                        nombreCorto club
                                
                                from clubs";
                        
                        $pdoSt = $this->conexion->prepare($sql);
                        $pdoSt->setFetchMode(PDO::FETCH_OBJ);
                        $pdoSt->execute();
                        return $pdoSt->fetchAll();
        
                } catch (PDOException $e) {
        
                        include('views/partials/errordb.php');
                        exit();
        
                }
        
        
        }

    
       
}
?>