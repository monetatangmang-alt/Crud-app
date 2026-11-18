<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Employee</title>
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 40px 16px;
        }
        .card {
            max-width: 480px;
            margin: auto;
            background: #fff;
            padding: 28px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }
        h1 { margin: 0 0 20px; color: #333; font-size: 24px; }
        .form-group { margin-bottom: 16px; }
        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: bold;
            color: #374151;
        }
        input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        input:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15);
        }
        .alert {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .alert ul { margin: 0; padding-left: 18px; }
        .actions { display: flex; gap: 10px; margin-top: 24px; }
        .btn {
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        .btn-primary { background: #4f46e5; color: #fff; }
        .btn-primary:hover { background: #4338ca; }
        .btn-secondary { background: #e5e7eb; color: #374151; }
        .btn-secondary:hover { background: #d1d5db; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Create Employee</h1>

        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('employee.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" value="{{ old('age') }}">
            </div>

            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" id="position" name="position" value="{{ old('position') }}">
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="number" step="any" id="salary" name="salary" value="{{ old('salary') }}">
            </div>

            <div class="actions">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('employee.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>