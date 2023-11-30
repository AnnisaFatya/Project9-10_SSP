<h1>Profil Saya</h1>
<hr>
<table border='0'>
    @if($name == 'Nisa')
    <tr>
        <td>Nama Lengkap</td>
        <td>{{ $name }}</td>
</tr>
@else
<tr>
        <td>Nama Lengkap</td>
        <td>{{ $name }}</td>
</tr>
@endif
</table>
<hr>
<h1>Contoh Pengulangan</h1>
<table>
    @foreach($data_array['nama'] as $data)
    <tr>
        <td>Nama Saya</td>
        <td>{{ $data }}</td>
    </tr>
    @endforeach
</table>
<h1>Contoh forelse </h1>
<table>
    @forelse($data_array ['namaa'] as $data)
    <tr>
        <td> Nama saya juga </td>
        <td> {{ $data }} </td>
    </tr>
    @empty
    data tidak ditemukan
    @endforelse
</table>

<h1>Contoh for<h1>
<table>
    @for($i=0;$i<10;$i++)
        {{$i}}<br>
    @endfor
</table>