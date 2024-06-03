<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Expansión de Binomio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
        }
        form {
            text-align: center;
        }
        input[type="number"], button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Expansión de Binomio (a + b)^n</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="number" name="n" id="n" placeholder="Ingresa el valor de n" required>
            <button type="submit">Calcular</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["n"])) {
                $n = $_POST["n"];
                echo binomialExpansion($n);
            }

            function pascalTriangle($n, $k) {
                if ($k == 0 || $k == $n) {
                    return 1;
                } else {
                    return pascalTriangle($n - 1, $k - 1) + pascalTriangle($n - 1, $k);
                }
            }

            function binomialExpansion($n) {
                $result = "";
                for ($k = 0; $k <= $n; $k++) {
                    $coef = pascalTriangle($n, $k);
                    $aPower = $n - $k;
                    $bPower = $k;
                    $aTerm = ($aPower > 0) ? "a^{$aPower}" : "";
                    $bTerm = ($bPower > 0) ? "b^{$bPower}" : "";
                    $term = ($coef > 1 || $k == 0) ? "{$coef}{$aTerm}{$bTerm}" : "{$aTerm}{$bTerm}";
                    $result .= $term;
                    if ($k < $n) {
                        $result .= " + ";
                    }
                }
                return "(a + b)^{$n} = " . $result;
            }
            ?>
        </div>
    </div>
</body>
</html>