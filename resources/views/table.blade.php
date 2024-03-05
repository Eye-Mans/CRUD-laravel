@extends('layout.main')
@section('navbar')

<div class="ml-5 m-[2rem]">
  <a href="/crud" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"></path></svg></a>
</div>

      {{-- table --}}
      <div class="overflow-x-auto">
        <table class="table table-zebra">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th class="text-white text-xl">Nama</th>
              <th class="text-white text-xl">kesalahan</th>
              <th class="text-white text-xl">Sanksi</th>
              <th class="text-white text-xl">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($student as $s => $e)
                <tr>
                    <th>{{ $s + 1 }}</th>
                    <td class="text-lg">{{ $e ->nama }}</td>
                    <td class="text-lg"> {{ $e ->kesalahan }}</td>
                    <td class="text-lg">{{ $e ->sanksi }}</td>
                    <td class="text-lg"><a href="/{{ $e ->id }}/edit" class="btn btn-accent ">Edit</a></td>
                    <form action="update/{{ $e -> id }}" method="post">
                      @csrf
                      @method('delete')
                      <td class="text-lg"><button class="btn btn-error ">Delete</button></td>
                    </form>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection