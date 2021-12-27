<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company[]|\Cake\Collection\CollectionInterface $company
 */
?>


<head>
    <meta charset="utf-8">
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <title>Travel</title>
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />
    <?php echo $this->Html->css('fontawesome') ?>
    <?php echo $this->Html->css('animate') ?>
    <?php echo $this->Html->css('hover-min') ?>
    <?php echo $this->Html->css('datepicker') ?>
    <?php echo $this->Html->css('owl.carousel') ?>
    <?php echo $this->Html->css('owl.theme.default') ?>
    <?php echo $this->Html->css('jqueryui') ?>
    <?php echo $this->Html->css('bootstrap') ?>
    <?php echo $this->Html->css('bootsnav') ?>
    <?php echo $this->Html->css('style') ?>
    <?php echo $this->Html->css('responsive') ?>
</head>


<body>
    <section id="home" class="about-us">
        <div class="container">
            <div class="about-us-content">

                <!--/.row-->
            </div>
            <!--/.about-us-content-->
        </div>
        <!--/.container-->

    </section>

    <section id="home2" class="about-us2">
        <div class="container2">
            <div class="about-us-conten2t">

                <!--/.row-->
            </div>
            <!--/.about-us-content-->
        </div>
        <!--/.container-->

    </section>

    <header class="top-area">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo">
                            <a href="index.html">
                                tour<span>Nest</span>
                            </a>
                        </div><!-- /.logo-->
                    </div><!-- /.col-->
                    <div class="col-sm-10">
                        <div class="main-menu">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <i class="fa fa-bars"></i>
                                </button><!-- / button-->
                            </div><!-- /.navbar-header-->
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="smooth-menu"><a href="#home">Home</a></li>
                                    <li class="smooth-menu"><a href="#gallery">Destinations</a></li>
                                    <li class="smooth-menu"><a href="#pack">Tickets </a></li>
                                    <!-- <li class="smooth-menu"><a href="#spo">Special Offers</a></li> -->
                                    <!-- <li class="smooth-menu"><a href="#subs">subscription</a></li> -->
                                    <!-- <li>
											<button class="book-btn">book now
											</button>
										</li>/.project-btn  -->
                                    <li class="smooth-menu">
                                        <?php
                                        if ($this->request->session()->read('Auth.User.role') == 'admin') {
                                            echo $this->Form->button('Usuarios', array(
                                                'type' => 'button',
                                                'class' => 'book-btn',
                                                'onclick' => 'location.href=\'/users\';',
                                            ));
                                        }
                                        ?>
                                    </li>

                                    <!--  Boton de registrar y email de ususario -->
                                    <li class="smooth-menu">
                                        <?php
                                        if (!$this->request->session()->read('Auth.User.id')) {
                                            echo $this->Form->button('Registrar', array(
                                                'type' => 'button',
                                                'class' => 'book-btn',
                                                'onclick' => 'location.href=\'/users/add/\';',
                                            ));
                                        } else {
                                            echo '<a href="#">' . $this->request->session()->read('Auth.User.email') . '</a>';
                                        }
                                        ?>
                                    </li>

                                    <!-- Boton de Login y Logout -->
                                    <li class="smooth-menu">
                                        <?php
                                        if (!$this->request->session()->read('Auth.User.id')) {
                                            echo $this->Form->button('Login', array(
                                                'type' => 'button',
                                                'class' => 'book-btn',
                                                'onclick' => 'location.href=\'/users/login/\';',
                                            ));
                                        } else {
                                            echo $this->Form->button('Logout', array(
                                                'type' => 'button',
                                                'class' => 'book-btn',
                                                'onclick' => 'location.href=\'/users/logout/\';',
                                            ));
                                        }
                                        ?>
                                    </li>

                                    <li class="smooth-menu">
                                        <?php if ($this->request->session()->read('Auth.User.id')) {
                                            echo '<img onclick="location.href=\'http://localhost/users/profile/' . $this->request->session()->read('Auth.User.id') . '\'" class="perfil" src="' . ($this->request->session()->read('Auth.User.profile_picture') != null ? '/imagenes/' . $this->request->session()->read('Auth.User.profile_picture') : " https://thumbs.dreamstime.com/b/icono-del-s%C3%B3lido-negro-avatar-perfil-de-usuario-121102166.jpg") . '" alt="" height="40px" width="40px">';
                                        } else {
                                        }
                                        ?>
                                        <!-- </a> -->
                                    </li>


                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.main-menu-->
                    </div><!-- /.col-->
                </div><!-- /.row -->
                <div class="home-border"></div><!-- /.home-border-->
            </div><!-- /.container-->
        </div><!-- /.header-area -->

    </header>







    <div class="divisor">
        <span></span>
    </div>


    <div class="company index large-9 medium-8 columns content">
        <h3><?= __('Company') ?></h3>
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?></li>
            <li class="heading"><?= __('AJAX') ?></li>
            <button class="book-btn buton-A" onclick="ver(0,'myModalUpdate', 'modalUpdateTitle', true)"> Crear </button>
        </ul>
        <p><?= date('l jS \of F Y h:i:s A'); ?></p>
        <table id="mainTable" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('Company_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Company_Name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Company_Adress_Code') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Company_Transport_Number') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Company_Mail') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Company_Web_Site') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Company_Registration_Status') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                    <th scope="col" class="Ajax"><?= __('Ajax') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($company as $company) : ?>
                    <tr id="company_<?= $company->Company_id; ?>">
                        <td><?= $this->Number->format($company->Company_id) ?></td>
                        <td><?= h($company->Company_Name) ?></td>
                        <td><?= $this->Number->format($company->Company_Adress_Code) ?></td>
                        <td><?= $this->Number->format($company->Company_Transport_Number) ?></td>
                        <td><?= h($company->Company_Mail) ?></td>
                        <td><?= h($company->Company_Web_Site) ?></td>
                        <td><?= h($company->Company_Registration_Status) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $company->Company_id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->Company_id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->Company_id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->Company_id)]) ?>
                        </td>
                        <td>
                            <!-- ver(codigo, tipo, titulo, nameImput) -->
                            <button class="buton-Ajax book-btn" onclick="ver(<?= $company->Company_id ?>,'myModal', 'modalTitleView', false)">Ver</button>
                            <button class="buton-Ajax book-btn" onclick="ver(<?= $company->Company_id ?>,'myModalUpdate', 'modalUpdateTitle', true)">Editar</button>

                            <button class="buton-Ajax book-btn" onclick="eliminar(<?= $company->Company_id ?>)">Eliminar</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>
    </div>
    <div>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2 id="modalTitleView"></h2>
                <form action="javascript:ocultar()" id="formView">
                    <div class="row custom-padding">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Company ID</label>
                                <input type="text" required class="form-control" placeholder="Company id" name="formview">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" required class="form-control" placeholder="Company Name" name="formview">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Adress Code</label>
                                <input type="text" required class="form-control" placeholder="Company Adress Code" name="formview">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Transport Number</label>
                                <input type="text" required class="form-control" placeholder="Company Transport Number" name="formview">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Company Mail</label>
                                <input type="text" required class="form-control" placeholder="Company Mail" name="formview">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Web Site</label>
                                <input type="text" required class="form-control" placeholder="Company Web Site" name="formview">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Registration Status</label>
                                <input type="text" required class="form-control" placeholder="Company Registration Status" name="formview">
                            </div>
                        </div>
                    </div>
                    <div class="row custom-padding">
                        <div class="col-sm-6">
                            <!-- Select multiple-->
                            <div class="form-group">
                                <button class="book-btn">OK</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div>
        <!-- The Modal -->
        <div id="myModalUpdate" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close2">&times;</span>
                <h1 id="modalUpdateTitle"></h1>
                <form action="javascript:editarCrear()" id="formEditarCompany" method="post">
                    <div class="row custom-padding">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div id="formID" class="form-group">
                                <label>ID</label>
                                <input type="text" required class="form-control" placeholder="Company ID" readonly=true name="Company_id">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" required class="form-control" placeholder="Company Name" name="Company_Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Adress Code</label>
                                <input type="text" required class="form-control" placeholder="Company Adress Code" name="Company_Adress_Code">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Transport Number</label>
                                <input type="text" required class="form-control" placeholder="Company Transport Number" name="Company_Transport_Number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Company Mail</label>
                                <input type="text" required class="form-control" placeholder="Company Mail" name="Company_Mail">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Web Site</label>
                                <input type="text" required class="form-control" placeholder="Company Web Site" name="Company_Web_Site">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Registration Status</label>
                                <input type="text" required class="form-control" placeholder="Company Registration Status" name="Company_Registration_Status">
                            </div>
                        </div>
                    </div>
                    <div class="row custom-padding">
                        <div class="col-sm-6">
                            <!-- Select multiple-->
                            <div class="form-group">
                                <button class="book-btn" class="btn btn-primary">Crear</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 1% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
            /* Could be more or less, depending on screen size */
        }

        .close,
        .close2

        /* , .close3 */
            {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus,
        .close2:hover,
        .close2:focus

        /* ,
    .close3:hover,
    .close3:focus   */
            {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        input[type="text"]:disabled {
            background-color: white;
        }

        input[type=”text”]:disabled {
            background-color: #fff;
            opacity: 1;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>
    <?php

    use Cake\Routing\Router; ?>
    <script>
        // Get the modal

        var modal = document.getElementById("myModal");
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
        var inputsView = document.getElementsByName("formview");
        console.log(inputsView);
        console.log(inputsView[0]);
        for (let m = 0; m < inputsView.length; m++) {
            inputsView[m].disabled = true;
            console.log(inputsView[m]);
        }

        var modal2 = document.getElementById("myModalUpdate");
        var span2 = document.getElementsByClassName("close2")[0];
        span2.onclick = function() {
            modal2.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        var imputId = document.getElementsByName('Company_id')[0];
        var imputName = document.getElementsByName('Company_Name')[0];
        var imputAdresCode = document.getElementsByName('Company_Adress_Code')[0];
        var imputNumber = document.getElementsByName('Company_Transport_Number')[0];
        var imputMail = document.getElementsByName('Company_Mail')[0];
        var imputWebsite = document.getElementsByName('Company_Web_Site')[0];
        var imputStatus = document.getElementsByName('Company_Registration_Status')[0];


        function ocultar() {
            modal.style.display = "none";
        }

        function cleanForm() {
            imputId.value = '0';
            imputName.value = '';
            imputAdresCode.value = '';
            imputNumber.value = '';
            imputMail.value = '';
            imputWebsite.value = '';
            imputStatus.value = '';
        }

        function eliminar(codigo) {
            console.log(codigo);
            $.ajax({
                type: "POST",
                url: '<?= Router::url(["controller" => "company", "action" => "eliminar"]); ?>',
                data: {
                    id: codigo
                },
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                },
                success: function(data) {
                    console.log(data);
                    $('#company_' + codigo).fadeOut('slow');
                    $('#messages_ajax').html('<div class="message success" onclick="this.classList.add(\'hidden\')">' + data + '</div>');
                },
                dataType: 'json',
            })
        }

        function ver(codigo, tipo, titulo, edit) {
            console.log(codigo);
            if (codigo != 0) {
                $.ajax({
                    type: "POST",
                    url: '<?= Router::url(["controller" => "company", "action" => "ver"]); ?>',
                    data: {
                        id: codigo
                    },
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                    },
                    success: function(data) {
                        console.log(data);
                        if (!edit) {
                            let inputs = document.getElementById("formView").getElementsByTagName("input");
                            let index = 0;
                            for (var k in data) {
                                inputs[index].value = data[k];
                                index++;
                            }
                        } else {
                            imputId.value = data['Company_id'];
                            imputName.value = data['Company_Name'];
                            imputAdresCode.value = data['Company_Adress_Code'];
                            imputNumber.value = data['Company_Transport_Number'];
                            imputMail.value = data['Company_Mail'];
                            imputWebsite.value = data['Company_Web_Site'];
                            imputStatus.value = data['Company_Registration_Status'];
                        }
                        document.getElementById("formID").hidden = false;
                    },
                    dataType: 'json',
                })
            } else {
                document.getElementById("formID").hidden = true;
                cleanForm();
            }
            let modalTemp = document.getElementById(tipo);
            modalTemp.style.display = "block";
        }

        function editarCrear() {
            if (document.getElementsByName('Company_id')[0].value != '0') { // EDITAR
                let postdata = $("#formEditarCompany").serialize();
                $.ajax({
                    type: "POST",
                    url: '<?= Router::url(["controller" => "company", "action" => "editar"]); ?>',
                    data: postdata,
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                    },
                    success: function(data) {
                        console.log(data);
                        modal2.style.display = "none";

                        if (data['boolean']) {
                            let cols = document.getElementById('company_' + data['Company_id']).getElementsByTagName('td');

                            cols[1].innerText = imputName.value;
                            cols[2].innerText = imputAdresCode.value;
                            cols[3].innerText = imputNumber.value;
                            cols[4].innerText = imputMail.value;
                            cols[5].innerText = imputWebsite.value;
                            cols[6].innerText = imputStatus.value;
                        }
                    },
                    dataType: 'json',
                })
            } else { //Crear
                let postdata = $("#formEditarCompany").serialize();
                $.ajax({
                    type: "POST",
                    url: '<?= Router::url(["controller" => "company", "action" => "crear"]); ?>',
                    data: postdata,
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                    },
                    success: function(data) {
                        console.log(data);
                        modal2.style.display = "none";
                        if (data['boolean']) {

                            var tableRef = document.getElementById('mainTable').getElementsByTagName('tbody')[0];
                            var newRow = tableRef.insertRow(tableRef.rows.length);

                            newRow.setAttribute("id", 'company_' + data['Company_id']);
                            newRow.innerHTML =
                                '<td>' + data['Company_id'] + '</td>' +
                                '<td>' + imputName.value + '</td>' +
                                '<td>' + imputAdresCode.value + '</td>' +
                                '<td>' + imputNumber.value + '</td>' +
                                '<td>' + imputMail.value + '</td>' +
                                '<td>' + imputWebsite.value + '</td>' +
                                '<td>' + '</td>' +
                                '<td class="actions">' +
                                '<a href="/company/view/' + data['Company_id'] + '">View</a>' +
                                '<a href="/company/edit/' + data['Company_id'] + '">Edit</a>' +
                                '<form name="post_6186c78417e5f789950582" style="display:none;" method="post" action="/company/delete/7"><input type="hidden" name="_method" value="POST"><input type="hidden" name="_csrfToken" autocomplete="off" value="7fd8f15341ce9b265ac84b6f275fbcf33a24a2a6bcd848348c019c218dba9d7ee5bf3265c19a63c85998fe634be65267c9ead67edbbf01119e2436362a9eadd7"></form><a href="#" onclick="if (confirm(&quot;Are you sure you want to delete # 7?&quot;)) { document.post_6186c78417e5f789950582.submit(); } event.returnValue = false; return false;">Delete</a></td>' +
                                '<td>' +
                                "<button class=\"buton-Ajax book-btn\" onclick=\"ver(" + data['Company_id'] + ",'myModal', 'modalTitleView', false)\">Ver</button>" +
                                "<button class=\"buton-Ajax book-btn\" onclick=\"ver(" + data['Company_id'] + ",'myModalUpdate', 'modalUpdateTitle', true)\">Editar</button>" +
                                

                                '<button class=\"buton-Ajax book-btn\" onclick="eliminar(' + data['Company_id'] + ')">Eliminar</button>' +
                                '</td>';
                        }
                    },
                    dataType: 'json',
                })
            }
        }
    </script>


</body>

<style>
    .buton-Ajax {
        width: 100%;
        margin: 3px 3px;
        font-size: 15px;
        box-shadow: 1px 1px 4px black;
    }

    .buton-A {
        box-shadow: 1px 1px 4px black;
    }

    .company h3,
    .heading {
        color: rgba(77, 78, 84, 1);
        text-shadow: 1px 1px 5px white;
        margin: 5px 5px;
    }

    .company h3 {
        font-size: 40px;
        margin: 5px 5px;
    }

    .side-nav a {
        color: #00d8ff;
        text-shadow: 1px 1px 2px white;
        margin: 5px 5px;
    }

    .company p {
        color: white;
        font-size: 20px;
        text-shadow: 1px 1px 2px rgba(77, 78, 84, 1);
        margin: 5px 5px;
    }

    .heading,
    .side-nav a {
        font-size: 25px;
        margin: 5px 5px;
    }

    .paginator p {
        color: white;
    }

    body {
        background: linear-gradient(0deg, #fff, #00d8ff, #fff);
    }

    .header-area {
        width: 100%;
        right: 0;
        position: fixed;
        background: rgba(77, 78, 84, 1);
        padding: auto auto;
    }

    .divisor {
        height: 100px;
    }

    table,
    th,
    td {
        border: 3px solid rgba(0, 0, 0, 0.2);
        border-radius: 3px;
    }

    th,
    td {
        padding: 10px 10px;
        background-color: white;
    }

    .about-us {
        display: flex;
        justify-content: center;
        align-items: center;

        position: absolute;
        background: url(../../assets/images/home/banner.jpg)no-repeat;
        background-size: cover;
        background-position: center;
        min-height: 500px;

        top: 0;
        left: 0;
        width: 100vw;
        height: 100%;
        z-index: -2;
    }

    .about-us:before {
        position: fixed;
        content: "";
        top: 0;
        left: 0;
        width: 100vw;
        height: 200vh;
        background: rgba(0, 122, 207, .4);
        z-index: -1;
    }

    /*about-us-content*/
    .about-us-content {
        margin: -175px 0 0 0;
        z-index: -2;
    }

    .about-us h2 {
        color: #fff;
        font-size: 84px;
        text-transform: inherit;
        max-width: 800px;
        font-weight: 600;
        line-height: 1.22;
    }

    .about-us h2 span {
        color: #2bdab5;
        margin-top: -11px;
    }

    .about-us2 {
        position: fixed;
        display: flex;
        justify-content: center;
        align-items: center;

        position: absolute;
        background: url(../../assets/images/home/banner.jpg)no-repeat;
        background-size: cover;
        background-position: center;
        min-height: 500px;

        top: 100vh;
        left: 0;
        width: 100vw;
        height: 100%;
        z-index: -3;
    }

    .about-us2:before {
        position: fixed;
        content: "";
        top: 100vh;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 122, 207, .4);
        z-index: -2;
    }

    /*about-us-content*/
    .about-us-content2 {
        margin: -175px 0 0 0;
        z-index: -2;
    }

    .about-us2 h2 {
        color: #fff;
        font-size: 84px;
        text-transform: inherit;
        max-width: 800px;
        font-weight: 600;
        line-height: 1.22;
    }

    .about-us2 h2 span {
        color: #2bdab5;
        /* margin-top: -11px; */
    }

    .company {
        z-index: 1;
    }
</style>