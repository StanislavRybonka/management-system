<?php

/**
 * Контроллер SiteController
 */
class SiteController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {


        $companiesList = Company::getCompanyList();


        // Подключаем вид
        require_once(ROOT . '/views/site/main.php');
        return true;
    }



    public function actionForm()
    {

        $companyName = $_POST['companyName'];
        $companyProfits = $_POST['companyProfits'];

        //Флаг на ошибки
        $errors = false;


        //Обработка формы
        if(isset($_POST['submit'])){


            if($errors == false){
                $result =  Company::addCompany($companyName,$companyProfits );
            }
        }

        require_once(ROOT . '/views/site/main.php');
        return true;
    }


}
