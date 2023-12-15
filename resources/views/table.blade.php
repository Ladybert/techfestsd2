<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table view</title>
</head>
<body>
    <div style="display:flex; flex-direction:column; justify:align-center; text-align:center">
        @foreach ($tasks as $task)
        <table style="border: 2px black solid">
            <thead style="border: 2px black solid">
                <th>ID</th>
                <th>Title</th>
                <th>Activity</th>
                <th>Category_ID</th>
                <th>Action</th>
            </thead>
            <tbody style="border: 2px black solid">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        @endforeach

        <div style="display:flex; justify-content:space-between; gap:5vh; margin:0 50vh;">
            <a href="{{ route('task') }}">Create Task</a>
        </div>
    </div>
</body>
</html>