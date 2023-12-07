<!DOCTYPE html><html data-bs-theme="light" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>health care</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css?h=d98553506d4393860db8a633e4842ead">
        <link rel="stylesheet" href="/assets/css/styles.min.css?h=d45ecc3232b7eb6ca50bcf9960990024">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    </head>
    
    <body><!-- Start: Ludens - 1 Index Table with Search & Sort Filters  -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <h3 class="text-dark mb-4">Ludens</h3>
                </div>
                <div class="col-12 col-sm-6 col-md-6 text-end" style="margin-bottom: 30px;">
                <a class="btn btn-primary" role="button">
                    <i class="fa fa-plus"></i>&nbsp;Agregar colaborador
                </a>
            </div>
        </div><!-- Start: TableSorter -->
        <div class="card" id="TableSorterCard">
            <div class="card-header py-3">
                <div class="row table-topper align-items-center">
                    <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                    <p class="text-primary m-0 fw-bold">Colaboradores</p>
                </div><div class="col-12 col-sm-7 col-md-6 text-end" style="margin: 0px;padding: 5px 15px;">
                <button class="btn btn-primary btn-sm reset" type="button" style="margin: 2px;">Borrar Filtros</button>
                <button class="btn btn-warning btn-sm" id="zoom_in" type="button" zoomclick="ChangeZoomLevel(-10);" style="margin: 2px;"><i class="fa fa-search-plus"></i></button>
                <button class="btn btn-warning btn-sm" id="zoom_out" type="button" zoomclick="ChangeZoomLevel(-10);" style="margin: 2px;"><i class="fa fa-search-minus"></i></button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped table tablesorter" id="ipi-table">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Age</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Address</th>
                            <th class="text-center filter-false sorter-false">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td class="text-center align-middle" style="max-height: 60px;height: 60px;">
                            <a class="btn btnMaterial btn-flat primary semicircle" role="button" href="#">
                                <i class="far fa-eye"></i>
                            </a>
                            <a class="btn btnMaterial btn-flat success semicircle" role="button" href="#">
                                <i class="fas fa-pen">

                                </i>
                            </a>
                            <a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#delete-modal" href="#">
                                <i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                            }
                        }
                        ?>
                    <tr>
                        <td>Fer<br></td><td>Desarrollador</td>
                        <td>Development</td>
                        <td class="text-center align-middle" style="max-height: 60px;height: 60px;">
                        <a class="btn btnMaterial btn-flat primary semicircle" role="button" href="#">
                            <i class="far fa-eye"></i></a><a class="btn btnMaterial btn-flat success semicircle" role="button" href="#">
                                <i class="fas fa-pen"></i></a><a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#delete-modal" href="#">
                                <i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div><!-- End: TableSorter -->
</div><!-- End: Ludens - 1 Index Table with Search & Sort Filters  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script><script src="/assets/js/script.min.js?h=13b77c4c24e2b1bed1889bb37d61cd95"></script></body></html>