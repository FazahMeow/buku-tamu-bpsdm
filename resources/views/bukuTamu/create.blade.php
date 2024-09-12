<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fill this form</h1>
    <form method="post" action="{{route('home.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Isi nama lengkap"/>
        </div>
        <div>
            <label>No HP</label>
            <input type="text" name="nohp" placeholder="Isi nomor HP aktif"/>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Isi Email"/>
        </div>
        <div>
            <label>Instansi</label>
            <input type="text" name="instansi" placeholder="Isi instansi"/>
        </div>
        <div>
            <label>Tujuan</label>
            <input type="text" name="tujuan" placeholder="Isi tujuan"/>
        </div>
        <div>
            <label>Keterangan</label>
            <input type="text" name="keterangan" placeholder="Keterangan..."/>
        </div>
        <div>
            <input type="submit" value="Kirim"/>
        </div>
    </form>
</body>
</html>