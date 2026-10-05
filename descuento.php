<!--  descuento decimal de 17 y multiplicar por el total de la compra -->
<?php

$compra = $_GET["compra"];

if ($compra > 1250) {

    $descuento = $compra * 0.17;
    $total = $compra - $descuento;

} else {

   $total = $compra;

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resultado del descuento</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="estilos.css">

</head>


<body>

    <section class="resultado">

        <div class="container">

            <div class="row justify-content-center align-items-center min-vh-100">

                <div class="col-md-6">

                    <div class="card tarjeta-resultado border-0 rounded-4">

                        <div class="card-body p-5 text-center">

                            <h1 class="fw-bold mb-4">
                                Resultado de tu compra
                            </h1>


                            <?php if ($compra > 1250) { ?>

                                <p class="fs-5">
                                    ¡Tu compra tiene un
                                    <strong>17% de descuento!</strong>
                                </p>

                                <p>
                                    Descuento:
                                    <strong>
                                        $<?php echo $descuento; ?>
                                    </strong>
                                </p>

                                <p class="fs-4 fw-bold">
                                    Total a pagar:
                                    $<?php echo $total; ?>
                                </p>


                            <?php } else { ?>

                                <p class="fs-5">
                                    Tu compra no aplica para el descuento.
                                </p>

                                <p class="fs-4 fw-bold">
                                    Total a pagar:
                                    $<?php echo $total; ?>
                                </p>

                            <?php } ?>


                            <a
                                href="compra.html"
                                class="btn boton-descuento btn-lg mt-3">

                                Volver

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</body>

</html>
