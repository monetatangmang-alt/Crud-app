<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Info</title>
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 40px 16px;
        }
        .card {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 24px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        h1 { margin: 0; color: #333; font-size: 24px; }
        table { width: 100%; border-collapse: collapse; }
        thead th {
            background: #4f46e5;
            color: #fff;
            text-align: left;
            padding: 12px 14px;
        }
        tbody td {
            padding: 12px 14px;
            border-bottom: 1px solid #e5e7eb;
        }
        tbody tr:nth-child(even) { background: #f9fafb; }
        tbody tr:hover { background: #eef2ff; }
        .empty { text-align: center; color: #6b7280; padding: 24px; }
        .btn {
            display: inline-block;
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            color: #fff;
            background: #10b981;
            cursor: pointer;
        }
        .btn:hover { background: #059669; }
        .btn-primary { background: #4f46e5; }
        .btn-primary:hover { background: #4338ca; }
        .btn-danger { background: #ef4444; }
        .btn-danger:hover { background: #dc2626; }
        form { margin: 0; }
    </style>
</head>
<body>
    <div class="card">
        <div class="header">
            <h1>Employee Info</h1>
            <a class="btn btn-primary" href="{{ route('employee.create') }}">+ Create new employee</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($employee as $emp)
                    <tr>
                        <td>{{ $emp->id }}</td>
                        <td>{{ $emp->name }}</td>
                        <td>{{ $emp->age }}</td>
                        <td>{{ $emp->position }}</td>
                        <td>{{ $emp->salary }}</td>
                        <td>
                            <a class="btn" href="{{ route('employee.edit', ['employee' => $emp]) }}">Update</a>
                        </td>
                        <td>
                            <form action="{{ route('employee.destroy', ['employee' => $emp]) }}" method="POST"
                                  onsubmit="return confirm('Delete this employee?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="empty">No employees yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>