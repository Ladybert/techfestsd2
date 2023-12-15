<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create task</title>
</head>
<body>
    <div style="display:flex; flex-direction:column; justify-content:center;">
        @foreach ($tasks as $task)
        {{csrf_field()}}
        <form action="" method="POST" style="display:flex;  flex-direction:column; text-align:center;">
            <input type="text" name="title" placeholder="Judul">
            <input type="text" name="activity" placeholder="Kegiatan">
            <select name="dropdown" id="dropdown" style="flex-direction:column;">
                <option value="kerja">kerja</option>
                <option value="pulang">pulang</option>
                <option value="tidur">tidur</option>
            </select>
        </form>
        <a href="{{ route('table') }}">Simpan</a>
        @endforeach
    </div>
</body>
</html>