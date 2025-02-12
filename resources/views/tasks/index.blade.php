<!-- resources/views/tasks/index.blade.php -->

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-md">
        <h1 class="text-2xl font-bold text-center text-gray-700 mb-4">To Do List</h1>

     
        <form action="/tasks" method="POST" class="flex mb-4">
            @csrf
            <input type="text" name="name" placeholder="Yeni görev girin..." required
                class="flex-grow px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-r-md transition-all">
                Ekle
            </button>
        </form>
        <ul class="space-y-2">
            @foreach($tasks as $task)
                <li class="flex justify-between items-center bg-gray-50 p-3 rounded-md shadow-sm">
                    <span class="{{ $task->completed ? 'line-through text-gray-500' : 'text-gray-800' }}">
                        {{ $task->name }}
                    </span>

                    <div class="flex space-x-2">
                        <form action="/tasks/{{ $task->id }}/complete" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit"
                                class="px-3 py-1 text-sm rounded-md transition-all
                                    {{ $task->completed ? 'bg-yellow-500 hover:bg-yellow-600 text-white' : 'bg-green-500 hover:bg-green-600 text-white' }}">
                                {{ $task->completed ? 'Geri Al' : 'Tamamla' }}
                            </button>
                        </form>

                        <form action="/tasks/{{ $task->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-3 py-1 text-sm bg-red-500 hover:bg-red-600 text-white rounded-md transition-all">
                                Sil
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
