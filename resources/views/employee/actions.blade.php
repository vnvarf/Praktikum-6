<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="d-flex">
        <a href="{{ route('employees.show', ['employee' => $employee->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
                class="bi-personlines-fill"></i></a>
        <a href="{{ route('employees.edit', ['employee' => $employee->id]) }}"
            class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencilsquare"></i></a>
        <div>
            <form action="{{ route('employees.destroy', ['employee' => $employee->id]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-dark btn-sm me2"><i class="bi-trash"></i></button>
            </form>
        </div>
    </div>
</body>

</html>
