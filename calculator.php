<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <div class="box formInput">
        <h2 class="temp">Temperature Converter</h2>
        <div class="calfeild">
            <label for="calc">Celsius :-</label>
            <input id="calc" type="number" step="0.01"/>
        </div>
        <div class="calfeild">
            <label for="fah">Fahrenheit :-</label>
            <input id="fah" type="number" step="0.01"/>
        </div> 
    </div>
</body>
</html>

<script>
        function celsiusToFahrenheit(celsius) {
            return (celsius * 9/5) + 32;
        }

        function fahrenheitToCelsius(fahrenheit) {
            return (fahrenheit - 32) * 5/9;
        }

        document.addEventListener('DOMContentLoaded', function() {
            const celsiusInput = document.getElementById('calc');
            const fahrenheitInput = document.getElementById('fah');

            celsiusInput.addEventListener('input', function() {
                const celsius = parseFloat(celsiusInput.value);
                if (!isNaN(celsius)) {
                    fahrenheitInput.value = celsiusToFahrenheit(celsius).toFixed(2);
                } else {
                    fahrenheitInput.value = '';
                }
            });

            fahrenheitInput.addEventListener('input', function() {
                const fahrenheit = parseFloat(fahrenheitInput.value);
                if (!isNaN(fahrenheit)) {
                    celsiusInput.value = fahrenheitToCelsius(fahrenheit).toFixed(2);
                } else {
                    celsiusInput.value = '';
                }
            });

            document.querySelector('.btn.convert').addEventListener('click', function() {
                const celsius = parseFloat(celsiusInput.value);
                const fahrenheit = parseFloat(fahrenheitInput.value);

                if (!isNaN(celsius)) {
                    fahrenheitInput.value = celsiusToFahrenheit(celsius).toFixed(2);
                } else if (!isNaN(fahrenheit)) {
                    celsiusInput.value = fahrenheitToCelsius(fahrenheit).toFixed(2);
                }
            });
        });
    </script>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .box h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .calfeild {
            margin-bottom: 15px;
            text-align: left;
        }

        .calfeild label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        .calfeild input {
            width: calc(100% - 12px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
    </style>
