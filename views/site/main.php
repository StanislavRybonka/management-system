<?php include ROOT . '/views/layouts/header.php'; ?>

        <!--**************************** Menu companies ********************************-->
        <div class="tabs border">
            <div class="row">
                <div class="col-sm-12">
                    <div class="add-project-nav-bar-main">
                        <nav>
                            <div class="nav-menu">
                                <ul class="tabs__caption nav nav-justified">
                                    <li class="active">Companies</li>
                                    <li>Add new company</li>
                                    <li>Edit company info</li>
                                    <li>Delete company</li>
                                    <li>About app</li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!--********************* Companies ***************************-->
            <div class="tabs__content  active">
                <div class="row" id="list-of-companies">
                    <div class="col-sm-12 main-table">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>List of Companies</p>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th>Main company name</th>
                                <th>Main company profits</th>
                                <th>Subsidiary companies</th>
                                <th>Subsidiary profits</th>
                            </tr>
                            <?php foreach ($companiesList as $companies): ?>
                                <tr>
                                    <td><?php echo $companies['name']; ?></td>
                                    <td><?php echo $companies['profits']; ?></td>
                                    <td><button>show</button></td>
                                    <td><button>show</button></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <!--************************** Add Company **********************-->
            <div class="tabs__content">
                <div class="row" id="add-company">
                    <div class="col-sm-12 main-table">
                        <p>Add new company</p>
                        <div class="row">
                            <div class="col-sm-10">
                                <form>
                                    <div class="row">
                                        <label class="col-sm-offset-2 col-sm-2">Name of company</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="companyName">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-offset-2 col-sm-2">Annual profits</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="companyProfits">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-9 col-sm-2">
                                            <input class="btn btn-primary" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--************************** Edit Company *********************-->
            <div class="tabs__content">
                <div class="row" id="edit-company">
                    <div class="col-sm-12 main-table">
                        <p>Edit information</p>
                        <table class="table table-bordered">
                            <tr>
                                <th>Name of company</th>
                                <th>Profits of company</th>
                                <th>Edit name</th>
                                <th>Edit profits</th>
                            </tr>
                            <tr>
                                <td>Lenovo</td>
                                <td>2234$</td>
                                <td><button>edit</button></td>
                                <td><button>edit</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!--************************** Delete company *******************-->
            <div class="tabs__content">
                <div class="row" id="delete-company">
                    <div class="col-sm-12 main-table">
                        <p>Delete company</p>
                        <table class="table table-bordered">
                            <tr>
                                <th>Name of company</th>
                                <th>Delete</th>

                            </tr>
                            <tr>
                                <td>Lenovo</td>
                                <td><button>delete</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!--************************* About app info ********************-->
            <div class="tabs__content">
                <div class="row" id="about-company">
                    <div class="col-sm-12 main-table">
                        <p>About app page</p>
                        <table class="table table-bordered">
                            <tr>
                                <th>Name of app</th>
                                <th>Used technologies</th>
                            </tr>
                            <tr>
                                <td>Management system of companies</td>
                                <td>php, jquery</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!--************************* End content block ********************-->
<?php include ROOT . '/views/layouts/footer.php'; ?>

