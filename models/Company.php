<?php

/*
 * Model for working with company
*/

    class  Company
    {
        
        /*
         * Returns Array with companies
        */
        public static function getCompanyList()
        {
            //Connection to DB

            $db =Db::getConnection();

            //Receiving and returns result

            $result = $db->query(' SELECT name, profits FROM companies WHERE parent_status >= 0 ');
            $companyList = array();
            $i = 0;
            while ($row = $result->fetch()){
                $companyList[$i]['name'] = $row['name'];
                $companyList[$i]['profits'] = $row['profits'];
                $i++;
            }
            
            return $companyList;

        }
    
        
        public static function addCompany($companyName, $companyProfits)
        {
            $db = Db::getConnection();

            $sql = ' INSERT INTO companies (name, profits) '
                .'VALUES (:name, :profits) ';

            $result = $db->prepare($sql);
            $result->bindParam(':name',$companyName, PDO::PARAM_STR);
            $result->bindParam(':profits',$companyProfits, PDO::PARAM_STR);

            return $result->execute();


        }
        
    }