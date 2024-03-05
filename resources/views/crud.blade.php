@extends('layout.main')
@section('navbar')
    
      {{-- form --}}
      <div class="flex justify-center items-center">
        <div class="w-full max-w-lg">
            <form action="/store" method="post">
                @csrf
                <label class="block form-control ">
                    <div class="label">
                        <span class="label-text text-lg text-white">Nama</span>
                    </div>
                    <input type="text" name="nama" placeholder="Type here" class="input input-bordered w-full max-w-lg" required/>
                </label>
    
                <label class="block form-control ">
                    <div class="label">
                        <span class="label-text text-lg text-white">kesalahan</span>
                    </div>
                    <input type="text" name="kesalahan" placeholder="Type here" class="input input-bordered w-full max-w-lg" required/>
                </label>
    
                <label class="block form-control ">
                    <div class="label">
                        <span class="label-text text-lg text-white">Sanksi</span>
                    </div>
                    <input type="text" name="sanksi" placeholder="Type here" class="input input-bordered w-full max-w-lg"  required/>
                </label>
    
                <button type="submit" class="btn btn-active btn-outline mt-5">Tambah</button>
            </form>
        </div>
    </div>
    {{-- form --}}
    
@endsection
