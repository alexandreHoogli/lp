<?php include "verifica.php";
$pertence = '';
if (isset($_GET['pertence'])) {
    if (empty($_GET['pertence'])) {
        header('Location: index.php');
    } else {
        $pertence = $_GET['pertence'];
    }
}
$puxaDoutores = $doutores->rsDados('', 'ordem DESC');
$doutores->excluir();
$pag = $pagamento->pegarTodos();
usort($pag, function ($a, $b) {
    return $b['id'] - $a['id'];
});
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Adriano Monteiro">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">
    <title>Painel Hoogli - Integrantes</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <?php include "header.php"; ?>
        <?php include "inc-menu-lateral.php"; ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Integrantes</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <style>
                        .status-select {
                            width: 100%;
                            padding: 8px 12px;
                            border: 1px solid #ccc;
                            border-radius: 4px;
                            background-color: white;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                            font-size: 16px;
                            color: #333;
                        }

                        .status-select:hover {
                            border-color: #888;
                        }

                        .status-select:focus {
                            border-color: #0056b3;
                            box-shadow: 0 0 5px rgba(0, 86, 179, 0.25);
                            outline: none;
                        }

                        .status-select option {
                            background-color: white;
                            color: black;
                        }

                        .status-completo {
                            background-color: #00d300;
                            color: white;
                        }

                        .status-pendente {
                            background-color: #3a3aff;
                            color: white;
                        }

                        .status-cancelado {
                            background-color: red;
                            color: white;
                        }
                    </style>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Email</th>
                                                <th>Canal</th>
                                                <th>Representante</th>
                                                <th>Plano</th>
                                                <th>Data</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($pag as $doutor) {
                                                echo '<tr>';
                                                echo '<td>' . htmlspecialchars($doutor['id']) . '</td>';
                                                echo '<td>' . htmlspecialchars($doutor['email']) . '</td>';
                                                echo '<td>' . htmlspecialchars($doutor['nome_representante']) . '</td>';
                                                echo '<td>' . htmlspecialchars($doutor['outros']) . '</td>';
                                                echo '<td>' . htmlspecialchars($doutor['plano_nome']) . '</td>';
                                                echo '<td>' . htmlspecialchars($doutor['data_compra']) . '</td>';
                                                echo '<td>';
                                                echo '<form method="POST" class="status-form">';
                                                echo '<input type="hidden" name="id" value="' . htmlspecialchars($doutor['id']) . '">';
                                                $class = "";
                                                switch ($doutor['status']) {
                                                    case 'completo':
                                                        $class = "status-completo";
                                                        break;
                                                    case 'pendente':
                                                        $class = "status-pendente";
                                                        break;
                                                    case 'cancelado':
                                                        $class = "status-cancelado";
                                                        break;
                                                }
                                                echo '<select name="status" class="status-select ' . $class . '">';
                                                echo '<option value="completo"' . ($doutor['status'] == 'completo' ? ' selected' : '') . '>Completo</option>';
                                                echo '<option value="pendente"' . ($doutor['status'] == 'pendente' ? ' selected' : '') . '>Pendente</option>';
                                                echo '<option value="cancelado"' . ($doutor['status'] == 'cancelado' ? ' selected' : '') . '>Cancelado</option>';
                                                echo '</select>';
                                                echo '</form>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id</th>
                                                <th>Email</th>
                                                <th>Canal</th>
                                                <th>Representante</th>
                                                <th>Plano</th>
                                                <th>Data</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script src="dist/js/scripts.js"></script>
    <script>
        $(document).ready(function () {
            $('.status-select').change(function () {
                var form = $(this).closest('form');
                var data = form.serialize();
                var selectElement = $(this); // Guardando referência ao elemento select

                $.ajax({
                    type: 'POST',
                    url: '../Class/jajax.class.php', // Certifique-se de que esta URL está correta
                    data: data,
                    success: function (response) {
                        var res = JSON.parse(response);
                        if (res.status === 'success') {
                            console.log('Status atualizado com sucesso', res);
                            Swal.fire({
                                title: 'Sucesso!',
                                text: 'Status atualizado com sucesso',
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            });
                            selectElement.removeClass('status-completo status-pendente status-cancelado');
                            if (res.newStatus === 'completo') {
                                selectElement.addClass('status-completo');
                            } else if (res.newStatus === 'pendente') {
                                selectElement.addClass('status-pendente');
                            } else if (res.newStatus === 'cancelado') {
                                selectElement.addClass('status-cancelado');
                            }
                        } else {
                            Swal.fire({
                                title: 'Erro!',
                                text: 'Erro ao atualizar status: ' + res.message,
                                icon: 'error',
                                confirmButtonText: 'Ok'
                            });
                        }
                    },
                    error: function () {
                        Swal.fire({
                            title: 'Erro!',
                            text: 'Erro ao atualizar status',
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                    }
                });
            });
        });
    </script>


</body>

</html>