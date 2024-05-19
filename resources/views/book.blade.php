<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nadiaa Panel!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body class="bg-slate-700">
  <div class="flex min-h-screen flex-row">
    <div class="relative flex flex-col bg-clip-border rounded-xl bg-slate-800 text-white h-[calc(100vh-2rem)] w-full max-w-[20rem] p-4 shadow-xl shadow-blue-gray-900/5 mt-4">
        <div class="mb-2 p-4 text-center bg-slate-700 rounded-xl">
          <h1 class="font-semibold text-4xl"><span class="text-slate-400">Nadiaa</span> Panel</h1>
        </div>
        <nav class="flex flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal text-white">

          <a href="" class="hover:no-underline"><div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
            <div class="grid place-items-center mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z" clip-rule="evenodd"></path>
              </svg>
            </div>Buku Tamu</div></a>

          <a href="{{ url('/panel') }}" class="hover:no-underline"><div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
            <div class="grid place-items-center mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z" clip-rule="evenodd"></path>
              </svg>
            </div>Logout</div></a>
        </nav>
      </div>

      <main class="main -ml-48 flex flex-grow flex-col p-4 transition-all duration-150 ease-in md:ml-0">
        <div class="block h-full text-white font-bold shadow-md rounded-xl justify-between">
          <h1 class="text-3xl px-3 pt-4">Nadiaa Panel!</h1>

                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="ml-3 h2 text-xl px-3 py-1 rounded-lg bg-slate-800 text-center">GUEST BOOKS</h1>
          
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">             
                <a href="" class="btn btn-sm btn-outline-secondary px-3 mr-3" target="_blank">Cetak Data</a>
              </div>
            </div>
          </div>
          <form action="" method="get" class="ml-3">
            <div class="form-group row">
              <div class="col-md-8">
                <input type="text" name="cari" id="" class="form-control" placeholder="Pencarian...">
              </div>
              <div class="col-md-3">
                <button class="btn btn-primary">Cari</button>
              </div>
            </div>
          </form>
  
          <div class="border-none ml-3">
            <table class="table table-striped table-sm">
              <thead class="">
                <tr class="text-white text-center">
                  <th scope="col">ID</th>
                  <th scope="col">NAMA</th>
                  <th scope="col">EMAIL</th>
                  <th scope="col">PESAN</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $counter = 1
                @endphp
            @foreach($kontaks as $data)
  
                <tr class="text-white text-center">
                  <td>{{$counter++}}</td>
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->email }}</td>
                  <td>{{ $data->pesan }}</td>
                  <td>
                    {{-- <a href="{{ url('/back/portofolio/delete/'.$data->id) }}" class="btn btn-danger">Delete</a> --}}
                    <a href="{{ url('/book/delete/'.$data->id) }}" class="btn btn-danger" >Delete</a>
                    <a href="{{ url('/update/'.$data->id) }}" class="btn btn-success" >Update</a>
                  </td>
                </tr>
                @endforeach
               
              </tbody>
            </table>
          </div>
      </main>

    </div>  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>
</html>