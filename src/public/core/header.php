<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBN Indonesia</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        "inter": ['inter']
                    },
                    colors: {
                        "ungu": '#5D50C6',
                        "pink": '#F85E9F',
                        "orange": '#FF5722',
                        "grey": '#191825',
                        "tbn": '#CAD32C'
                    },
                    dropShadow: {
                        "sm-shadow": [
                            '0px 856px 240px 0px rgba(0, 0, 0, 0.00)',
                            '0px 548px 219px 0px rgba(0, 0, 0, 0.01)',
                            '0px 308px 185px 0px rgba(0, 0, 0, 0.04)',
                            '0px 137px 137px 0px rgba(0, 0, 0, 0.06)',
                            '0px 34px 75px 0px rgba(0, 0, 0, 0.07)',
                            '0px 0px 0px 0px rgba(0, 0, 0, 0.07)'
                        ],
                        "lg-shadow": [
                            '0px 126px 35px 0px rgba(0, 0, 0, 0.00)',
                            '0px 81px 32px 0px rgba(0, 0, 0, 0.01)',
                            '0px 45px 27px 0px rgba(0, 0, 0, 0.05)',
                            '0px 20px 20px 0px rgba(0, 0, 0, 0.09)',
                            '0px 5px 11px 0px rgba(0, 0, 0, 0.10)',
                            '0px 0px 0px 0px rgba(0, 0, 0, 0.10)'
                        ],
                        "xl-shadow": [
                            '0px 41px 89px 0px rgba(0, 0, 0, 0.10)',
                            '0px 0px 0px 0px rgba(0, 0, 0, 0.10)'
                        ]
                    }
                },
            }
        }
    </script>
    <!-- ALpine JS -->
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>