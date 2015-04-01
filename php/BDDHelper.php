<?php

    class BDDHelper{
        
        var $db;
        function BDDHelper()
        {
            $db = mysql_connect("localhost", "root", "root");
            mysql_select_db('lolfag',$db); 
            
            mysql_query("SET NAMES UTF8");
        }
        
        static function execSQL($sql)
        {
            $res = array();
            $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

            while($data = mysql_fetch_assoc($req))
            {
                array_push($res,$data);
            }
            
            return $res;
        }
        
        function findProducts($ids)
        {
            $sIds = "";
            
            foreach($ids as $id)
            {
                if($id != "")
                $sIds .= $id.",";
            }
            
            $sIds = substr($sIds,0,strlen($sIds) -1);
            
            $sql = "select * from product where id in ($sIds)";
            
            if($ids == null)
            {
                return array();
            }
                
            return $this->execSQL($sql);   
        }
        
        function selectProducts($cat, $sort, $search)
        {
            $sql = "SELECT p.id, p.name, p.description, p.price, p.image, p.categoryId, c.label FROM Product p
                    Left join category c
                    on p.categoryId = c.id
            ";
            
            if(strcmp($cat,"all") != 0 && strcmp($cat,"undefined") != 0)
            {
                    $sql .= "WHERE c.label = '$cat'";   
            }
            
            if(strcmp($search, "") != 0)
            {
                $condition = " (UPPER (p.description) LIKE UPPER('%$search%') OR UPPER(p.name) LIKE UPPER('%$search%')) ";
                
                if(strcmp($cat,"all") != 0 && strcmp($cat,"undefined") != 0)
                {
                    $sql.= " AND " . $condition; 
                }
                else
                {
                    $sql.= " WHERE " . $condition; 
                }
            }
            
            if($sort != null)
            {
                $sql .= "ORDER BY p.$sort" ;   
            }
            
            
            return $this->execSQL($sql);    
        }
        
        function close()
        {
            mysql_close($db);
        }
        
        function CategoriesCount()
        {
            $sql = "SELECT c.label, COUNT(*) AS count FROM Category c right JOIN Product p ON p.categoryId = c.id GROUP BY label";
            //$sql = "SELECT * FROM Category";
            return $this->execSQL($sql);
        }
        
        function insert($sql)
        {
            return $this->execSQL($sql);
        }
    }
?>