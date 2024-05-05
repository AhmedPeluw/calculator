{{-- resources/views/calculator.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="app container flex flex-col justify-center items-center h-screen">

        <div class="container results">
            @if(session('error'))
            <div class="text-center error-text">{{ session('error') }}</div>
            @endif

            @if(session('result'))
            <div class="text-center result-text">Result: {{ session('result') }}</div>
            @endif
        </div>

        <h1 class="container text-center text-white">Calculatrice</h1>

        <div class="container flex justify-center items-center h-screen">
            <form action="/calculate" method="post">
                @csrf
                <div class="inputs flex">
                    <div class="form-input mt-6">
                        <label class="text-white" for="numberOne">Numéro 1:</label>
                        <input type="number" name="numberOne" id="numberOne" class="mt-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required>
                    </div>

                    <div class="form-input mt-6">
                        <label class="text-white" for="operator">Opérateur:</label>
                        <input type="text" name="operator" id="operator" class="mt-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+, -, *, /" required>
                    </div>

                    <div class="form-input mt-6">
                        <label class="text-white" for="numberTwo">Numéro 2:</label>
                        <input type="number" name="numberTwo" id="numberTwo" class="mt-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required>
                    </div>
                </div>

                <button type="submit" class="w-full mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Calculer
                </button>
            </form>
        </div>
    </div>
</body>

</html>