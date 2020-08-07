<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

</head>
<body>
<div class="text-center pt-10">
    <h1 class="text-2xl">Create Your Task List</h1>
    <x-alert />
    <form action="/todos/create" method="POST" class="py-5">
        @csrf
        <input type="text" name="title" id="" class="py-3 px-3">
        <input type="submit" value="Create" class="p-2 broad rounded">
    </form>
</div>
</body>
</html>